<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
            'title' => 'Title of first seeded content',
            'content' => 'First seeded content'
        ]);
        $post->save();

        $post = new \App\Post([
            'title' => 'Title of second seeded content',
            'content' => 'Second seeded content'
        ]);
        $post->save();
    }
}
