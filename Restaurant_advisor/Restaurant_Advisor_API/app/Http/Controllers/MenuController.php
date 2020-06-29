<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use DB;

class MenuController extends Controller
{
    function getMenu() {
        $items = Menu::all()->groupBy('resto_id');
        return response()->json($items, 200);
        //dd($items);
    }

    function getMenuBis($id) {
        $menu = new menu();
        $Menu = $menu->getmenub($id);
        return response()->json($Menu, 200);
    }

    function picture_generate() {
          $this->validate($request, ["image" => "required|image|mimes:png,jpeg,jpg"]);
          $img = $request->file("image");
          $dest = public_path() . '/images/';
          $img->move($dest, time() . '.' . $img->getClientOriginalExtension(), $new_name);
    }

    function postMenu(Request $request) {

      $allParams = $request->all();

      $menu = new menu();
        $Menu->createmenu(
          $allParams['name'],
          $allParams['description'],
          $allParams['price'],
          //$allParams['image'],
          $allParams['resto_id']
        );
        return response()->json(['message' => 'Insert document OK'], 200);
    }

    function putMenu(Request $request, $id) {
        $allParams = $request->all();
        $menu = new menu();
        $Menu->updatemenu(
          $id,
          $allParams['name'],
          $allParams['description'],
          $allParams['price'],
          //$allParams['image'],
          $allParams['resto_id']
        );
        return response()->json(['message' => 'Update document OK'], 200);
    }

    function deleteMenu($id) {
        $menu = new menu();
        $Menu->removemenu($id);
        return response()->json(['message' => 'Delete document OK'], 200);
    }
}
