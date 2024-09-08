@extends('layouts.main')


@section('content')
    <section>
        <div class="container mt-5">
            <h2 class="sec-title">Find your Special Partner</h2>
            <div class="row px-3 px-sm-0">
                <div class="col-12 col-md-3">
                    <!-- Tab navs -->
                    <div class="nav  flex-row flex-md-column nav-tabs text-center mb-5 mb-md-0" id="v-tabs-tab" role="tablist"
                        aria-orientation="vertical">

                        <a data-mdb-tab-init class="nav-link active" id="v-tabs-profile-tab" href="#v-tabs-profile"
                            role="tab" aria-controls="v-tabs-profile" aria-selected="false">All Profile</a>
                        <a data-mdb-tab-init class="nav-link " id="v-tabs-home-tab" href="#v-tabs-home" role="tab"
                            aria-controls="v-tabs-home" aria-selected="true">Groom (ஆண்)</a>
                        <a data-mdb-tab-init class="nav-link" id="v-tabs-messages-tab" href="#v-tabs-messages"
                            role="tab" aria-controls="v-tabs-messages" aria-selected="false">Bride (பெண்)</a>
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
                                    @if ($profiles->count())
                                        @foreach ($profiles as $val)
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
                                                                        <span
                                                                            class="days">({{ Carbon\Carbon::parse($val['created_at'])->diffForHumans() }})</span>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="mt-1">
                                                        @php
                                                        $number = $val->mobile;
                                                        $maskedNumber = substr($number, 0, 2) . str_repeat('*', strlen($number) - 4) . substr($number, -2);
                                                    @endphp
                                                        <!-- ------------------  row second -------------------- -->
                                                        <div class="row row-second">
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div>
                                                                    <p>Gender : <span>{{ $val['gender'] }}</span></p>
                                                                    <p>DOB : <span>{{ $val['dob'] }}</span></p>
                                                                    <p>Mobile : <span>{{ $maskedNumber }}</span></p>
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
                                                                        class="btn-main">View Profile</a>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="empty text-center">
                                            <img src="{{ asset('image/gallery/c5.svg') }}" class="img-fuild" alt="empty"
                                                width="250">
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
                        <div class="tab-pane fade  " id="v-tabs-home" role="tabpanel" aria-labelledby="v-tabs-home-tab">
                            <div>
                                @if ($groom->count())
                                    @foreach ($groom as $val)
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
                                                                    <span
                                                                        class="days">({{ Carbon\Carbon::parse($val['created_at'])->diffForHumans() }})</span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-1">
                                                    @php
                                                    $number = $val->mobile;
                                                    $maskedNumber = substr($number, 0, 2) . str_repeat('*', strlen($number) - 4) . substr($number, -2);
                                                @endphp
                                                    <!-- ------------------  row second -------------------- -->
                                                    <div class="row row-second">
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <div>
                                                                <p>Gender : <span>{{ $val['gender'] }}</span></p>
                                                                <p>DOB : <span>{{ $val['dob'] }}</span></p>
                                                                <p>Mobile : <span>{{ $maskedNumber }}</span></p>
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
                                                                    class="btn-main">View Profile</a>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="empty text-center">
                                        <img src="{{ asset('image/gallery/c5.svg') }}" class="img-fuild" alt="empty"
                                            width="250">
                                        <h2 class="head">No profiles found!</h2>
                                        <p class="sub-desc">Please try searching again with different criteria.</p>
                                        <div class="">
                                            <a href="{{ url('/') }}" class="btn-main">Go Back</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-tabs-messages" role="tabpanel"
                            aria-labelledby="v-tabs-messages-tab">
                            <div>
                                @if ($bride->count())
                                    @foreach ($bride as $val)
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
                                                                    <span
                                                                        class="days">({{ Carbon\Carbon::parse($val['created_at'])->diffForHumans() }})</span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-1">
                                                    @php
                                                    $number = $val->mobile;
                                                    $maskedNumber = substr($number, 0, 2) . str_repeat('*', strlen($number) - 4) . substr($number, -2);
                                                @endphp
                                                    <!-- ------------------  row second -------------------- -->
                                                    <div class="row row-second">
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <div>
                                                                <p>Gender : <span>{{ $val['gender'] }}</span></p>
                                                                <p>DOB : <span>{{ $val['dob'] }}</span></p>
                                                                <p>Mobile : <span>{{ $maskedNumber }}</span></p>
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
                                                                    class="btn-main">View Profile</a>

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
                                            <a href="{{ url('/') }}" class="btn-main">Go Back</a>
                                        </div>
                                    </div>
                                @endif
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
