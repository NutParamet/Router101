<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "UserPage";
    }

    public function show(String $user){
        return "User Page ".$user;
    }

}

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

