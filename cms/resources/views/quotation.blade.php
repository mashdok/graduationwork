<!DOCTYPE html>
<html class="no-js" lang="ja">
    <head>
        <meta charset="utf-8" />
        <title>お見積り結果</title>
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
        <link rel="stylesheet" href="{{ asset('css/main.css?v=4.0') }}" />
    </head>

    <body>
        <header class="header-area header-style-1 header-height-2">
            <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
                <div class="container">
                    <div class="header-wrap">
                        <div class="logo logo-width-1">
                            <a href="{{ url('/index') }}"><img src="{{ asset('img/theme/logo.svg') }}" alt="logo" /></a>
                        </div>
                        <div class="header-right">
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

        <div class="invoice invoice-content invoice-6">
            <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ url('/index') }}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> お見積り
                </div>
            </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="invoice-inner">
                            <div class="invoice-info" id="invoice_wrapper">
                                <div class="invoice-header">
                                    <div class="invoice-icon">
                                        <img src="{{ asset('img/theme/icons/icon-invoice.svg') }}" alt="">
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-lg-8 mb-40">
                                            <h2 class="mb-0">お見積り結果</h2>
                                        </div>
                                        <div class="col-lg-8 mb60">
                                            <h5 class="mb-0">お客様のご注文内容に基づき、卸のお見積り結果を表示しております。</h5>
                                            <h5 class="mb-0">ご購入をご希望でしたら、注文ボタンから決済にお進みください。</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="invoice-center">
                                    <div class="table-responsive">
                                        <table class="table table-striped invoice-table">
                                            <thead class="bg-active">
                                                <tr>
                                                    <th>商品名</th>
                                                    <th class="text-center">数量</th>
                                                    <th class="text-center">〇西食品</th>
                                                    <th class="text-center">△川商事</th>
                                                    <th class="text-center">×山紹介</th>
                                                    <th class="text-center">□村物産</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="item-desc-1">
                                                            <span>牛肩ロース</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">480円</td>
                                                    <td class="text-center">640円</td>
                                                    <td class="text-center">700円</td>
                                                    <td class="text-center">720円</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="item-desc-1">
                                                            <span>鶏もも肉</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">580円</td>
                                                    <td class="text-center">520円</td>
                                                    <td class="text-center">570円</td>
                                                    <td class="text-center">640円</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="item-desc-1">
                                                            <span>トマト</span>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">360円</td>
                                                    <td class="text-center">330円</td>
                                                    <td class="text-center">390円</td>
                                                    <td class="text-center">420円</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="text-end f-w-600">税抜金額</td>
                                                    <td class="text-center">1,420円</td>
                                                    <td class="text-center">1,490円</td> 
                                                    <td class="text-center">1,660円</td>
                                                    <td class="text-center">1,780円</td>                                                   
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="text-end f-w-600">消費税</td>
                                                    <td class="text-center">142円</td>
                                                    <td class="text-center">149円</td>
                                                    <td class="text-center">166円</td>
                                                    <td class="text-center">178円</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="text-end f-w-600">税込金額</td>
                                                    <td class="text-center f-w-600">1,562円</td>
                                                    <td class="text-center f-w-600">1,639円</td>
                                                    <td class="text-center f-w-600">1,826円</td>
                                                    <td class="text-center f-w-600">1,958円</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" class="text-end f-w-600 ">
                                                    <td class="text-center f-w-600"><a class="add" href="{{ url('/confirmation') }}"></a></td>
                                                    <td class="text-center f-w-600"><a class="add" href="{{ url('/confirmation') }}"></a></td>
                                                    <td class="text-center f-w-600"><a class="add" href="{{ url('/confirmation') }}"></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="invoice-btn-section clearfix d-print-none">
                                        <a href="{{ url('/confirmation') }}" class="btn btn-lg btn-custom btn-print hover-up"> 最安値で注文 </a>
                                    </div>
                                </div>
                                <div class="invoice-bottom pb-80">
                                    <div class="row text-center">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="main">
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
        
        <!-- Vendor JS-->
        <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>

        <!-- Invoice JS -->
        <script src="{{ asset('js/invoice/jspdf.min.js') }}"></script>
        <script src="{{ asset('js/invoice/invoice.js') }}"></script>
    </body>
</html>
