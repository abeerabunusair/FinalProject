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
        <div class="header__top">
        @foreach ($about as $ab )
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">

                            <ul>
                                <li><i class="fa fa-envelope"></i>{{$ab->email}} </li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>

                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header__top__right">
                    <div class="header__top__right__social">
                        <a href="{{$ab->Facebook}}"><i class="fa fa-facebook"></i></a>
                        <a href="{{$ab->Twitter}}"><i class="fa fa-twitter"></i></a>
                        <a href="{{$ab->LinkedIn}}"><i class="fa fa-linkedin"></i></a>
                        <a href="{{$ab->pint}}"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                    <div class="header__top__right__language">
                        <img src="{{asset('websiteAsset/img/language.png')}}" alt="">
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
        @endforeach

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="website"><img src="{{asset('websiteAsset/img/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu ">
                        <ul class="d-flex justify-content-between">
                            <li ><a href="website">Home</a></li>
                            <li class="active"><a href="shop">Shop</a></li>
                            <li><a href="blog">Blog</a></li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>




    <!-- Product Section Begin -->
    <section class="product spad">

        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title ">
                            <h2 >Sale Off</h2>
                        </div>  <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                @foreach ($products as$pro )

                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{asset('uploads/'.$pro->image)}}">

                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>{{$pro->name}}</span>
                                            <h5><a href="#">{{$pro->excerpt}}</a></h5>
                                            <div class="product__item__price">{{$pro->price}}</div>
                                        </div>
                                    </div>
                                </div>
                           @endforeach

                            </div>
                        </div>


  </section>


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
