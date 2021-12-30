<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Confession;

class ConfessionListController extends Controller
{
    public function generalConfession(){
        $confession = Confession::all()->sortByDesc('created_at');

        return view("home", [
            "confession" => $confession
        ]);
    }

    public function mostComments(){
        return view("home");
    }

    public function mostLiked(){
        $confession = Confession::all()->sortByDesc('numberOfLikes');

        return view("home", [
            "confession" => $confession
        ]);
    }

    public function authConfession(){
        $confession = Confession::where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();

        return view("userConfession", [
            "confession" => $confession
        ]);
    }

    public function deleteConfession(){

    }
} 
