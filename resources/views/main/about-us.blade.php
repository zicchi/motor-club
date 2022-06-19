@extends('base.main')
@section('title')
    About Us
@endsection
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>

        <p class="p-5">{{$company->about}}
        </p>

    </div>
@endsection
