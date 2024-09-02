@extends('layouts.main')

@section('content')
        <section>
            @if ($profile->count())
            <div class="user-profile-top">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div>
                                <strong class="fs-4 text-capitalize">{{$profile['name']}}</strong> <small class="fw-bold"> (Profile ID : {{$profile['profile_id']}})</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .user-profile-top{
                    padding: 25px 0;
                    background-color: rgb(247, 252, 255);
                    border-bottom: 1px solid rgb(255, 244, 244);
                    position: sticky;
                    top: 0;
                    z-index: 1;
                }
                .usr-prof-bdy .user-profile-view{
                    border: 1px solid rgb(255, 239, 239);
                    padding: 30px 10px;
                    border-radius: 5px;
                    box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.068)
                }
                .usr-prof-bdy .about-user .user-col {
                    position: relative;
                    margin-bottom: 20px;
                }
    
                .usr-prof-bdy .about-user .user-col i {
                    position: absolute;
                    left: -25px;
                    top: 10px;
                    color: rgb(228, 116, 116);
                }
    
                .usr-prof-bdy .about-user .user-col label {
                    color: grey;
                }
            </style>
            <!-- ----------------- user - profile -------------------- -->
            <div class="container">
                <div class="usr-prof-bdy mt-5">
                    <div class="user-profile-view">
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-12 col-sm-12 col-12 text-center">
                                <div class=""> 
                                    <img src="{{asset('image/profile/'.$profile['image'])}}" class="object-fit-contain img-fluid" alt="user-profile" width="200" height="150">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 col-12 mt-4 mt-lg-0">
                                <div class="about-user">
                                    <div class="row user-row ms-4 ms-sm-4 ms-lg-0">
                                        <div class="col-lg-4 col-md-4 col-sm-6 user-col">
                                            <i class="fa-regular fa-envelope fs-4 user-view-icon"></i>
                                            <label for="">Email</label>
                                            <h6 class="">aj******@**.com</h6>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 user-col">
                                            <i class="fa-solid fa-mobile-screen-button fs-4 user-view-icon"></i>
                                            <label for="">Mobile</label>
                                            <h6>82******41</h6>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 user-col">
                                            <i class="fa-solid fa-cake-candles fs-4 user-view-icon"></i>
                                            <label for="">Date of Birth</label>
                                            <h6>{{$profile['dob']}}</h6>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 user-col">
                                            <i class="fa-solid fa-language fs-4 user-view-icon"></i>
                                            <label for="">Mother Tongue</label>
                                            <h6>{{$profile['community']}}</h6>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 user-col">
                                            <i class="fa-solid fa-hands-praying fs-4 user-view-icon"></i>
                                            <label for="">Religion</label>
                                            <h6>{{$profile['religion']}}</h6>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 user-col">
                                            <i class="fa-solid fa-users fs-4 user-view-icon"></i>
                                            <label for="">Caste</label>
                                            <h6>{{$profile['caste']}}</h6>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 user-col">
                                            <i class="fa-solid fa-map-location-dot fs-4 user-view-icon"></i>
                                            <label for="">Location</label>
                                            <h6>{{$profile['state']}}</h6>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 user-col">
                                            <i class="fa-solid fa-graduation-cap fs-4 user-view-icon"></i>
                                            <label for="">Education</label>
                                            <h6>BE/B.tect</h6>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 user-col">
                                            <i class="fa-solid fa-comments-dollar fs-4 user-view-icon"></i>
                                            <label for="">Monthly Income</label>
                                            <h6>₹ 40,000</h6>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <style>
                        .usr-prof-detls .prof-label {
                            float: left;
                            width: 120px;
                            color: rgb(129, 128, 128);
                            font-weight: 400;
                        }
    
                        .usr-prof-detls .prof-desc {
                            font-weight: 500;
                        }
    
                        .usr-prof-detls .prof-desc span {
                            color: rgb(153, 150, 150);
                            padding-right: 10px;
                        }
    
                        .usr-prof-detls .row .col-12 div {
                            margin-bottom: 20px;
                        }
                    </style>
                    <!-- ---------------------- section -2 user - profile - detail ------------------- -->
                    <div class="usr-prof-detls mt-5">
                        <!-- ------------------- accordion basic details title --------------- -->
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header fs-2">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Basics & Lifestyle
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body py-5">
    
                                        <div class="row usr-basc-detls-row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                                                <div>
                                                    <label for="" class="prof-label">Name</label>
                                                    <div class="prof-desc"><span>:</span> {{$profile['name']}}</div>
                                                </div>
                                                <div>
                                                    <label for="" class="prof-label">Age</label>
                                                    <div class="prof-desc"><span>:</span> {{$profile['age']}}</div>
                                                </div>
                                                <div>
                                                    <label for="" class="prof-label">Height</label>
                                                    <div class="prof-desc"><span>:</span> 5ft 2in - 157cm
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="" class="prof-label">Body Type</label>
                                                    <div class="prof-desc"><span>:</span> Slim</div>
                                                </div>
                                                <div>
                                                    <label for="" class="prof-label">Complexion</label>
                                                    <div class="prof-desc"><span>:</span> Fair</div>
                                                </div>
                                                <div>
                                                    <label for="" class="prof-label">Hobbies & Interests</label>
                                                    <div class="prof-desc"><span>:</span> Fair</div>
                                                </div>
    
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-md-0 mt-sm-3 mt-3">
                                                <div>
                                                    <label for="" class="prof-label">Diet</label>
                                                    <div class="prof-desc"><span>:</span> Non Vegetarian
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="" class="prof-label">Marital Status</label>
                                                    <div class="prof-desc"><span>:</span> Never Married</div>
                                                </div>
                                                <div>
                                                    <label for="" class="prof-label">Have Children</label>
                                                    <div class="prof-desc"><span>:</span> No</div>
                                                </div>
                                                <div>
                                                    <label for="" class="prof-label">Special Case</label>
                                                    <div class="prof-desc"><span>:</span> None</div>
                                                </div>
                                                <div>
                                                    <label for="" class="prof-label">Blood Group</label>
                                                    <div class="prof-desc"><span>:</span> A+</div>
                                                </div>
                                                <div>
                                                    <label for="" class="prof-label">Spoken languages</label>
                                                    <div class="prof-desc"><span>:</span> Tamil,hindi, English, Malayalam</div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-lg-12">
                                                <div>
                                                    <label for="" class="prof-label">About Yourself & Family</label>
                                                    <div class="prof-desc"><span>:</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolorum eos rem est placeat sit illo repellat minima magni fugiat.</div>
                                                </div>
                                            </div>
                                        </div>
    
    
                                    </div>
                                </div>
                            </div>
    
                        </div>
    
    
                        <!-- ------------------- accordion Religion details title --------------- -->
                        <div class="accordion mt-5" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header fs-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne1" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Religious 
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne1" class="accordion-collapse collapse">
                                    <div class="accordion-body py-5">
    
                                        <div class="row usr-basc-detls-row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                                                <div>
                                                    <label for="" class="prof-label">Religion</label>
                                                    <div class="prof-desc"><span>:</span> {{$profile['religion']}}</div>
                                                </div>
                                                <div>
                                                    <label for="" class="prof-label">Caste </label>
                                                    <div class="prof-desc"><span>:</span> {{$profile['caste']}}</div>
                                                </div>
                                               
    
    
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                                                <div>
                                                    <label for="" class="prof-label">Mother Tongue</label>
                                                    <div class="prof-desc"><span>:</span> {{$profile['community']}}</div>
                                                </div>
                                                <div>
                                                    <label for="" class="prof-label">Sub Caste</label>
                                                    <div class="prof-desc"><span>:</span> Senai
                                                    </div>
                                                </div>
                                             
    
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
    
                        <!-- ------------------- accordion horoscope details title --------------- -->
                        <div class="accordion mt-5" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header fs-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne2" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Horoscope Details
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne2" class="accordion-collapse collapse">
                                    <div class="accordion-body py-5">
    
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                                                <div>
                                                    <label for="" class="prof-label">Raashi</label>
                                                    <div class="prof-desc"><span>:</span> {{$profile['raasi']}}</div>
                                                </div>
                                                <div>
                                                    <label for="" class="prof-label">Have Dosham? </label>
                                                    <div class="prof-desc"><span>:</span> {{$profile['dosham']}}</div>
                                                </div>
                                                <div>
                                                    <label for="" class="prof-label">Place of Birth</label>
                                                    <div class="prof-desc"><span>:</span> -
                                                    </div>
                                                </div>
    
    
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                                                <div>
                                                    <label for="" class="prof-label">Star </label>
                                                    <div class="prof-desc"><span>:</span> {{$profile['star']}}</div>
                                                </div>
                                                <div>
                                                    <label for="" class="prof-label">Time of Birth</label>
                                                    <div class="prof-desc"><span>:</span> -
                                                    </div>
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
    
                        <!-- ------------------- accordion Educational details title --------------- -->
                        <div class="accordion mt-5" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header fs-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne3" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Education and Professions
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne3" class="accordion-collapse collapse">
                                    <div class="accordion-body py-5">
    
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                                                <div>
                                                    <label for="" class="prof-label">Degree</label>
                                                    <div class="prof-desc"><span>:</span> BE/B.Tech</div>
                                                </div>
                                                
                                                <div>
                                                    <label for="" class="prof-label"> Occupation </label>
                                                    <div class="prof-desc"><span>:</span> Software</div>
                                                </div>
    
    
    
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                                                <div>
                                                    <label for="" class="prof-label">Employed in </label>
                                                    <div class="prof-desc"><span>:</span> Bussiness</div>
                                                </div>
                                                <div>
                                                    <label for="" class="prof-label">Monthly Income</label>
                                                    <div class="prof-desc"><span>:</span> $30,000
                                                    </div>
                                                </div>
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
    
                                <!-- ------------------- accordion Family details title --------------- -->
                                <div class="accordion mt-5" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header fs-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#panelsStayOpen-collapseOne4" aria-expanded="true"
                                                aria-controls="panelsStayOpen-collapseOne">
                                                Family & Social Background
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapseOne4" class="accordion-collapse collapse">
                                            <div class="accordion-body py-5">
            
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                                                        <div>
                                                            <label for="" class="prof-label">Family Values</label>
                                                            <div class="prof-desc"><span>:</span> Traditional
                                                            </div>
                                                        </div>
                                                        
                                                        <div>
                                                            <label for="" class="prof-label"> Father's Status </label>
                                                            <div class="prof-desc"><span>:</span> Business</div>
                                                        </div>
                                                        <div>
                                                            <label for="" class="prof-label"> No. of Brothers </label>
                                                            <div class="prof-desc"><span>:</span> 1</div>
                                                        </div>
                                                        <div>
                                                            <label for="" class="prof-label"> Family Origin</label>
                                                            <div class="prof-desc"><span>:</span> Chennai</div>
                                                        </div>
            
            
            
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                                                        <div>
                                                            <label for="" class="prof-label">Family Values</label>
                                                            <div class="prof-desc"><span>:</span> Middle class</div>
                                                        </div>
                                                        <div>
                                                            <label for="" class="prof-label">Mother's Status</label>
                                                            <div class="prof-desc"><span>:</span> Homemaker
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <label for="" class="prof-label">No. of Sisters</label>
                                                            <div class="prof-desc"><span>:</span> 1
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            
                                </div>

    
    
    
                    </div>
    
                </div>
    
            </div>
            @else
                
            @endif
        </section>
@endsection