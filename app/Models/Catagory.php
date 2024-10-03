<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
    use HasFactory;

    // Many to Many

    public function posts(){
        return $this->belongsToMany(Post::class);
    }



}
