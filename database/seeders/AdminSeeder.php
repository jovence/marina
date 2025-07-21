<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin Vote',
            'email' => 'adminvote@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // or use a more secure password
            'remember_token' => Str::random(10),
            'role' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            // Add any additional admin-specific fields if needed
        ]);
    }
}
