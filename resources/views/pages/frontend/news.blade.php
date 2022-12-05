@extends('layouts.frontend.index')
@section('breadcrumbs')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Berita</h2>
                <ol>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li>Berita</li>
                </ol>
            </div>
        </div>
  </section>
@endsection
@section('content')
    <section id="news" class="team">
        <div class="container" style="min-height: 65vh;">
  
          <div class="section-title aos-init aos-animate" data-aos="fade-up">
            <h2>Belum ada Berita</h2>
          </div>
  
        </div>
    </section>
@endsection
