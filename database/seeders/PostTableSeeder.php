<?php

namespace Database\Seeders;

use App\Models\Posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $posts = [
            [
                'title'=> 'Post One',
                'excerpt'=> 'Summary of post One',
                'body'=> 'Body of post one',
                'image_path'=> 'Empty',
                'is_published'=> '1',
                'min_to_read'=> '2',
            ],
            [
                'title'=> 'Post Two',
                'excerpt'=> 'Summary of post Two',
                'body'=> 'Body of post Two',
                'image_path'=> 'Empty',
                'is_published'=> '1',
                'min_to_read'=> '2',
            ]
        ];

        foreach($posts as $key => $value){
            Posts::create($value);
        }
    }
}
