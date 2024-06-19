<?php

namespace App\Controllers;

class Berita extends BaseController {
    private $client;
    private $pager;
    public function __construct() {
        $this->client = \Config\Services::curlrequest();
        $this->pager = service('pager');
    }
    public function index() {
        $page = isset($this->request->getGet()['page']) ? $this->request->getGet()['page'] : 1;
        $berita = $this->getBerita($page + 1);
        // dd($this->getBerita(1)['data']);
        $pager_links = $this->pager->makeLinks($page, 5, $berita['pagination']['total'], 'custom_pager');
        $data = [
            'carousel_berita' => $this->getBerita(1)['data'],
            'list_berita' => $berita['data'],
            'total' => $berita['pagination']['total'],
            'row_form' => $berita['pagination']['from'],
            'row_to' => $berita['pagination']['to'],
            'pager_links' => $pager_links,
            'activePage' => ACTIVE_PAGE_HOME
        ];
        return view('berita/index', $data);
    }

    public function getBerita($page = false) {
        $url = "https://diskominfo.wonosobokab.go.id/api/news?page=" . $page;

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
            // throw new Exception('');
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

        $result = ['data' => [], 'pagination' => []];

        // list  berita
        foreach ($data['data']['data'] as $key => $val) {
            $val['updated_at'] = date("Y-m-d", strtotime($val['updated_at']));
            $result['data'][] = $val;
        }

        // data pagination
        $result['pagination'] = [
            'from' => $data['data']['from'],
            'to' => $data['data']['to'],
            'total' => $data['data']['total'],
            'current_page' => $data['data']['current_page'] - 1,
        ];

        return $result;
    }

    public function detail($slug) {
        $idPosting = $this->request->getPost('id_posting');
        $data = [
            'berita' => $this->getBeritaById($idPosting),
            'slug' => $slug
        ];
        return view('berita/detail', $data);
    }

    private function getBeritaById($idPosting) {
        if (!isset($idPosting) && empty($idPosting)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Get Detail Berita by id_posting
        $url = "https://diskominfo.wonosobokab.go.id/api/news/" . $idPosting;

        $options = [
            'allow_redirects' => false,
            'verify' => false,
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
            // throw new Exception('');
            // Jangan lupa menampilkan atau mengembalikan informasi kesalahan
            return "Berita Error: " . $statusCode;
        }
        // Jika semuanya berjalan dengan baik, kembalikan respons
        // Mengonversi respons JSON menjadi array PHP
        $body = json_decode($body, true);

        // jika $body null maka send result empty array
        if ($body == null) {
            return array();
        }

        // custom waktu 
        // Menggunakan Time helper untuk membuat objek Time dari string ISO 8601
        $time = new \CodeIgniter\I18n\Time($body['data']['publish_at']);
        // Set zona waktu ke "Asia/Jakarta"
        $time->setTimezone('Asia/Jakarta');

        // dd($time);
        // exit;
        // Set bahasa pada objek Time ke bahasa Indonesia

        // Format tanggal dan waktu sesuai dengan kebutuhan
        $body['data']['publish_at'] = $time->format('l, d F Y pukul h:i A T');
        return $body['data'];
    }
}
