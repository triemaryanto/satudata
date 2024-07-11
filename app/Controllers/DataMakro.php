<?php

namespace App\Controllers;

class DataMakro extends BaseController
{
    private $apiEndPointGardu;
    private $validation;
    public function __construct()
    {
        // end point di sesuaikan dengan CI_ENVIRONMENT
        $this->apiEndPointGardu = "https://gardu.wonosobokab.go.id/api/";
        $this->validation = \Config\Services::validation();
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

    public function index()
    {
        $data = [
            'title' => 'Data Makro',
            'deskription' => 'Deskripsi Data Makro Wonosobo',
            'image' =>  base_url('public/img/icons/laporan.png'),
            'tag' => 'rpjmd',
            'activePage' => ACTIVE_PAGE_DATA
        ];

        return view('dataMakro/index', $data);
    }

    public function getDataAjax()
    {
        if (!$this->request->isAJAX()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('data tidak di temukan');
        }
        $this->validation->setRules([
            'tahun' => [
                'label'  => 'Tahun',
                'rules'  => 'required|numeric',
                'errors' => [
                    'required' => 'Tahun Wajib di isi',
                    'numeric' => 'Tahun yang di isi tidak benar',
                ],
            ],

        ]);

        if (!$this->validation->run($this->request->getGet())) {
            return $this->response->setJSON([
                'success' => false,
                'errors' => $this->validation->getErrors(),
            ]);
        }

        $tahun = (int) $this->request->getGet('tahun');
        $endPoint = $this->apiEndPointGardu . "data-makro?tahun=" . $tahun;
        $resp = $this->getApiGardu($endPoint);
        $result = [];
        foreach ($resp as $key => $val) {
            $arrCategori = [];
            $arrData = [];
            foreach ($val['nilai_tahun'] as $key2 => $val2) {
                array_push($arrCategori, $val2['tahun']);
                array_push($arrData, $val2['nilai']);
            }

            $dataSeries[0] = [
                'name' => 'Nilai',
                'data' => $arrData
            ];

            $result[] = generateChart("column", $val['dd_nama'], $arrCategori, $dataSeries, $val['dd_satuan']);
        }
        return $this->response->setJSON($result);
    }
}
