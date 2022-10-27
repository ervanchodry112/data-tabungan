<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use \Faker\Factory;
use CodeIgniter\I18n\Time;

class AddBalance extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');

        for ($i = 1; $i <= 5; $i++) {
            $name = $faker->name;
            $slug = url_title($name, '-', true);
            $data = [
                'id' => $i,
                'name' => $name,
                'slug' => $slug,
                'created_at' => Time::now('Asia/Jakarta', 'id_ID'),
            ];
            $this->db->table('pengguna')->insert($data);

            $balance = [
                'id_user' => $i,
                'balance' => $faker->numberBetween(10000, 1000000),
                'created_at' => Time::now('Asia/Jakarta', 'id_ID'),
            ];
            $this->db->table('account_balance')->insert($balance);

            $users = [
                'email' => ($name . '@gmail.com'),
                'username' => $slug,
                'id_user'   => $i,
                'password_hash' => password_hash('123456', PASSWORD_DEFAULT),
            ];
            $this->db->table('users')->insert($users);
        }
    }
}
