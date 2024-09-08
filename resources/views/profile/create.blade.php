@extends('layouts.main')

@section('content')
    <section>
        <div class="container mt-5">
            <h2 class="sec-title">
                Profile Registration
            </h2>
            <style>
               .prof-add .prof-head{
                background-color: rgb(229, 243, 255);
                padding: 15px 0 15px 20px;
                font-size: 18px;
                font-weight: 600;
                color: rgb(39, 39, 39);
                text-transform: uppercase;
                letter-spacing: 1px;
                /* box-shadow: 1px 2px 8px rgb(207, 233, 255); */
               }

            </style>
            <form action="{{ route('storeProfile') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="prof-add">
                    <h3 class="prof-head">Basic Information</h3>
                    <div class="row mt-4">
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label class="form-label">Name </label>
                                <input type="text" class="form-control" required name="name" placeholder="Enter Name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label class="form-label">Profile Photo </label>
                                <input type="file" class="form-control"  name="image">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label class="form-label">Mobile </label>
                                <input type="text" class="form-control" required name="mobile" maxlength="10"
                                    onkeyup="this.value = this.value.replace(/[^0-9]/g,'')">
                                    @error('mobile')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label class="form-label">Gender </label>
                                <select class="form-select" aria-label="Default select example" required name="gender">
                                    <option selected value="">Choose one</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('gender')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label class="form-label">Marital Status </label>
                                <select class="form-select" aria-label="Default select example" required name="marital_status">
                                    <option selected value="">Choose one</option>
                                    <option value="Never Married">Never Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widower">Widower</option>
                                    <option value="Awaiting Divorce">Awaiting Divorce</option>
                                </select>
                                @error('marital_status')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label class="form-label">DOB</label>
                                <input type="date" class="form-control" required name="dob" placeholder="Enter DOB">
                                @error('dob')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label class="form-label">Age </label>
                                <select class="form-select" aria-label="select example" name='age'>
                                    <option value="" selected>Select Age</option>
                                    @for ($age = 20; $age <= 40; $age++)
                                    <option value="{{ $age }}">
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
                                    <option value="" selected>Select state</option>
                                    @forelse ($state as $val)
                                    <option value="{{$val->name}}">{{$val->name}}</option>
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
                                    <option value="" selected>Select city</option>
                                    @forelse ($city as $val)
                                    <option value="{{$val->city}}">{{$val->city}}</option>
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
                                    <option value="" selected>Select your Mother Tongue</option>
                                    <option value="Tamil">Tamil</option>
                                    <option value="Telugu">Telugu</option>
                                    <option value="Urdu">Urdu</option>
                                    <option value="Kannada">Kannada</option>
                                    <option value="Hindi">Hindi</option>
                                    <option value="Marathi">Marathi</option>
                                    <option value="Malayalam">Malayalam</option>
                                    <option value="Sanskrit">Sanskrit</option>
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
                                    <option value="" selected>Select your Religion</option>
                                    <option value="Hindu">Hinduism</option>
                                    <option value="Islam">Islam </option>
                                    <option value="Christian">Christianity</option>
                                    <option value="Sikhism">Sikhism </option>
                                    <option value="Buddhism">Buddhism</option>
                                    <option value="Jainism">Jainism</option>
                                    <option value="NonReligious">Non-Religious</option>
                                    <option value="Others">Others</option>
                                </select>
                                @error('religion')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label class="form-label">Caste </label>
                                <input class="form-control" list="datalistOptions3"  name="caste"
                                    placeholder="Search your Caste..." required>
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
                    <h3 class="prof-head mt-4">Astrological Information</h3>
                    <div class="row mt-4">

                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label class="form-label">Raasi </label>
                                <select class="form-select" aria-label="Default select example" required name="raasi">
                                    <option selected value="">Choose one</option>
                                    <option value="மேஷம் / Aries">மேஷம் / Aries</option>
                                    <option value="ரிஷபம் / Taurus">ரிஷபம் / Taurus</option>
                                    <option value="மிதுனம் / Gemini">மிதுனம் / Gemini</option>
                                    <option value="கடகம் / Cancer">கடகம் / Cancer</option>
                                    <option value="சிம்மம் / Leo">சிம்மம் / Leo</option>
                                    <option value="கன்னி / Virgo">கன்னி / Virgo</option>
                                    <option value="துலாம் / Libra">துலாம் / Libra</option>
                                    <option value="விருச்சிகம் / Scorpio">விருச்சிகம் / Scorpio</option>
                                    <option value="தனுசு / Saggitarius">தனுசு / Saggitarius</option>
                                    <option value="மகரம் / Capricorn">மகரம் / Capricorn</option>
                                    <option value="கும்பம் / Aquarius">கும்பம் / Aquarius</option>
                                    <option value="மீனம் / Pisces">மீனம் / Pisces</option>
                                </select>
                                @error('raasi')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label class="form-label">Star </label>
                                <select class="form-select" aria-label="Default select example" required name="star">
                                    <option selected value="">Choose one</option>
                                    <option value="அஸ்வினி / Ashwini">அஸ்வினி / Ashwini</option>
                                    <option value="பரணி / Bharani">பரணி / Bharani</option>
                                    <option value="கார்த்திகை / Kaarthikai">கார்த்திகை / Kaarthikai</option>
                                    <option value="ரோகிணி / Rohini">ரோகிணி / Rohini</option>
                                    <option value="விசாகம் / Vishakam">விசாகம் / Vishakam</option>
                                    <option value="மிருகசீரிடம் / Mirugaseeridam">மிருகசீரிடம் / Mirugaseeridam</option>
                                    <option value="திருவாதிரை / Thiruvathirai">திருவாதிரை / Thiruvathirai</option>
                                    <option value="பூரம் / Pooram">பூரம் / Pooram</option>
                                    <option value="புனர்பூசம் / Poonarpoosam">புனர்பூசம் / Poonarpoosam</option>
                                    <option value="பூசம் / Poosam">பூசம் / Poosam</option>
                                    <option value="ஆயில்யம் / Ayilyam">ஆயில்யம் / Ayilyam</option>

                                </select>
                                @error('star')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label class="form-label">Chevvai Dosham/ Manglik </label>
                                <select class="form-select" aria-label="Default select example" required name="dosham">
                                    <option selected value="">Choose one</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Don't know">Don't know</option>
                                </select>
                                @error('dosham')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                    </div>

                    <div class="text-end mt-5">
                        <button class="btn-main" type="submit">Submit & continue</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
