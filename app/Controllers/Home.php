<?php

namespace App\Controllers;

use Exception;

class Home extends BaseController
{
    private $client;

    public function __construct()
    {
        $this->client = \Config\Services::curlrequest();
        helper('number');
    }

    public function index(): string
    {
        $data = [
            'berita' => $this->getBerita(),
            // 'data_statistik' => [
            //     'dataset' => $this->dataStatistik("https://data.wonosobokab.go.id/api/3/action/package_list"),
            //     'organization' => $this->dataStatistik("https://data.wonosobokab.go.id/api/3/action/organization_list"),
            //     'groups' => $this->dataStatistik("https://data.wonosobokab.go.id/api/3/action/group_list"),
            // ],
            'activePage' => ACTIVE_PAGE_HOME
        ];

        return view('home/index', $data = ['berita' => $this->getBerita(), 'data_statistik' => []]);
    }

    public function getBerita()
    {
        $url = "https://diskominfo.wonosobokab.go.id/api/news";
        $options = [
            'allow_redirects' => false,
            'verify' => false,
            // 'cert' => ['/path/server.pem']
            'headers' => ['Accept'     => 'application/json',]
        ];

        $response = $this->client->request('GET', $url, $options);


        // Mendapatkan respons dari API
        $statusCode = $response->getStatusCode();
        $body = $response->getBody();

        // Jika status code tidak sesuai dengan yang diharapkan (contoh: 200 untuk OK)
        if ($statusCode !== 200) {
            // Handle kesalahan di sini (contoh: throw new Exception('Error message'))
            // ...
            throw new Exception();
            // Jangan lupa menampilkan atau mengembalikan informasi kesalahan
            return "Berita Error: " . $statusCode;
        }

        // Jika semuanya berjalan dengan baik, kembalikan respons
        // Mengonversi respons JSON menjadi array PHP
        $data = json_decode($body, true);

        // jika $data null maka send result empty array
        if ($data == null) {
            return array();
        }

        $result = [];
        $idx = 0;
        foreach ($data['data']['data'] as $key => $val) {
            if ($idx == 3) {
                continue;
            }
            $val['updated_at'] = date("Y-m-d", strtotime($val['updated_at']));
            $result[] = $val;

            $idx = $key;
        }
        return $result;
    }


    public function dataStatistik($url)
    {
        $options = [
            'allow_redirects' => false,
            'verify' => false,
            'headers' => ['Accept'     => 'application/json',]
        ];

        $response = $this->client->request('GET', $url, $options);

        // Mendapatkan respons dari API
        $statusCode = $response->getStatusCode();
        $body = $response->getBody();
        // Jika semuanya berjalan dengan baik, kembalikan respons
        // Mengonversi respons JSON menjadi array PHP
        $data = json_decode($body, true);
        // jika $data null maka send result empty array
        if ($data == null) {
            return 0;
        }
        $jumlahData = count($data['result']);
        $result = $jumlahData > 1000 ? format_number($jumlahData / 1000, 1) . "K" : $jumlahData;
        return $result;
    }
}
