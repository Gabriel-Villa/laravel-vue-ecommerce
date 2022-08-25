<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler px-0" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarExampleOnHover" aria-controls="navbarExampleOnHover" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarExampleOnHover">
            <!-- Left links -->
            <a class="navbar-brand mt-2 mt-lg-0" href="{{ route('home') }}">
                <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="15"
                    alt="MDB Logo" loading="lazy" />
            </a>

            <ul class="navbar-nav me-auto ps-lg-0" style="padding-left: 0.15rem">
                <li class="nav-item dropdown dropdown-hover position-static">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownWomen" role="button">
                        Women
                    </a>
                    @include('partials.drop-down-menu')
                </li>
                <li class="nav-item dropdown dropdown-hover position-static">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMan" role="button">
                        Man
                    </a>
                    @include('partials.drop-down-menu')
                </li>
            </ul>
            <!-- Left links -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Icon -->
                <a class="text-reset me-3" href="#">
                    {{-- <cart-icon></cart-icon> --}}
                </a>

                <!-- Avatar -->
                @guest
                    <div class="dropdown">
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('login-github') }}">Login with Github <i
                                        class="fab fa-github"></i></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Logout</a>
                            </li>
                        </ul>
                    </div>
                @else
                    <div class="dropdown">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow text-white border border-white rounded-circle" href="#"
                            id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                            aria-expanded="false">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                <a class="dropdown-item" href="#">My profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Settings</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                @endguest
            </div>

        </div>
    </div>
</nav>
