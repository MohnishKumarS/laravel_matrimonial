<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function search(){
        return view('search');
    }

    public function myAccount(){
        $profile = Profile::where('user_id',auth()->id())->get();
        return view('my-account',compact('profile'));
    }
}
