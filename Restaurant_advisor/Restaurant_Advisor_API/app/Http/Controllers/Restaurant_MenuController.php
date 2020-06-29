<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Restaurant;
use DB;

class Restaurant_MenuController extends Controller
{
    function restaurant_menu_get(Request $request, $id) {
      $menu = DB::table('menu')
      ->where("resto_id",$id)
      ->get();
      return response()->json($menu, 200);
    }
    function restaurant_menu_pst(Request $request, $id) {
      $menu = DB::table('menu')
      ->where("resto_id",$id)
      ->get();

      DB::table('menu')
      ->where('resto_id', $id)
      ->insert(
        [
          'name' => $request -> input("name"),
          'description' => $request -> input("description"),
          'price' => $request -> input("price"),
          'resto_id' => $request -> input("resto_id")
        ]
      );
      return response("Menu saved",200);
    }

    function restaurant_menu_upd(Request $request, $id) {
      $menu = DB::table('menu')
      ->where("resto_id",$id)
      ->get();

      DB::table('menu')
      ->where('resto_id', $id)
      ->update(
        [
          'id' => $request -> input("id"),
          'name' => $request -> input("name"),
          'description' => $request -> input("description"),
          'price' => $request -> input("price"),
          'resto_id' => $request -> input("resto_id")
        ]
      );
      return response()->json("Données mises à jour avec succés", 400);
    }

}
