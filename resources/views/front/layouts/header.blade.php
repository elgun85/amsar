
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') {{$config->title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="{{$config->keywords}}" />
    <link rel="shortcut icon" type="image/png" href="{{asset($config->favicon)}}"/>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{asset('front/')}}/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="{{asset('front/')}}/css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('front/')}}/js/jquery.min.js"></script>

    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="{{asset('front/')}}/js/move-top.js"></script>
    <script type="text/javascript" src="{{asset('front/')}}/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!--start-smoth-scrolling-->
</head>
<body>
<!--header-top-starts-->
<div class="header-top">
    <div class="container">
        <div class="head-main">
            @if($config->logo!=null)
            <a href="{{route('homepage')}}"><img height="150px" src="{{asset($config->logo)}}"  title="{{$config->title}}" alt="" /></a>
            @else
            {{$config->title}}
            @endif
        </div>
    </div>
</div>
<!--header-top-end-->
<!--start-header-->
<div class="header">
    <div class="container">
        <div class="head">
            <div class="navigation">
                <span class="menu"></span>
                <ul class="navig">
                    <li><a href="{{route('homepage')}}"  class="active">Ana Səhifə</a></li>


                    @foreach($pages as $page)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('page',$page->slug)}}">{{ $page->title }}</a>
                        </li>
                    @endforeach
                    <li><a href="{{route('contact')}}" class="active">Əlaqə</a></li>
                </ul>
            </div>
            <div class="header-right">
                <div class="search-bar">
                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- script-for-menu -->
<!-- script-for-menu -->
<script>
    $("span.menu").click(function(){
        $(" ul.navig").slideToggle("slow" , function(){
        });
    });
</script>
<!-- script-for-menu -->

<!--banner-starts-->
<div class="banner">

{{--        <div class="banner-top" style="--}}
{{--            background:url(@yield('bg',asset('front/images/banner.jpg'))) no-repeat;--}}
{{--            height:cover ;--}}
{{--             width: 1200px;--}}
{{--            background-size:auto;--}}
{{--            -webkit-background-size:cover;--}}
{{--            -moz-background-size:cover;--}}
{{--            -o-background-size:cover;--}}
{{--            -ms-background-size:cover;--}}
{{--            position:relative;--}}
{{--            ">--}}

<div class="container">
    <img style="  height: 600px;width: 1140px " src="@yield('bg',asset('front/images/banner.jpg')) " alt="">

</div>
        </div>

</div>
<!--banner-end-->
