@extends('base.main')
@section('title')
    Visi dan Misi
@endsection
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>


        <h4 class="fw-bold">Visi</h4>
        <div class="col-md-6">
            <hr>
            {{$vision->value}}
        </div>

        <h4 class="fw-bold mt-5">Misi</h4>
        <div class="col-md-6">
            <hr>
            @foreach($missions as $mission)
                 {{$loop->index + 1}}. {{$mission->value}}<br>
            @endforeach
        </div>

    </div>
@endsection
