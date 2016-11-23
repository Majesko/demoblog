<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = \App\Post::all();
        
        foreach ($posts as $post) {
            for($i = 0; $i < rand(2,5); $i++) {
                $post->comments()->save(factory(App\Comment::class)->make());
            }
        }
    }
}
