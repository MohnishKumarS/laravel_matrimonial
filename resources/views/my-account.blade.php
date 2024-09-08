@extends('layouts.main')


@section('content')
    <section>
        <div class="container mt-5">
            <h2 class="sec-title mb-3">My Account</h2>
            <p class="sub-desc text-center pb-3">Welcome to your profile page. Here you can manage your account and view your profile details.</p>
            <div class="row px-3 px-sm-0">
                <div class="col-12 col-md-3">
                    <!-- Tab navs -->
                    <div class="nav  flex-row flex-md-column nav-tabs text-center mb-5 mb-md-0" id="v-tabs-tab" role="tablist"
                        aria-orientation="vertical">

                        <a data-mdb-tab-init class="nav-link active" id="v-tabs-profile-tab" href="#v-tabs-profile"
                            role="tab" aria-controls="v-tabs-profile" aria-selected="false">My Profile</a>
                        <a data-mdb-tab-init class="nav-link " id="v-tabs-home-tab" href="#v-tabs-home" role="tab"
                            aria-controls="v-tabs-home" aria-selected="true">User Details</a>
                        <a data-mdb-tab-init class="nav-link" id="v-tabs-messages-tab" href="#v-tabs-messages"
                            role="tab" aria-controls="v-tabs-messages" aria-selected="false">change password</a>
                    </div>
                    <!-- Tab navs -->
                </div>

                <div class="col-12 col-md-9">
                    <!-- Tab content -->
                    <div class="tab-content" id="v-tabs-tabContent">

                        <div class="tab-pane fade show active" id="v-tabs-profile" role="tabpanel"
                            aria-labelledby="v-tabs-profile-tab">
                            <div class="profile_view_list">
                                <div>
                                    @if ($profile->count())
                                        @foreach ($profile as $val)
                                            <div class="row align-items-center mb-5 py-4 pro-view">
                                                <div class="col-lg-3 mb-4 mb-lg-0">
                                                    <div class="text-center">
                                                        <img src="{{ $val->image ? asset('image/profile/' . $val->image) : asset('image/common/' . ($val->gender == 'Male' ? 'default-male.jpg' : 'default-female.jpg')) }}"
                                                            class="img-fluid pro-img" alt="profile-photo" width="150"
                                                            height="150" loading="lazy">

                                                    </div>
                                                </div>
                                                <div class="col-lg-9 text-lg-start text-md-center">
                                                    <div>
                                                        <div class="row row-first ">
                                                            <div class="col">
                                                                <div>
                                                                    <h5>{{ $val['name'] }}</h5>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div>
                                                                    <h5>Profile ID : <span>{{ $val['profile_id'] }}</span>
                                                                        <span class="days">({{Carbon\Carbon::parse($val['created_at'])->diffForHumans()}})</span>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="mt-1">
                                                        <!-- ------------------  row second -------------------- -->
                                                        <div class="row row-second">
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div>
                                                                    <p>Gender : <span>{{ $val['gender'] }}</span></p>
                                                                    <p>DOB : <span>{{ $val['dob'] }}</span></p>
                                                                    <p>Mobile : <span>{{ $val['mobile'] }}</span></p>
                                                                    <p>Location : <span>{{ $val['city'] }}, {{ $val['state'] }} </span></p>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div>
                                                                    <p>Religion : <span>{{ $val['religion'] }}</span></p>
                                                                    <p>Mother Tongue : <span>{{ $val['community'] }} </span>
                                                                    </p>
                                                                    <p>Raasi : <span>{{ $val['raasi'] }}</span></p>
                                                                    <p>Star : <span> {{ $val['star'] }} </span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- -------------------------- row third --------------- -->
                                                        <div class="row mt-3">
                                                            <div class="col">
                                                                <div class="">
                                                                    <a href="{{ route('viewProfile', $val['id']) }}"
                                                                        class="btn btn-outline-primary">View Profile</a>
                                                                    <a href="{{ route('editProfile', $val['id']) }}"
                                                                        class="btn btn-outline-danger  ms-3">Edit
                                                                        Profile</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                    <div class="empty text-center">
                                        <img src="{{ asset('image/gallery/c7.svg') }}" class="img-fuild" alt="empty"
                                            width="250">
                                        <h2 class="head">No profiles found!</h2>
                                        <p class="sub-desc">Please try searching again with different criteria.</p>
                                        <div class="">
                                            <a href="{{ url('/') }}" class="btn-main">Go to Home</a>
                                        </div>
                                    </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade  " id="v-tabs-home" role="tabpanel" aria-labelledby="v-tabs-home-tab">
                            <div>
                               
                                <form action="{{route('changeUserDetails',auth()->id())}}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <div class="prof-add">
                                        <h6 class="prof-head">User Information</h6>
                                        <div class="row mt-4">
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Name </label>
                                                    <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                                        value="{{ $user->name }}">
                                                    @error('name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
    
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Email </label>
                                                    <input type="text" class="form-control" name="email" 
                                                        value="{{ $user->email }}" disabled>
                                                    @error('email')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Mobile </label>
                                                    <input type="text" class="form-control" name="mobile" maxlength="10"
                                                        onkeyup="this.value = this.value.replace(/[^0-9]/g,'')" value="{{ $user->mobile }}">
                                                    @error('mobile')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <label class="form-label">Relationship </label>
                                                    <select class="form-select" name="relationship">
                                                        <option value="" selected>user Created For</option>
                                                        <option value="Son" {{ $user->relationship == 'Son' ? 'selected' : '' }}>Son</option>
                                                        <option value="Daughter" {{ $user->relationship == 'Daughter' ? 'selected' : '' }}>Daughter</option>
                                                        <option value="Siblings" {{ $user->relationship == 'Siblings' ? 'selected' : '' }}>Siblings</option>
                                                        <option value="Friend" {{ $user->relationship == 'Friend' ? 'selected' : '' }}>Friend</option>
                                                        <option value="Relative" {{ $user->relationship == 'Relative' ? 'selected' : '' }}>Relative</option>
                                                        <option value="Self" {{ $user->relationship == 'Self' ? 'selected' : '' }}>Self</option>
                                                    </select>
                                                    @error('relationship')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                         
                                        </div>
                               
                    
                                        <div class="text-end mt-5">
                                            <button class="btn-main" type="submit">Change Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-tabs-messages" role="tabpanel"
                            aria-labelledby="v-tabs-messages-tab">
                            <div>
                                <p>To set your new password, use the form below.</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-outline mb-4" data-mdb-input-init>
                                            <input type="password" class="form-control form-control-lg" />
                                            <label class="form-label">Current Password</label>
                                        </div>
                                        <div class="form-outline mb-4" data-mdb-input-init>
                                            <input type="password" class="form-control form-control-lg" />
                                            <label class="form-label">New Password</label>
                                        </div>
                                        <div class="form-outline mb-4" data-mdb-input-init>
                                            <input type="password" class="form-control form-control-lg" />
                                            <label class="form-label">Confirm New Password</label>
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
