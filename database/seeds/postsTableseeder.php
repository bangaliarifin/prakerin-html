<?php

use Illuminate\Database\Seeder;

class postsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        ['title'=>'Tips Cepat Nikah', 'content'=>'lorem ipsum'],
        ['title'=>'haruskah menunda nikah?','content'=>'loream ipsum'],
        ['title'=>'membangun visi misi keluarga','content'=>'loream ipsum']
        ];
        //memasukan data ke table 'posts' di database
        DB::table('posts')->insert($posts);
    }
}
