
    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="{{asset("assets")}}/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">
                        @if(\Illuminate\Support\Facades\Auth::check()) {{Auth::user()->name}} @endif</span>
    </a><!-- End Profile Iamge Icon -->

    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
            <h6> @if(\Illuminate\Support\Facades\Auth::check()){{Auth::user()->name}}@endif</h6>
            <span>My User Panel</span>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="/userpanel">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="/admin/setting">
                <i class="bi bi-gear"></i>
                <span> Settings</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="{{route('userpanel.reviews')}}">
                <i class="bi bi-question-circle"></i>
                <span>My Comments</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item d-flex align-items-center" href="/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
            </a>
        </li>

    </ul><!-- End Profile Dropdown Items -->

