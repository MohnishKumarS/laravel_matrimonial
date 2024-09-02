@extends('layouts.main')


@section('content')
    <section>
        <div class="container mt-5">
            <h2 class="sec-title">My Account</h2>
            <div class="row w-100">
                <div class="col-3">
                    <!-- Tab navs -->
                    <div class="nav flex-column nav-tabs text-center" id="v-tabs-tab" role="tablist"
                        aria-orientation="vertical">
                        <a data-mdb-tab-init class="nav-link active" id="v-tabs-home-tab" href="#v-tabs-home" role="tab"
                            aria-controls="v-tabs-home" aria-selected="true">Home</a>
                        <a data-mdb-tab-init class="nav-link" id="v-tabs-profile-tab" href="#v-tabs-profile" role="tab"
                            aria-controls="v-tabs-profile" aria-selected="false">Profile</a>
                        <a data-mdb-tab-init class="nav-link" id="v-tabs-messages-tab" href="#v-tabs-messages"
                            role="tab" aria-controls="v-tabs-messages" aria-selected="false">change password</a>
                    </div>
                    <!-- Tab navs -->
                </div>

                <div class="col-9">
                    <!-- Tab content -->
                    <div class="tab-content" id="v-tabs-tabContent">
                        <div class="tab-pane fade show active" id="v-tabs-home" role="tabpanel"
                            aria-labelledby="v-tabs-home-tab">
                            Home content
                        </div>
                        <div class="tab-pane fade" id="v-tabs-profile" role="tabpanel" aria-labelledby="v-tabs-profile-tab">
                            <div class="profile_view_list">
                                <div>
                                    @if ($profile->count())
                                        @foreach ($profile as $val)
                                        <div class="row border mb-5 py-4 shadow">
                                            <div class="col-lg-3 mb-3">
                                                <div class="text-center">
                                                    <img src="{{asset('image/common/avatar.png')}}" class="object-fit-contain img-fluid" alt="profile-photo"  >
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-9 text-lg-start text-md-center">
                                                <div>
                                                    <div class="row row-first mt-lg-0 mt-md-0 mt-sm-2 my-2">
                                                        <div class="col">
                                                            <div>
                                                                <h5>{{$val['name']}}</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div>
                                                                <h5 >Profile ID: <span class="fw-bold">{{$val['profile_id']}}</span></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                
                                                    <!-- ------------------  row second -------------------- -->
                                                    <div class="row row-second">
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <div>
                                                                <p>Gender : <span>{{$val['gender']}}</span></p>
                                                                <p>DOB : <span>{{$val['dob']}}</span></p>
                                                                <p>Age : <span>{{$val['age']}}</span></p>
                                                                <p>Location : <span>{{$val['state']}} </span></p>
                
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <div>
                                                                <p>Religion : <span>{{$val['religion']}}</span></p>
                                                                <p>Mother Tongue : <span>{{$val['community']}}  </span></p>
                                                                <p>Raasi : <span>{{$val['raasi']}}</span></p>
                                                                <p>Star : <span> {{$val['star']}} </span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- -------------------------- row third --------------- -->
                                                    <div class="row mt-3">
                                                        <div class="col">
                                                            <div class="">
                                                                <a href="{{ route('viewProfile',$val['id']) }}" class="btn btn-outline-primary">View Profile</a>
                                                                <a href="{{ route('editProfile',$val['id']) }}" class="btn btn-outline-danger  ms-3">Edit Profile</a>
                                                            </div>
                                                        </div>
                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @else
                                        
                                    @endif
                                </div>

                   
        
        
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-tabs-messages" role="tabpanel"
                            aria-labelledby="v-tabs-messages-tab">
                           <div>
                            <p>To set your new password, use the form below.</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <input type="password"  class="form-control form-control-lg" />
                                        <label class="form-label" >Current Password</label>
                                      </div>
                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <input type="password"  class="form-control form-control-lg" />
                                        <label class="form-label" >New Password</label>
                                      </div>
                                    <div class="form-outline mb-4" data-mdb-input-init>
                                        <input type="password"  class="form-control form-control-lg" />
                                        <label class="form-label" >Confirm New Password</label>
                                      </div>
                                      <div class="text-center">
                                        <button type="submit" class="btn-main w-50">Submit</button>
                                      </div>
                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                    <!-- Tab content -->
                </div>
            </div>
        </div>
    </section>
@endsection



@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" />
@endpush

@push('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script>
@endpush
