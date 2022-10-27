<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableUser extends Migration
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
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => false,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
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
        $this->forge->addKey('slug', false, true);
        $this->forge->createTable('pengguna');

        $this->forge->addField([
            'id_status' => [
                'type' => 'INT',
                'constraint' => 1,
                'null' => false,
                'auto_increment' => true,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
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

        $this->forge->addKey('id_status', true);
        $this->forge->createTable('status');

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
            'jenis_transaksi' => [
                'type' => 'INT',
                'constraint' => 1,
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
        $this->forge->addForeignKey('id_user', 'pengguna', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('status', 'status', 'id_status', '', 'CASCADE');
        $this->forge->createTable('history');


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
        $this->forge->addForeignKey('id_user', 'pengguna', 'id', '', 'CASCADE');
        $this->forge->createTable('account_balance');
        
    }

    public function down()
    {
        $this->forge->dropTable('account_balance');
        $this->forge->dropTable('history');
        $this->forge->dropTable('status');
        $this->forge->dropTable('pengguna');
    }
}
