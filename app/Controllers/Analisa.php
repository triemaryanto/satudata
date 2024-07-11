<?php

namespace App\Controllers;

class Analisa extends BaseController
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

    private function postApiGardu($url, $data)
    {
        $client = \Config\Services::curlrequest();
        $headers = [
            'Authorization' => 'Basic TmFzMTo5bUhnbkFtaFBRYms5cjhNYm9yQnpnSUoyMkdjemVIMw==', // Replace with your actual base64-encoded username:password
            'Content-Type' => 'application/json'
        ];
        $response = $client->post($url, [
            'headers' => $headers,
            'json' => $data
        ]);
        return json_decode($response->getBody(), true);
    }
    public function index()
    {
        $data = [
            'title' => 'Rencana Pembangunan Jangka Menengah Daerah (RPJMD)',
            'deskription' => 'Merupakan dokumen perencanaan pembangunan daerah sebagai landasan dan pedoman bagi Pemerintah Daerah dalam melaksanakan pembangunan 5 (lima) tahun yang merupakan penjabaran dari visi, misi dan program Kepala Daerah terpilih; dan tujuan, sasaran, strategi, arah kebijakan pembangunan dan program pembangunan yang akan dilaksanakan oleh Perangkat Daerah, disertai dengan kerangka pendanaan yang bersifat indikatif.',
            'image' =>  base_url('public/img/icons/laporan.png'),
            'selectData' => $this->getApiGardu($this->apiEndPointGardu . 'list-data-dukung'),
            'activePage' => ACTIVE_PAGE_ANALISA
        ];

        return view('analisa/index', $data);
    }

    public function getDataAjax()
    {
        $endPoint = $this->apiEndPointGardu . "nilai-data-dukung";
        $arrData = $this->request->getGet('data');
        $arrTahun = $this->request->getGet('tahun');

        // validasi params data harus int 
        foreach ($arrData as $key => $val) {
            $val = (int) $val;
            if (!is_int($val)) {
                return $this->response->setJSON([
                    'success' => false,
                    'msg' => 'Data perbandingan tidak valid'
                ]);
            }
        }

        // validasi params tahun harus int 
        foreach ($arrTahun as $key => $val) {
            // tahun harus 4 digit
            if (strlen((string)$val) != 4 && !is_int($val)) {
                return $this->response->setJSON([
                    'success' => false,
                    'msg' => 'Tahun yang di masukkan tidak valid'
                ]);
            }
        }

        $dataBody = [
            'data' => $arrData,
            'tahun' => $arrTahun,
        ];

        $resp = $this->postApiGardu($endPoint,  $dataBody);

        $tbody = [];
        $satuan = [];
        foreach ($resp['data'] as $key => $val) {
            $series = [];
            foreach ($val['nilai_tahun'] as $key2 => $val2) {
                array_push($series, intval($val2['nilai']));
            }
            foreach ($arrData as $key2 => $val2) {
                if ($val2 == $val['data_id']) {
                    $dataSeries[$key] = [
                        'name' => $key2,
                        'data' => $series
                    ];
                } else {
                    continue;
                }
            }

            $satuan[$val['satuan']] = $val['satuan'];
            $tbody[] = $this->genTbody($key + 1, $val, $resp['categori_tahun']); //tbody table
        }

        array_unshift($tbody, "<tbody>");
        $tbody[count($tbody)] = "</tbody>";
        $tbody = implode('', $tbody);
        $colomTahun = $this->genThead($resp['categori_tahun']);
        $thead = '  <thead class="text-center align-items-center middle fw-semibold align-middle">
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Data</th>
                            <th colspan="' . count($resp['categori_tahun']) . '">Tahun</th>
                            <th rowspan="2">Satuan</th>
                        </tr>
                        <tr>
                        ' . $colomTahun . '
                        </tr>
                    </thead>';
        $table = '<table class="table table-striped table-bordered border border-black">' . $thead . $tbody . '</table>';

        // chart
        $satuan = implode(" & ", $satuan);
        $result = generateChart("column", 'Grafik Perbandingan', $resp['categori_tahun'], $dataSeries, $satuan);

        return $this->response->setJSON(
            [
                'success' => true,
                'chart' => $result,
                'data' => $table
            ]
        );
    }

    private function genTbody($number, $data, $categoriTahun)
    {
        $colomTahun = [];
        foreach ($categoriTahun as $key1 => $val1) {
            foreach ($data['nilai_tahun'] as $key2 => $val2) {
                if ($val2['tahun'] == $val1) {
                    $colomTahun[$key1] = '<td class="text-center">' . $val2['nilai'] . '</td>';
                }
            }
        }

        $colomTahun = implode('', $colomTahun);
        return '<tr onclick="open_meta(' . htmlspecialchars(json_encode($data['meta_data'])) . ')"> 
        <td class="text-center">' . $number . '</td>
        <td>' . $data['data_nama'] . '</td>
        ' . $colomTahun . '
        <td class="text-center">' . $data['satuan'] . '</td>
        </tr>';
    }

    private function genThead($listTahun)
    {
        $string = "";
        foreach ($listTahun as $key => $val) {
            $string .= '<td class="text-center"> ' . $val . '</td>';
        }
        return $string;
    }
}
