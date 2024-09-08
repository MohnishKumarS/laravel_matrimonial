@extends('layouts.main')


@section('content')
    <section class="mt-5">
        <h1 class="sec-title">Find your perfect match</h1>
        <div class="container">
            <!-- Tabs navs -->
            <ul class="nav nav-tabs nav-fill mb-5" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a data-mdb-tab-init class="nav-link active" id="ex2-tab-1" href="#ex2-tabs-1" role="tab"
                        aria-controls="ex2-tabs-1" aria-selected="true">Search by id</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a data-mdb-tab-init class="nav-link" id="ex2-tab-2" href="#ex2-tabs-2" role="tab"
                        aria-controls="ex2-tabs-2" aria-selected="false">Regular search</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a data-mdb-tab-init class="nav-link" id="ex2-tab-3" href="#ex2-tabs-3" role="tab"
                        aria-controls="ex2-tabs-3" aria-selected="false">Advanced search</a>
                </li>
            </ul>
            <!-- Tabs navs -->

            <!-- Tabs content -->
            <div class="tab-content" id="ex2-content">
                <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
                    <form action="{{ route('profile.id') }}" method="get">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-outline" data-mdb-input-init>
                                    <input type="text" id="formControlLg" class="form-control form-control-lg"
                                        name="profile-id" required title="Please enter a profile ID" />
                                    <label class="form-label" for="formControlLg">Enter a profile ID </label>
                                </div>
                                <div class="mt-4">
                                    <button type="submit" class="btn-main">Search Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
                    <div>
                        <form action="{{route('regular.search')}}" method="get">

                            <div class="search-box-inside">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 ">
                                        <div>
                                            <label for="" class="form-label">Looking for a <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-select" aria-label="Default select example" name="gender"  required>
                                                <option selected value="" disabled>Select the gender</option>
                                                <option value="Male">Groom</option>
                                                <option value="Female">Bride</option>
    
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 mt-lg-0 mt-md-3 mt-sm-3 mt-3">
                                        <div class="row">
                                            <label for="" class="form-label">Age <span
                                                    class="text-danger">*</span></label>
                                            <div class="col">
                                                <select class="form-select" aria-label="Default select example" name="fromAge" required>
                                                    <option selected value=""  disabled>From</option>
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
                                                <select class="form-select" aria-label="Default select example" name="toAge" required>
                                                    <option selected value=""  disabled>To</option>
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
                                            <select class="form-select" aria-label="Default select example" name="religion" required>
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
                                            <select class="form-select" aria-label="Default select example" name="caste" required>
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
                                <button class="btn-main" type="submit">SEARCH NOW</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="ex2-tabs-3" role="tabpanel" aria-labelledby="ex2-tab-3">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Alert !</strong> Advanced Search is only available to registered membership. Please <a
                            href="{{ route('register') }}" class="alert-link">Register</a> to use this option.

                    </div>
                </div>
            </div>
            <!-- Tabs content -->
        </div>
    </section>
@endsection

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script>
@endpush
