<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'image'=>'Foto',
            'name'=>'elgun huseynov',
            'login'=>'elgun',
            'email'=>'elgunhuseyn55@gmail.com',
            'password'=>bcrypt(102030),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
