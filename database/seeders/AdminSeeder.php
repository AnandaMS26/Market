<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'role' => 'admin',
            'password' => bcrypt('admin'),
        ]);

        Admin::create([
            'name' => 'Employee',
            'username' => 'employee',
            'role' => 'employee',
            'password' => bcrypt('employee'),
        ]);

        Admin::create([
           
            'name' => 'HaydenEarl',
            'username' => 'haydenearl',
            'role' => 'employee',
            'password' => bcrypt('haydenearl')
        ]);

        Admin::create([
            'name' => 'Aing',
            'username' => 'aing',
            'role' => 'employee',
            'password' => bcrypt('12345678')
        ]);
        
    }
}
