<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create(); you can put specific value in 
       // the parenthesis to create that amount of users

       \App\Models\User::factory(10)->create();

        // \App\Models\User::factory(5)->create([
        //     'name' => 'Test User',
        //    'email' => 'test@example.com',
        //   ]);
    }
}
