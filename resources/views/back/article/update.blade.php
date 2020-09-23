@extends('back.layouts.master')
@section('title',$article->title.'  məqaləni deyis')
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
                        <form role="form" method="post" enctype="multipart/form-data" action="{{route('admin.meqale.update',$article->id)}}">
                            @method('PUT')
                            @csrf
            <div class="card-body">

                <div class="form-group">
                    <img src="/{{ $article->image }}" class=" rounded" alt="" width="80" height="70" >
                    <br>
                    <br>

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
                        <option @if($article->category_id==$category->id) selected  @endif value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$article->title}}" name="title" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$article->ad}}" name="ad" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$article->xesteliyi}}" name="xesteliyi">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$article->unvani}}" name="unvan">
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="number" name="teleb" class="form-control" value="{{$article->teleb_olunan}}" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="number" name="verilen" class="form-control" value="{{$article->verilen}}">
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
                            <input type="text" class="form-control" id="exampleInputEmail1" value="{{$article->ad_elaqe1}}" " name="ad_elaqe_1">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" name="elaqe_1" value="{{$article->elaqe1}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">

                        <div class="form-group">

                            <input type="text" class="form-control" id="exampleInputEmail1" value="{{$article->ad_elaqe2}}" " name="ad_elaqe_2">

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control"  name="elaqe_2" value="{{$article->elaqe2}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <select name="elan_goster" class="form-control" data-placeholder="Select a State" style="width: 100%;" required>

                                @if($article->status=='1')
                                    <option value="1" selected="">Açıq</option>
                                    <option value="0">Bağlı</option>

                                @endif

                                @if($article->status=='0')
                                    <option value="0" selected="">Bağlı</option>
                                    <option value="1" >Açıq</option>

                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <select name="veziyyeti" class="form-control" data-placeholder="Select a State" style="width: 100%;" required>
                                @if($article->status_2=='tecili')
                                    <option value="tecili" selected="">Təcili</option>
                                    <option value="aktiv">Aktiv</option>
                                    <option value="bitmis">Bimiş</option>
                                @endif
                                @if($article->status_2=='aktiv')
                                    <option value="aktiv" selected="">Aktiv</option>
                                    <option value="tecili" >Təcili</option>
                                    <option value="bitmis">Bimiş</option>
                                @endif
                                @if($article->status_2=='bitmis')
                                    <option value="bitmis" selected="">Bimiş</option>
                                    <option value="tecili" >Təcili</option>
                                    <option value="aktiv">Aktiv</option>

                                @endif
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-6">
                        <div class="form-group">
                            <select name="cins" class="form-control" data-placeholder="Select a State" style="width: 100%;" required>
                                @if($article->cins=='kisi')
                                    <option value="kisi" selected="">kisi</option>
                                    <option value="qadin">qadin</option>
                                @endif
                                @if($article->cins=='qadin')
                                    <option value="qadin" selected="">qadin</option>
                                    <option value="kisi">kisi</option>
                                @endif

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div class="input-group date"  id="reservationdate" data-target-input="nearest">
                                <input type="text" name="tarix" value="{{ $article->dogum_tarixi }}" class="form-control datetimepicker-input" data-target="#reservationdate"/>
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
                            <input type="text" name="hesab_bank" class="form-control" value="{{$article->hesab}}">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="number" name="bank_kodu" class="form-control" value="{{$article->hesab_bank}}">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="content" rows="5" id="summernote">
                        {!! $article->content !!}
                    </textarea>
                </div>
            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-block">Deyis</button>
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
