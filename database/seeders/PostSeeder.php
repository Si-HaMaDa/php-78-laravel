<?php

namespace Database\Seeders;

use App\Models\Post;
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
        Post::factory(10)->create();
        for ($i = 1; $i < 11; $i++) {
            $random = rand(2, 5);
            for ($count = 0; $count < $random; $count++) {
                DB::table('post_tag')->insertOrIgnore([
                    'post_id' => $i,
                    'tag_id' => rand(1, 10)
                ]);
            }
        }
    }
}
