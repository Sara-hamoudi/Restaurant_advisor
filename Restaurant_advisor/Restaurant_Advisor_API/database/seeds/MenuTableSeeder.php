<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('menu')->insert([
        'name' => 'Menu A5',
        'description' => '8 sushis, 4 makis, 4 calofornia rolls',
        'price' => '16.5',
        'resto_id' => '1'
      ]);
      DB::table('menu')->insert([
        'name' => 'Menu A2',
        'description' => '5 pizzas, 2 sodas, 4 frittes',
        'price' => '23.2',
        'resto_id' => '2'
      ]);
    }
}
