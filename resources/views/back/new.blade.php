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
        <!-- /.content-header -->

        <!-- Main content -->

        <!-- /.content -->
    </div>
@endsection
