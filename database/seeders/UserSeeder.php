<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\Models\User::create([
    		'name' => 'Admin',
    		'email' => 'admin@revenueportal.com',
    		'email_verified_at' => '2021-02-16 17:00:00',
    		'password' => bcrypt('12345678'),
    		'role' => 'admin',
    	]);
    }
}
