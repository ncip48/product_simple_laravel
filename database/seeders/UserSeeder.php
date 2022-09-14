<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        User::insert([
            [
                'name' => 'Herly Chahya',
                'email' => 'mbahcip00@gmail.com',
                'password' => Hash::make('mbahcip123')
            ], [
                'name' => 'Barudak Bogor',
                'email' => 'guruh@gmail.com',
                'password' => Hash::make('kontol123')
            ],
        ]);
    }
}
