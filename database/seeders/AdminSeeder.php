<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{

    public function run()
    {

        $admin = [
            ['name'  => 'Admin','email' => 'admin@bookshop.com','password' =>bcrypt('bookshop@123')]
        ];

        Admin::insert($admin);
    }
}
