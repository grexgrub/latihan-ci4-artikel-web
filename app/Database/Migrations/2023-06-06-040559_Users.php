<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
           'username' => [
                'type' => 'varchar',
                'constraint' => 30,
            ],
           'nama' => [
                'type' => 'varchar',
                'constraint' => 30,
            ],
           'password' => [
                'type' => 'varchar',
                'constraint' => 30,
            ],
           'photo_profile' => [
                'type' => 'varchar',
                'constraint' => 100,
                'default' => 'blankpp.jpeg'
            ]
        ]);
        $this->forge->addkey('usernmae', true);
        $this->forge->createtable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
