@extends('layouts.main')

@section('container')
    <div class="min-vh-100">
        <div class="d-flex justify-content-center pt-5">
            <div class="karturegister card mb-4">
                <div class="card-header text-center">
                    <h5 class="fw-bold fs-6">Register</h5>
                </div>

                <form class="container p-4" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Name">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Email">
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Password">
                    </div>
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="formGroupExampleInput2" placeholder="Re-Type Your Email">
                    </div>
                    @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Gender</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female">
                            <label class="form-check-label" for="flexRadioDefault2">
                            Female
                            </label>
                        </div>
                    </div>
                    @error('gender')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Date of Birth</label>
                        <input type="date" name="dob" class="form-control" id="formGroupExampleInput2">
                    </div>
                    @error('dob')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Country</label>
                        <div>
                            <select class="form-select" name="country" id="floatingSelectGrid">
                                <option  value="" label="Choose a country" selected="selected">Choose a country</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Singapore">Singapore</option>
                            </select>
                        </div>
                    </div>
                    @error('country')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3 d-grid gap-2 col-5 mx-auto">
                        <button type="submit" class="btn btn-outline-secondary">Register</button>
                    </div>

                    <div>
                        <label for="formGroupExampleInput2" class="form-label">Have an account?</label>
                        <span><a href="/login" class="text-decoration-none">Login Here</a></span>
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
