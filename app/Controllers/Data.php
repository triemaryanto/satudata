<?php

namespace App\Controllers;

class Data extends BaseController
{
    private $apiEndPointGardu;
    private $validation;
    public function __construct()
    {
        // end point di sesuaikan dengan CI_ENVIRONMENT
        $this->apiEndPointGardu = $this->apiEndPointGardu();
        $this->validation = \Config\Services::validation();
    }

    public function apiEndPointGardu()
    {
        return "https://gardu.wonosobokab.go.id/api/";
    }
    public function rpjmd()
    {
        $data = [
            'title' => 'Rencana Pembangunan Jangka Menengah Daerah (RPJMD)',
            'deskription' => 'Merupakan dokumen perencanaan pembangunan daerah sebagai landasan dan pedoman bagi Pemerintah Daerah dalam melaksanakan pembangunan 5 (lima) tahun yang merupakan penjabaran dari visi, misi dan program Kepala Daerah terpilih; dan tujuan, sasaran, strategi, arah kebijakan pembangunan dan program pembangunan yang akan dilaksanakan oleh Perangkat Daerah, disertai dengan kerangka pendanaan yang bersifat indikatif.',
            'image' =>  base_url('public/img/icons/laporan.png'),
            'tag' => 'rpjmd',
            'activePage' => ACTIVE_PAGE_DATA
        ];

        return view('data/index', $data);
    }
    public function sdgs()
    {
        $data = [
            'title' => 'Sustainable Development Goals (SDG`s)',
            'deskription' => 'Merupakan kesepakatan pembangunan baru yang mendorong perubahan-perubahan yang bergeser ke arah pembangunan berkelanjutan yang berdasarkan hak asasi manusia dan kesetaraan untuk mendorong pembangunan sosial, ekonomi, dan lingkungan hidup.',
            'image' =>  base_url('public/img/icons/sdgs.png'),
            'tag' => 'sdgs',
            'activePage' => ACTIVE_PAGE_DATA

        ];

        return view('data/index', $data);
    }
    public function lppd()
    {
        $data = [
            'title' => 'Laporan Penyelenggaraan Pemerintah Daerah (LPPD)',
            'deskription' => 'Merupakan laporan yang disampaikan oleh Pemerintah Daerah kepada Pemerintah Pusat yang memuat capaian kinerja penyelenggaraan pemerintah daerah dan pelaksanaan tugas pembantuan selama 1 (satu) tahun anggaran.',
            'image' => base_url('public/img/icons/laporan.png'),
            'tag' => 'lppd',
            'activePage' => ACTIVE_PAGE_DATA

        ];

        return view('data/index', $data);
    }
    public function spm()
    {
        $data = [
            'title' => 'Standar Pelayanan Minimal (SPM)',
            'deskription' => ' Merupakan ketentuan mengenai Jenis dan Mutu Pelayanan Dasar yang merupakan Urusan Pemerintahan Wajib yang berhak diperoleh setiap Warga Negara secara minimal.',
            'image' => base_url('public/img/icons/sdgs.png'),
            'tag' => 'spm',
            'activePage' => ACTIVE_PAGE_DATA

        ];

        return view('data/index', $data);
    }
    private function getApiGardu($url)
    {
        $client = \Config\Services::curlrequest();
        $headers = [
            'Authorization' => 'Basic TmFzMTo5bUhnbkFtaFBRYms5cjhNYm9yQnpnSUoyMkdjemVIMw==', // Replace 'username:password' with your actual username and password
            'Content-Type' => 'application/json'
        ];
        $response = $client->get($url, [
            'headers' => $headers
        ]);
        return json_decode($response->getBody(), true);
    }
    public function getDataAjax()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('data tidak di temukan');
        }

        $page = $this->request->getGet('kelompok');
        $limit = $this->request->getGet('length');
        $start = (int)$this->request->getGet('start');

        $endPoint = $this->apiEndPointGardu . "data-dukung/" . $page . "?start=" .  $start . "&limit=" . $limit;
        $resp = $this->getApiGardu($endPoint);

        return $this->response->setJSON($resp['result']);
    }

    public function downloadFile($path)
    {
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

        // ambil data dari gardu
        $endPoint = $this->apiEndPointGardu . "data-dukung/" . $path . "?filter=" . $this->request->getPost('filter');
        $respData = $this->getApiGardu($endPoint);

        // export excel
        $colom = [
            'No' => 'nomor',
            'Capaian Indikator' => 'dd_nama',
            'Satuan' => 'satuan',
            'Sumber' => 'meta_produsen',
            'Nilai Capain Indikator' => $respData['data_tahun']

        ];
        $excelData = exportExcel($respData['data'], $colom);

        if (isset($resp['success']) && $resp['success']) {
            $resp['file'] = ($excelData);
            return $this->response->setJSON($resp);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('data tidak di temukan');
        }
        // return redirect()->to(site_url($path));
    }
}
