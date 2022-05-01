<html class="no-js" lang="ja">
    <head>
        <meta charset="utf-8" />
        <title>My Page</title>
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
                        <a href="{{url('/index')}}"><img src="{{ asset('img/theme/logo.svg') }}" alt="logo" /></a>
                    </div>
                    <div class="header-right">
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="shop-cart.html">
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
         <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="index.html"><img src="{{ asset('img/theme/logo.svg') }}" alt="logo" /></a>
                </div>
            </div>
        </div>
    </header>
    <!--End header-->
        <main class="main pages">
            <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ url('/index') }}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> マイページ
                </div>
            </div>
            </div>
            <div class="page-content pt-150 pb-150">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 m-auto">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="dashboard-menu">
                                        <ul class="nav flex-column" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="dashboard-tab" data-bs-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="false">トップページ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="orders-tab" data-bs-toggle="tab" href="#orders" role="tab" aria-controls="orders" aria-selected="false">注文履歴</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="track-orders-tab" data-bs-toggle="tab" href="#track-orders" role="tab" aria-controls="track-orders" aria-selected="false">発送状況確認</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="account-detail-tab" data-bs-toggle="tab" href="#account-detail" role="tab" aria-controls="account-detail" aria-selected="true">アカウント情報確認・更新</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="tab-content account dashboard-content pl-50">
                                        <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="mb-0">マイページ</h3>
                                                </div>
                                                <div class="card-body">
                                                    <p>
                                                        マイページへようこそ<br />
                                                        こちらのページでは注文履歴の確認、発送状況の確認、アカウント情報の確認・更新が可能です<br />
                                                        左のメニューより選択ください
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="mb-0">注文履歴</h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>注文ID</th>
                                                                    <th>購入日時</th>
                                                                    <th>発送状況</th>
                                                                    <th>購入金額</th>
                                                                    <th>詳細</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>#1357</td>
                                                                    <td>2023年3月4日</td>
                                                                    <td>発送手配中</td>
                                                                    <td>3,800円（4品目）</td>
                                                                    <td><a href="#" class="btn-small d-block">詳細はこちら</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#2468</td>
                                                                    <td>2022年2月15日</td>
                                                                    <td>発送済</td>
                                                                    <td>4,800円（5品目）</td>
                                                                    <td><a href="#" class="btn-small d-block">詳細はこちら</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#2366</td>
                                                                    <td>2022年1月22日</td>
                                                                    <td>発送済</td>
                                                                    <td>2,800円（2品目）</td>
                                                                    <td><a href="#" class="btn-small d-block">詳細はこちら</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="track-orders" role="tabpanel" aria-labelledby="track-orders-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="mb-0">発送状況確認</h3>
                                                </div>
                                                <div class="card-body contact-from-area">
                                                    <p>発送状況の確認には、下記ボックスに注文IDを入力し、「追跡」ボタンを押してください。<br/>
                                                        注文IDは領収書と確認メールに記載されています。</p>
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <form class="contact-form-style mt-30 mb-50" action="#" method="post">
                                                                <div class="input-style mb-20">
                                                                    <label>注文ID</label>
                                                                    <input name="order-id" placeholder="注文IDをご記入ください" type="text" />
                                                                </div>
                                                                <button class="submit submit-auto-width" type="submit">発送状況確認</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>アカウント情報</h5>
                                                </div>
                                                <div class="card-body">
                                                    <form method="post" name="enq">
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label>姓<span class="required">*</span></label>
                                                                <input required="" class="form-control" name="name" type="text" />
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label>名<span class="required">*</span></label>
                                                                <input required="" class="form-control" name="phone" />
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>ユーザーネーム<span class="required">*</span></label>
                                                                <input required="" class="form-control" name="dname" type="text" />
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>メールアドレス<span class="required">*</span></label>
                                                                <input required="" class="form-control" name="email" type="email" />
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>現在のパスワード<span class="required">*</span></label>
                                                                <input required="" class="form-control" name="password" type="password" />
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>新しいパスワード<span class="required">*</span></label>
                                                                <input required="" class="form-control" name="npassword" type="password" />
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                                <label>新しいパスワード（確認）<span class="required">*</span></label>
                                                                <input required="" class="form-control" name="cpassword" type="password" />
                                                            </div>
                                                            <div class="col-md-12">
                                                                <button type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit" value="Submit">変更内容を保存</button>
                                                            </div>
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
                                <a href="#" class="hover-up mb-sm-2 mb-lg-0"><img class="active" src="{{ asset('img/theme/app-store.jpg') }}" alt="" /></a>
                                <a href="#" class="hover-up mb-sm-2"><img src="{{ asset('img/theme/google-play.jpg') }}" alt="" /></a>
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
