<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index(){
        return view('profile.create');
    }

    public function store(Request $request){
        // return "asd";
        // return $this->generateUniqueProfileId();
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required',
            'mobile' => 'required',
            'gender' => 'required|string',
            'marital_status' => 'required|string',
            'dob' => 'required|date',
            'age' => 'required',
            'state' => 'required|string',
            'city' => 'required|string',
            'community' => 'required|string',
            'religion' => 'required|string',
            'caste' => 'required|string',
            'raasi' => 'required|string',
            'star' => 'required|string',
            'dosham' => 'required|string',
        ]);

        // Generate a unique 6-digit profile ID
        $validatedData['profile_id'] = "SM".$this->generateUniqueProfileId();
        $validatedData['user_id'] = Auth::id();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('image/profile/', $filename);
            $validatedData['image'] = $filename;
        }

       $pro =  Profile::create($validatedData);

       if($pro){
        return redirect()->back()->with('status','success')->with('title','Profile created successfully!');
       }
       

    }
        /**
     * Generate a unique 6-digit profile ID.
     *
     * @return int
     */
    private function generateUniqueProfileId()
    {
        do {
            // Generate a random 6-digit number
            $profileId = random_int(100000, 999999);
        } while (Profile::where('profile_id', $profileId)->exists());

        return $profileId;
    }

    // show
    public function viewProfile($id){
        // return $id;
        $profile = Profile::find($id);
        // return $profile;
        return view('profile.view',compact('profile'));
    }

    // edit
    public function editProfile($id){
        $profile = Profile::findOrFail($id);
        return view('profile.edit',compact('profile'));
    }

    // update
    public function updateProfile(Request $request, $id){
        $validatedData = $request->validate([
            'name' => ['required','string','max:255'],
           'mobile' => ['required'],
            'gender' => ['required','string'],
           'marital_status' => ['required','string'],
            'dob' => ['required','date'],
            'age' => ['required'],
           'state' => ['required','string'],
            'city' => ['required','string'],
            'community' => ['required','string'],
           'religion' => ['required','string'],
            'caste' => ['required','string'],
            'raasi' => ['required','string'],
           'star' => ['required','string'],
            'dosham' => ['required','string'],
        ]);

        $profile = Profile::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image
            $path =  'image/profile/' . $profile->poster;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time(). '.'. $ext;
            $file->move('image/profile/', $filename);
            $validatedData['image'] = $filename;
        }
       $data =  $profile->update($validatedData);
       if($data){
        return redirect()->route('account')->with('status','success')->with('title','Profile updated successfully!');
       }else{
        return redirect()->back()->with('status','error')->with('title','Profile not updated!');
       }

    }
            

}
