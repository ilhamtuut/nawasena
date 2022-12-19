@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><a href="{{ url('/home') }}">Home</a> / Kontak</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('failed'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('failed') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            @foreach ($errors->all() as $error)
                                <li style="list-style:none;">{{ $error }}</li>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subjek</th>
                            <th scope="col">Pesan</th>
                            <th scope="col">Status</th>
                            <th class="text-center" scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $value)
                                <tr>
                                    <th scope="row">{{ ++$i }}</th>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->subject }}</td>
                                    <td>{{ $value->message }}</td>
                                    <td>{!! $value->status ? '<span class="badge badge-success">Sudah Balas</span>' : '<span class="badge badge-danger">Belum Balas</span>' !!}</td>
                                    <td class="text-center">
                                        <a href="mailto:{{ $value->email }}?subject={{ $value->subject }}&body={{ $value->message }}" class="badge badge-info">Send Email</a>
                                        <a href="{{ route('contact.update',$value->id) }}" class="badge badge-primary">Update Status Balas</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Data masih kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{$data->render('vendor.pagination.bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        
    </script>
@endsection
