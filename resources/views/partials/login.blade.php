@extends('layouts.main')

@section('container')
    <div class="d-flex justify-content-center pt-5 vh-100">
        <div>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card" style = "width: 500px;">
                <div class="card-header text-center">
                    <h5 class="fw-bold fs-6">Login</h5>
                </div>
                <form class="container p-4" action="/login" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter Your Email" autofocus required @if(Cookie::has('email')) value="{{ Cookie::get('email') }}" @endif>
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password2" placeholder="Enter Your Password" required @if(Cookie::has('password')) value="{{ Cookie::get('password') }}" @endif>
                    </div>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" name="rememberme" id="flexCheckDefault" @if(Cookie::has('email')) checked @endif>
                        <label class="form-check-label" for="flexCheckDefault">
                          Remember me
                        </label>
                    </div>
                    <div class="mb-3 d-grid gap-2 col-5 mx-auto">
                            <button type="submit" class="btn btn-outline-secondary">Login</button>
                    </div>

                    <div style = 'margin-bottom: -15px;'>
                        <label for="formGroupExampleInput2" class="form-label">Don't have an account?</label>
                        <span><a href="/register" class="text-decoration-none">Register Here</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="shadowtop text-center text-lg-start fixed-bottom" style="background-color: white;">
        <div class="text-center p-2 fw-bold">
            <a href="/about" class="text-decoration-none" style="color: #023C82">© 2022 Sanskuy</a>
        </div>
    </div>
@endsection
