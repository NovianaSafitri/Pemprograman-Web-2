<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBooksTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_atk' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'nama_barang' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'katagori' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 16,
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ]
            ]);

            $this->forge->addKey('id_atk', true);
            $this->forge->createTable('barang');
    }
    public function down()
    {
        $this->forge->dropTable('barang');
    }
}
