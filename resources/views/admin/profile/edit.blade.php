@extends('admin.layout')

@section('content')
    <section>
        <div class="row">
            <div class="col-12">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Edit Profile</h6>
                  </div>
                </div>
                <div class="card-body  pb-2">
                    <form action="{{ route('admin.profile.update', $profile->id) }}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="prof-add">
                            <h6 class="prof-head">Basic Information</h6>
                            <div class="row mt-4">
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">Name </label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                            value="{{ $profile->name }}">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">Profile Photo </label>
                                        <input type="file" class="form-control" name="image">
                                        @error('image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">Mobile </label>
                                        <input type="text" class="form-control" name="mobile" maxlength="10"
                                            onkeyup="this.value = this.value.replace(/[^0-9]/g,'')" value="{{ $profile->mobile }}">
                                        @error('mobile')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">Gender </label>
                                        <select class="form-select" aria-label="Default select example" name="gender">
                                            <option selected value="">Choose one</option>
                                            <option value="Male" {{ $profile->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                            <option value="Female" {{ $profile->gender == 'Female' ? 'selected' : '' }}>Female
                                            </option>
                                        </select>
                                        @error('gender')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">Marital Status </label>
                                        <select class="form-select" aria-label="Default select example" name="marital_status">
                                            <option selected value="">Choose one</option>
                                            <option value="Never Married"
                                                {{ $profile->marital_status == 'Never Married' ? 'selected' : '' }}>Never Married</option>
                                            <option value="Divorced" {{ $profile->marital_status == 'Divorced' ? 'selected' : '' }}>
                                                Divorced</option>
                                            <option value="Widower" {{ $profile->marital_status == 'Widower' ? 'selected' : '' }}>Widower
                                            </option>
                                            <option value="Awaiting Divorce"
                                                {{ $profile->marital_status == 'Awaiting Divorce' ? 'selected' : '' }}>Awaiting Divorce
                                            </option>
                                        </select>
                                        @error('marital_status')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">DOB</label>
                                        <input type="date" class="form-control" name="dob" placeholder="Enter DOB"
                                            value="{{ $profile->dob }}">
                                        @error('dob')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">Age </label>
                                        <select class="form-select" aria-label="select example" name='age'>
                                            <option value="">Select Age</option>
                                            @for ($age = 20; $age <= 40; $age++)
                                                <option value="{{ $age }}" @selected($profile->age == $age)>
                                                    {{ $age }}</option>
                                            @endfor
                                        </select>
                                        @error('age')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">State of Residence </label>
                                        <select class="form-select" aria-label="select example" name='state'>
                                            <option value="">Select state</option>
                                            @forelse ($state as $val)
                                            <option value="{{$val->name}}" @selected($profile->state == $val->name)>{{$val->name}}</option>
                                            @empty
                                            <option value="No state">No state found</option>
                                            @endforelse
        
                                        </select>
                                        @error('state')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">City of Residence </label>
                                        <select class="form-select" aria-label="select example" name='city'>
                                            <option value="">Select city</option>
                                    @forelse ($city as $val)
                                    <option value="{{$val->city}}" @selected($profile->city == $val->city)>{{$val->city}}</option>
                                    @empty
                                    <option value="No city">No City found</option>
                                    @endforelse
        
                                        </select>
        
                                        @error('city')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">Mother tongue </label>
                                        <select class="form-select" required aria-label="select example" name='community'>
                                            <option value="">Select your Mother Tongue</option>
                                            <option value="Tamil" {{ $profile->community == 'Tamil' ? 'selected' : '' }}>Tamil
                                            </option>
                                            <option value="Telugu" {{ $profile->community == 'Telugu' ? 'selected' : '' }}>Telugu
                                            </option>
                                            <option value="Urdu" {{ $profile->community == 'Urdu' ? 'selected' : '' }}>Urdu
                                            </option>
                                            <option value="Kannada" {{ $profile->community == 'Kannada' ? 'selected' : '' }}>
                                                Kannada</option>
                                            <option value="Hindi" {{ $profile->community == 'Hindi' ? 'selected' : '' }}>Hindi
                                            </option>
                                            <option value="Marathi" {{ $profile->community == 'Marathi' ? 'selected' : '' }}>
                                                Marathi</option>
                                            <option value="Malayalam" {{ $profile->community == 'Malayalam' ? 'selected' : '' }}>
                                                Malayalam</option>
                                            <option value="Sanskrit" {{ $profile->community == 'Sanskrit' ? 'selected' : '' }}>
                                                Sanskrit</option>
                                        </select>
                                        @error('community')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">Religion </label>
                                        <select class="form-select" required aria-label="select example" name='religion'>
                                            <option value="">Select your Religion</option>
                                            <option value="Hindu" @selected($profile->religion == 'Hindu')>Hinduism</option>
                                            <option value="Islam" @selected($profile->religion == 'Islam')>Islam</option>
                                            <option value="Christian" @selected($profile->religion == 'Christian')>Christianity</option>
                                            <option value="Sikhism" @selected($profile->religion == 'Sikhism')>Sikhism</option>
                                            <option value="Buddhism" @selected($profile->religion == 'Buddhism')>Buddhism</option>
                                            <option value="Jainism" @selected($profile->religion == 'Jainism')>Jainism</option>
                                            <option value="NonReligious" @selected($profile->religion == 'NonReligious')>Non-Religious</option>
                                            <option value="Others" @selected($profile->religion == 'Others')>Others</option>
                                        </select>
                                        @error('religion')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">Caste </label>
                                        <input class="form-control" list="datalistOptions3" name="caste"
                                            placeholder="Search your Caste..." required value="{{ $profile->caste }}">
                                        <datalist id="datalistOptions3">
                                            <option value="Brahmins">
                                            <option value="Vaishyas">
                                            <option value="Chettiar">
                                            <option value="Mudaliar">
                                            <option value="Iyengar">
                                            <option value="Reddy">
                                            <option value="Pillai">
                                            <option value="Yadav">
                                            <option value="Caste no bar">
                                        </datalist>
                                        @error('caste')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <h6 class="prof-head mt-4">Astrological Information</h6>
                            <div class="row mt-4">
        
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">Raasi </label>
                                        <select class="form-select" aria-label="Default select example" name="raasi">
                                            <option value="" @selected(empty($profile->raasi))>Choose one</option>
                                            <option value="மேஷம் / Aries" @selected($profile->raasi == 'மேஷம் / Aries')>மேஷம் / Aries</option>
                                            <option value="ரிஷபம் / Taurus" @selected($profile->raasi == 'ரிஷபம் / Taurus')>ரிஷபம் / Taurus</option>
                                            <option value="மிதுனம் / Gemini" @selected($profile->raasi == 'மிதுனம் / Gemini')>மிதுனம் / Gemini</option>
                                            <option value="கடகம் / Cancer" @selected($profile->raasi == 'கடகம் / Cancer')>கடகம் / Cancer</option>
                                            <option value="சிம்மம் / Leo" @selected($profile->raasi == 'சிம்மம் / Leo')>சிம்மம் / Leo</option>
                                            <option value="கன்னி / Virgo" @selected($profile->raasi == 'கன்னி / Virgo')>கன்னி / Virgo</option>
                                            <option value="துலாம் / Libra" @selected($profile->raasi == 'துலாம் / Libra')>துலாம் / Libra</option>
                                            <option value="விருச்சிகம் / Scorpio" @selected($profile->raasi == 'விருச்சிகம் / Scorpio')>விருச்சிகம் / Scorpio</option>
                                            <option value="தனுசு / Saggitarius" @selected($profile->raasi == 'தனுசு / Saggitarius')>தனுசு / Saggitarius</option>
                                            <option value="மகரம் / Capricorn" @selected($profile->raasi == 'மகரம் / Capricorn')>மகரம் / Capricorn</option>
                                            <option value="கும்பம் / Aquarius" @selected($profile->raasi == 'கும்பம் / Aquarius')>கும்பம் / Aquarius</option>
                                            <option value="மீனம் / Pisces" @selected($profile->raasi == 'மீனம் / Pisces')>மீனம் / Pisces</option>
                                        </select>
                                        
                                        @error('raasi')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
        
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">Star </label>
                                        <select class="form-select" aria-label="Default select example" name="star">
                                            <option value="" @selected(empty($profile->star))>Choose one</option>
                                            <option value="அஸ்வினி / Ashwini" @selected($profile->star == 'அஸ்வினி / Ashwini')>அஸ்வினி / Ashwini</option>
                                            <option value="பரணி / Bharani" @selected($profile->star == 'பரணி / Bharani')>பரணி / Bharani</option>
                                            <option value="கார்த்திகை / Kaarthikai" @selected($profile->star == 'கார்த்திகை / Kaarthikai')>கார்த்திகை / Kaarthikai</option>
                                            <option value="ரோகிணி / Rohini" @selected($profile->star == 'ரோகிணி / Rohini')>ரோகிணி / Rohini</option>
                                            <option value="விசாகம் / Vishakam" @selected($profile->star == 'விசாகம் / Vishakam')>விசாகம் / Vishakam</option>
                                            <option value="மிருகசீரிடம் / Mirugaseeridam" @selected($profile->star == 'மிருகசீரிடம் / Mirugaseeridam')>மிருகசீரிடம் / Mirugaseeridam</option>
                                            <option value="திருவாதிரை / Thiruvathirai" @selected($profile->star == 'திருவாதிரை / Thiruvathirai')>திருவாதிரை / Thiruvathirai</option>
                                            <option value="பூரம் / Pooram" @selected($profile->star == 'பூரம் / Pooram')>பூரம் / Pooram</option>
                                            <option value="புனர்பூசம் / Poonarpoosam" @selected($profile->star == 'புனர்பூசம் / Poonarpoosam')>புனர்பூசம் / Poonarpoosam</option>
                                            <option value="பூசம் / Poosam" @selected($profile->star == 'பூசம் / Poosam')>பூசம் / Poosam</option>
                                            <option value="ஆயில்யம் / Ayilyam" @selected($profile->star == 'ஆயில்யம் / Ayilyam')>ஆயில்யம் / Ayilyam</option>
                                        </select>
                                        
                                        @error('star')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
        
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">Chevvai Dosham/ Manglik </label>
                                        <select class="form-select" aria-label="Default select example" name="dosham">
                                            <option value="" @selected(empty($profile->dosham))>Choose one</option>
                                            <option value="Yes" @selected($profile->dosham == 'Yes')>Yes</option>
                                            <option value="No" @selected($profile->dosham == 'No')>No</option>
                                            <option value="Don't know" @selected($profile->dosham == "Don't know")>Don't know</option>
                                        </select>
                                        
                                        @error('dosham')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
        
        
                            </div>
                            <h6 class="prof-head mt-4">Profile Status</h6>
                            <div class="row mt-4">

                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">Status</label>
                                        <select class="form-select" aria-label="Default select example" name="status" >
                                            <option value="0" @selected(empty($profile->status))>Choose one</option>
                                            <option value="1" @selected($profile->status == '1')>Approve</option>
                                            <option value="2" @selected($profile->status == '2')>Reject</option>

                                        </select>
                                        
                                        @error('dosham')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
        
        
                            </div>
        
                            <div class="text-center mt-5">
                                <button class="btn-success btn w-50" type="submit">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
    </section>
@endsection