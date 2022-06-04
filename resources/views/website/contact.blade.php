<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('websiteAsset/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('websiteAsset/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('websiteAsset/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('websiteAsset/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('websiteAsset/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('websiteAsset/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('websiteAsset/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('websiteAsset/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Header Section Begin -->
    <header class="header">
        @foreach ($about as $ab)
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> {{$ab->email}}</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="{{$ab->Facebook}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{$ab->Twitter}}"><i class="fa fa-twitter"></i></a>
                                <a href="{{$ab->LinkedIn}}"><i class="fa fa-linkedin"></i></a>
                                <a href="{{$ab->pint}}"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="website"><img src="{{asset('websiteAsset/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul class="d-flex justify-content-between">
                            <li><a href="website">Home</a></li>
                            <li><a href="shop">Shop</a></li>
                            <li><a href="blog">Blog</a></li>
                            <li class="active"><a href="contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->




    <!-- Contact Section Begin -->
    @foreach ($about as $ab )
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Phone</h4>
                        <p>{{$ab->mobile}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Address</h4>
                        <p>{{$ab->address}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Open time</h4>
                        <p>{{$ab->opentime}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>{{$ab->email}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49116.39176087041!2d-86.41867791216099!3d39.69977417971648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886ca48c841038a1%3A0x70cfba96bf847f0!2sPlainfield%2C%20IN%2C%20USA!5e0!3m2!1sen!2sbd!4v1586106673811!5m2!1sen!2sbd"
            height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>New York</h4>
                <ul>
                    <li>Phone: +12-345-6789</li>
                    <li>Add: 16 Creek Ave. Farmingdale, NY</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Leave Message</h2>
                    </div>
                </div>
            </div>
            @include('admin.errors')
            <form  action="{{ route('contact.store')}}" method="POST" enctype="multipart/form-data">
                 @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <input type="text" placeholder="Your name" name="name">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input type="email" placeholder="Your Email" name="email">
                        </div>
                        <div class="col-lg-12 text-center">
                            <textarea placeholder="Your message" name="message"></textarea>
                            <button type="submit" class="site-btn">SEND MESSAGE</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            @foreach ($about as $ab )
            <div class="row  d-flex justify-content-between">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: {{$ab->address}}</li>
                            <li>Phone:{{$ab->mobile}}</li>
                            <li>Email:{{$ab->email}}</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="{{$ab->Facebook}}"><i class="fa fa-facebook"></i></a>
                            <a href="{{$ab->Twitter}}"><i class="fa fa-twitter"></i></a>
                            <a href="{{$ab->pint}}"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright d-flex justify-content-center">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
           Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                                <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{asset('websiteAsset/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('websiteAsset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('websiteAsset/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('websiteAsset/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('websiteAsset/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('websiteAsset/js/mixitup.min.js')}}"></script>
    <script src="{{asset('websiteAsset/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('websiteAsset/js/main.js')}}"></script>



</body>

</html>
