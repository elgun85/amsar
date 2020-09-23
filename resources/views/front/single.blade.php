@extends('front.layouts.master')
@section('bg','/'.  $article->image)
@section('content')
	<!--welcome-starts-->
    <div class="welcome">
        <div class="container">
            <div class="welcome-top heading">
                <h3>{{$article->title}}</h3>
                <br>
{{--                <div align="center">                <img style="width: 600px" height="auto" src="{{asset($article->image)}}" alt="">--}}
                </div>
                <div class="welcome-bottom">
{{--                    <img src="{{asset('front/')}}/images/abt-1.jpg" alt=""/>--}}
                    <p>{!! $article->content !!}</p>
                    <hr>
<table>
    <tr><th>Xəsteliyi: </th> <td width="250px"> {{ $article->xesteliyi}}</td></tr>
    <tr><th>Ünvanı: </th> <td> {{ $article->unvani}}</td></tr>
    <tr><th>Əlaqə vasitələri: </th> <td > {{ $article->elaqe1 }} , {{  $article->elaqe2}}  </td> </tr>
    <tr><th>Bank hesabı: </th> <td> {{ $article->hesab}} - {{ $article->hesab_bank}}</td></tr>
    <tr><th>Tələb olunan : </th> <td> {{ $article->teleb_olunan}}</td></tr>
    <tr><th>Tərəfimizdən verilən: </th> <td> {{ $article->verilen}}</td></tr>

</table>
<span class="text-danger">Baxilma sayi: <b >{{$article->hit}}</b>  </span>
                </div>
            </div>
        </div>
    </div>
    @include('front.widgets.slide')
@endsection
