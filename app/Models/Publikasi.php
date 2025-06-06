<?php

namespace App\Models;

use CodeIgniter\Model;

class Publikasi extends Model
{
    protected $table            = 'publikasis';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nomor_katalog', 'nomor_publikasi', 'issn_ibsn', 'judul', 'image', 'deskripsi', 'ukuran'];

    protected $createdField = 'created_at';
    protected $updatedField  = 'updated_at';
}
