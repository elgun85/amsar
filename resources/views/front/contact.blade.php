@extends('front.layouts.master')
@section('bg','https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQx4w9sGEuRe88TmTY1A6Bvwthl9i5MGViLjA&usqp=CAU')
@section('content')
	<!--welcome-starts-->
    <div class="contact">
        <div class="container">
            <div class="contact-top heading">
                <h3>Bizimlə əlaqə</h3>
            </div>
            <div class="contact-bottom">
{{--                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6632.248000703498!2d151.265683!3d-33.7832959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12abc7edcbeb07%3A0x5017d681632bfc0!2sManly+Vale+NSW+2093%2C+Australia!5e0!3m2!1sen!2sin!4v1433329298259" frameborder="0" style="border:0"></iframe>--}}
                <div class="contact-text">
                    <div class="col-md-4 contact-left">
                        <h4>Sed dapibus nunc eu metus commodo, et dictum justo fermentum.</h4>
                        <p>Aliquam quis lacus at sapien tempor semper. Sed ultrices et metus et elementum. Nunc sed justo at erat consequat mollis et eu lectus.</p>
                        <div class="address">
                            <h4>Address</h4>
                            <p>The company name,
                                <span>Lorem ipsum dolor,</span>
                                Glasglow Dr 40 Fe 72.</p>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="contact-wrap w-100 p-md-5 p-4">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }} </li>
                                    @endforeach
                                </div>
                            @endif


                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}

                                    </div>
                                @endif

                            <form method="POST"  class="contactForm" action="{{route('contact.post')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{old('name')}}" name="name" id="name" placeholder="Ad,Soyad">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control"  value="{{old('email')}}" name="email" id="email" placeholder="E-poçt" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  value="{{old('telefon')}}" name="telefon" id="telefon" placeholder="Əlaqə telefonu">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control"  value="{{old('movzu')}}" name="movzu" id="movzu" placeholder="Mövzu">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control"  id="message" cols="30" rows="4" placeholder="Mətn"> {{old('message')}}  </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Göndərin" class="btn btn-primary">
                                            <div class="submitting"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
