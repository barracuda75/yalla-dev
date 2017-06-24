<?php

use Illuminate\Database\Seeder;

class NewslettersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        while($i < 11){
            DB::table('newsletters')->insert([
                'title' => str_random(10),
                'authors' => "blabla",
                'slug' => str_random(10).'@gmail.com',
                'description' => 'Subject no '.$i,
                'content' => str_random(255),
            ]);
            $i++;
        }
    }
}
