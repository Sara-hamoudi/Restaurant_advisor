<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth', 'API\UserController@login'); //Authentification
Route::post('register', 'API\UserController@register'); //Inscription
Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'API\UserController@details');
});

Route::get('users/', 'UsersController@getUsers'); //Avoir une liste d’utilisateurs

Route::get('restaurants/', 'RestaurantController@getRestaurant'); //Récupérer la liste des restaurants
Route::post('restaurant/', 'RestaurantController@postRestaurant'); //Créer un restaurant
Route::put('restaurant/{id}/', 'RestaurantController@putRestaurant'); //Modifier un restaurant
Route::delete('restaurant/{id}/del', 'RestaurantController@deleteRestaurant'); //Supprimer un restaurant

Route::get('restaurant/{id}/menus/', 'Restaurant_MenuController@restaurant_menu_get'); //Récupérer les menus d'un restaurant
Route::post('restaurant/{id}/menu/', 'Restaurant_MenuController@restaurant_menu_pst'); //Créer un menu pour un restaurant
Route::put('restaurant/{id}/menu/', 'Restaurant_MenuController@restaurant_menu_upd'); //Modifier un menu pour un restaurant
Route::delete('restaurant/{id}/menu/', 'Restaurant_MenuController@restaurant_menu_del'); //Supprimer un menu pour un restaurant
