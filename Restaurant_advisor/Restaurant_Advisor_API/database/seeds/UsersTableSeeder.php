<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Mon',
        'firstname' => 'titre',
        'age' => '2',
        'login' => 'Montitre',
        'email' => 'Montitre2@gmail.df',
        'password' => 'Montitre2'
      ]);
      DB::table('users')->insert([
        'name' => 'Ton',
        'firstname' => 'title',
        'age' => '4',
        'login' => 'TonTitle',
        'email' => 'TonTitle4@gmail.df',
        'password' => 'TonTitle4'
      ]);
    }
}
