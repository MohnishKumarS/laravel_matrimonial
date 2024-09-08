<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $allProfile = Profile::count();
        $contacts = Contact::count();
        $activeProfile = Profile::where('status',1)->count();
        $users = User::count();
        return view('admin/dashboard',compact('allProfile','activeProfile','users','contacts'));
    }

    public function usersProfile(){
        $users = User::paginate(10);
        return view('admin/users/index',compact('users'));
    }

    public function usersContact(){
        $contacts = Contact::paginate(10);
        return view('admin/users/contacts',compact('contacts'));
    }
}
