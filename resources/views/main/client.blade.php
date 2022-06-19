@extends('base.main')
@section('title')
    Klien Kami
@endsection
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$client->name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
