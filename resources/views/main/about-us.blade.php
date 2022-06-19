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

        <p class="p-5">Tahun 2017 merupakan awalan yang baik terhadap sejarah berdirinya Harley Davidson Motor Club. Disambut pergerakan grafik pariwisata dan ekonomi yang meningkat, mampu menumbuhkan optimisme terhadap perkembangan Harley Davidson Motor Club. Berawal dari ketertarikan dengan motor Harley menjadikan gagasan yang perlu diwujudkan guna mewadahi rasa dan karsa dari pecinta otomotif, khususnya motor Harley). Harley Davidson Motor Club ini, didirikan oleh Yanto Basri bersama dengan rekan-rekan pecinta otomotif. Maka dibentuklah Harley Davidson Motor Club ini pada 17-2-2015 dan telah berkembang di beberapa daerah seperti Surabaya, Jakarta, DIY, dan beberapa kota besar lainnya.
        </p>

    </div>
@endsection
