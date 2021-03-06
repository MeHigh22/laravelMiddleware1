<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('users')->insert([
        [
        "name" => "Mihai",
        "email" => "admin@admin.com",
        "role_id" => 1,
        "password" => bcrypt("password"),
        ],
        [
        "name" => "Masta",
        "email" => "masta@masta.com",
        "role_id" => 2,
        "password" => bcrypt("password"),
        ]
        ]);
    }
}
