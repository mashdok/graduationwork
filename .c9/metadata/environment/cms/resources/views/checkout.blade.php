{"filter":false,"title":"checkout.blade.php","tooltip":"/cms/resources/views/checkout.blade.php","undoManager":{"mark":8,"position":8,"stack":[[{"start":{"row":0,"column":0},"end":{"row":190,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html class=\"no-js\" lang=\"ja\">","","<head>","    <meta charset=\"utf-8\">","    <title>注文完了</title>","    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">","    <meta name=\"description\" content=\"\">","    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","    <meta property=\"og:title\" content=\"\">","    <meta property=\"og:type\" content=\"\">","    <meta property=\"og:url\" content=\"\">","    <meta property=\"og:image\" content=\"\">","    <!-- Favicon -->","    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('img/theme/favicon.svg') }}\" />","    <!--Template CSS -->","    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css?v=4.0') }}\" />","</head>","","<body>","    <header class=\"header-area header-style-1 header-height-2\">","        <div class=\"header-middle header-middle-ptb-1 d-none d-lg-block\">","            <div class=\"container\">","                <div class=\"header-wrap\">","                    <div class=\"logo logo-width-1\">","                        <a href=\"{{ url('/index') }}\"><img src=\"{{ asset('img/theme/logo.svg') }}\" alt=\"logo\" /></a>","                    </div>","                    <div class=\"header-right\">","                        <div class=\"header-action-right\">","                            <div class=\"header-action-2\">","                                <div class=\"header-action-icon-2\">","                                    <a class=\"mini-cart-icon\" href=\"{{ url('/cart') }}\">","                                        <img alt=\"\" src=\"{{ asset('img/theme/icons/icon-cart.svg') }}\" />","                                    </a>","                                    <a href=\"{{ url('/cart') }}\"><span class=\"lable\">カート</span></a>","                                </div>","                                <div class=\"header-action-icon-2\">","                                    <a href=\"{{ url('/account') }}\">","                                        <img class=\"svgInject\" alt=\"\" src=\"{{ asset('img/theme/icons/icon-user.svg') }}\" />","                                    </a>","                                    <a href=\"{{ url('/account') }}\"><span class=\"lable ml-0\">マイページ</span></a>","                                    <div class=\"cart-dropdown-wrap cart-dropdown-hm2 account-dropdown\">","                                        \t<ul>","\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{url('/account')}}\">マイページ</a></li>","\t\t\t\t\t\t\t\t\t\t\t\t<li>","\t\t\t\t\t\t\t\t\t\t\t\t    ","\t\t\t\t\t\t\t\t\t\t\t\t    <a href={{ route('logout') }} onclick=\"event.preventDefault(); document.getElementById('logout-form').submit();\">ログアウト</a>","\t\t\t\t\t\t\t\t\t\t\t\t    <form id='logout-form' action={{ route('logout')}} method=\"POST\" style=\"display: none;\">","\t\t\t\t\t\t\t\t\t\t\t\t        @csrf","\t\t\t\t\t\t\t\t\t\t\t\t    <!--<a href=\"page-login.html\"><i class=\"fi fi-rs-sign-out mr-10\"></i>ログアウト</a>-->","\t\t\t\t\t\t\t\t\t\t\t    </li>","\t\t\t\t\t\t\t\t\t\t\t</ul>\t\t","\t\t\t\t\t\t\t\t\t\t\t</div>","                                </div>","                            </div>","                        </div>","                    </div>","                </div>","            </div>","        </div>","    </header>","    <!--End header-->","    <main class=\"main\">","        <div class=\"page-header breadcrumb-wrap\">","            <div class=\"container\">","                <div class=\"breadcrumb\">","                    <a href=\"{{ url('/index') }}\" rel=\"nofollow\">Home</a>","                </div>","            </div>","        </div>","        <div class=\"container mb-80 mt-50\">","            <div class=\"row\">","                <div class=\"col-lg-8 mb-40\">","                    <h2 class=\"heading-2 mb-10\">発注完了のお知らせ</h2>","                </div>","                <div class=\"col-lg-8 mb60\">","                    <h5 class=\"text-body\">この度はご注文頂き誠にありがとうございます。</h5>","                    <h5 class=\"text-body\">お客様の商品の発注が完了いたしました。</h5>","                    <h5 class=\"text-body\">ご注文の発送状況については、<a class=\"product-name mb-10 text-heading\" href=\"{{ url('/account') }}\">マイページ</a>よりご確認ください。</h5>","                </div>","            </div>","        </div>","    </main>","    <footer class=\"main\">","        <section class=\"section-padding footer-mid\">","            <div class=\"container pt-15 pb-20\">","                <div class=\"row\">","                    <div class=\"col\">","                        <div class=\"widget-about font-md mb-md-3 mb-lg-3 mb-xl-0\">","                            <div class=\"logo mb-30\">","                                <a href=\"{{ url('/index') }}\" class=\"mb-15\"><img src=\"{{ asset('img/theme/logo.svg') }}\" alt=\"logo\" /></a>","                            </div>","                            <ul class=\"contact-infor\">","                                <li><img src=\"{{ asset('img/theme/icons/icon-location.svg') }}\" alt=\"\" /><strong>住所:</strong> <span>東京都XX区XX XX-XX-XX XXX</span></li>","                                <li><img src=\"{{ asset('img/theme/icons/icon-contact.svg') }}\" alt=\"\" /><strong>TEL:</strong><span> 0X0 - XXXX - XXXX</span></li>","                                <li><img src=\"{{ asset('img/theme/icons/icon-email-2.svg') }}\" alt=\"\" /><strong>Email:</strong><span> xxxxx@xxxx.com</span></li>","                                <li><img src=\"{{ asset('img/theme/icons/icon-clock.svg') }}\" alt=\"\" /><strong>受付時間:</strong><span> xx:00 - xx:00</span></li>","                            </ul>","                        </div>","                    </div>","                    <div class=\"footer-link-widget col\">","                        <h4 class=\"widget-title\">会社案内</h4>","                        <ul class=\"footer-list mb-sm-5 mb-md-0\">","                            <li><a href=\"#\">会社概要</a></li>","                            <li><a href=\"#\">沿革</a></li>","                            <li><a href=\"#\">プライバシーポリシー</a></li>","                            <li><a href=\"#\">利用規約</a></li>","                            <li><a href=\"#\">お問い合わせ</a></li>","                        </ul>","                    </div>","                    <div class=\"footer-link-widget col\">","                        <h4 class=\"widget-title\">投資家情報</h4>","                        <ul class=\"footer-list mb-sm-5 mb-md-0\">","                            <li><a href=\"#\">決算概要</a></li>","                            <li><a href=\"#\">IRニュース</a></li>","                            <li><a href=\"#\">IRカレンダー</a></li>","                        </ul>","                    </div>","                    <div class=\"footer-link-widget col\">","                        <h4 class=\"widget-title\">ニュース</h4>","                        <ul class=\"footer-list mb-sm-5 mb-md-0\">","                            <li><a href=\"#\">最新のニュースレポート</a></li>","                        </ul>","                    </div>","                    <div class=\"footer-link-widget col\">","                        <h4 class=\"widget-title\">採用情報</h4>","                        <ul class=\"footer-list mb-sm-5 mb-md-0\">","                            <li><a href=\"#\">新卒採用</a></li>","                            <li><a href=\"#\">キャリア採用</a></li>","                        </ul>","                    </div>","                    <div class=\"footer-link-widget widget-install-app col\">","                        <h4 class=\"widget-title\">アプリのインストール</h4>","                        <div class=\"download-app\">","                            <a href=\"#\" class=\"hover-up mb-sm-2 mb-lg-0\"><img class=\"active\" src=\"{{ asset('img/theme/app-store.jpg') }}\" alt=\"\" /></a>","                            <a href=\"#\" class=\"hover-up mb-sm-2\"><img src=\"{{ asset('img/theme/google-play.jpg') }}\" /></a>","                        </div>","                        <p class=\"mb-20\">Secured Payment Gateways</p>","                        <img class=\"wow fadeIn animated\" src=\"{{ asset('img/theme/payment-method.png') }}\" alt=\"\" />","                    </div>","                </div>","            </div>","        </section>","        <div class=\"container pb-30\">","            <div class=\"row align-items-center\">","                <div class=\"col-12 mb-30\">","                    <div class=\"footer-bottom\"></div>","                </div>","                <div class=\"col-xl-4 col-lg-6 col-md-6\">","                    <p class=\"font-sm mb-0\">&copy; Tabecom, Inc. All rights reserved.</p>","                </div>","            </div>","        </div>","    </footer>","    <!-- Preloader Start -->","    <div id=\"preloader-active\">","        <div class=\"preloader d-flex align-items-center justify-content-center\">","            <div class=\"preloader-inner position-relative\">","                <div class=\"text-center\">","                    <img src=\"{{ asset('img/theme/loading.gif') }}\" alt=\"\">","                </div>","            </div>","        </div>","    </div>","    <!-- Vendor JS-->","    <script src=\"{{ asset('js/vendor/modernizr-3.6.0.min.js') }}\"></script>","    <script src=\"{{ asset('js/vendor/jquery-3.6.0.min.js') }}\"></script>","    <script src=\"{{ asset('js/vendor/jquery-migrate-3.3.0.min.js') }}\"></script>","    <script src=\"{{ asset('js/vendor/bootstrap.bundle.min.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/slick.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/jquery.syotimer.min.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/wow.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/jquery-ui.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/perfect-scrollbar.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/magnific-popup.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/select2.min.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/waypoints.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/counterup.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/jquery.countdown.min.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/images-loaded.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/isotope.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/scrollup.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/jquery.vticker-min.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/jquery.theia.sticky.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/jquery.elevatezoom.js') }}\"></script>","    <!-- Template  JS -->","    <script src=\"{{ asset('js/main.js?v=4.0') }}\"></script>","    <script src=\"{{ asset('jsjs/shop.js?v=4.0') }}\"></script>","</body>","","</html>"],"id":1}],[{"start":{"row":19,"column":6},"end":{"row":20,"column":4},"action":"insert","lines":["","    "],"id":2}],[{"start":{"row":20,"column":4},"end":{"row":78,"column":18},"action":"insert","lines":["    <header class=\"header-area header-style-1 header-height-2\">","        <div class=\"header-middle header-middle-ptb-1 d-none d-lg-block\">","            <div class=\"container\">","                <div class=\"header-wrap\">","                    <div class=\"logo logo-width-1\">","                        <a href=\"{{url('/index')}}\"><img src=\"{{ asset('img/theme/logo.svg') }}\" alt=\"logo\" /></a>","                    </div>","                    <div class=\"header-right\">","                        <div class=\"header-action-right\">","                            <div class=\"header-action-2\">","                                <div class=\"header-action-icon-2\">","                                    <a class=\"mini-cart-icon\" href=\"shop-cart.html\">","                                        <img alt=\"\" src=\"{{ asset('img/theme/icons/icon-cart.svg') }}\" />","                                    </a>","                                    <a href=\"{{url('/cart')}}\"><span class=\"lable\">カート</span></a>","                                </div>","                                <div class=\"header-action-icon-2\">","                                    <a href=\"{{url('/account')}}\">","                                        <img class=\"svgInject\" alt=\"\" src=\"{{ asset('img/theme/icons/icon-user.svg') }}\" />","                                    </a>","                                    <a href=\"{{url('/account')}}\"><span class=\"lable ml-0\">マイページ</span></a>","                                    <div class=\"cart-dropdown-wrap cart-dropdown-hm2 account-dropdown\">","                                        <ul>","\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{url('/account')}}\">マイページ</a></li>","\t\t\t\t\t\t\t\t\t\t\t\t<li>","\t\t\t\t\t\t\t\t\t\t\t\t    ","\t\t\t\t\t\t\t\t\t\t\t\t    <a href={{ route('logout') }} onclick=\"event.preventDefault(); document.getElementById('logout-form').submit();\">ログアウト</a>","\t\t\t\t\t\t\t\t\t\t\t\t    <form id='logout-form' action={{ route('logout')}} method=\"POST\" style=\"display: none;\">","\t\t\t\t\t\t\t\t\t\t\t\t        @csrf","\t\t\t\t\t\t\t\t\t\t\t\t    <!--<a href=\"page-login.html\"><i class=\"fi fi-rs-sign-out mr-10\"></i>ログアウト</a>-->","\t\t\t\t\t\t\t\t\t\t\t    </li>","\t\t\t\t\t\t\t\t\t\t\t</ul>\t\t\t\t\t\t\t\t","                                    </div>","                                </div>","                            </div>","                        </div>","                    </div>","                </div>","            </div>","        </div>","         <div class=\"header-bottom header-bottom-bg-color sticky-bar\">","            <div class=\"container\">","                <div class=\"header-wrap header-space-between position-relative\">","                    <div class=\"logo logo-width-1 d-block d-lg-none\">","                        <a href=\"index.html\"><img src=\"{{ asset('img/theme/logo.svg') }}\" alt=\"logo\" /></a>","                </div>","            </div>","        </div>","    </header>","    <!--End header-->","        <div class=\"invoice invoice-content invoice-6\">","            <div class=\"page-header breadcrumb-wrap\">","            <div class=\"container\">","                <div class=\"breadcrumb\">","                    <a href=\"{{ url('/index') }}\" rel=\"nofollow\"><i class=\"fi-rs-home mr-5\"></i>Home</a>","                    <span></span> ご確認画面","                </div>","            </div>","            </div>"],"id":3}],[{"start":{"row":79,"column":0},"end":{"row":121,"column":0},"action":"remove","lines":["    <header class=\"header-area header-style-1 header-height-2\">","        <div class=\"header-middle header-middle-ptb-1 d-none d-lg-block\">","            <div class=\"container\">","                <div class=\"header-wrap\">","                    <div class=\"logo logo-width-1\">","                        <a href=\"{{ url('/index') }}\"><img src=\"{{ asset('img/theme/logo.svg') }}\" alt=\"logo\" /></a>","                    </div>","                    <div class=\"header-right\">","                        <div class=\"header-action-right\">","                            <div class=\"header-action-2\">","                                <div class=\"header-action-icon-2\">","                                    <a class=\"mini-cart-icon\" href=\"{{ url('/cart') }}\">","                                        <img alt=\"\" src=\"{{ asset('img/theme/icons/icon-cart.svg') }}\" />","                                    </a>","                                    <a href=\"{{ url('/cart') }}\"><span class=\"lable\">カート</span></a>","                                </div>","                                <div class=\"header-action-icon-2\">","                                    <a href=\"{{ url('/account') }}\">","                                        <img class=\"svgInject\" alt=\"\" src=\"{{ asset('img/theme/icons/icon-user.svg') }}\" />","                                    </a>","                                    <a href=\"{{ url('/account') }}\"><span class=\"lable ml-0\">マイページ</span></a>","                                    <div class=\"cart-dropdown-wrap cart-dropdown-hm2 account-dropdown\">","                                        \t<ul>","\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{url('/account')}}\">マイページ</a></li>","\t\t\t\t\t\t\t\t\t\t\t\t<li>","\t\t\t\t\t\t\t\t\t\t\t\t    ","\t\t\t\t\t\t\t\t\t\t\t\t    <a href={{ route('logout') }} onclick=\"event.preventDefault(); document.getElementById('logout-form').submit();\">ログアウト</a>","\t\t\t\t\t\t\t\t\t\t\t\t    <form id='logout-form' action={{ route('logout')}} method=\"POST\" style=\"display: none;\">","\t\t\t\t\t\t\t\t\t\t\t\t        @csrf","\t\t\t\t\t\t\t\t\t\t\t\t    <!--<a href=\"page-login.html\"><i class=\"fi fi-rs-sign-out mr-10\"></i>ログアウト</a>-->","\t\t\t\t\t\t\t\t\t\t\t    </li>","\t\t\t\t\t\t\t\t\t\t\t</ul>\t\t","\t\t\t\t\t\t\t\t\t\t\t</div>","                                </div>","                            </div>","                        </div>","                    </div>","                </div>","            </div>","        </div>","    </header>","    <!--End header-->",""],"id":4}],[{"start":{"row":79,"column":0},"end":{"row":80,"column":0},"action":"insert","lines":["",""],"id":5}],[{"start":{"row":75,"column":34},"end":{"row":75,"column":39},"action":"remove","lines":["ご確認画面"],"id":6},{"start":{"row":75,"column":34},"end":{"row":75,"column":35},"action":"insert","lines":["h"]},{"start":{"row":75,"column":35},"end":{"row":75,"column":36},"action":"insert","lines":["a"]}],[{"start":{"row":75,"column":35},"end":{"row":75,"column":36},"action":"remove","lines":["a"],"id":7},{"start":{"row":75,"column":34},"end":{"row":75,"column":35},"action":"remove","lines":["h"]}],[{"start":{"row":75,"column":34},"end":{"row":75,"column":36},"action":"insert","lines":["発注"],"id":8},{"start":{"row":75,"column":36},"end":{"row":75,"column":38},"action":"insert","lines":["完了"]}],[{"start":{"row":81,"column":8},"end":{"row":87,"column":14},"action":"remove","lines":["<div class=\"page-header breadcrumb-wrap\">","            <div class=\"container\">","                <div class=\"breadcrumb\">","                    <a href=\"{{ url('/index') }}\" rel=\"nofollow\">Home</a>","                </div>","            </div>","        </div>"],"id":9},{"start":{"row":81,"column":4},"end":{"row":81,"column":8},"action":"remove","lines":["    "]},{"start":{"row":81,"column":0},"end":{"row":81,"column":4},"action":"remove","lines":["    "]},{"start":{"row":80,"column":23},"end":{"row":81,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":95,"column":52},"end":{"row":95,"column":55},"action":"insert","lines":["-->"],"id":12},{"start":{"row":95,"column":8},"end":{"row":95,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":96,"column":47},"end":{"row":96,"column":50},"action":"insert","lines":["-->"]},{"start":{"row":96,"column":8},"end":{"row":96,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":97,"column":33},"end":{"row":97,"column":36},"action":"insert","lines":["-->"]},{"start":{"row":97,"column":8},"end":{"row":97,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":98,"column":37},"end":{"row":98,"column":40},"action":"insert","lines":["-->"]},{"start":{"row":98,"column":8},"end":{"row":98,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":99,"column":82},"end":{"row":99,"column":85},"action":"insert","lines":["-->"]},{"start":{"row":99,"column":8},"end":{"row":99,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":100,"column":52},"end":{"row":100,"column":55},"action":"insert","lines":["-->"]},{"start":{"row":100,"column":8},"end":{"row":100,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":101,"column":138},"end":{"row":101,"column":141},"action":"insert","lines":["-->"]},{"start":{"row":101,"column":8},"end":{"row":101,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":102,"column":34},"end":{"row":102,"column":37},"action":"insert","lines":["-->"]},{"start":{"row":102,"column":8},"end":{"row":102,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":103,"column":54},"end":{"row":103,"column":57},"action":"insert","lines":["-->"]},{"start":{"row":103,"column":8},"end":{"row":103,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":104,"column":165},"end":{"row":104,"column":168},"action":"insert","lines":["-->"]},{"start":{"row":104,"column":8},"end":{"row":104,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":105,"column":161},"end":{"row":105,"column":164},"action":"insert","lines":["-->"]},{"start":{"row":105,"column":8},"end":{"row":105,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":106,"column":160},"end":{"row":106,"column":163},"action":"insert","lines":["-->"]},{"start":{"row":106,"column":8},"end":{"row":106,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":107,"column":156},"end":{"row":107,"column":159},"action":"insert","lines":["-->"]},{"start":{"row":107,"column":8},"end":{"row":107,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":108,"column":33},"end":{"row":108,"column":36},"action":"insert","lines":["-->"]},{"start":{"row":108,"column":8},"end":{"row":108,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":109,"column":30},"end":{"row":109,"column":33},"action":"insert","lines":["-->"]},{"start":{"row":109,"column":8},"end":{"row":109,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":110,"column":26},"end":{"row":110,"column":29},"action":"insert","lines":["-->"]},{"start":{"row":110,"column":8},"end":{"row":110,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":111,"column":56},"end":{"row":111,"column":59},"action":"insert","lines":["-->"]},{"start":{"row":111,"column":8},"end":{"row":111,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":112,"column":58},"end":{"row":112,"column":61},"action":"insert","lines":["-->"]},{"start":{"row":112,"column":8},"end":{"row":112,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":113,"column":64},"end":{"row":113,"column":67},"action":"insert","lines":["-->"]},{"start":{"row":113,"column":8},"end":{"row":113,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":114,"column":57},"end":{"row":114,"column":60},"action":"insert","lines":["-->"]},{"start":{"row":114,"column":8},"end":{"row":114,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":115,"column":55},"end":{"row":115,"column":58},"action":"insert","lines":["-->"]},{"start":{"row":115,"column":8},"end":{"row":115,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":116,"column":63},"end":{"row":116,"column":66},"action":"insert","lines":["-->"]},{"start":{"row":116,"column":8},"end":{"row":116,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":117,"column":57},"end":{"row":117,"column":60},"action":"insert","lines":["-->"]},{"start":{"row":117,"column":8},"end":{"row":117,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":118,"column":59},"end":{"row":118,"column":62},"action":"insert","lines":["-->"]},{"start":{"row":118,"column":8},"end":{"row":118,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":119,"column":29},"end":{"row":119,"column":32},"action":"insert","lines":["-->"]},{"start":{"row":119,"column":8},"end":{"row":119,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":120,"column":26},"end":{"row":120,"column":29},"action":"insert","lines":["-->"]},{"start":{"row":120,"column":8},"end":{"row":120,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":121,"column":56},"end":{"row":121,"column":59},"action":"insert","lines":["-->"]},{"start":{"row":121,"column":8},"end":{"row":121,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":122,"column":59},"end":{"row":122,"column":62},"action":"insert","lines":["-->"]},{"start":{"row":122,"column":8},"end":{"row":122,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":123,"column":64},"end":{"row":123,"column":67},"action":"insert","lines":["-->"]},{"start":{"row":123,"column":8},"end":{"row":123,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":124,"column":57},"end":{"row":124,"column":60},"action":"insert","lines":["-->"]},{"start":{"row":124,"column":8},"end":{"row":124,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":125,"column":59},"end":{"row":125,"column":62},"action":"insert","lines":["-->"]},{"start":{"row":125,"column":8},"end":{"row":125,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":126,"column":60},"end":{"row":126,"column":63},"action":"insert","lines":["-->"]},{"start":{"row":126,"column":8},"end":{"row":126,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":127,"column":29},"end":{"row":127,"column":32},"action":"insert","lines":["-->"]},{"start":{"row":127,"column":8},"end":{"row":127,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":128,"column":26},"end":{"row":128,"column":29},"action":"insert","lines":["-->"]},{"start":{"row":128,"column":8},"end":{"row":128,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":129,"column":56},"end":{"row":129,"column":59},"action":"insert","lines":["-->"]},{"start":{"row":129,"column":8},"end":{"row":129,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":130,"column":58},"end":{"row":130,"column":61},"action":"insert","lines":["-->"]},{"start":{"row":130,"column":8},"end":{"row":130,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":131,"column":64},"end":{"row":131,"column":67},"action":"insert","lines":["-->"]},{"start":{"row":131,"column":8},"end":{"row":131,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":132,"column":64},"end":{"row":132,"column":67},"action":"insert","lines":["-->"]},{"start":{"row":132,"column":8},"end":{"row":132,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":133,"column":29},"end":{"row":133,"column":32},"action":"insert","lines":["-->"]},{"start":{"row":133,"column":8},"end":{"row":133,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":134,"column":26},"end":{"row":134,"column":29},"action":"insert","lines":["-->"]},{"start":{"row":134,"column":8},"end":{"row":134,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":135,"column":56},"end":{"row":135,"column":59},"action":"insert","lines":["-->"]},{"start":{"row":135,"column":8},"end":{"row":135,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":136,"column":58},"end":{"row":136,"column":61},"action":"insert","lines":["-->"]},{"start":{"row":136,"column":8},"end":{"row":136,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":137,"column":64},"end":{"row":137,"column":67},"action":"insert","lines":["-->"]},{"start":{"row":137,"column":8},"end":{"row":137,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":138,"column":57},"end":{"row":138,"column":60},"action":"insert","lines":["-->"]},{"start":{"row":138,"column":8},"end":{"row":138,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":139,"column":59},"end":{"row":139,"column":62},"action":"insert","lines":["-->"]},{"start":{"row":139,"column":8},"end":{"row":139,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":140,"column":29},"end":{"row":140,"column":32},"action":"insert","lines":["-->"]},{"start":{"row":140,"column":8},"end":{"row":140,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":141,"column":26},"end":{"row":141,"column":29},"action":"insert","lines":["-->"]},{"start":{"row":141,"column":8},"end":{"row":141,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":142,"column":75},"end":{"row":142,"column":78},"action":"insert","lines":["-->"]},{"start":{"row":142,"column":8},"end":{"row":142,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":143,"column":64},"end":{"row":143,"column":67},"action":"insert","lines":["-->"]},{"start":{"row":143,"column":8},"end":{"row":143,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":144,"column":50},"end":{"row":144,"column":53},"action":"insert","lines":["-->"]},{"start":{"row":144,"column":8},"end":{"row":144,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":145,"column":151},"end":{"row":145,"column":154},"action":"insert","lines":["-->"]},{"start":{"row":145,"column":8},"end":{"row":145,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":146,"column":123},"end":{"row":146,"column":126},"action":"insert","lines":["-->"]},{"start":{"row":146,"column":8},"end":{"row":146,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":147,"column":30},"end":{"row":147,"column":33},"action":"insert","lines":["-->"]},{"start":{"row":147,"column":8},"end":{"row":147,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":148,"column":69},"end":{"row":148,"column":72},"action":"insert","lines":["-->"]},{"start":{"row":148,"column":8},"end":{"row":148,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":149,"column":116},"end":{"row":149,"column":119},"action":"insert","lines":["-->"]},{"start":{"row":149,"column":8},"end":{"row":149,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":150,"column":26},"end":{"row":150,"column":29},"action":"insert","lines":["-->"]},{"start":{"row":150,"column":8},"end":{"row":150,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":151,"column":22},"end":{"row":151,"column":25},"action":"insert","lines":["-->"]},{"start":{"row":151,"column":8},"end":{"row":151,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":152,"column":18},"end":{"row":152,"column":21},"action":"insert","lines":["-->"]},{"start":{"row":152,"column":8},"end":{"row":152,"column":12},"action":"insert","lines":["<!--"]},{"start":{"row":153,"column":18},"end":{"row":153,"column":21},"action":"insert","lines":["-->"]},{"start":{"row":153,"column":8},"end":{"row":153,"column":12},"action":"insert","lines":["<!--"]}]]},"ace":{"folds":[],"scrolltop":1830.5,"scrollleft":0,"selection":{"start":{"row":145,"column":0},"end":{"row":146,"column":123},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":255,"mode":"ace/mode/php_laravel_blade"}},"timestamp":1650731849737,"hash":"575a5b5040e208edde81178cc9b072fe55fa0d1b"}