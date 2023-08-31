<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run()
    // {
    // //  $this->call(PostTableSeeder::class);    
    //     Posts::factory(100)->create();

    // }

    public function run()
    {

      $this->call(PostTableSeeder::class);
    }
}
