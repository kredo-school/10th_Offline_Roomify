<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       

        DB::table('users')->insert([
            [
                'name' => 'guest1',
                'email' => 'guest1@example.com',
                'password' =>hash::make('password'),
                'nationality_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

                'role' => '1',

            ],
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' =>hash::make('password'),
                'nationality_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

                'role' => '0',

            ],
            [
                'name' => 'host',
                'email' => 'host@example.com',
                'password' => hash::make('password'),
                'nationality_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

                'role' => '2',

            ],
            [
                'name' => 'guest3',
                'email' => 'guest3@example.com',
                'password' => hash::make('password'),
                'nationality_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

                'role' => '1',
            ],
            [
                'name' => 'guest4',
                'email' => 'guest4@example.com',
                'password' => hash::make('password'),
                'nationality_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

                'role' => '1',
            ],
            [
                'name' => 'guest5',
                'email' => 'guest5@example.com',
                'password' => hash::make('password'),
                'nationality_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

                'role' => '1',
            ],
            [
                'name' => 'guest6',
                'email' => 'guest6@example.com',
                'password' => hash::make('password'),
                'nationality_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

                'role' => '1',
            ]

        ]);
    }
}
