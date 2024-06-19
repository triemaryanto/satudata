<?php

namespace App\Controllers;

use App\Helpers\CustomHelper;

class OpenData extends BaseController {
    private $client;
    private $pager;
    private $validation;
    private $apiEndPointGardu;
    public function __construct() {
        $this->client = \Config\Services::curlrequest();
        $this->pager = service('pager');
        $this->validation = \Config\Services::validation();
        $this->apiEndPointGardu = apiEndPointGardu();
    }

    public function index() {
        $total = count($this->getCkan("https://data.wonosobokab.go.id/api/3/action/package_list"));

        $selectOrg = [];
        $listOrg = [];
        for ($i = 1; $i <= 7; $i++) {
            $start = $i * 10;
            $listOrg = $this->getCkan("https://data.wonosobokab.go.id/api/3/action/organization_list?all_fields=true&offset=" . $start . "&limit=10");
            foreach ($listOrg as $key => $val) {
                array_push($selectOrg, $val);
            }
        }

        $selectGroup = $this->getCkan("https://data.wonosobokab.go.id/api/3/action/group_list?all_fields=true");

        $data = [
            'total' => $total,
            'select_organisasi' => $selectOrg,
            'select_group' => $selectGroup,
            'activePage' => ACTIVE_PAGE_OPENDATA,
        ];
        return view('openData/index', $data);
    }

    public function getDataTable() {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $page = max((int)$this->request->getGet('page'), 1);
        $perPage = max((int)$this->request->getGet('length'), 5);
        $offset =  ($page - 1) * $perPage;
        $listDataset = $this->getCkan("https://data.wonosobokab.go.id/api/3/action/package_list?offset=" . $offset . "&limit=" . $perPage);
        $total = count($this->getCkan("https://data.wonosobokab.go.id/api/3/action/package_list"));

        // all_field by id dataset
        $datasets = [];
        foreach ($listDataset as $key => $val) {
            $resp = $this->getCkan("https://data.wonosobokab.go.id/api/3/action/package_show?id=" . $val);

            $datasets[][] = '<div class="row p-3 ">
            <div class="col-11">
                <a href="' . base_url('opendata/detail_dataset/' .  $resp['name']) . '" class="text-primary-emphasis fw-semibold fs-5">' . $resp['title'] . '</a>
                <p class="mb-0 text-truncate" style="max-width: 985px;">' . $resp['notes'] . '</p>
                <div>
                    <span class="mr-2 text-success"><i class="fas fa-building mr-1"></i> ' . $resp['organization']['title'] . '</span>
                    <span class="mr-2"><i class="far fa-calendar-alt mr-1"></i> ' . $resp['metadata_modified'] . '</span>
                </div>
            </div>
            <div class="col-1 text-center ">
                    <div class="fw-600"><span class="badge text-bg-info">' . $resp['resources'][0]['format'] . '</span> </div>
                <div class="d-flex align-items-center justify-content-center">
                    <div class="fw-600 me-2"><i class="fa fa-eye"></i> 47</div>
                    <div class="fw-600"><i class="fas fa-file"></i> 1</div>
                </div>
            </div>
        </div>
        ';
        }

        $data = [
            'data' => $datasets,
            'total' => $total,
            'limit' => $perPage,
            'row_form' => $offset + 1,
            'row_to' => $page * $perPage
        ];

        // Generic response method
        // return $this->respond($datasets, 200);
        return $this->response->setJSON($data);
    }

    public function organisasi() {
        $page = max((int)$this->request->getGet('page'), 1);

        $perPage = 9;
        $total = count($this->getCkan("https://data.wonosobokab.go.id/api/3/action/organization_list"));
        $offset =  ($page - 1) * $perPage;

        $pager_links = $this->pager->makeLinks($page, $perPage, $total, 'custom_pager');
        $listOrganisasi = $this->getCkan("https://data.wonosobokab.go.id/api/3/action/organization_list?all_fields=1&offset=" . $offset . "&limit=" . $perPage);


        $data = [
            'data' => $listOrganisasi,
            'total' => $total,
            'pager_links' => $pager_links,
            'row_form' => $offset + 1,
            'row_to' => $page * $perPage,
            'activePage' => ACTIVE_PAGE_OPENDATA
        ];
        return view('openData/organisasi', $data);
    }
    public function group() {
        $page = max((int)$this->request->getGet('page'), 1);;

        $perPage = 9;
        $total = count($this->getCkan("https://data.wonosobokab.go.id/api/3/action/group_list"));
        $offset =  ($page - 1) * $perPage;

        $pager_links = $this->pager->makeLinks($page, $perPage, $total, 'custom_pager');
        $listGroup = $this->getCkan("https://data.wonosobokab.go.id/api/3/action/group_list?all_fields=true&offset=" . $offset . "&limit=" . $perPage);


        $data = [
            'data' => $listGroup,
            'total' => $total,
            'pager_links' => $pager_links,
            'row_form' => $offset + 1,
            'row_to' => $page * $perPage,
            'activePage' => ACTIVE_PAGE_OPENDATA
        ];

        return view('openData/group', $data);
    }

    public function detailOrganisasi($name) {
        // $page = (int) $this->request->getGet('page') ??  1;
        // $perPage = 10;
        // $total = count($this->getCkan("https://data.wonosobokab.go.id/api/3/action/organization_list"));
        // $offset =  ($page - 1) * $perPage;
        // $pager_links = $this->pager->makeLinks($page, $perPage, $total, 'custom_pager');
        $listDataset = $this->getCkan("https://data.wonosobokab.go.id/api/3/action/organization_show?id=" . $name . "&include_datasets=1");
        $data = [
            'data' => $listDataset,
            'total' => $listDataset['package_count'],
            'activePage' => ACTIVE_PAGE_OPENDATA
            // 'pager_links' => $pager_links,
            // 'row_form' => $offset + 1,
            // 'row_to' => $page * $perPage
        ];
        return view('openData/detailOrganisasi', $data);
    }
    public function detailGroup($name) {
        // $page = (int) $this->request->getGet('page') ??  1;
        // $perPage = 10;
        // $total = count($this->getCkan("https://data.wonosobokab.go.id/api/3/action/organization_list"));
        // $offset =  ($page - 1) * $perPage;
        // $pager_links = $this->pager->makeLinks($page, $perPage, $total, 'custom_pager');
        $listDataset = $this->getCkan("https://data.wonosobokab.go.id/api/3/action/group_package_show?id=" . $name . "&ilimit=1000");
        $data = [
            'data' => $listDataset,
            'total' => count($listDataset),
            'activePage' => ACTIVE_PAGE_OPENDATA,
            // 'pager_links' => $pager_links,
            // 'row_form' => $offset + 1,
            // 'row_to' => $page * $perPage
        ];

        return view('openData/detailGroup', $data);
    }

    public function detailDataset($name) {
        $dataset = $this->getCkan("https://data.wonosobokab.go.id/api/3/action/package_show?id=" . $name);

        $data = [
            'dataset' => $dataset,
            'activePage' => ACTIVE_PAGE_OPENDATA,
            'tag' => 'dataset'
        ];
        return view('openData/detailDataset', $data);
    }

    public function getCkan($url) {
        $options = [
            'allow_redirects' => false,
            'verify' => false,
            'headers' => ['Accept'     => 'application/json',]
        ];

        try {
            $response = $this->client->request('GET', $url, $options);
        } catch (\Throwable $th) {
            view('errors/html/error_404', [
                'message' => '404 NOT FOUND',
                'title' => 'Sumber daya tidak ditemukan'
            ]);
            exit;
        }

        // Mendapatkan respons dari API
        $statusCode = $response->getStatusCode();

        if ($statusCode != 200) {
            return view('errors/error_404');
        }

        $body = $response->getBody();
        // Jika semuanya berjalan dengan baik, kembalikan respons
        // Mengonversi respons JSON menjadi array PHP
        $data = json_decode($body, true);
        // jika $data null maka send result empty array
        if ($data == null) {
            return [];
        }

        return  $data['result'];
    }

    public function downloadFile($path) {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('data tidak di temukan');
        }

        $formData = $this->request->getPost();

        $this->validation->setRules([
            'nama' => [
                'label'  => 'Nama',
                'rules'  => 'required|string',
                'errors' => [
                    'required' => 'Wajib di isi',
                    'string' => 'Mengandung karakter mencurigakan',
                ],
            ],
            'alamat' => [
                'label'  => 'Alamat',
                'rules'  => 'required|string',
                'errors' => [
                    'required' => 'Wajib di isi',
                    'string' => 'Mengandung karakter mencurigakan',
                ],
            ],
            'kontak' => [
                'label'  => 'Kontak',
                'rules'  => 'required|string',
                'errors' => [
                    'required' => 'Wajib di isi',
                    'string' => 'Mengandung karakter mencurigakan',
                ],
            ],
            'dari' => [
                'label'  => 'Dari',
                'rules'  => 'required|string',
                'errors' => [
                    'required' => 'Wajib di isi',
                    'string' => 'Mengandung karakter mencurigakan',
                ],
            ],
            'keterangan' => [
                'label'  => 'Keterangan Dari',
                'rules'  => 'required|string',
                'errors' => [
                    'required' => 'Wajib di isi',
                    'string' => 'Mengandung karakter mencurigakan',
                ],
            ],
            'keperluan' => [
                'label'  => 'Keperluan',
                'rules'  => 'required|string',
                'errors' => [
                    'required' => 'Wajib di isi',
                    'string' => 'Mengandung karakter mencurigakan',
                ],
            ],
        ]);

        if (!$this->validation->run($formData)) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $this->validation->getErrors(),
            ]);
        }

        foreach ($formData as $key => $val) {
            // Membersihkan data sebelum di save
            $formData[$key] = htmlspecialchars($val);
        }

        // INSERT to REKAP DATA 
        $url = $this->apiEndPointGardu . "save-data-download";
        $formData['kelompok_data'] = $path;
        $resp = saveRekapDownload($url, $formData);


        if (isset($resp['success']) && $resp['success']) {
            return $this->response->setJSON($resp);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('data tidak di temukan');
        }
        // return redirect()->to(site_url($path));
    }
}
