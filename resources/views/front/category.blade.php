@extends('front.layouts.master')
@section('title',$category->name."-a aid ". count($articles)." mövzu tapıldı")


@section('content')
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">


					<div class="about-tre">
						<div class="a-1">
@if(count($articles)>0)
    @include('front.widgets.articleList')
                                @else
                            <div class="alet alert-danger text-center">
                                <h3>Bu kateqoriyaya aid yazi tapilmadi</h3>
                            </div>
                           @endif
						</div>
					</div>
                    <div class="clearfix"></div>
				</div>
				<div class="col-md-4 about-right heading">
                        @include('front.widgets.categoryWidgets')
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--about-end-->
	<!--slide-starts-->
    @include('front.widgets.slide')
	<!--slide-end-->
@endsection
