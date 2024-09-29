<?php

use App\Models\Phone;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $phone = User::find(13);        // it's show user data
    $phone = User::find(15)->phone; // it's show which user uses which phone.
    // return $phone;               // can uncomment it

    $user = Phone::find(7);        // it's show Phone data
    $user = Phone::find(7)->user; // it's show which Phone use which user.
    // return $user;


                                    // To show the rls data on Table
    $users = User::all();
    // return $users;

    return view('welcome', compact('users'));
});
  