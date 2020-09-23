@extends('back.layouts.master')
@section('title','Kateqoriyalar')
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
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-5">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Yeni Kateqoriya yukle</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                        <i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{route('admin.category.create')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="kateqoriya" placeholder="Kateqoriya adi yazin">
                                    </div>
                                    <div class="form-group ">
                                        <button type="submit" class="btn btn-outline-primary btn-sm float-right">Yukle</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->

                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>



                    <div class="col-7">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Butun kateqoriyalar</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                        <i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Ad</th>
                                            <th>sayi</th>
                                            <th>Durum</th>
                                            <th>islemler</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $categori)
                                            <tr>

                                                <td>         {{ $categori->name }}          </td>
                                                <td>         {{ $categori->articleCount() }}          </td>


                                                <td>
  <input class="swich" categori-id="{{ $categori->id }}" type="checkbox" data-on="Aciq" data-off="Bagli"  data-onstyle="success" data-offstyle="danger" @if ($categori->status==1) checked  @endif   data-toggle="toggle">
                                                </td>

                                                <td>

<a category-id="{{ $categori->id }}" class="btn btn-sm btn-primary  edit-click" title="Deyis"><i class="fa fa-edit text-white"></i></a>
<a category-id="{{ $categori->id }}"  category-name="{{ $categori->name }}" category-count="{{ $categori->articleCount() }}" class="btn btn-sm btn-danger  remove-click" title="Sil"><i class="fa fa-trash text-white"></i></a>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Modal  edit-->
    <div id="editModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Kateqoriya deyisim</h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.category.update')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input id="category" type="text" name="kateqoriya" placeholder="yeni kateqoriya adini yazin" class="form-control">
                            <input type="hidden" name="id" id="category_id">
                        </div>
                        <div class="form-group">
                            <input id="slug" type="text" name="slug" placeholder="yeni slug adini yazin" class="form-control">
                        </div>
                </div>

                <div class="modal-header">
                    <div id="alertModal"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Bagla</button>
                    <button type="submit" class="btn btn-outline-primary" >Deyis</button>
                </div>
                </form>
            </div>

        </div>
    </div>

    <!-- Modal  delete-->
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h4 class="modal-title">Kateqoriya sil</h4>
                </div>

                <div id="body" class="modal-body">
                    <div class="alert alert-danger" id="articleAlert"></div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Bagla</button>
                    <form action="{{ route('admin.category.delete') }}" method="post">
                        @csrf
                        <input type="hidden" id="deleteId" name="id">
                        <button  id="deleteButton" type="submit" class="btn btn-outline-primary" >Sil</button>
                    </form>

                </div>
                </form>
            </div>

        </div>
    </div>

@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $(function() {

            $('.remove-click').click(function () {
                id=$(this)[0].getAttribute('category-id');
                count=$(this)[0].getAttribute('category-count');
                name=$(this)[0].getAttribute('category-name');
                if (id==0)
                {
                    $('#articleAlert'). html(name+ ' - kateqoriyani silmek qadagandir');
                    $('#body'). show();
                    $('#deleteButton'). hide();
                    $('#deleteModal').modal();
                    return;
                }

                $('#deleteButton'). show();
                $('#deleteId'). val(id);
                $('#articleAlert'). html('');
                $('#body'). hide();
                if (count>0) {
                    $('#articleAlert'). html(name+ ' kateqoriyaya aid '+count+'  sayda meqale var,Silmek ucun eminsinizmi?');
                    $('#body'). show();
                }
                $('#deleteModal').modal();

            });

            $('.edit-click').click(function () {
                id=$(this)[0].getAttribute('category-id');
                $.ajax({
                    type:'GET',
                    url:'{{route('admin.category.getdata')}}',
                    data:{id:id},
                    success:function (data) {
                        console.log(data);
                        $('#category').val(data.name);
                        $('#slug').val(data.slug);
                        $('#category_id').val(data.id);
                        $('#editModal').modal();
                    }
                });

            });



            $('.swich').change(function() {
                id=$(this)[0].getAttribute('categori-id');
                statu=$(this).prop('checked');

                $.get("{{route('admin.category.switch')}}",{id:id,statu:statu}, function(data, status){});
            })
        })

    </script>
@endsection
@endsection
