<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)
            ->create()
            ->each(function($u) {
               for($i = 0; $i < 5; $i++) {
                   $u->posts()->save(factory(App\Post::class)->make());
               } 
            });
    }
}
