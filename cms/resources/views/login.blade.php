<!DOCTYPE html>
<html class="no-js" lang="ja">
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/theme/favicon.svg') }}" />
        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('css/main.css?v=4.0') }}" />
    </head>

    <body>
        
        <header class="header-area header-style-1 header-height-2">
            <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
                <div class="container">
                    <div class="header-wrap">
                        <div class="logo logo-width-1">
                            <a href="index.html"><img src="{{ asset('img/theme/logo.svg') }}" alt="logo" /></a>
                        </div>
                        <div class="header-right">
                            <div class="search-style-2">
                                <form action="#">
                                    <select class="select-active">
                                        <option>すべてのカテゴリ</option>
                                        <option>肉・畜産</option>
                                        <option>魚介・水産</option>
                                        <option>野菜・農産</option>
                                        <option>調味料・乾物</option>
                                        <option>加工食材・惣菜</option>
                                        <option>米穀・粉類</option>
                                        <option>麺・製菓・製パン</option>
                                        <option>その他食品</option>
                                        <option>酒類</option>
                                        <option>茶・ソフトドリンク</option>
                                        <option>消耗品・備品</option>
                                        <option>衛生・清掃品</option>
                                        <option>販促・事務用品</option>
                                        <option>店舗設備</option>
                                    </select>
                                    <input type="text" placeholder="何をお探しですか？" />
                                </form>
                            </div>
                            <div class="header-action-right">
								<div class="header-action-2">
									<div class="header-action-icon-2">
										<a class="mini-cart-icon" href="shop-cart.html">
											<img alt="Nest" src="{{ asset('img/theme/icons/icon-cart.svg') }}" />
											<span class="pro-count blue">2</span>
										</a>
										<a href="shop-cart.html"><span class="lable">カート</span></a>
									</div>
									<div class="header-action-icon-2">
										<a href="page-account.html">
											<img class="svgInject" alt="Nest" src="{{ asset('img/theme/icons/icon-user.svg') }}" />
										</a>
										<a href="page-account.html"><span class="lable ml-0">マイページ</span></a>
										<div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
											<ul>
												<li><a href="page-account.html"><i class="fi fi-rs-user mr-10"></i>My Account</a></li>
												<li><a href="page-account.html"><i class="fi fi-rs-location-alt mr-10"></i>Order Tracking</a></li>
												<li><a href="page-account.html"><i class="fi fi-rs-label mr-10"></i>My Voucher</a></li>
												<li><a href="shop-wishlist.html"><i class="fi fi-rs-heart mr-10"></i>My Wishlist</a></li>
												<li><a href="page-account.html"><i class="fi fi-rs-settings-sliders mr-10"></i>Setting</a></li>
												<li><a href="page-login.html"><i class="fi fi-rs-sign-out mr-10"></i>ログアウト</a></li>
											</ul>											
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="mobile-header-wrapper-inner">
                <div class="mobile-header-top">
                    <div class="mobile-header-logo">
                        <a href="index.html"><img src="{{ asset('img/theme/logo.svg') }}" alt="logo" /></a>
                    </div>
                    <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                        <button class="close-style search-close">
                            <i class="icon-top"></i>
                            <i class="icon-bottom"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--End header-->
        <main class="main pages">
            <div class="page-header breadcrumb-wrap">
                <div class="container">
                    <div class="breadcrumb">
                        <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                        <span></span> ログイン
                    </div>
                </div>
            </div>
            <div class="page-content pt-150 pb-150">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                            <div class="row">
                                <div class="col-lg-6 col-md-8">
                                    <div class="login_wrap widget-taber-content background-white">
                                        <div class="padding_eight_all bg-white">
                                            <div class="heading_s1">
                                                <h1 class="mb-5">会員ログイン</h1>
                                                <p class="mb-30">アカウントをお持ちでない場合はこちら<a href="page-register.html">　新規会員登録</a></p>
                                            </div>
                                            <form method="post">
                                                <div class="form-group">
                                                    <input type="text" required="" name="email" placeholder="Email *" />
                                                </div>
                                                <div class="form-group">
                                                    <input required="" type="password" name="password" placeholder="パスワード *" />
                                                </div>
                                                <div class="login_footer form-group mb-50">
                                                    <div class="chek-form">
                                                        <div class="custome-checkbox">
                                                            <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="" />
                                                            <label class="form-check-label" for="exampleCheckbox1"><span>ログイン状態を保持する</span></label>
                                                        </div>
                                                    </div>
                                                    <a class="text-muted" href="#">パスワードをお忘れの方
                                                    </a>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-heading btn-block hover-up" name="login">ログイン</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="main">
            <section class="section-padding footer-mid">
                <div class="container pt-15 pb-20">
                    <div class="row">
                        <div class="col">
                            <div class="widget-about font-md mb-md-3 mb-lg-3 mb-xl-0">
                                <div class="logo mb-30">
                                    <a href="index.html" class="mb-15"><img src="{{ asset('img/theme/logo.svg') }}" alt="logo" /></a>
                                    <!-- <p class="font-lg text-heading">Awesome grocery store website template</p> -->
                                </div>
                                <ul class="contact-infor">
                                    <li><img src="{{ asset('img/theme/icons/icon-location.svg') }}" alt="" /><strong>住所:</strong> <span>東京都XX区XX XX-XX-XX XXX</span></li>
                                    <li><img src="{{ asset('img/theme/icons/icon-contact.svg') }}" alt="" /><strong>TEL:</strong><span> 0X0 - XXXX - XXXX</span></li>
                                    <li><img src="{{ asset('img/theme/icons/icon-email-2.svg') }}" alt="" /><strong>Email:</strong><span> xxxxx@xxxx.com</span></li>
                                    <li><img src="{{ asset('img/theme/icons/icon-clock.svg') }}" alt="" /><strong>受付時間:</strong><span> xx:00 - xx:00</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer-link-widget col">
                            <h4 class="widget-title">会社案内</h4>
                            <ul class="footer-list mb-sm-5 mb-md-0">
                                <li><a href="#">会社概要</a></li>
                                <li><a href="#">沿革</a></li>
                                <li><a href="#">プライバシーポリシー</a></li>
                                <li><a href="#">利用規約</a></li>
                                <li><a href="#">お問い合わせ</a></li>
                            </ul>
                        </div>
                        <div class="footer-link-widget col">
                            <h4 class="widget-title">投資家情報</h4>
                            <ul class="footer-list mb-sm-5 mb-md-0">
                                <li><a href="#">決算概要</a></li>
                                <li><a href="#">IRニュース</a></li>
                                <li><a href="#">IRカレンダー</a></li>
                            </ul>
                        </div>
                        <div class="footer-link-widget col">
                            <h4 class="widget-title">ニュース</h4>
                            <ul class="footer-list mb-sm-5 mb-md-0">
                                <li><a href="#">最新のニュースレポート</a></li>
                            </ul>
                        </div>
                        <div class="footer-link-widget col">
                            <h4 class="widget-title">採用情報</h4>
                            <ul class="footer-list mb-sm-5 mb-md-0">
                                <li><a href="#">新卒採用</a></li>
                                <li><a href="#">キャリア採用</a></li>
                            </ul>
                        </div>
                        <div class="footer-link-widget widget-install-app col">
                            <h4 class="widget-title">アプリのインストール</h4>
                            <div class="download-app">
                                <a href="#" class="hover-up mb-sm-2 mb-lg-0"><img class="active" src="assets/imgs/theme/app-store.jpg" alt="" /></a>
                                <a href="#" class="hover-up mb-sm-2"><img src="assets/imgs/theme/google-play.jpg" alt="" /></a>
                            </div>
                            <p class="mb-20">Secured Payment Gateways</p>
                            <img class="wow fadeIn animated" src="{{ asset('img/theme/payment-method.png') }}" alt="" />
                        </div>
                    </div>
                </div>
            </section>
            <div class="container pb-30">
                <div class="row align-items-center">
                    <div class="col-12 mb-30">
                        <div class="footer-bottom"></div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <p class="font-sm mb-0">&copy; Tabecom, Inc. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Preloader Start -->
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="text-center">
                        <img src="{{ asset('img/theme/loading.gif') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Vendor JS-->
        <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/plugins/slick.js') }}"></script>
        <script src="{{ asset('js/plugins/jquery.syotimer.min.js') }}"></script>
        <script src="{{ asset('js/plugins/wow.js') }}"></script>
        <script src="{{ asset('js/plugins/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('js/plugins/magnific-popup.js') }}"></script>
        <script src="{{ asset('js/plugins/select2.min.js') }}"></script>
        <script src="{{ asset('js/plugins/waypoints.js') }}"></script>
        <script src="{{ asset('js/plugins/counterup.js') }}"></script>
        <script src="{{ asset('js/plugins/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('js/plugins/images-loaded.js') }}"></script>
        <script src="{{ asset('js/plugins/isotope.js') }}"></script>
        <script src="{{ asset('js/plugins/scrollup.js') }}"></script>
        <script src="{{ asset('js/plugins/jquery.vticker-min.js') }}"></script>
        <script src="{{ asset('js/plugins/jquery.theia.sticky.js') }}"></script>
        <script src="{{ asset('js/plugins/jquery.elevatezoom.js') }}"></script>
        <!-- Template  JS -->
        <script src="{{ asset('js/main.js?v=4.0') }}"></script>
        <script src="{{ asset('jsjs/shop.js?v=4.0') }}"></script>
    </body>
</html>
