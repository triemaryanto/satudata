<?php

namespace App\Controllers;

class Sektoral extends BaseController {
    private $apiEndPointGardu;
    public function __construct() {
        $this->apiEndPointGardu = apiEndPointGardu();
    }

    public function index() {
        $q = isset($this->request->getGet()['q']) && !empty($this->request->getGet()['q']) ? $this->request->getGet()['q'] : '';
        $endPoint = $this->apiEndPointGardu . "data-sektoral?filter=" . $q;
        $dataSektoral = getApiGardu($endPoint);
        $data = [
            'data' => $dataSektoral,
            'total' => count($dataSektoral),
            'q' => $q,
            'activePage' => ACTIVE_PAGE_HOME
        ];
        return view('sektoral/index', $data);
    }
}
