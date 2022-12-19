<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

        <div class="logo">
            <a href="#"><img src="{{ asset('file/images/logo.png') }}" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-selected active" id="home-nav" href="{{ url('/') }}#" data-tag="">Beranda</a></li>
                <li><a class="nav-selected" id="about-us-nav" href="{{ url('/') }}#about-us" data-tag="#about-us">Tentang Kami</a></li>
                <li><a class="nav-selected" id="news-nav" href="{{ url('news') }}" data-tag="">Berita</a></li>
                <li><a class="nav-selected" id="elearning-nav" href="{{ url('/') }}#elearning" data-tag="#elearning">E-Learning</a></li>
                <li><a class="nav-selected" id="services-nav" href="{{ url('/') }}#services" data-tag="#services">Produk & Layanan</a></li>
                <li><a class="nav-selected" id="contactus-nav" href="{{ url('contact-us') }}" data-tag="">Hubungi Kami</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>
