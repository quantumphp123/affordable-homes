<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Carbon\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::insert([
            'first_name' => 'Awesome',
            'last_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => password_hash('12345678', PASSWORD_DEFAULT),
            'created_at' => now(),
        ]);
    }
}
