<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Publikasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nomor_katalog' => [
                'type'           => 'INT',
                'constraint' => '10',
                'null'       => true,
            ],
            'nomor_publikasi' => [
                'type'       => 'INT',
                'constraint' => '10',
                'null'       => true,
            ],
            'issn_ibsn' => [
                'type'           => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'judul' => [
                'type'           => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'image' => [
                'type'           => 'TEXT',
                'constraint' => '255',
                'null'       => true,
            ],
            'deskripsi' => [
                'type'           => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'ukuran' => [
                'type'           => 'INT',
                'constraint' => '5',
                'null'       => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('publikasis');
    }

    public function down()
    {
        //
    }
}
