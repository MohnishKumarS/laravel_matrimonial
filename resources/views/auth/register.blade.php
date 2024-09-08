@extends('layouts.main')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <div class="page-register mb-5">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row align-items-lg-center">
                <div class="col-lg-6">
                    <div>
                        <img src="{{url('image/gallery/c3.svg')}}" alt="register-image" class="img-fluid object-fit-cover" loading="lazy" >
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <div class="px-xxl-5">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h2>Sign Up</h2>

                            <div class="mt-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                        placeholder="Enter your Name">
                                    <label for="floatingInput">Enter your Name</label>
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="mobile" value="{{ old('mobile') }}"
                                        placeholder="Enter your Mobile" onkeyup="this.value = this.value.replace(/[^0-9]/g,'')" maxlength="10">
                                    <label for="floatingInput">Enter your Mobile</label>
                                    @error('mobile')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                        placeholder="Enter your Email">
                                    <label for="floatingInput">Enter your Email</label>
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="password"
                                        value="{{ old('password') }}" placeholder="Enter your Password">
                                    <label for="floatingInput">Enter your Password</label>
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="relationship">
                                        <option value="" selected disabled>Profile Created For</option>
                                        <option value="Son">Son</option>
                                        <option value="Daughter">Daughter</option>
                                        <option value="Siblings">Siblings</option>
                                        <option value="Friend">Friend</option>
                                        <option value="Relative">Relative</option>
                                        <option value="Self">Self</option>
                                    </select>
                                    <label for="floatingSelect">Choose one</label>
                                    @error('relationship')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        I agree the Terms and Conditions
                                    </label>
                                </div>
                                <div class="mt-4 pt-1">
                                    <button class="btn-main w-100" type="submit">Register</button>
                                </div>
                                <div class="text-center mt-3">
                                    <p class="sub-desc">Already have an account? <a href="{{route('login')}}" class="text-main fw-bold">Login</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

