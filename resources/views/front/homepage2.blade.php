@extends('front.layouts.master')
@section('title')
    Anasayfa
@endsection

@section('content')

    <section class="hero-wrap" style="background-image: url('{{asset('front/')}}/images/bg_1.jpg');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center">
                <div class="col-md-8 ftco-animate d-flex align-items-end">
                    <div class="text w-100">
                        <h1 class="mb-4">Good books don't give up all their secrets at once</h1>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the
                            necessary regelialia.</p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">View All Books</a> <a href="#"
                                                                                               class="btn btn-white py-3 px-4">Explore
                                Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section ftco-no-pt mt-5 mt-md-0">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-fantasy"></span>
                            </div>
                        </div>
                        <h2><a href="#">Children's Book</a></h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <h2><a href="#">Romance</a></h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-model"></span>
                            </div>
                        </div>
                        <h2><a href="#">Art &amp; Architecture</a></h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>


                <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                    <div class="services-2 text-center">
                        <div class="icon-wrap">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="flaticon-history"></span>
                            </div>
                        </div>
                        <h2><a href="#">History</a></h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-section ftco-no-pt ftco-no-pb img bg-light" id="section-counter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-4">
                        <div class="text align-items-center">
                            <strong class="number" data-number="75678">0</strong>
                            <span>Active Readers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-4">
                        <div class="text align-items-center">
                            <strong class="number" data-number="3040">0</strong>
                            <span>Total Pages</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-4">
                        <div class="text align-items-center">
                            <strong class="number" data-number="283">0</strong>
                            <span>Cup Of Coffee</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 py-4 mb-4">
                        <div class="text align-items-center">
                            <strong class="number" data-number="14500">0</strong>
                            <span>Facebook Fans</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="ftco-section ftco-no-pt">
        <div class="container-fluid px-md-4">
            <div class="row justify-content-center pb-5 mb-3">
            </div>
            <div class="row">
                <div class="col-md-10 col-lg-9 d-flex justify-content-center align-items-center">


                    <div class="col-lg-10 ftco-animate float-lg-none">
                        <div class="row">

                                <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center"
                                     style="background-image: url({{asset('front/')}}/images/about-1.jpg);">
                                </div>

                                <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
                                    <div class="heading-section">
                                        <span class="subheading">Welcome To Publishing Company</span>
                                        <h2 class="mb-4">Publishing Company Created By Authors</h2>
                                        <p>A small river named Duden flows by their place and supplies it with the
                                            necessary
                                            regelialia. It is a paradisematic country, in which roasted parts of
                                            sentences
                                            fly into your mouth.</p>
                                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where
                                            it
                                            came from it would have been rewritten a thousand times and everything that
                                            was
                                            left from its origin would be the word "and" and the Little Blind Text
                                            should
                                            turn around and return to its own, safe country.</p>
                                        <a href="#" class="btn btn-primary">View All Our Authors</a>
                                    </div>
                                </div>



                        </div>
                    </div>

                </div>


                @include('front.widgets.categoryWidgets')


            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt">
        <div class="container-fluid px-md-4">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Books</span>
                    <h2>New Release</h2>
                </div>
            </div>
            <div class="row">
                @foreach($articles as $article)
                    <div class="col-md-6 col-lg-6 d-flex">


                        <div class="book-wrap d-lg-flex">

                            <div class="img d-flex justify-content-end"
                                 style="background-image: url({{asset('front/')}}/images/book-1.jpg);">

                            </div>
                            <div class="text p-4">

                                <p class="mb-2"><span class="price">$ {{ $article->teleb_olunan}}</span></p>
                                <h2><a href="{{route('single',$article->slug)}}">{{$article->title}}</a></h2>
                                <span class="position">{{Str::limit($article->content,89)}}</span>
                                <div>

                                    <p>
                                        <a href="{{route('single',$article->slug)}}" class="btn btn-primary float-md-right ">Davamini oxu</a>
                                    </p>

                                    <br>
                                    <hr>


                                </div>
                                <p class="position">
                                   <span class="float-left">{{$article->getCategory->name}}</span>
                                   <span class="float-right">{{$article->created_at->diffForHumans()}}</span>

                                </p>




                            </div>


                        </div>



                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section ftco-no-pb">

        <div class="img img-bg border" style="background-image: url(images/bg_4.jpg);"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-3">Kinds Words From Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('front/')}}/images/person_3.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('front/')}}/images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img"
                                             style="background-image: url({{asset('front/')}}/images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Price &amp; Plans</span>
        <h2>Affordable Packages</h2>
      </div>
    </div>
        <div class="row">
            <div class="col-md-4 ftco-animate d-flex">
          <div class="block-7 w-100">
            <div class="text-center">
                <span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mo</sub></span>
                <span class="excerpt d-block">For Adults</span>
                <ul class="pricing-text mb-5">
                  <li><span class="fa fa-check mr-2"></span>Individual Counseling</li>
                  <li><span class="fa fa-check mr-2"></span>Couples Therapy</li>
                  <li><span class="fa fa-check mr-2"></span>Family Therapy</li>
                </ul>

                <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate d-flex">
          <div class="block-7 w-100">
            <div class="text-center">
                <span class="price"><sup>$</sup> <span class="number">79</span> <sub>/mo</sub></span>
                <span class="excerpt d-block">For Children</span>
                <ul class="pricing-text mb-5">
                  <li><span class="fa fa-check mr-2"></span>Counseling for Children</li>
                  <li><span class="fa fa-check mr-2"></span>Behavioral Management</li>
                  <li><span class="fa fa-check mr-2"></span>Educational Counseling</li>
                </ul>

                <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate d-flex">
          <div class="block-7 w-100">
            <div class="text-center">
                <span class="price"><sup>$</sup> <span class="number">109</span> <sub>/mo</sub></span>
                <span class="excerpt d-block">For Business</span>
                <ul class="pricing-text mb-5">
                  <li><span class="fa fa-check mr-2"></span>Consultancy Services</li>
                  <li><span class="fa fa-check mr-2"></span>Employee Counseling</li>
                  <li><span class="fa fa-check mr-2"></span>Psychological Assessment</li>
                </ul>

                <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section> -->

    <!-- <section class="ftco-appointment ftco-section img" style="background-image: url(images/bg_2.jpg);">
        <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 half ftco-animate">
                <h2 class="mb-4">Send a Message &amp; Get in touch!</h2>
                <form action="#" class="appointment">
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email">
                    </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <div class="form-field">
                              <div class="select-wrap">
                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
                      <select name="" id="" class="form-control">
                          <option value="">Services</option>
                        <option value="">Relation Problem</option>
                        <option value="">Couple Counseling</option>
                        <option value="">Depression Treatment</option>
                        <option value="">Family Problem</option>
                        <option value="">Personal Problem</option>
                        <option value="">Business Problem</option>
                      </select>
                    </div>
                      </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                      <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                      <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
                    </div>
                            </div>
                    </div>
          </form>
            </div>
        </div>
    </div>
</section> -->

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                @foreach($articles as $article)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <div class="text text-center">
                                <a href="blog-single.html" class="block-20 img"
                                   style="background-image: url('{{asset('front/')}}/images/image_1.jpg');">
                                </a>
                                {{--                            <div class="meta text-center mb-2 d-flex align-items-center justify-content-center">--}}
                                {{--                                <div>--}}
                                {{--                                    <span class="day">02</span>--}}
                                {{--                                    <span class="mos">May</span>--}}
                                {{--                                    <span class="yr">2020</span>--}}
                                {{--                                </div>--}}
                                {{--                            </div>--}}
                                <h3 class="heading mb-3"><a href="#">New Friends With Books</a></h3>
                                <p>A small river named Duden flows by their place and supplies it with the necessary
                                    regelialia.</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

