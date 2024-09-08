<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index()
    {
        $pro = Profile::latest()->paginate(10);
        return view('admin/profile/index', compact('pro'));
    }

    public function profileStatus($status,$id){
        $profile = Profile::findOrFail($id);
        $profile->status = $status;
        $profile->save();
        return redirect()->back()->with('status','success')->with('title','Profile status updated successfully');
    }

    public function create()
    {
        return view('admin/profile/create');
    }

    public function view($id)
    {
        $pro = Profile::find($id);
        return view('admin/profile/view', compact('pro'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable',
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
        $validatedData['profile_id'] = "SM" . $this->generateUniqueProfileId();
        $validatedData['user_id'] = Auth::id();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('image/profile/', $filename);
            $validatedData['image'] = $filename;
        }

        $pro =  Profile::create($validatedData);

        if ($pro) {
            return redirect()->route('admin.profile.index')->with('status', 'success')->with('title', 'Profile created successfully!');
        } else {
            return redirect()->back()->with('status', 'error')->with('title', 'Failed to create profile!');
        }
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'mobile' => ['required'],
            'gender' => ['required', 'string'],
            'marital_status' => ['required', 'string'],
            'dob' => ['required', 'date'],
            'age' => ['required'],
            'state' => ['required', 'string'],
            'city' => ['required', 'string'],
            'community' => ['required', 'string'],
            'religion' => ['required', 'string'],
            'caste' => ['required', 'string'],
            'raasi' => ['required', 'string'],
            'star' => ['required', 'string'],
            'dosham' => ['required', 'string'],
            'status' => ['required'],
        ]);


        $profile = Profile::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old image
            $path =  'image/profile/' . $profile->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('image/profile/', $filename);
            $validatedData['image'] = $filename;
        }
        $data =  $profile->update($validatedData);
        if ($data) {
            return redirect()->route('admin.profile.index')->with('status', 'success')->with('title', 'Profile updated successfully!');
        } else {
            return redirect()->back()->with('status', 'error')->with('title', 'Profile not updated!');
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

    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('admin/profile/edit', compact('profile'));
    }

    public function destroy($id){
        $profile = Profile::findOrFail($id);
        $path =  'image/profile/' . $profile->image;
            if (File::exists($path)) {
                File::delete($path);
            }
        $data = $profile->delete();
        if ($data) {
            return redirect()->route('admin.profile.index')->with('status','success')->with('title','Profile deleted successfully');
        } else {
            return redirect()->back()->with('status','error')->with('title','Failed to delete profile');
        }
    }
}
