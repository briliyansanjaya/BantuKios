@extends('layouts.main')

@section('container')
@include('components.navbar')
    <div class="container min-vh-100 pb-5">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session()->has('message'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="/search">
            <div class="input-group mb-3 mt-2">
                <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="fa fa-search"></i>
                </button>
            </div>
        </form>

        <div class="row justify-content-center">
            {{-- @dd($Products) --}}
            {{-- @dd($Categories) --}}
            @foreach ($Categories as $Category)
            <div class="row justify-content-center mt-1 my-3">
                <div class="card">
                    <div class="row">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                {{ $Category->categoryName }}
                                <span><a href="/category/{{ $Category->CategoryID }}" class="text-decoration-none">View All</a></span>
                            </div>
                        </div>
                        @php
                            $productsPaginator = $Category->products()->paginate(7);
                        @endphp
                        <div class="mb-3">
                            <div class="kolom d-flex">
                                @if($Category->products->count() > 0)
                                    @foreach ($productsPaginator as $product)
                                    <div class="col-lg-3 py-3 px-2">
                                            <a href="{{ route('productdetail', $product->ProductID) }}" class="text-decoration-none text-black">
                                                <div class="card">
                                                    <img src="{{ asset('storage/images/'.$product->photo) }}" class="kartu card-img-top" alt="Product">
                                                    <div class="card-body" style = 'margin-bottom: -5px;'>
                                                        <h6 class="fw-normal ">{{Str ::limit($product->name, 25)}}</h6>
                                                        <h6 class="card-text fw-bold">IDR {{ $product->price }}</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="container text-center mt-3">
                                        <td class="align-middle"><h5>There is no Product!</h5></td>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="shadowtop text-center text-lg-start fixed-bottom" style="background-color: white;">
        <div class="text-center p-2 fw-bold">
            <a href="/about" class="text-decoration-none" style="color: #023C82">© 2022 Sanskuy</a>
        </div>
    </div>
@endsection
