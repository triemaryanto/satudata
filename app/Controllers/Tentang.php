<?php

namespace App\Controllers;

class Tentang extends BaseController {
    public function __construct() {
    }

    public function index() {
        $data = [
            'description' => "Satu Data Kabupaten Wonosobo adalah sebuah platform data yang 
                            menyediakan informasi terkait Kabupaten Wonosobo, Jawa Tengah. Platform ini bertujuan untuk memberikan akses mudah dan transparan terhadap data-data penting mengenai Kabupaten Wonosobo. yang berisi  informasi data demografi, ekonomi, pendidikan, kesehatan, dan sektor lainnya. Anda dapat menemukan statistik dan visualisasi data yang relevan dengan Kabupaten Wonosobo.
                            dan juga tentang terhubung dengan informasi data geospasial  kabupaten wonosobo.",

            'image' =>  base_url('public/img/icons/laporan.png'),
            'title' => 'Tentang <span class="fw-bold">Satudata <span style="color: #f05d0e;">Wonosobo</span></span>',
            'activePage' => ACTIVE_PAGE_TENTANG,

        ];
        return view("tentang/index", $data);
    }
}
