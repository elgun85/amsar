@extends('back.layouts.master')
@section('title','Məqalələr')
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
              <a href="{{route('admin.trashed.article')}}" class="card-title float-left btn  btn-outline-danger btn-sm ">Silinenler </a>



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
                        <th>Status</th>
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
                                <input class="swich" article-id="{{ $article->id }}" type="checkbox" data-on="Aciq" data-off="Bagli"  data-onstyle="success" data-offstyle="danger" @if ($article->status==1) checked  @endif   data-toggle="toggle">                             </td>
                            <td>
                                <a target="_blank" href="{{ route('single',[$article->getCategory->slug,$article->slug]) }}" title="Goster" class="btn btn-sm btn-success"><i class="fas fa-eye nav-icon"></i> </a>
                                <a href="{{route('admin.meqale.edit',$article->id)}}" title="Deyis" class="btn btn-sm btn-primary"><i class="fas fa-edit nav-icon"></i> </a>
                                <a href="{{ route('admin.delete.article',$article->id) }}" title="Sil" class="btn btn-sm btn-danger"><i class="fas fa-trash nav-icon"></i> </a>
                            </td>

                        </tr>
                    @endforeach







                    </tbody>
{{--                    <tfoot>--}}
{{--                    <tr>--}}
{{--                        <th>Rendering engine</th>--}}
{{--                        <th>Browser</th>--}}
{{--                        <th>Platform(s)</th>--}}
{{--                        <th>Engine version</th>--}}
{{--                        <th>CSS grade</th>--}}
{{--                    </tr>--}}
{{--                    </tfoot>--}}
                </table>
            </div>
            <!-- /.card-body -->
        </div>


    </div>
@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

@endsection

@section('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script>


        $(function() {
            $('.swich').change(function() {

                id=$(this)[0].getAttribute('article-id');
                statu=$(this).prop('checked');

                $.get("{{route('admin.switch_a')}}",{id:id,statu:statu}, function(data, status){});
            })
        })
    </script>
@endsection
@endsection
