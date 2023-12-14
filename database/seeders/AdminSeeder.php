<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'type' => 1,
            'name' => 'Admin',
            'email' => 'admin@kitsTechnology.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
