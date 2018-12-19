<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new \App\Tag();
        $tag->name = '1RGJ';
        $tag->save();

        $tag = new \App\Tag();
        $tag->name = '2RGJ';
        $tag->save();

        $tag = new \App\Tag();
        $tag->name = '3RGJ';
        $tag->save();

        $tag = new \App\Tag();
        $tag->name = '4(V)RGJ';
        $tag->save();

        $tag = new \App\Tag();
        $tag->name = '5(V)RGJ';
        $tag->save();
    }
}
