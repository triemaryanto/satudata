<?php

namespace App\Controllers;

class Sektoral extends BaseController
{
    private $apiEndPointGardu;
    public function __construct()
    {
        $this->apiEndPointGardu = "https://gardu.wonosobokab.go.id/api/";
    }

    public function index()
    {
        $q = isset($this->request->getGet()['q']) && !empty($this->request->getGet()['q']) ? $this->request->getGet()['q'] : '';
        $endPoint = $this->apiEndPointGardu . "data-sektoral?filter=" . $q;
        $dataSektoral = $this->getApiGardu($endPoint);
        $data = [
            'data' => $dataSektoral['result'],
            'total' => count($dataSektoral['result']),
            'q' => $q,
            'activePage' => ACTIVE_PAGE_HOME
        ];
        return view('sektoral/index', $data);
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
}
