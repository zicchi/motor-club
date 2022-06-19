@extends('base.main')
@section('title')
    Kontak
@endsection
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>

        <div class="card">
            <div class="card-body">
                <dt>Nomor Handphone</dt>
                <dd>{{$contact->phone}}</dd>
                <dt>Email</dt>
                <dd>{{$contact->email}}</dd>
                <dt>Alamat</dt>
                <dd>{{$contact->address}}</dd>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4486244532613!2d112.60937572347673!3d-7.952504275950883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827f2d620975%3A0xf19b7459bbee5ed5!2sUniversitas%20Brawijaya!5e0!3m2!1sid!2sid!4v1655641585757!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
@endsection
