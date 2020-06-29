<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Restaurant extends Model
{

  protected $table = 'restaurant';

    public function menu()
    {
      return $this->hasMany(Menu::class);
    }

    function getrestaurant()
    {
        $Restaurant = DB::table('restaurant')->get();
        return $Restaurant;
    }

    function getrestaurantb($id)
    {
        $Restaurant = DB::table('restaurant')
            ->where('id', $id)
            ->get();
        return $Restaurant;
    }

    function createrestaurant($description, $grade, $localization, $phone_number, $website, $hour)
    {
        DB::table('restaurant')->insert(
            [
              'name' => $name,
              'description' => $description,
              'grade' => $grade,
              'localization' => $localization,
              'phone_number' => $phone_number,
              'website' => $website,
              'hour' => $hour
            ]
        );
    }

    function updaterestaurant($id, $description, $grade, $localization, $phone_number, $website, $hour)
    {
        DB::table('restaurant')->where('id', $id)
            ->update(
              [
                'name' => $name,
                'description' => $description,
                'grade' => $grade,
                'localization' => $localization,
                'phone_number' => $phone_number,
                'website' => $website,
                'hour' => $hour
              ]
        );
    }


    function removerestaurant($id)
    {
        DB::table('restaurant')->where('id', $id)->delete();
    }
}
