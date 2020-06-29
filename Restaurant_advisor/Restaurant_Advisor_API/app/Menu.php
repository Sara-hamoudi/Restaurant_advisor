<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{

  protected $table = 'menu';

    public function restaurant()
    {
      return $this->belongsTo(Restaurant::class);
    }

    function getmenu()
    {
        $Menu = DB::table('menu')->get();
        return $Menu;
    }

    function getmenub($id)
    {
        $Menu = DB::table('menu')
            ->where('id', $id)
            ->get();
        return $Menu;
    }

    function createmenu($name, $description, $price)
    {
        DB::table('menu')->insert(
            [
              'name' => $name,
              'description' => $description,
              'price' => $price,
              //'image' => $image,
              'resto_id' => $resto_id
            ]
        );
    }

    function updatemenu($id, $name, $description, $price)
    {
        DB::table('menu')->where('id', $id)
            ->update(
              [
                'name' => $name,
                'description' => $description,
                'price' => $price,
                //'image' => $image,
                'resto_id' => $resto_id
              ]
        );
    }

    function removemenu($id)
    {
        DB::table('menu')->where('id', $id)->delete();
    }
}
