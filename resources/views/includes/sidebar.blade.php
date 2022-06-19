<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light text">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link align-middle px-0 text-dark">
                            <i class="fa fa-dashboard"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('gallery')}}" class="nav-link align-middle px-0 text-dark">
                            <i class="fa fa-camera"></i> <span class="ms-1 d-none d-sm-inline">Galeri Foto</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('client')}}" class="nav-link align-middle px-0 text-dark">
                            <i class="fa fa-user"></i> <span class="ms-1 d-none d-sm-inline">Klien Kami</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col py-3">
            @yield('content')
        </div>
    </div>
</div>
