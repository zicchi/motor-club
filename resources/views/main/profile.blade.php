@extends('base.main')
@section('title')
    Profile
@endsection
@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
    </ol>

    <p class="p-5">Harley Davidson Motor CLub ini, didirikan oleh Yanto Basri yang bergerak di bidang otomotif. Melalui organisasi inilah kami mampu menciptakan pengalaman berkendara yang santai, aman, dan menyenangkan bagi riders/bikers. Kami telah berhasil melestarikan budaya ditiap-tiap daerah khususnya cabang Harley Davidson Motor CLub agar selaras dengan perkembangan dunia yang dinamis. Mempromosikan sektor pariwisata yang dibungkus konsep berkelas, sehingga mampu membangkitkan pariwisata khususnya di Indonesia. Ikatan organisasi yang terus terjalin dengan Harley Davidson Motor CLub mampu merapatkan baris terdepan dalam bersosial khususnya sesama club dan masyarakat. Inovasi tinggi terhadap kecintaan kami pada bidang otomotif, diharapkan mampu berperan aktif dalam perkembangan otomotif dunia, khususnya di Indonesia.</p>

</div>
@endsection
