<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PublikasiController extends BaseController
{
    public function index()
    {
        return view('admin/publikasi');
    }
}
