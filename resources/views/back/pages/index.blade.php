@extends('back.layouts.master')
@section('title','Səhifələr')
{{--@section('title2',' pageler')--}}
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
                        <li class="breadcrumb-item active">@yield('title')- ({{$pages->count()}})</li>
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

{{--                <h3 class="card-title float-left ">{{$pages->count()}} - məqalə tapıldı</h3>--}}
                <a href="{{route('admin.page.create')}}" class="card-title float-right btn  btn-outline-primary btn-sm ">Yeni Səhifə </a>
{{--              <a href="{{route('admin.trashed.page')}}" class="card-title float-left btn  btn-outline-danger btn-sm ">Silinenler </a>--}}

                <div id="orderSucces" class="alert alert-success" style="display: none;" >
                    Siralama deyisdirildi!
                </div>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>N </th>
                        <th>Foto</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Islemler</th>
                    </tr>
                    </thead>
                    <tbody id="orders">
                    @foreach($pages as $page)

                        <tr id="page_{{$page->id}}">
                            <td >{{$page->id}} <i class="fa fa-arrows-alt-v float-right  handle" style="cursor: move;">    </i></td>
                            <td><img src="/{{$page->image}}" width="80" height="50" alt=""></td>
                            <td>{{Str::limit($page->title,7)}}</td>
                                                        <td>
                                <input class="swich" page-id="{{ $page->id }}" type="checkbox" data-on="Aciq" data-off="Bagli"  data-onstyle="success" data-offstyle="danger" @if ($page->status==1) checked  @endif   data-toggle="toggle">                             </td>
                            <td>
                                <a target="_blank" href="{{route('page',$page->slug)}}" title="Goster" class="btn btn-sm btn-success"><i class="fas fa-eye nav-icon"></i> </a>
                                <a href="{{route('admin.page.edit',$page->id)}}" title="Deyis" class="btn btn-sm btn-primary"><i class="fas fa-edit nav-icon"></i> </a>
                                <a href="{{route('admin.page.delete',$page->id)}}" title="Sil" class="btn btn-sm btn-danger"><i class="fas fa-trash nav-icon"></i> </a>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>

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
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.10.2/Sortable.min.js"></script>
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>--}}


    <script>
        $('#orders').sortable(
            {
                handle:'.handle',
                update:function() {
                    var siralama = $('#orders').sortable('serialize');
                    $.get("{{ route('admin.page.orders') }}?"+siralama,function(data,status){

                        $("#orderSucces").show().delay(1000).fadeOut();
                    });

                }

            });
    </script>
    <script>


        $(function() {
            $('.swich').change(function() {

                id=$(this)[0].getAttribute('page-id');
                statu=$(this).prop('checked');

                $.get("{{route('admin.switch')}}",{id:id,statu:statu}, function(data, status){});
            })
        })
    </script>
@endsection
@endsection
