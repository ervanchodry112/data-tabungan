<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use \Faker\Factory;
use CodeIgniter\I18n\Time;

class AddUser extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');

        for ($i = 0; $i < 5; $i++) {
            $name = $faker->name;
            $slug = url_title($name, '-', true);
            $data = [
                'name' => $name,
                'email' => $faker->email,
                'slug' => $slug,
                'created_at' => Time::now('Asia/Jakarta', 'id_ID'),
            ];
            $this->db->table('user')->insert($data);
        }
    }
}
