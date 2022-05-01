<!DOCTYPE html>
<html class="no-js" lang="ja">
    <head>
        <meta charset="utf-8" />
        <title>Tabecom</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/theme/favicon.svg') }}" />
         <!--Template CSS -->
         <link rel="stylesheet" href="{{ asset('css/plugins/slider-range.css') }}" />
         <link rel="stylesheet" href="{{ asset('css/main.css?v=4.0') }}" />
    </head>

    <body>
        <!-- Quick view --> 
        <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 mb-md-0 mb-sm-5">
                                <div class="detail-gallery">
                                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                </div>
                                <!-- End Gallery -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <header class="header-area header-style-1 header-height-2">
            <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
                <div class="container">
                    <div class="header-wrap">
                        <div class="logo logo-width-1">
                            <a href="{{ url('/index') }}"><img src="{{ asset('img/theme/logo.svg') }}" alt="logo" /></a>
                        </div>
                        <div class="header-right">
                            <div class="search-style-1">
                                <form action="{{url('/index')}}" method="GET">
                                        <p class="d-inline-block"><input type="text" placeholder="何をお探しですか？" name="keyword" value="{{ $keyword }}"></p>
                                        <p class="d-inline-block"><input type="submit" value="検索"></p>
                                </form>
                            
                            </div>
                            <div class="header-action-right">
								<div class="header-action-2">
									<div class="header-action-icon-2">
										<a class="mini-cart-icon" href="{{url('/cart')}}">
											<img alt="" src="{{ asset('img/theme/icons/icon-cart.svg') }}" />
										</a>
										<a href="{{url('/cart')}}"><span class="lable">カート</span></a>
									</div>
									<div class="header-action-icon-2">
										<a href="{{url('/account')}}">
											<img class="svgInject" alt="" src="{{ asset('img/theme/icons/icon-user.svg') }}" />
										</a>
										<a href="{{url('/account')}}"><span class="lable ml-0">マイページ</span></a>
										<div class="cart-dropdown-wrap cart-dropdown-hm2 account-dropdown">
											<ul>
												<li><a href="{{url('/account')}}">マイページ</a></li>
												<li>
												    
												    <a href={{ route('logout') }} onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
												    <form id='logout-form' action={{ route('logout')}} method="POST" style="display: none;">
												        @csrf
												    <!--<a href="page-login.html"><i class="fi fi-rs-sign-out mr-10"></i>ログアウト</a>-->
											    </li>
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
                <div class="mobile-header-content-area">
                    <div class="mobile-search search-style-3 mobile-header-border">
                        <form action="#">
                            <input type="text" placeholder="Search for items…" />
                            <button type="submit"><i class="fi-rs-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--End header-->
        <main class="main">
            <div class="container mb-30">
                <div class="row">
                <div class="col-lg-4-5">
                        <section class="product-tabs section-padding position-relative">
                            <div class="section-title style-2">
                                <h3>商品一覧</h3>
                                <ul class="nav nav-tabs links" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active">すべてのカテゴリ</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ url('/index?keyword=肉・畜産') }}" class="nav-link">肉・畜産</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ url('/index?keyword=魚介・水産') }}" class="nav-link">魚介・水産</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ url('/index?keyword=野菜・農産') }}" class="nav-link">野菜・農産</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ url('/index?keyword=調味料・乾物') }}" class="nav-link">調味料・乾物</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ url('/index?keyword=加工食材・惣菜') }}" class="nav-link">加工食材・惣菜</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ url('/index?keyword=米穀・粉類') }}" class="nav-link">米穀・粉類</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ url('/index?keyword=麺・製菓・製パン') }}" class="nav-link">麺・製菓・製パン</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ url('/index?keyword=その他食品') }}" class="nav-link">その他食品</a>
                                    </li>
                                </ul>
                            </div>
                            <!--End nav-tabs-->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                                    <div class="row product-grid-4">
                                        
                               

    


    

                 @foreach ($sku_masters as $sku_master)
                                  
                                        
                                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap mb-30">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="shop-product-right.html">
                                                            <img class="default-img" src="{{ asset('img/shop/product-5-1.jpg') }}" alt="" />
                                                            <img class="hover-img" src="{{ asset('img/shop/product-5-2.jpg') }}" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <div class="product-category">
                                                        <a href="shop-grid-right.html">{{ $sku_master->sku_subcategory}}</a>
                                                    </div>
                                                    <h2><a href="shop-product-right.html">{{ $sku_master->sku_name}}</a></h2>
                                                    <div class="product-card-bottom">
                                                        <!--<div class="product-price">-->
                                                        <!--    <span>X,XXX円</span>-->
                                                        <!--</div>-->
                                                        <!--【追加】ボタンがsession組めていないため修正の必要あり。またCSSも武藤ver張り付けているのでミスマッチ-->
                                                  
                                                         <div class="add-cart">
                                                            
                                                            <a href="{{ url('/cart') }}">
                                                            	<button type="submit" class="btn btn-primary h-100">
                                                            	カートへ追加
                                                            	</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                          
                 @endforeach    
                                        
                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end product card-->
                                    </div>
                                    <!--End product-grid-4-->
                                </div>
                                <!--En tab seven-->
                            </div>
                            <!--End tab-content-->
                        </section>
                        <!--End banners-->
                    </div>
                </div>
            </div>
            </section>
            <!--End category slider-->
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
                                <a href="#" class="hover-up mb-sm-2 mb-lg-0"><img class="active" src="{{ asset('img/theme/app-store.jpg') }}" alt="" /></a>
                                <a href="#" class="hover-up mb-sm-2"><img src="{{ asset('img/theme/google-play.jpg') }}" /></a>
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
        <script src="{{ asset('js/plugins/slider-range.js') }}"></script>
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
