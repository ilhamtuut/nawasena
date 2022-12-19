@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="card-deck">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Berita</h5>
                                    <p class="card-text">{{ $blogs }}</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"><a href="{{ route('blogs.index') }}" class="btn btn-sm btn-primary">Detail</a></small>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Kategori</h5>
                                    <p class="card-text">{{ $categories }}</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"><a href="{{ route('blogs.category') }}" class="btn btn-sm btn-primary">Detail</a></small>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Kontak</h5>
                                    <p class="card-text">{{ $contacts }}</p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"><a href="{{ route('contact.index') }}" class="btn btn-sm btn-primary">Detail</a></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
