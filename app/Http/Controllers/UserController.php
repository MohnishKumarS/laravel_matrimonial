<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Profile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function contactUs(){
        return view('contact');
    }

    public function search(){
        return view('search');
    }

    public function myAccount(){
        $profile = Profile::where('user_id',auth()->id())->get();
        $user = User::where('id',auth()->id())->first();
        return view('my-account',compact('profile','user'));
    }

    public function changeUserDetails(Request $req,$id){
        // return $req->all();
        $user = User::findOrFail($id);
        $user->name = $req->name;
        $user->mobile = $req->mobile;
        $user->relationship = $req->relationship;
        $user->save();
        return redirect()->back()->with('status','success')->with('title','User details updated successfully');
    }

    public function contactStore(Request $request){
        // return $request->all();
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'message' => 'nullable|string',
        ]);

        // Save the data to the database
        Contact::create([
            'name' => $request->input('username'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'message' => $request->input('message'),
        ]);

        return redirect()->route('contactUs')->with('status','success')->with('title','Thank you for contacting us!');

    }
}
