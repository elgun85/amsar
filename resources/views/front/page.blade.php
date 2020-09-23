@extends('front.layouts.master')
@section('bg',$page->image)
@section('content')
	<!--welcome-starts-->
    <div class="welcome">
        <div class="container">
            <div class="welcome-top heading">
                <h3>  {{$page->title}} </h3>
                <div class="welcome-bottom">
{{--                    <img src="{{asset('front/')}}/images/abt-1.jpg" alt=""/>--}}

                    <p> {!!$page->content!!}  </p>
                    <hr>

                </div>
            </div>

            <div class="col-md-8 about-left">
                <div class="about-one">

                    <h3>Haqqımızda</h3>
                </div>

{{--                <div class="about-tre">--}}
{{--                    <div class="a-1">--}}
{{--                        @include('front.widgets.articleList')--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection
