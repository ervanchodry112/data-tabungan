<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AccountBalance extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
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
            'balance' => [
                'type' => 'INT',
                'constraint' => 9,
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

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('id_user');
        $this->forge->createTable('account_balance');
    }

    public function down()
    {
        $this->forge->dropTable('account_balance');
    }
}
