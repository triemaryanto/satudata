<?php

namespace App\Models;

use CodeIgniter\Model;

class Berita extends Model
{
    protected $table            = 'beritas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul', 'isi', 'image', 'created_at', 'updated_at'];

    protected $useTimestamps    = false;
    protected $createdField = 'created_at';
    protected $updatedField  = 'updated_at';
}
