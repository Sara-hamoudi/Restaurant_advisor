<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;
use App\Menu;

class RestaurantController extends Controller
{
    function getRestaurant() {
        $restaurant = new restaurant();
        $Restaurant = $restaurant->getrestaurant();
        return response()->json($Restaurant, 200);
    }

    function getRestaurantBis($id) {
        $restaurant = new restaurant();
        $Restaurant = $restaurant->getrestaurantb($id);
        return response()->json($Restaurant, 200);
    }

    function postRestaurant(Request $request) {
        $allParams = $request->all();
        $restaurant = new restaurant();
        $Restaurant->createrestaurant(
          $allParams['name'],
          $allParams['description'],
          $allParams['grade'],
          $allParams['localization'],
          $allParams['phone_number'],
          $allParams['website'],
          $allParams['hour']
        );
        return response()->json(['message' => 'Insert document OK'], 200);
    }

    function putRestaurant(Request $request, $id) {
        $allParams = $request->all();
        $restaurant = new restaurant();
        $Restaurant->updaterestaurant(
          $id,
          $allParams['name'],
          $allParams['description'],
          $allParams['grade'],
          $allParams['localization'],
          $allParams['phone_number'],
          $allParams['website'],
          $allParams['hour']
        );
        return response()->json(['message' => 'Update document OK'], 200);
    }

    function deleteRestaurant($id) {
        $restaurant = new restaurant();
        $Restaurant->removerestaurant($id);
        return response()->json(['message' => 'Delete document OK'], 200);
    }
}
