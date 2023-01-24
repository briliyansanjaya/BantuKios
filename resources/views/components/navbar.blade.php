<nav class="navbar navbar-expand-lg mx-auto bg-white mt-3 p-0 m-0">
    <div class="container mb-0 pb-0">
        {{-- <a class="navbar-brand" href="/">Barbatos Shop</a> --}}
        {{-- <nav class="navbar navbar-light pe-0">
            <img src="{{ asset('storage/images/bantu_kios-01.png') }}" width="100" height="25" alt="Logo">
        </nav> --}}

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li>
                    <a href="/" class="nav-link ps-0 fw-bold" style="color: #023C82" aria-current="page">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold" style="color: #023C82" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item" href="/category/{{ $category->CategoryID }}">{{ $category->categoryName }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="/about" class="nav-link fw-bold" style="color: #023C82" aria-current="page">About</a>
                </li>
                @can('admin')
                    <li>
                        <a href="/manage" class="nav-link fw-bold" style="color: #023C82" aria-current="page">Manage Product</a>
                    </li>
                @endcan

            </ul>
            <ul class="navbar-nav d-flex">
                @can('user')
                {{-- @auth --}}
                    <li>
                        <a href="/cart" class="nav-link" aria-current="page">
                            <i class="fas fa-shopping-cart"></i>
                            {{-- <span class="badge bg-danger rounded-pill">0</span> --}}
                        </a>
                    </li>
                {{-- @endauth --}}
                @endcan

                <li class="nav-item dropdown">
                    {{-- User yang udah login --}}
                    @auth
                        <a class="nav-link dropdown-toggle pe-0 fw-bold" style="color: #023C82" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                    @endauth
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        @can('user')
                            <li><a class="dropdown-item" href="/history">History</a></li>
                        @endcan
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit" href="/logout">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>

                @guest
                    <li>
                        <a href="/login" class="nav-link fw-bold" style="color: #023C82" aria-current="page">Login</a>
                    </li>
                    <li>
                        <a href="/register" class="nav-link pe-0 fw-bold" style="color: #023C82" aria-current="page">Register</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
