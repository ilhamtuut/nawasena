@extends('layouts.frontend.index')
@section('breadcrumbs')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Hubungi Kami</h2>
                <ol>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li>Hubungi Kami</li>
                </ol>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <div class="map-section">
        <iframe style="border:0; width: 100%; height: 350px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.0192611020117!2d110.39352752241778!3d-7.000209177534221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b16effd232b%3A0x8f61a7a4d9f1879a!2sJl.%20Srinindito%20Tim.%20IV%20No.5%2C%20Ngemplak%20Simongan%2C%20Kec.%20Semarang%20Barat%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050148!5e0!3m2!1sid!2sid!4v1670575865472!5m2!1sid!2sid"
            frameborder="0" allowfullscreen=""></iframe>
    </div>
    <section id="contact" class="contact">
        <div class="container">

            <div class="row justify-content-center aos-init aos-animate" data-aos="fade-up">

                <div class="col-lg-10">

                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi:</h4>
                                <p>Jl. Srinindito Timur IV NO.5A<br>Semarang Barat Jawa Tengah</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>kunrobbithaliman@gmail.com</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-phone"></i>
                                <h4>Telepon:</h4>
                                <p>0813-2686-0691</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row mt-5 justify-content-center aos-init aos-animate" data-aos="fade-up">
                <div class="col-lg-10">
                    <form action="{{ route('contact.send') }}" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required="">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required="">
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required=""></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit" class="w-100">Kirim</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
