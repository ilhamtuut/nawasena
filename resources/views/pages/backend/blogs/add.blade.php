@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><a href="{{ route('blogs.index') }}">Berita</a> / Tambah Berita</div>

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

                        <form action="{{ route('blogs.store') }}" method="POST" id="form-action" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="inputAddress">Judul</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Judul">
                            </div>
                            <div class="form-group">
                                <label for="cover">Cover</label>
                                <div class="mb-2 d-none" id="area-cover">
                                    <img id="cover-img" src="#" class="img-fluid w-50">
                                </div>
                                <input id="cover" name="cover" type="file" class="form-control" rows="10"/>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="category">Kategori</label>
                                    <select id="category" name="category" type="text" class="form-control select2 w-100">
                                        <option value="">Pilih Kategori</option>
                                        @foreach ($categories as $value)
                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="draft">Publish</label>
                                    <select id="draft" name="draft" type="text" class="form-control select2 w-100" data-minimum-results-for-search="Infinity">
                                        <option value="1">Ya</option>
                                        <option value="2">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group"><label for="tags">Tags</label>
                                <select id="tags" name="tags[]" type="text" class="form-control select-tag w-100" multiple="multiple">
                                    @foreach ($tags as $value)
                                        <option value="{{ $value }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="content">Konten</label>
                                <textarea id="content" name="content" type="text" class="form-control" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary w-100 btn-submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .select2-container .select2-selection--single{
            height: 38px !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered{
            line-height: 36px !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow{
            height: 38px !important;
        }
        .select2-container .select2-selection--multiple{
            min-height: 38px !important;
        }

        .select2-container .select2-search--inline .select2-search__field{
            height: 24px !important;
        }

        .ck-editor__editable {
            min-height: 500px;
        }
    </style>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('.select2').select2();

            $('.select-tag').select2({
                tags: true,
                tokenSeparators: [',', ' '],
                placeholder: {
                    id: '-1', // the value of the option
                    text: 'Tags'
                },
                createTag: function (params) {
                    var term = $.trim(params.term);

                    if (term === '') {
                        return null;
                    }

                    return {
                        id: term,
                        text: term,
                        newTag: true // add additional parameters
                    }
                }
            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#area-cover').removeClass('d-none');
                        $('#cover-img').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#cover").change(function(){
                readURL(this);
            });

            $('.btn-submit').click(function(){
                $(this).attr('disabled','disabled');
                $('#form-action').submit();
            });
        });
    </script>
@endsection
