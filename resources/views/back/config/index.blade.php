@extends('back.layouts.master')
@section('title','Ayarlar')
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
{{--                            <button type="submit"  class="btn btn-block btn-outline-primary btn-sm  ">Daxil ol</button>--}}

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

<div class="card-body">
    <form action="{{ route('admin.config.update') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group">

                        <img src="/{{ $config->logo }}" alt="" style="width: 100px;height: 120px">

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="logo" value="{{$config->logo}}">
                            <label class="custom-file-label" for="exampleInputFile">Logo</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group">
                        <img src="/{{ $config->favicon }}" alt="" style="width: 100px;height: 120px"> <br>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="favicon" value="{{$config->favicon}}">
                            <label class="custom-file-label" for="exampleInputFile">Favicon</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$config->title}}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Url</label>
                    <input type="text" name="url" class="form-control" value="{{$config->url}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Description</label>
                    <input type="text" name="description" class="form-control" value="{{$config->description}}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Author</label>
                    <input type="text" name="author" class="form-control" value="{{$config->author}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Keywords</label>
                    <input type="text" name="keywords" class="form-control" value="{{$config->keywords}}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Tel</label>
                    <input type="text" name="tel" class="form-control" value="{{$config->tel}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Instagram</label>
                    <input type="text" name="instagram" class="form-control" value="{{$config->instagram}}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Facebook</label>
                    <input type="text" name="facebook" class="form-control" value="{{$config->facebook}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Youtube</label>
                    <input type="text" name="youtube" class="form-control" value="{{$config->youtube}}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Veziyyeti</label>
                    <select name="active" class="form-control" data-placeholder="Select a State" style="width: 100%;" required>

                        <option @if($config->active==1) selected @endif value="1">Açiq</option>
                        <option @if($config->active==0) selected @endif value="0">Bağlı</option>
                    </select>
                </div>
            </div>
        </div>


<div class="form-group">
    <button type="submit" class="btn btn-block btn-md btn-outline-primary">Yenile</button>
</div>
    </form>
</div>

@endsection
