<?php

use App\Models\Catagory;
use App\Models\User;
use App\Models\Phone;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // One to One
    $phone = User::find(13);        // it's show user data
    $phone = User::find(15)->phone; // it's show which user uses which phone.
    // return $phone;               // can uncomment it

    $user = Phone::find(7);        // it's show Phone data
    $user = Phone::find(7)->user;  // it's show which Phone use which user.
    // return $user;


                                    // To show the rls data on Table
    $users = User::all();
    // return $users;

    // One to Many
    $comments = Post::find(1);        // it's show user data
    $comments = Post::find(2)->comments; // it's show which user uses which phone.
    // return $comments; 
    // $post = Comment::find(1);        // it's show user data
    $post = Comment::find(6)->post; // it's show which user uses which phone.
    // return $post;

    $post = Post::with('comments')->get();          // ekhane 1 ta post e sobgula commnets ke get krtechi. then ei variable ke compact e pathiye dicchi. sekhan theke Blade file @foreach loop caliye individual comment ke show kracchi.
    
        // return $post;

    $comments = Comment::all(); 
    

    // return view('welcome', compact('post'));
    // return view('welcome', compact('comments'));

    // Many To Many

    $post = Post::with('catagories')->get();
    $categories = Catagory::with('posts')->get();         // Post model e posts method add kra hoy.
    // return $post;
    return view('welcome', compact('categories'));


});
