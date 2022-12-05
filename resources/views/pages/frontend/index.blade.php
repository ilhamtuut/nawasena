@extends('layouts.frontend.index')
@section('hero')
    
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active"
                    style="background-image: url({{ asset('frontassets/img/slide/slide-1.jpg') }});">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>CV NAWASENA WIGUNA SEMESTA</h2>
                            <p>CV Nawasena Wiguna Semesta sebagai perusahaan yang bergerak dibidang Pengadaan Barang dan Jasa serta Pekerjaan Konstruksi.</p>
                            <div class="text-center">
                                <a href="#" class="btn-get-started"><img height="25px" src="{{ asset('file/images/handshake.svg') }}"> Bergabunglah dengan kami</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url({{ asset('frontassets/img/slide/slide-2.jpg') }});">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>CV NAWASENA WIGUNA SEMESTA</h2>
                            <p>CV Nawasena Wiguna Semesta sebagai perusahaan yang bergerak dibidang Pengadaan Barang dan Jasa serta Pekerjaan Konstruksi.</p>
                            <div class="text-center">
                                <a href="#" class="btn-get-started"><img height="25px" src="{{ asset('file/images/handshake.svg') }}"> Bergabunglah dengan kami</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url({{ asset('frontassets/img/slide/slide-3.jpg') }});">
                    <div class="carousel-container">
                        <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>CV NAWASENA WIGUNA SEMESTA</h2>
                            <p>CV Nawasena Wiguna Semesta sebagai perusahaan yang bergerak dibidang Pengadaan Barang dan Jasa serta Pekerjaan Konstruksi.</p>
                            <div class="text-center">
                                <a href="#" class="btn-get-started"><img height="25px" src="{{ asset('file/images/handshake.svg') }}"> Bergabunglah dengan kami</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section>
    <!-- End Hero -->
@endsection
@section('content')
    <section id="about-us" class="about-us">
        <div class="container">

            <div class="row no-gutters">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start aos-init aos-animate"
                    data-aos="fade-right"></div>
                <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                    <div class="content d-flex flex-column justify-content-center">
                        <h3 data-aos="fade-up" class="aos-init aos-animate mb-3">Tentang <span>Kami</span></h3>
                        <p data-aos="fade-up" class="aos-init aos-animate">
                            CV. Nawasena Wiguna Semesta berdiri sejak 11 November tahun 2022. Dengan
                            mengedepankan kualitas pelayanan serta berkomitmen memberikan kepuasan
                            pelanggan CV. Nawasena Wiguna Semesta berkeyakinan menjadi Perusahaan yang
                            akan terus berkembang serta mampu berdaya saing di tengah era globalisasi dunia.
                        </p>
                        <div class="row">
                            <div class="col-md-12 icon-box aos-init aos-animate" data-aos="fade-up">
                                <i class="bx bx-receipt"></i>
                                <h4>Visi</h4>
                                <p>Sebagai Mitra dan Partner yang memberikan kwalitas layanan terbaik untuk Masa Depan yang lebih Baik</p>
                            </div>
                            <div class="col-md-12 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Misi</h4>
                                <ol style="font-size: 15px; color: #90847f; margin-left: 60px;padding-inline-start: 15px;">
                                    <li>Menjadi Perusahaan yang Kompeten (Competent), Profesional (Professional), dan dapat dipercaya (Trust & Responsibility).</li>
                                    <li>Mengembangkan usaha dan mengedepankan kualitas
                                        pelayanan serta berkomitmen memberikan kepuasan
                                        pelanggan dengan menjaga mutu pekerjaan, harga dan 
                                        waktu pengerjaan.</li>
                                    <li>Menjadi Perusahaan yang dapat membuka lapangan 
                                        pekerjaan yang memiliki masa depan yang lebih baik serta 
                                        memberikan kesempatan karier pada SDM potensial.</li>
                                    <li>Menjadi Perusahaan yang memiliki Inovasi dan 
                                        Kreatifitas tinggi.</li>
                                    <li>Menjadi Perusahaan yang akan terus berkembang serta 
                                        mampu berdaya saing di tengah era globalisasi dunia.</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section>
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center text-lg-left">
                    <h3>Siap Bermitra dengan <span>CV Nawasena Wiguna Semesta?</span></h3>
                    <a class="cta-btn align-middle" href="#"><i class="bi bi-telephone"></i> Hubungi Kami</a>
                </div>
            </div>

        </div>
    </section>
    <!-- End Cta Section -->

    <section id="elearning" class="team">
        <div class="container">
    
            <div class="section-title aos-init aos-animate" data-aos="fade-up">
            <h2>E-Learning</h2>
            </div>
    
            <div class="row">
    
            <div class="col-lg-4 col-md-3 d-flex align-items-stretch"></div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                <div class="member aos-init aos-animate" data-aos="fade-up">
                <div class="member-img">
                    <img src="{{ asset('file/images/thumbnail-pdf.png') }}" class="img-fluid" alt="">
                </div>
                <div class="member-info">
                    <h4>PROFIL PERUSAHAAN</h4>
                    <a class="btn btn-primary" style="background-color: #334e97;" href="{{ asset('file/pdf/Nawasena.pdf') }}" download><i class="bi bi-download"></i> Download</a>
                </div>
                </div>
            </div>
    
            </div>
    
        </div>
    </section>

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2 class="mb-0">Produk & <strong>Layanan</strong></h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up">
                        <div class="icon"><i class="bi bi-laptop"></i></div>
                        <h4 class="title"><a href="">Komputer & Aksesoris</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">Alat Tulis Kantor</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-phone"></i></div>
                        <h4 class="title"><a href="">Elektronik</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-binoculars"></i></div>
                        <h4 class="title"><a href="">Daya & Jasa</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">Kebutuhan Pendidikan</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        <h4 class="title"><a href="">Pekerjaan Sipil</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6"></div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bi bi-filter-square"></i></div>
                        <h4 class="title"><a href="">Perdagangan dan Pelayanan Komoditi Lainnya </a></h4>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2 class="mb-0">Produk <strong>Kami</strong></h2>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Komputer & Aksesoris</li>
                        <li data-filter=".filter-card">Alat Tulis Kantor</li>
                        <li data-filter=".filter-web">Elektronik</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="{{ asset('frontassets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Komputer & Aksesoris</h4>
                        <a href="{{ asset('frontassets/img/portfolio/portfolio-1.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Komputer & Aksesoris"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="{{ asset('frontassets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Elektronik</h4>
                        <a href="{{ asset('frontassets/img/portfolio/portfolio-2.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Elektronik"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="{{ asset('frontassets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Komputer & Aksesoris</h4>
                        <a href="{{ asset('frontassets/img/portfolio/portfolio-3.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Komputer & Aksesoris"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="{{ asset('frontassets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Alat Tulis Kantor</h4>
                        <a href="{{ asset('frontassets/img/portfolio/portfolio-4.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Alat Tulis Kantor"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="{{ asset('frontassets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Elektronik</h4>
                        <a href="{{ asset('frontassets/img/portfolio/portfolio-5.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Elektronik"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="{{ asset('frontassets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Komputer & Aksesoris</h4>
                        <a href="{{ asset('frontassets/img/portfolio/portfolio-6.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Komputer & Aksesoris"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="{{ asset('frontassets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Alat Tulis Kantor</h4>
                        <a href="{{ asset('frontassets/img/portfolio/portfolio-7.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Alat Tulis Kantor"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="{{ asset('frontassets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Alat Tulis Kantor</h4>
                        <a href="{{ asset('frontassets/img/portfolio/portfolio-8.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Alat Tulis Kantor"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="{{ asset('frontassets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>Elektronik</h4>
                        <a href="{{ asset('frontassets/img/portfolio/portfolio-9.jpg') }}"
                            data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Elektronik"><i
                                class="bx bx-plus"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <section id="buyme" class="cta">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center text-lg-left">
                    <h3>Ingin membeli produk Kami?</h3>
                    <p>Silahkan langsung menghubungi kami dengan menekan tombol dibawah ini.</p>
                    <a class="cta-btn align-middle" href="#"> <i class="bi bi-cart"></i> Beli Sekarang</a>
                </div>
            </div>

        </div>
    </section>

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Mitra <strong>Kami</strong></h2>
            </div>

            <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('frontassets/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('frontassets/img/clients/client-2.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('frontassets/img/clients/client-3.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('frontassets/img/clients/client-4.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('frontassets/img/clients/client-5.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('frontassets/img/clients/client-6.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('frontassets/img/clients/client-7.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('frontassets/img/clients/client-8.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Our Clients Section -->
@endsection
