@extends('back.layouts.master')
@section('title',' Yeni Məqalə')
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
                        <form role="form" enctype="multipart/form-data" method="post" action="{{route('admin.meqale.store')}}">
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
                    <select name="kateqoriya" class="form-control" data-placeholder="Select a State" style="width: 100%;" required>
                        <option value="">Kateqoyira</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Title" name="title" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ad,soyad" name="ad" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Xəstəliyi " name="xesteliyi">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Ünvanı " name="unvan">
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="number" name="teleb" class="form-control" placeholder="Tələb olunan məbləğ" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="number" name="verilen" class="form-control" placeholder="Verilən məbləğ">
                        </div>
                    </div>
                </div>
            </div>
                    </div>
                    <div class="col-md-6">

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Əlaqə_ad " name="ad_elaqe_1">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="number" class="form-control" name="elaqe_1">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">

                        <div class="form-group">

                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Əlaqə_ad-2 " name="ad_elaqe_2">

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="number" class="form-control"  name="elaqe_2">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <select name="elan_goster" class="form-control" data-placeholder="Select a State" style="width: 100%;" required>
                                <option value="" >Status</option>
                                <option value="1">Açiq</option>
                                <option value="0">Bağlı</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <select name="veziyyeti" class="form-control" data-placeholder="Select a State" style="width: 100%;" required>
                                <option value="" >Elan</option>
                                <option value="tecili">Tecili</option>
                                <option value="aktiv">Aktiv</option>
                                <option value="bitmis">Bitmis</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <select name="cins" class="form-control" data-placeholder="Select a State" style="width: 100%;" required>
                                <option value="">Cinsi</option>
                                <option value="kisi">Kişi</option>
                                <option value="qadin">Qadın</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="input-group date"  id="reservationdate" data-target-input="nearest">
                                <input type="text" name="tarix" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-6">

                        <div class="form-group">
                            <input type="text" name="hesab_bank" class="form-control" placeholder="bank_ad">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="number" name="bank_kodu" class="form-control" placeholder="bank kodu">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="content" rows="5" id="summernote">
                    </textarea>
                </div>
            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </form>
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
