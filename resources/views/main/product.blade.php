@extends('base.main')
@section('title')
    Produk
@endsection
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('assets/images/brake.png')}}" alt="" class="card-img-top p-5">
                        <span class="text-center">Aksesoris Motor</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
