<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav ml-auto">
        {{-- User Menu --}}
        <li class="nav-item dropdown user-menu">
            <a href="{{ route('admin.logout') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <span class="d-none d-md-inline mr-2">{{ auth()->user()->name }}</span>
                <i class="fas fa-sign-out-alt" style="font-size: 20px;"></i>
            </a>
        </li>
    </ul>
</nav>
