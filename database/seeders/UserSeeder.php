<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    User::create([
        'name' => 'Siri',
        'email' => 'admin@gmail.com',
        'mobile' => '9865326592',
        'role' => 'Super Admin',
        'password' => Hash::make('12345678')
        
    ]);
}
}
