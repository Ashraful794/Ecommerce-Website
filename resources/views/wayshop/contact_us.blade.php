@extends('wayshop.layouts.master')
@section('content')
<body>
<!-- Start Slider -->
<div id="slides-shop" class="cover-slides">
    @if(Session::has('flash_message_success'))
    <div class="alert alert-sm alert-success alert-block" role="alert">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
       <strong>{!! session('flash_message_success') !!}</strong>
    </div>
    @endif
    <ul class="slides-container">
        @foreach($banners as $banner)
        <li class="{{$banner->text_style}}">
        <img src="uploads/banners/{{$banner->image}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>{!!$banner->name!!}</strong></h1>
                        <p class="m-b-40">{!!$banner->content!!}</p>
                    <p><a class="btn hvr-hover" href="{{$banner->link}}">Shop New</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>
<!-- End Slider -->
<div class="contact-box-main">

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="contact-info-left">
                    <ul>
                        <li>
                            <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12">
                <div class="contact-form-right">
                    <form name="contact_us" method="post" action="{{url('/contact_us')}}">{{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required data-error="Please enter your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn hvr-hover" id="submit" type="submit">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Instagram Feed  -->
<div class="instagram-box">
    <div class="main-instagram owl-carousel owl-theme">
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-01.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-02.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-03.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-04.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-05.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-06.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-07.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-08.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-09.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="ins-inner-box">
                <img src="{{asset('front_assets/images/instagram-img-05.jpg')}}" alt="" />
                <div class="hov-in">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Instagram Feed  -->

</body>

@endsection