<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages=['Haqqımızda','Elanlar','Tədbirlər','Əlaqə','Necə yardım edim?'];
        $count=0;
        foreach ($pages as $page) {
            $count++;
            DB::table('pages')->insert([
                'title' => $page,
                'slug' => Str::slug($page),
                'image' => 'http://lorempixel.com/800/400/cats/Faker',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, sapiente cumque ratione nulla voluptatibus expedita accusantium. Assumenda doloremque, voluptate reprehenderit cumque deleniti aliquid libero delectus obcaecati totam, quas optio. Saepe.',
                'order' => $count,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
