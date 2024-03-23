<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate([
            'name' => 'Foryoung Jr Ngu',
            'email' => 'foryoungjuniorngu@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);
    }
}
