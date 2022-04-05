<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Podcast extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'voice' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'category' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_date' => [
                'type' => 'DATETIME',
            ],
            'updated_date' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('podcast');
    }

    public function down()
    {
        $this->forge->dropTable('podcast');
    }
}