@extends('base.main')
@section('title')
    Galeri
@endsection
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>

        <div class="row">
            @foreach($galleries as $gallery)
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset($gallery->image)}}" style="height: 200px" alt="" class="card-img-top">
                            <span class="text-center">{{$gallery->caption}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
