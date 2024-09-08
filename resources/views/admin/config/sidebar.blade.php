<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{url('/')}}" target="_blank">
        <img src="{{asset('image/common/logo.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Soundaryam Matrimony</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('dashboard') ? 'active' : ''}}" href="{{route('dashboard')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('profiles') ? 'active' : ''}}" href="{{url('profiles')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">contacts</i>
            </div>
            <span class="nav-link-text ms-1">Profiles</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('users-profile') ? 'active' : ''}}" href="{{url('users-profile')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">group</i>
            </div>
            <span class="nav-link-text ms-1">Users</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{Request::is('users-contact') ? 'active' : ''}}" href="{{url('users-contact')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">contact_page</i>
            </div>
            <span class="nav-link-text ms-1">Contacts </span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account Site</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('home')}}" target="_blank">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">home</i>
            </div>
            <span class="nav-link-text ms-1">Home Page</span>
          </a>
        </li>

      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn btn-outline-primary mt-4 w-100" href="{{route('logout')}}"
        onclick="event.preventDefault(); document.getElementById('admin-logout-form').submit();"><i class="material-icons opacity-10 me-2" >logout</i>Logout</a>
        <form id="admin-logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
      </div>
    </div>
  </aside>