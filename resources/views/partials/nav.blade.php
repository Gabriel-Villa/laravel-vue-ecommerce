<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        <button class="navbar-toggler px-0" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarExampleOnHover" aria-controls="navbarExampleOnHover" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarExampleOnHover">

            <a class="navbar-brand mt-2 mt-lg-0" href="{{ route('home') }}">
                MY ECOMMERCE
            </a>

            <ul class="navbar-nav me-auto ps-lg-0" style="padding-left: 0.15rem">
                <li class="nav-item dropdown dropdown-hover position-static">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownWomen" role="button" style="padding: 10px 20px;">
                        Women
                    </a>
                    @include('partials.drop-down-menu')
                </li>
                <li class="nav-item dropdown dropdown-hover position-static">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMan" role="button" style="padding: 10px 20px;">
                        Man
                    </a>
                    @include('partials.drop-down-menu')
                </li>
            </ul>

            <div class="d-flex align-items-center">
                <a class="text-reset me-3" href="#">
                    @auth
                        <cart-icon></cart-icon>
                    @endauth
                </a>

                @guest
                    <div class="dropdown d-flex">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow text-white" href="#"
                            id="navbarDropdownLogin" role="button" data-mdb-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fas fa-cog"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownLogin">
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
                    <div class="dropdown d-flex">
                        <a class="dropdown-toggle d-flex align-items-center hidden-arrow text-white" href="#"
                            id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown"
                            aria-expanded="false" style="border: 1px solid white; border-radius: 100%; padding: 5px 13px;">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            {{-- <li>
                                <a class="dropdown-item" href="#">My profile</a>
                            </li> --}}
                            <li>
                                <a class="dropdown-item" href="{{ route('cart') }}">Cart</a>
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
