
<header style="width: 100%;" id="header">

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand p-0" href="{{url('/')}}">
                <span class="mainBrand">
                    <span class="brand-top">Soundaryam</span>
                    <span class="brand-bottom"><b>Matrimonial</b></span>
                </span>
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>

                    @auth
                    @if (auth()->user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                    </li>
                    @endif
                    @endauth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('viewPartners')}}">Profiles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('search')}}">Search</a>
                    </li>
                 
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactUs')}}">Contact</a>
                    </li>

                    @guest
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="text-decoration-none"><button class="btn-main ">
                            <i class="fa-solid fa-right-to-bracket"></i>Login</button></a>
                    </li>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('account')}}"><span><i class="fa-solid fa-address-card"></i></span>My Account</a>
                                <a class="dropdown-item" href="{{route('createProfile')}}"><span><i class="fa-solid fa-user-plus"></i></span>Add Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                   <span><i class="fa-solid fa-arrow-right-from-bracket"></i></span> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                  
                </ul>
            </div>
        </div>
    </nav>



</header>


