@extends('back.layouts.master')
@section('title',' Yeni Səhifə')
{{--@section('title2',' Meqaleler')--}}
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Homepage</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                           <a href="{{route('homepage')}}" target="_blank"><h3 class="breadcrumb-item btn btn-block btn-outline-primary btn-sm ">Front</h3></a>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }} </li>
                        @endforeach
                    </div>

                @endif
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <form role="form" enctype="multipart/form-data" method="post" action="{{route('admin.page.create.menu')}}">
                            @csrf
            <div class="card-body">

                <div class="form-group">

                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                            <label class="custom-file-label" for="exampleInputFile">Foto</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Title" name="title" required>
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="content" rows="5" id="summernote">
                    </textarea>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>

            </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection
@section('js')


    <script src="{{asset('back/')}}/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <script src="{{asset('back/')}}/plugins/moment/moment.min.js"></script>
    <script src="{{asset('back/')}}/plugins/select2/js/select2.full.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();

        });
    </script>

@endsection
