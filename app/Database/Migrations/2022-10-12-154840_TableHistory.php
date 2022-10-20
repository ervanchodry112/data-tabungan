<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableHistory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_history' => [
                'type' => 'INT',
                'constraint' => 3,
                'null' => false,
                'auto_increment' => true,
            ],
            'id_user' => [
                'type' => 'INT',
                'constraint' => 3,
                'null' => false,
            ],
            'id_receipt' => [
                'type' => 'INT',
                'constraint' => 3,
                'null' => false,
            ],
            'amount' => [
                'type' => 'INT',
                'constraint' => 9,
                'null' => false,
            ],
            'status' => [
                'type' => 'INT',
                'constraint' => 1,
                'null' => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
        ]);

        $this->forge->addKey('id_history', true);
        $this->forge->addKey('id_user');
        $this->forge->addKey('status');
        $this->forge->createTable('history');
    }

    public function down()
    {
        // $this->forge->dropForeignKey('history', 'id_user');
        $this->forge->dropTable('history');
    }
}
