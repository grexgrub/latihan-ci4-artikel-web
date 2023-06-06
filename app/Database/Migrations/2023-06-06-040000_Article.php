<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Article extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_article' => [
                'type'           => 'varchar',
                'constraint'     => 30,
            ],
            'judul' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'cover' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'isi' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'varchar',
                'constraint' => 30,
            ],
            'updated_at' => [
                'type' => 'varchar',
                'constraint' => 30,
            ],
        ]);
        $this->forge->addkey('judul', true);
        $this->forge->createtable('article');
    }

    public function down()
    {
        $this->forge->dropTable('article');
    }
}
