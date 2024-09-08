@extends('layouts.main')


@section('content')
    <section>
        <div class="container mt-5">
            <h2 class="sec-title">Searched Profile</h2>
            <div class="row px-3">
                <div class="col-12 ">
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
                                                            <p>Age : <span>{{ $val['age'] }}</span></p>
                                                            <p>Location : <span>{{ $val['state'] }} </span></p>

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
                                <img src="{{asset('image/gallery/c5.svg')}}" class="img-fuild" alt="empty" width="250">
                                <h2 class="head">No profiles found!</h2>
                                <p class="sub-desc">Please try searching again with different criteria.</p>
                                <div class="">
                                    <a href="{{ url('/') }}" class="btn-main">Go Back</a>
                                </div>
                            </div>
                            @endif
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection



