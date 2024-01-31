<?php

namespace Database\Seeders;

use App\Models\Post; // Add this line to import the 'Post' class

use Illuminate\Database\Seeder;


// Remove the duplicate 'use Illuminate\Database\Seeder;' statement

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(3)->create();
         //Post::factory(5)->create(); // Replace '\App\Models\Post' with 'Post'
    

         //\App\Models\Post::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        }
    }
