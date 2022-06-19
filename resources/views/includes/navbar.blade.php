<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('assets/images/logo.png')}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
            <b>Harley Davidson Motor Club</b>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('profile')}}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('vision-mission')}}">Visi & Misi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product')}}">Produk Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Kontak Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
