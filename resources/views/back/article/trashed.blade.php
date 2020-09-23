@extends('back.layouts.master')
@section('title','Silienen meqaleler')
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
                        <li class="breadcrumb-item"><a href="{{route('admin.meqale.index')}}">Məqalələr</a></li>
                        <li class="breadcrumb-item active">@yield('title')- ({{$articles->count()}})</li>
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

        <div class="card">
            <div class="card-header">
{{--                <h3 class="card-title float-left ">{{$articles->count()}} - məqalə tapıldı</h3>--}}
                <a href="{{route('admin.meqale.create')}}" class="card-title float-right btn  btn-outline-primary btn-sm ">Yeni məqalə </a>
              <a href="{{route('admin.meqale.index')}}" class="card-title float-left btn  btn-outline-success btn-sm ">Aktiv məqalələr  </a>



            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>N </th>
                        <th>Foto</th>
                        <th>Kateqori</th>
                        <th>Title</th>
                        <th>Ad,Soyad</th>
                        <th>Xestelik</th>
                        <th>Islemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)

                        <tr>
                            <td >{{$article->id}}</td>
                            <td><img src="/{{$article->image}}" width="80" height="30" alt=""></td>
                            <td>{{$article->getCategory->name}}</td>
                            <td>{{Str::limit($article->title,7)}}</td>
                            <td>{{Str::limit($article->ad,20)}}</td>
                            <td>{{Str::limit($article->xesteliyi,7)}}</td>
                            <td>
                                <a href="{{route('admin.recovery.article',$article->id)}}" title="Geri qaytar" class="btn btn-sm btn-primary"><i class="fas fa-recycle nav-icon"></i> </a>
                                <a href="{{ route('admin.harddelete.article',$article->id) }}" title="Birdefelik Sil" class="btn btn-sm btn-danger"><i class="fas fa-trash nav-icon"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
