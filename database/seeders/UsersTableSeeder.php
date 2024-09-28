<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            // Admin
           [
                "name"=> "Admin",
                "username"=> "Admin",
                "email"=> "admin@gmail.com",
                "password"=> Hash::make("alam4745"),
                "role"=> "admin",
                "status"=> "active",
            
            ],
        //agent
            [
                "name"=> "Agent",
                "username"=> "Agent",
                "email"=> "agent@gmail.com",
                "password"=> Hash::make("alam4745"),
                "role"=> "agent",
                "status"=> "active",
            ],
            [
                "name"=> "User",
                "username"=> "User",
                "email"=> "user@gmail.com",
                "password"=> Hash::make("alam4745"),
                "role"=> "user",
                "status"=> "active",
            ]
        ]);
    }
}
