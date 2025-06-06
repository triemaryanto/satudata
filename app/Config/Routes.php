<?php

use CodeIgniter\Commands\Utilities\Routes;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'LoginController::index');
$routes->post('/loginPost', 'LoginController::auth');
$routes->get('/logout', 'LoginController::logout');
$routes->get('template', function () {
    $filePath = FCPATH . 'documentation.html';
    if (file_exists($filePath)) {
        return file_get_contents($filePath);
    }
    // Return a 404 response if the file doesn't exist
    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
});

$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'DashboardController::index');
    $routes->get('berita', 'BeritaController::index');
    $routes->get('addberita/', 'BeritaController::addOrEdit');
    $routes->get('editberita/(:num)?', 'BeritaController::addOrEdit/$1');
    $routes->post('saveberita/', 'BeritaController::saveBerita');
    $routes->post('updateberita/(:num)?', 'BeritaController::saveBerita/$1');
    $routes->get('deleteberita/(:num)', 'BeritaController::delete/$1');
    $routes->get('publikasi', 'PublikasiController::index');
});

$routes->get('cari', 'Cari::index'); // pencarian data
$routes->get('berita', 'Berita::index'); // halaman berita
$routes->post('berita/(:segment)', 'Berita::detail/$1'); //detail berita
$routes->get('sektoral', 'Sektoral::index'); //halaman sektoral
$routes->get('rpjmd', 'Data::rpjmd'); //halaman data rpjmd
$routes->get('sdgs', 'Data::sdgs'); //halaman data sdgs
$routes->get('lppd', 'Data::lppd'); //halaman data sdgs
$routes->get('spm', 'Data::spm'); //halaman data sdgs
$routes->get('data/get_data', 'Data::getDataAjax'); //Get Data Ajax datatable
$routes->post('data/download/(:segment)', 'Data::downloadFile/$1'); //Get Data Ajax download file
$routes->get('lppd', 'Data::lppd'); //halaman data lppd
$routes->get('opendata', 'OpenData::index'); //halaman dataset
$routes->post('opendata/', 'OpenData::index'); //halaman dataset ketika change limit / order
$routes->get('opendata/get_data_table', 'OpenData::getDataTable'); //halaman dataset ketika change limit / order
$routes->get('opendata/organisasi', 'OpenData::organisasi'); //halaman organisasi
$routes->get('opendata/detail_organisasi/(:segment)', 'OpenData::detailOrganisasi/$1'); //halaman detail organisasi
$routes->get('opendata/detail_dataset/(:segment)', 'OpenData::detailDataset/$1'); //halaman dataset detail organisasi
$routes->get('opendata/group', 'OpenData::group'); //halaman group
$routes->get('opendata/detail_group/(:segment)', 'OpenData::detailGroup/$1'); //halaman detail organisasi
$routes->post('opendata/download/(:segment)', 'OpenData::downloadFile/$1'); //Get Data Ajax download file
$routes->get('makro/', 'DataMakro::index');
$routes->get('makro/get_data', 'DataMakro::getDataAjax');
$routes->get('analisa/', 'Analisa::index');
$routes->get('analisa/get_data', 'Analisa::getDataAjax');
$routes->get('tentang/', 'Tentang::index');
$routes->get('login/', 'Auth\Login::index');
