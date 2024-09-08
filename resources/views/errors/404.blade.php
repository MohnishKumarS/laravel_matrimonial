@extends('layouts.main')


@section('content')
    <section>
        <div class="container mt-5">
            <div class="empty text-center">
                <img src="{{ asset('image/gallery/c8.svg') }}" class="img-fuild" alt="empty"
                    width="300">
                <h2 class="head">uh-oh Page  <span class="text-main">Not Found...</span></h2>
                <p class="sub-desc">We're sorry, the page you are trying to reach doesn't exist....</p>
                <div class="">
                    <a href="{{ url('/') }}" class="btn-main">Go to Home</a>
                </div>
            </div>
        </div>
    </section>
@endsection




