<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class UsersController extends Controller
{
    function getUsers(Request $request) {
      $users = DB::table('users')->get();
      return response()->json($users, 200);
      //dd($users);
    }
}
