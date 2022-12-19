@extends('layouts.frontend.index')
@section('breadcrumbs')
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Berita</h2>
                <ol>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ url('/news') }}">Berita</a></li>
                </ol>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section id="blog" class="blog">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="{{ asset('file/images/blogs/' . $data->cover) }}" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="{{ route('show',$data->slug) }}">{{ $data->title }}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="{{ route('show',$data->slug) }}">{{ $data->user->name }}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="{{ route('show',$data->slug) }}"><time datetime="{{ date('Y-m-d',strtotime($data->created_at)) }}">{{ date('d F Y',strtotime($data->created_at)) }}</time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-facebook"></i> <a
                                        href="https://www.facebook.com/sharer.php?u={{ route('show',$data->slug) }}">Share Facebook</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-twitter"></i> <a
                                    href="https://twitter.com/intent/tweet?text={{ $data->title }}&url={{ route('show',$data->slug) }}">Share Twitter</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-whatsapp"></i> <a
                                    href="https://api.whatsapp.com/send?text={{ $data->title }}%0A%0A{{ route('show',$data->slug) }}">Share Whatsapp</a></li>
                            </ul>
                        </div>

                        {{-- <div class="entry-content"></div> --}}
                        <div class="ck-content">
                            {!! $data->content !!}
                        </div>

                        <div class="entry-footer">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#">{{ $data->category->name }}</a></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                @php
                                    $tag = explode(';', $data->tags);
                                @endphp
                                @foreach ($tag as $value)
                                    <li><a href="#">{{ $value }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                    </article><!-- End blog entry -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="{{ url('/news') }}">
                                <input type="text" name="s">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                @foreach ($categories as $value)
                                    <li><a href="{{ url('/news') }}?c={{ $value->slug }}">{{ $value->name }} <span>({{ $value->blogs_count }})</span></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach ($recents as $value)
                                <div class="post-item clearfix">
                                    <img src="{{ asset('file/images/blogs/'.$value->cover) }}" alt="">
                                    <h4><a href="{{ route('show',$value->slug) }}">{{ $value->title }}</a></h4>
                                    <time datetime="{{ date('Y-m-d',strtotime($value->created_at)) }}">{{ date('d F Y',strtotime($value->created_at)) }}</time>
                                </div>
                            @endforeach

                        </div><!-- End sidebar recent posts-->

                        <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                @foreach ($tags as $value)
                                    @if ($value)
                                        <li><a href="#">{{ $value }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section>
@endsection
