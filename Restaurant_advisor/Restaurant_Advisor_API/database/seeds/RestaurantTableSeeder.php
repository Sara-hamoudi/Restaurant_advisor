<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('restaurant')->insert([
          'name' => "MacDonald's",
          'description' => 'Classic, long-running fast-food chain known for its burgers, fries & shakes.',
          'grade' => '3.2',
          'localization' => 'Centre Commercial Grand Ciel, 30 Boulevard Paul Vaillant Couturier, 94200 Ivry-sur-Seine',
          'phone_number' => '01 49 60 62 60',
          'website' => 'macdonalds.fr',
          'hours' => "Monday-Saturday 9AM–9PM, Sunday Closed"
      ]);
      DB::table('restaurant')->insert([
        'name' => "Quick",
        'description' => 'Classic, long-running fast-food chain known for its burgers, fries & shakes.',
        'grade' => '5.2',
        'localization' => 'Centre Commercial Grand Ciel, 30 Boulevard Paul Vaillant Couturier, 94200 Ivry-sur-Seine',
        'phone_number' => '01 34 56 62 45',
        'website' => 'macdonalds.fr',
        'hours' => "Monday-Saturday 9AM–12PM, Sunday Closed"
      ]);
    }
}
