@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><a href="{{ url('/home') }}">Home</a> / Berita</div>

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
                    <a href="{{ route('blogs.create') }}" class="badge badge-primary p-2 mb-3">Tambah</a>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Tags</th>
                            <th scope="col">Publish</th>
                            <th class="text-center" scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $value)
                                <tr>
                                    <th scope="row">{{ ++$i }}</th>
                                    <td>{{ $value->title }}</td>
                                    <td>{{ $value->category->name }}</td>
                                    <td>
                                        @php
                                            $tags = explode(';',$value->tags); 
                                        @endphp
                                        @foreach ($tags as $tag)
                                            <span class="badge badge-info">{{ $tag }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ $value->is_draft ? 'Ya' : 'Tidak' }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('show',$value->slug) }}" target="_blank" class="badge badge-info">Lihat</a>
                                        <a href="{{ route('blogs.edit',$value->id) }}" class="badge badge-success">Edit</a>
                                        <a href="{{ route('blogs.destroy',$value->id) }}" class="badge badge-danger">Hapus</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">Data masih kosong</td>
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

<div class="modal fade" id="modalCategory" tabindex="-1" role="dialog" aria-labelledby="modalCategoryLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalCategoryLabel">Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('blogs.category.create') }}" method="POST" id="form-action">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Kategori</label>
                    <input type="text" name="name" placeholder="Nama Kategori" class="form-control" id="name">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        $('.call_modal').on('click', function(){
            var type = $(this).data('type');
            $('#form-action').attr('action', $(this).data('url'));
            if(type == 'update'){
                $('#name').val($(this).data('name'));
            }
        });
    </script>
@endsection