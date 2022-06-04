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

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
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
    <!-- Humberger End -->

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
                    <nav class="header__menu">
                        <ul class="d-flex justify-content-between">
                            <li ><a href="website">Home</a></li>
                            <li><a href="shop">Shop</a></li>
                            <li class="active"><a href="blog">Blog</a></li>
                            <li ><a href="contact">Contact</a></li>
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

    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>

                            @foreach ($categories as $cat )
                            <li>{{$cat->name}}</li>

                            @endforeach
                         </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            @foreach ($about as $ab )
                                <div class="hero__search__phone__text">
                                    <h5>{{$ab->mobile}}</h5>
                                    <span>support 24/7 time</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{asset('websiteAsset/img/hero/banner.jpg')}}">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->



    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
              @foreach ($posts as $post)
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="{{asset('uploads/'.$post->image)}}" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i>{{$post->created_at}}</li>
                                    </ul>
                                    <h5><a href="#">{{$post->title}}</a></h5>
                                    <p>{{$post->excerpt}} </p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

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
