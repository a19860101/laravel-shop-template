<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moon Lence</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    {{-- <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div> --}}

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>0</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
            </ul>
            <div class="header__cart__price">金額小計： <span>$00.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                @guest
                    <a href="/login"><i class="fa fa-user"></i> 登入</a>
                    <a href="/register"><i class="fa fa-user"></i> 註冊</a>
                @endguest
                @auth
                    <a href="/dashboard"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
                @endauth
            </div>
        </div>
        <?php
        $nav_categories = App\Models\Category::get();
        ?>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">首頁</a></li>
                <li><a href="#">商品一覽</a>
                    <ul class="header__menu__dropdown">
                        @foreach ($nav_categories as $nav_category)
                            <li><a href="#">{{ $nav_category->title }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="about/index.html">關於我們</a></li>
                <li><a href="contact/index.html">聯絡我們</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                {{-- <li><i class="fa fa-envelope"></i> hello@colorlib.com</li> --}}
                                {{-- <li>Free Shipping for all Order of $99</li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                {{-- <a href="#"><i class="fa-brands fa-linkedin"></i></a> --}}
                                {{-- <a href="#"><i class="fa-brands fa-pinterest-p"></i></a> --}}
                            </div>
                            <div class="header__top__right__auth">
                                @guest
                                    <a href="/login"><i class="fa fa-user"></i> 登入</a>
                                    <a href="/register"><i class="fa fa-user"></i> 註冊</a>
                                @endguest
                                @auth
                                    <a href="/dashboard"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">首頁</a></li>
                            <li><a href="#">商品一覽</a>
                                <ul class="header__menu__dropdown">
                                    @foreach ($nav_categories as $nav_category)
                                        <li><a href="#">{{ $nav_category->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="about/index.html">關於我們</a></li>
                            <li><a href="contact/index.html">聯絡我們</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>0</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
                        </ul>
                        <div class="header__cart__price">金額小計： <span>$00.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="您需要什麼幫助嗎？">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <a href="tel:+886912345678" style="color: inherit;">
                                    <i class="fa fa-phone"></i>
                                </a>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0912345678</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/banner/banner-02.jpg">
                        <div class="hero__text">
                            <span>登山裝備</span>
                            <h2>MOON LENCE</h2>
                            <p>全球最暢銷的登山裝備</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/table/table-01.jpg">
                            <h5><a href="table/index.html">露營桌</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/chair/chair-01.jpg">
                            <h5><a href="chair/index.html">野營椅</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/bed/bed-01.jpg">
                            <h5><a href="bed/index.html">露營床</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/car/car-01.jpg">
                            <h5><a href="car/index.html">行動拖車</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/backpack/backpack-01.jpg">
                            <h5><a href="backpack/index.html">登山背包</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Video Begin -->
    <div class="container pt-5 pl-0 pr-0">
        <video src="https://images-na.ssl-images-amazon.com/images/I/G1y62L4C38S.mp4"
            poster="https://m.media-amazon.com/images/S/abs-image-upload-na/1/AmazonStores/A1VC38T7YXB528/667f724a16897748409c2fdd519e203d.w1750.h816._CR0%2C0%2C1750%2C816_SX3000_.jpg"
            class="col-12" controls></video>
    </div>

    <!-- Video End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>最新上架商品</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">全部</li>
                            <li data-filter=".hot">人氣商品</li>
                            <li data-filter=".table">露營桌</li>
                            <li data-filter=".chair">野營椅</li>
                            <li data-filter=".bed">露營床</li>
                            <li data-filter=".car">行動拖車</li>
                            <li data-filter=".other">登山背包 / 杖</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <div class="col-lg-3 col-md-4 col-sm-6 mix table hot">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/table/table-01.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="table/index.html">野營桌</a></h6>
                            <h5>$5,699</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix chair">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/chair/chair-01.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="chair/index.html">折疊椅</a></h6>
                            <h5>$2,999</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix bed hot">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/bed/bed-01.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="bed/index.html">露營床</a></h6>
                            <h5>$8,999</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix car hot">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/car/car-01.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="car/index.html">露營輕便推車</a></h6>
                            <h5>$9,899</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix other">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/backpack/backpack-01.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="backpack/index.html">登山背包</a></h6>
                            <h5>$2,999</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix other">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/polse/polse-01.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="backpack/index.html">3段伸縮登山杖</a></h6>
                            <h5>$2,399</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix table hot">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/table/table-02.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="table/index.html">超輕收納桌</a></h6>
                            <h5>$2,549</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix chair">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/chair/chair-07.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="chair/index.html">新商品-摺疊椅</a></h6>
                            <h5>$4,099</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>地址: 60-49 Road 11378 New York</li>
                            <li>電話: 0912345678</li>
                            <li>E-Mail: sample@example.com.tw</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>相關連結</h6>
                        <ul>
                            <li><a href="#">關於我們</a></li>
                            <li><a href="#">購物須知</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>立即加入我們</h6>
                        <p>獲取有關我們最新商店和特別優惠的電子郵件更新</p>
                        <form action="#">
                            <input type="text" placeholder="輸入您的E-Mail">
                            <button type="submit" class="site-btn">送出</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved.
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>
