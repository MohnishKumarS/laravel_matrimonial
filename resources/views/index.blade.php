@extends('layouts.main')

@push('styles')
    <style>
        .page-wrapper {
            padding-top: 0px;
        }

        .navbar {
            background: rgb(0 0 0 / 68%) !important;

        }

    </style>
@endpush


@section('content')
    <section>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('image/banner/b1.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('image/gallery/k2.jpg');"></div>
                <div class="swiper-slide" style="background-image: url('image/banner/b5.jpg');"></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

    </section>

    <section>
        <div class="description" id="about">
            <div class="description-head container">
                <div class="text-center">
                    <img src="{{ url('image/gallery/l1.svg') }}" alt="">
                </div>
                <p class="desc-about mt-4">

                    திருமணம் என்பது ஒருவருடைய வாழ்க்கையில் மிகப்பெரிய முடிவாகும், அதே போல் குடும்பத்திற்கும்,பொருந்தக்கூடிய
                    வாழ்க்கை துணையை தேடுவதை தாக்குவதே சௌந்தர்யம் மேட்ரிமோனி நோக்கமாக கொண்டுள்ளது.
                    சௌந்தர்யம் மேட்ரிமோனி என்பது தங்கள் அன்புக்குரியவர்களுக்கு வாழ்க்கை துணையை தேடும் பெற்றோருக்காக
                    உருவாக்கப்பட்ட ஒரு சேவையாகும்.
                    மற்ற மேட்ரிமோனியல் சேவைகள் போல அல்லாமல், அடுத்த கட்டத்தை நம்பிக்கையுடன் எடுக்க உங்களுக்கு உதவ விரிவான
                    குடும்பத்து மற்றும்
                    பின்னணித் தகவல்களை வழங்குவதில் நாங்கள் கவனம் செலுத்துகிறோம் .

                </p>
                <p class="desc-about2 mt-2">
                    ஒரே எண்ணம் கொண்ட வாழ்க்கை துணையை தேடும் ஆண்களுக்கும் பெண்களுக்கும் உயர்தர தளத்தை வழங்குவதற்கான ஒரு
                    நோக்கத்துடன் கூடிய ஒரு முயற்சியாகும்.
                    சௌந்தர்யம் மேட்ரிமோனி பல்வேறு சமூகங்கள், நகரங்கள் மற்றும் தொழில்களில் இருந்து உங்களுக்கு பொருத்தமான
                    வாழ்க்கை
                    துணையை வழங்குகிறது .</p>
            </div>
        </div>
    </section>

    <section class="pb-0">
        <div class="search-field">
            <div class="search-box shadow">
                <h3 class="sub-head">Search Your Perfect <span class="sub-title">LIFE PARTNER</span></h3>
                <p class="sub-desc">We help you find your perfect partner and perfect family</p>


                <form action="{{ route('regular.search') }}" method="get">

                    <div class="search-box-inside px-3 mt-4">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 ">
                                <div>
                                    <label for="" class="form-label">Looking for a <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" aria-label="Default select example" name="gender" required>
                                        <option selected value="" disabled>Select the gender</option>
                                        <option value="Male">Groom</option>
                                        <option value="Female">Bride</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 mt-lg-0 mt-md-3 mt-sm-3 mt-3">
                                <div class="row">
                                    <label for="" class="form-label">Age <span class="text-danger">*</span></label>
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example" name="fromAge"
                                            required>
                                            <option selected value="" disabled>From</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>

                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-select" aria-label="Default select example" name="toAge"
                                            required>
                                            <option selected value="" disabled>To</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                            <option value="32">32</option>
                                            <option value="33">33</option>
                                            <option value="34">34</option>
                                            <option value="35">35</option>
                                            <option value="36">36</option>
                                            <option value="37">37</option>
                                            <option value="38">38</option>
                                            <option value="39">39</option>
                                            <option value="40">40</option>

                                        </select>
                                    </div>


                                </div>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                                <div>
                                    <label for="" class="form-label">Religion <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" aria-label="Default select example" name="religion"
                                        required>
                                        <option selected value="" disabled>Choose a Religion</option>
                                        <option value="Hindu">Hinduism</option>
                                        <option value="Islam">Islam </option>
                                        <option value="Christian">Christianity</option>
                                        <option value="Sikhism">Sikhism </option>
                                        <option value="Buddhism">Buddhism</option>
                                        <option value="Jainism">Jainism</option>
                                        <option value="NonReligious">Non-Religious</option>
                                        <option value="Others">Others</option>

                                    </select>

                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
                                <div>
                                    <label for="" class="form-label">Caste <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" aria-label="Default select example" name="caste"
                                        required>
                                        <option value="" selected disabled>Select your Caste</option>
                                        <option value="Brahmins">Brahmins</option>
                                        <option value="Vaishyas">Vaishyas</option>
                                        <option value="Chettiar">Chettiar</option>
                                        <option value="Mudaliar">Mudaliar</option>
                                        <option value="Iyengar">Iyengar</option>
                                        <option value="Reddy">Reddy</option>
                                        <option value="Pillai">Pillai</option>
                                        <option value="Yadav">Yadav</option>
                                        <option value="Caste no bar">Caste no bar</option>

                                    </select>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="text-center mt-5">
                        <button class="btn-main w-50">Let's Begin <span><i
                                    class="fa-solid fa-magnifying-glass  ps-2"></i></span></button>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <section>
        <div class="register-features">
            <div class="register-features-head">
                <div class="row row-first">
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div>
                            <h3 class="sub-head">Register Now & Enjoy <span class="sub-title">Unlimited Benefits</span>
                            </h3>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="text-lg-start text-md-center text-center">
                            @auth
                                <a href="{{ route('contactUs') }}" class="btn-main mt-lg-0 mt-md-3 mt-sm-3 mt-3">CONTACT NOW</a>
                            @else
                                <a href="{{ route('register') }}" class="btn-main mt-lg-0 mt-md-3 mt-sm-3 mt-3">REGISTER
                                    FREE</a>
                            @endauth

                        </div>
                    </div>
                </div>
                <div class="row row-second">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                            <img src="{{ url('image/gallery/c1.svg') }}" class="img-fluid"
                                alt="registered-features-image">
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="py-lg-0 py-md-3 py-sm-0 mt-4 mt-sm-4 mt-md-0">
                            <div class="text-center py-4">
                                <h3 class="sub-head"><span class="sub-title">FREE</span> Features for all</h3>
                                <p class="sub-desc">Genuine | Safe & Secure | Verified</p>
                            </div>
                            <div class="row row-cols-1 row-cols-lg-2 row-cols-md-1 row-cols-sm-2 row-second-box gy-3 px-3">
                                <div class="col">
                                    <div>
                                        <p><span><i class="fa-regular fa-circle-check"></i></span> Search Relevant Profiles
                                        </p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <p><span><i class="fa-regular fa-circle-check"></i></span>
                                            Dedicated
                                            Advisor</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <p><span><i class="fa-regular fa-circle-check"></i></span> Create Profile</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <p><span><i class="fa-regular fa-circle-check"></i></span> Upload Photos</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <p><span><i class="fa-regular fa-circle-check"></i></span> View Latest Profiles</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <p><span><i class="fa-regular fa-circle-check"></i></span> Save profile</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <p><span><i class="fa-regular fa-circle-check"></i></span> Send Interest</p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div>
                                        <p><span><i class="fa-regular fa-circle-check"></i></span> Receive Interest</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="newsletter">
            <div class="newsletter-bgcolor">
                <div class="newsletter-contain">
                    <h3>Subscribe to our newsletter</h3>
                    <p>Sign up to our newsletter to receive the latest updates...</p>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-7 col-md-8 col-sm-18 col-9">
                            <div class="row mt-4">
                                <div class="col-lg-8 col-md-8">
                                    <input type="text" class="form-control form-control-lg"
                                        placeholder="Your Email Address">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 mt-lg-0 mt-md-0 mt-sm-3 mt-3">
                                    <button class="btn-main px-5 ">SUBMIT</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>

        /* desc */
        .description img {
            width: 70%;
        }

        .description-head p {
            text-indent: 90px;
            word-spacing: 3px;
            text-align: justify;
        }

        @media only screen and (max-width:567px) {
            .description-head p {
                padding: 0 15px;
            }
        }

        /* search-field */
        .search-field {
            background: #e7edff;
            padding: 120px 0;
        }

        .search-box {
            width: 70%;
            margin: 0 auto;
            background-color: white;
            padding: 50px 10px;
            border-radius: 9px;
        }

        @media only screen and (max-width:768px) {
            .search-box {
                width: 85%;
            }
        }


        .search-box h3 {
            font-size: 26px;
            text-align: center;
            letter-spacing: 1px;
            font-weight: 500;
        }

        .search-box p {
            text-align: center;
            color: grey;

        }

        .search-box-inside select {
            /* color: grey; */
            font-size: 15px;
        }



        /* features */
        .register-features .row:first-child {
            background-color: rgba(255, 252, 89, 0.336);
            padding: 50px 20px;
        }

        .register-features h3 {
            text-align: center;

        }

        .row-second .row-second-box .col div {
            padding: 15px 10px;
            border-radius: 5px;
            border: 1px solid #dddbdb;
            cursor: pointer;
        }


        .row-second .row-second-box .col div:hover {
            box-shadow: 0 0 15px rgba(19, 19, 19, 0.233);

        }

        .row-second .row-second-box .col div>p {
            margin: 0;
        }

        .row-second .row-second-box .col i {
            color: #198754;
        }

        .row-second .row-second-box .col div:hover i {
            color: #FF4742;

        }

        @media only screen and (min-width:992px) {
            .row-second .col-12:last-child {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }

        @media only screen and (max-width:992px) and (min-width:768px) {
            .row-second .row-second-box .col div {
                width: 250px;
                margin: 0 auto;
            }
        }

        /* newsletter */
        .newsletter {
            background: url('image/banner/b3.jpg') no-repeat top center;
            background-attachment: fixed;
            background-size: cover;
            color: white;
            text-align: center;

        }

        .newsletter-bgcolor {
            width: 100%;
            height: 100%;
            background-color: rgba(8, 8, 8, 0.692);
            padding: 150px 0;
        }


        .newsletter-contain h3 {
            font-size: 40px;
            letter-spacing: 1px;
            font-weight: 700;
            text-transform: capitalize;
            text-shadow: 2px 2px black;

        }

        .newsletter-contain p {
            color: rgb(224, 224, 224);
            letter-spacing: 1px;

        }

        @media only screen and (max-width:576px) {

            .newsletter-contain h3 {
                font-size: 30px;
            }
        }
    </style>
@endpush
