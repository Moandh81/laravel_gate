<?php

use App\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate() ;
       
        // $post1 =  Post::create([
        //     'title' => 'Title of post 1' 
        // ]) ;


        // $post2 =  Post::create([
        //     'title' => 'Title of post 2' 
        // ]) ;


        // $post3 =  Post::create([
        //     'title' => 'Title of post 3' 
        // ]) ;


    for ($i=0; $i < 50 ; $i++) { 
      
        Post::create([
            'title' => 'Title of post '. $i 
        ]) ;

    }

    }
}
