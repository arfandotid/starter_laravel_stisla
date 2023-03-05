<form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
        <li>
            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg">
                <i class="fas fa-bars"></i>
            </a>
        </li>
        <li>
            <a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none">
                <i class="fas fa-search"></i>
            </a>
        </li>
    </ul>
</form>
<ul class="navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            @if(auth()->user()->avatar)
                <img alt="image" src="{{ asset('storage/'.auth()->user()->avatar) }}" class="rounded-circle mr-1">
            @else
                <img alt="image" src="{{ asset('/assets/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
            @endif
            <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name; }}</div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="{{ route('profile') }}" class="dropdown-item has-icon {{ Route::is('profile*') ? 'active' : '' }}">
                <i class="fas fa-user"></i> Profile
            </a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button
                    type="submit"
                    class="dropdown-item has-icon text-danger btn-logout"
                >
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </div>
    </li>
</ul>
