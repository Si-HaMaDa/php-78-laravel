<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => fake()->word(),
            'content' => fake()->text(),
            'image' => '',
            'user_id' => 1,
            'cat_id' => 1,
        ]);
        DB::table('post_tag')->insert([
            'post_id' => 1,
            'tag_id' => 1
        ]);
    }
}
