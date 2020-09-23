@extends('front.layouts.master')
@section('title')
    Anasayfa
@endsection

@section('content')
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">


				<div class="col-md-8 about-left">
					<div class="about-one">

						<h3>Haqqımızda</h3>
					</div>
					<div class="about-two">
						<a href="single.html"><img src="{{asset('front/')}}/images/c-1.jpg" alt="" /></a>
						<p>Posted by <a href="#">Johnson</a> on 10 feb, 2015 <a href="#">comments(2)</a></p>
						<p>Phasellus fringilla enim nibh, ac pharetra nulla vestibulum ac. Donec tempor fermentum felis, non placerat sem ultrices ut. Nam molestie nunc nec felis hendrerit, in pulvinar arcu mollis. Quisque eget purus nec velit venenatis tincidunt vitae ac massa. Proin vel ornare tellus. Duis consectetur gravida tellus ut varius. Aenean tellus massa, laoreet ut euismod et, pretium id ex. Mauris hendrerit suscipit hendrerit.</p>
						<p>Quisque ultrices ligula a nisl porttitor, vitae porta tortor eleifend. Nulla nec imperdiet ipsum, ut cursus mauris. Proin ut sodales sem, quis vestibulum libero. Proin tempor venenatis congue. Phasellus mollis massa sit amet pharetra consequat. Aliquam quis lacus at sapien tempor semper. Sed ultrices et metus et elementum. Nunc sed justo at erat consequat mollis et eu lectus.</p>
						<div class="about-btn">
							<a href="single.html">Davamı</a>
						</div>
					</div>
					<div class="about-tre">
						<div class="a-1">
                            @include('front.widgets.articleList')
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
