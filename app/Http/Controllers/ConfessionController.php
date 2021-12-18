<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Confession;
use Illuminate\Support\Facades\Auth;

class ConfessionController extends Controller
{
    public function addAnonymousConfession(Request $request){

        

        $confession = $request->confession;
        
        if(Auth::check()){
        }

        Confession::create($confession);

        return Redirect('profile')->with('profileUpdated', 'Profile updated successfully !');
    }
}
