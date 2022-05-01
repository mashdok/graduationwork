{"filter":false,"title":"cart.blade.php","tooltip":"/cms/resources/views/cart.blade.php","undoManager":{"mark":53,"position":53,"stack":[[{"start":{"row":0,"column":0},"end":{"row":307,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html class=\"no-js\" lang=\"ja\">","","<head>","    <meta charset=\"utf-8\">","    <title>カート</title>","    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">","    <meta name=\"description\" content=\"\">","    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","    <meta property=\"og:title\" content=\"\">","    <meta property=\"og:type\" content=\"\">","    <meta property=\"og:url\" content=\"\">","    <meta property=\"og:image\" content=\"\">","    <!-- Favicon -->","    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('img/theme/favicon.svg') }}\" />","    <!--Template CSS -->","    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css?v=4.0') }}\" />","</head>","","<body>","    <header class=\"header-area header-style-1 header-height-2\">","        <div class=\"header-middle header-middle-ptb-1 d-none d-lg-block\">","            <div class=\"container\">","                <div class=\"header-wrap\">","                    <div class=\"logo logo-width-1\">","                        <a href=\"index.html\"><img src=\"{{ asset('img/theme/logo.svg') }}\" alt=\"logo\" /></a>","                    </div>","                    <div class=\"header-right\">","                        <div class=\"search-style-2\">","                            <form action=\"#\">","                                <select class=\"select-active\">","                                    <option>すべてのカテゴリ</option>","                                    <option>肉・畜産</option>","                                    <option>魚介・水産</option>","                                    <option>野菜・農産</option>","                                    <option>調味料・乾物</option>","                                    <option>加工食材・惣菜</option>","                                    <option>米穀・粉類</option>","                                    <option>麺・製菓・製パン</option>","                                    <option>その他食品</option>","                                    <option>酒類</option>","                                    <option>茶・ソフトドリンク</option>","                                    <option>消耗品・備品</option>","                                    <option>衛生・清掃品</option>","                                    <option>販促・事務用品</option>","                                    <option>店舗設備</option>","                                </select>","                                <input type=\"text\" placeholder=\"何をお探しですか？\" />","                            </form>","                        </div>","                        <div class=\"header-action-right\">","                            <div class=\"header-action-2\">","                                <div class=\"header-action-icon-2\">","                                    <a class=\"mini-cart-icon\" href=\"shop-cart.html\">","                                        <img alt=\"Nest\" src=\"{{ asset('img/theme/icons/icon-cart.svg') }}\" />","                                    </a>","                                    <a href=\"shop-cart.html\"><span class=\"lable\">カート</span></a>","                                </div>","                                <div class=\"header-action-icon-2\">","                                    <a href=\"page-account.html\">","                                        <img class=\"svgInject\" alt=\"Nest\" src=\"{{ asset('img/theme/icons/icon-user.svg') }}\" />","                                    </a>","                                    <a href=\"page-account.html\"><span class=\"lable ml-0\">マイページ</span></a>","                                    <div class=\"cart-dropdown-wrap cart-dropdown-hm2 account-dropdown\">","                                        <ul>","                                            <li><a href=\"page-account.html\"><i class=\"fi fi-rs-user mr-10\"></i>My Account</a></li>","                                            <li><a href=\"page-account.html\"><i class=\"fi fi-rs-location-alt mr-10\"></i>Order Tracking</a></li>","                                            <li><a href=\"page-account.html\"><i class=\"fi fi-rs-label mr-10\"></i>My Voucher</a></li>","                                            <li><a href=\"shop-wishlist.html\"><i class=\"fi fi-rs-heart mr-10\"></i>My Wishlist</a></li>","                                            <li><a href=\"page-account.html\"><i class=\"fi fi-rs-settings-sliders mr-10\"></i>Setting</a></li>","                                            <li><a href=\"page-login.html\"><i class=\"fi fi-rs-sign-out mr-10\"></i>ログアウト</a></li>","                                        </ul>\t\t\t\t\t\t\t\t\t\t\t","                                    </div>","                                </div>","                            </div>","                        </div>","                    </div>","                </div>","            </div>","        </div>","         <div class=\"header-bottom header-bottom-bg-color sticky-bar\">","            <div class=\"container\">","                <div class=\"header-wrap header-space-between position-relative\">","                    <div class=\"logo logo-width-1 d-block d-lg-none\">","                        <a href=\"index.html\"><img src=\"{{ asset('img/theme/logo.svg') }}\" alt=\"logo\" /></a>","                </div>","            </div>","        </div> -->","    </header>","    <!--End header-->","    <main class=\"main\">","        <div class=\"page-header breadcrumb-wrap\">","            <div class=\"container\">","                <div class=\"breadcrumb\">","                    <a href=\"index.html\" rel=\"nofollow\"><i class=\"fi-rs-home mr-5\"></i>Home</a>","                    <span></span> カート","                </div>","            </div>","        </div>","        <div class=\"container mb-80 mt-50\">","            <div class=\"row\">","                <div class=\"col-lg-8 mb-40\">","                    <h1 class=\"heading-2 mb-10\">カート</h1>","                    <div class=\"d-flex justify-content-between\">","                        <h6 class=\"text-body\">カート内には<span class=\"text-brand\">3</span>個商品があります</h6>","                    </div>","                </div>","            </div>","            <div class=\"row\">","                <div class=\"col-lg-8\">","                    <div class=\"table-responsive shopping-summery\">","                        <table class=\"table table-wishlist\">","                            <thead>","                                <tr class=\"main-heading\">","                                    <th class=\"custome-checkbox start pl-30\">","                                        <input class=\"form-check-input\" type=\"checkbox\" name=\"checkbox\" id=\"exampleCheckbox11\" value=\"\">","                                        <label class=\"form-check-label\" for=\"exampleCheckbox11\"></label>","                                    </th>","                                    <th scope=\"col\" colspan=\"1\">商品イメージ</th>","                                    <th scope=\"col\" colspan=\"1\">商品名</th>","                                    <th scope=\"col\" colspan=\"1\">数量</th>","                                    <th scope=\"col\" class=\"end\">削除</th>","                                </tr>","                            </thead>","                            <tbody>","                                <tr class=\"pt-30\">","                                    <td class=\"custome-checkbox pl-30\">","                                        <input class=\"form-check-input\" type=\"checkbox\" name=\"checkbox\" id=\"exampleCheckbox2\" value=\"\">","                                        <label class=\"form-check-label\" for=\"exampleCheckbox2\"></label>","                                    </td>","                                    <td class=\"image product-thumbnail pt-40\"><img src=\"{{ asset('img/shop/product-1-1.jpg') }}\" alt=\"#\"></td>","                                    <td class=\"product-des product-name\">","                                        <h6 class=\"mb-5\"><a class=\"product-name mb-10 text-heading\" href=\"shop-product-right.html\">プロダクト名</a></h6>","                                    </td>","                                    <td class=\"text-center detail-info\" data-title=\"Stock\">","                                        <div class=\"detail-extralink mr-15\">","                                            <div class=\"detail-qty border radius\">","                                                <a href=\"#\" class=\"qty-down\"><i class=\"fi-rs-angle-small-down\"></i></a>","                                                <span class=\"qty-val\">1</span>","                                                <a href=\"#\" class=\"qty-up\"><i class=\"fi-rs-angle-small-up\"></i></a>","                                            </div>","                                        </div>","                                    </td>","                                    <td class=\"action text-center\" data-title=\"Remove\"><a href=\"#\" class=\"text-body\"><i class=\"fi-rs-trash\"></i></a></td>","                                </tr>","                                <tr>","                                    <td class=\"custome-checkbox pl-30\">","                                        <input class=\"form-check-input\" type=\"checkbox\" name=\"checkbox\" id=\"exampleCheckbox2\" value=\"\">","                                        <label class=\"form-check-label\" for=\"exampleCheckbox2\"></label>","                                    </td>","                                    <td class=\"image product-thumbnail\"><img src=\"{{ asset('img/shop/product-2-1.jpg') }}\" alt=\"#\"></td>","                                    <td class=\"product-des product-name\">","                                        <h6 class=\"mb-5\"><a class=\"product-name mb-10 text-heading\" href=\"shop-product-right.html\">プロダクト名</a></h6>","","                                    </td>","                                    <td class=\"text-center detail-info\" data-title=\"Stock\">","                                        <div class=\"detail-extralink mr-15\">","                                            <div class=\"detail-qty border radius\">","                                                <a href=\"#\" class=\"qty-down\"><i class=\"fi-rs-angle-small-down\"></i></a>","                                                <span class=\"qty-val\">1</span>","                                                <a href=\"#\" class=\"qty-up\"><i class=\"fi-rs-angle-small-up\"></i></a>","                                            </div>","                                        </div>","                                    </td>","                                    <td class=\"action text-center\" data-title=\"Remove\"><a href=\"#\" class=\"text-body\"><i class=\"fi-rs-trash\"></i></a></td>","                                </tr>","                                <tr>","                                    <td class=\"custome-checkbox pl-30\">","                                        <input class=\"form-check-input\" type=\"checkbox\" name=\"checkbox\" id=\"exampleCheckbox3\" value=\"\">","                                        <label class=\"form-check-label\" for=\"exampleCheckbox3\"></label>","                                    </td>","                                    <td class=\"image product-thumbnail\"><img src=\"{{ asset('img/shop/product-3-1.jpg') }}\" alt=\"#\"></td>","                                    <td class=\"product-des product-name\">","                                        <h6 class=\"mb-5\"><a class=\"product-name mb-10 text-heading\" href=\"shop-product-right.html\">プロダクト名</a></h6>","","                                    </td>","                                    <td class=\"text-center detail-info\" data-title=\"Stock\">","                                        <div class=\"detail-extralink mr-15\">","                                            <div class=\"detail-qty border radius\">","                                                <a href=\"#\" class=\"qty-down\"><i class=\"fi-rs-angle-small-down\"></i></a>","                                                <span class=\"qty-val\">1</span>","                                                <a href=\"#\" class=\"qty-up\"><i class=\"fi-rs-angle-small-up\"></i></a>","                                            </div>","                                        </div>","                                    </td>","                                    <td class=\"action text-center\" data-title=\"Remove\"><a href=\"#\" class=\"text-body\"><i class=\"fi-rs-trash\"></i></a></td>","                                </tr>","                            </tbody>","                        </table>","                    </div>","                    <div class=\"divider-2 mb-30\"></div>","                    <div class=\"cart-action d-flex justify-content-between\">","                        <a class=\"btn \"><i class=\"fi-rs-arrow-left mr-10\"></i>買い物に戻る</a>","                        <a class=\"btn  mr-10 mb-sm-15\"><i class=\"fi-rs-refresh mr-10\"></i>見積に進む</a>","                    </div>","                </div>","            </div>","        </div>","    </main>","    <footer class=\"main\">","        <section class=\"section-padding footer-mid\">","            <div class=\"container pt-15 pb-20\">","                <div class=\"row\">","                    <div class=\"col\">","                        <div class=\"widget-about font-md mb-md-3 mb-lg-3 mb-xl-0\">","                            <div class=\"logo mb-30\">","                                <a href=\"index.html\" class=\"mb-15\"><img src=\"{{ asset('img/theme/logo.svg') }}\" alt=\"logo\" /></a>","                                <!-- <p class=\"font-lg text-heading\">Awesome grocery store website template</p> -->","                            </div>","                            <ul class=\"contact-infor\">","                                <li><img src=\"{{ asset('img/theme/icons/icon-location.svg') }}\" alt=\"\" /><strong>住所:</strong> <span>東京都XX区XX XX-XX-XX XXX</span></li>","                                <li><img src=\"{{ asset('img/theme/theme/icons/icon-contact.svg') }}\" alt=\"\" /><strong>TEL:</strong><span> 0X0 - XXXX - XXXX</span></li>","                                <li><img src=\"{{ asset('img/theme/theme/icons/icon-email-2.svg') }}\" alt=\"\" /><strong>Email:</strong><span> xxxxx@xxxx.com</span></li>","                                <li><img src=\"{{ asset('img/theme/theme/icons/icon-clock.svg') }}\" alt=\"\" /><strong>受付時間:</strong><span> xx:00 - xx:00</span></li>","                            </ul>","                        </div>","                    </div>","                    <div class=\"footer-link-widget col\">","                        <h4 class=\"widget-title\">会社案内</h4>","                        <ul class=\"footer-list mb-sm-5 mb-md-0\">","                            <li><a href=\"#\">会社概要</a></li>","                            <li><a href=\"#\">沿革</a></li>","                            <li><a href=\"#\">プライバシーポリシー</a></li>","                            <li><a href=\"#\">利用規約</a></li>","                            <li><a href=\"#\">お問い合わせ</a></li>","                        </ul>","                    </div>","                    <div class=\"footer-link-widget col\">","                        <h4 class=\"widget-title\">投資家情報</h4>","                        <ul class=\"footer-list mb-sm-5 mb-md-0\">","                            <li><a href=\"#\">決算概要</a></li>","                            <li><a href=\"#\">IRニュース</a></li>","                            <li><a href=\"#\">IRカレンダー</a></li>","                        </ul>","                    </div>","                    <div class=\"footer-link-widget col\">","                        <h4 class=\"widget-title\">ニュース</h4>","                        <ul class=\"footer-list mb-sm-5 mb-md-0\">","                            <li><a href=\"#\">最新のニュースレポート</a></li>","                        </ul>","                    </div>","                    <div class=\"footer-link-widget col\">","                        <h4 class=\"widget-title\">採用情報</h4>","                        <ul class=\"footer-list mb-sm-5 mb-md-0\">","                            <li><a href=\"#\">新卒採用</a></li>","                            <li><a href=\"#\">キャリア採用</a></li>","                        </ul>","                    </div>","                    <div class=\"footer-link-widget widget-install-app col\">","                        <h4 class=\"widget-title\">アプリのインストール</h4>","                        <div class=\"download-app\">","                            <a href=\"#\" class=\"hover-up mb-sm-2 mb-lg-0\"><img class=\"active\" src=\"{{ asset('img/theme/theme/app-store.jpg') }}\" alt=\"\" /></a>","                            <a href=\"#\" class=\"hover-up mb-sm-2\"><img src=\"{{ asset('img/theme/theme/google-play.jpg') }}\" alt=\"\" /></a>","                        </div>","                        <p class=\"mb-20\">Secured Payment Gateways</p>","                        <img class=\"wow fadeIn animated\" src=\"{{ asset('img/theme/theme/payment-method.png') }}\" alt=\"\" />","                    </div>","                </div>","            </div>","        </section>","        <div class=\"container pb-30\">","            <div class=\"row align-items-center\">","                <div class=\"col-12 mb-30\">","                    <div class=\"footer-bottom\"></div>","                </div>","                <div class=\"col-xl-4 col-lg-6 col-md-6\">","                    <p class=\"font-sm mb-0\">&copy; Tabecom, Inc. All rights reserved.</p>","                </div>","            </div>","        </div>","    </footer>","    <!-- Preloader Start -->","    <div id=\"preloader-active\">","        <div class=\"preloader d-flex align-items-center justify-content-center\">","            <div class=\"preloader-inner position-relative\">","                <div class=\"text-center\">","                    <img src=\"{{ asset('img/theme/theme/loading.gif') }}\" alt=\"\">","                </div>","            </div>","        </div>","    </div>","    <!-- Vendor JS-->","    <script src=\"{{ asset('js/vendor/modernizr-3.6.0.min.js') }}\"></script>","    <script src=\"{{ asset('js/vendor/jquery-3.6.0.min.js') }}\"></script>","    <script src=\"{{ asset('js/vendor/jquery-migrate-3.3.0.min.js') }}\"></script>","    <script src=\"{{ asset('js/vendor/bootstrap.bundle.min.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/slick.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/jquery.syotimer.min.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/wow.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/jquery-ui.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/perfect-scrollbar.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/magnific-popup.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/select2.min.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/waypoints.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/counterup.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/jquery.countdown.min.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/images-loaded.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/isotope.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/scrollup.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/jquery.vticker-min.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/jquery.theia.sticky.js') }}\"></script>","    <script src=\"{{ asset('js/plugins/jquery.elevatezoom.js') }}\"></script>","    <!-- Template  JS -->","    <script src=\"{{ asset('js/main.js?v=4.0') }}\"></script>","    <script src=\"{{ asset('jsjs/shop.js?v=4.0') }}\"></script>","</body>","","</html>"],"id":1}],[{"start":{"row":63,"column":103},"end":{"row":64,"column":40},"action":"insert","lines":["","                                        "],"id":2}],[{"start":{"row":64,"column":36},"end":{"row":64,"column":40},"action":"remove","lines":["    "],"id":3},{"start":{"row":64,"column":32},"end":{"row":64,"column":36},"action":"remove","lines":["    "]},{"start":{"row":64,"column":28},"end":{"row":64,"column":32},"action":"remove","lines":["    "]},{"start":{"row":64,"column":24},"end":{"row":64,"column":28},"action":"remove","lines":["    "]},{"start":{"row":64,"column":20},"end":{"row":64,"column":24},"action":"remove","lines":["    "]},{"start":{"row":64,"column":16},"end":{"row":64,"column":20},"action":"remove","lines":["    "]},{"start":{"row":64,"column":12},"end":{"row":64,"column":16},"action":"remove","lines":["    "]},{"start":{"row":64,"column":8},"end":{"row":64,"column":12},"action":"remove","lines":["    "]},{"start":{"row":64,"column":4},"end":{"row":64,"column":8},"action":"remove","lines":["    "]}],[{"start":{"row":64,"column":0},"end":{"row":64,"column":4},"action":"remove","lines":["    "],"id":4}],[{"start":{"row":64,"column":0},"end":{"row":73,"column":24},"action":"insert","lines":["<ul>","\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{url('/account')}}\">マイページ</a></li>","\t\t\t\t\t\t\t\t\t\t\t\t<li>","\t\t\t\t\t\t\t\t\t\t\t\t    ","\t\t\t\t\t\t\t\t\t\t\t\t    <a href={{ route('logout') }} onclick=\"event.preventDefault(); document.getElementById('logout-form').submit();\">ログアウト</a>","\t\t\t\t\t\t\t\t\t\t\t\t    <form id='logout-form' action={{ route('logout')}} method=\"POST\" style=\"display: none;\">","\t\t\t\t\t\t\t\t\t\t\t\t        @csrf","\t\t\t\t\t\t\t\t\t\t\t\t    <!--<a href=\"page-login.html\"><i class=\"fi fi-rs-sign-out mr-10\"></i>ログアウト</a>-->","\t\t\t\t\t\t\t\t\t\t\t    </li>","\t\t\t\t\t\t\t\t\t\t\t</ul>\t\t\t\t\t\t\t\t"],"id":5}],[{"start":{"row":64,"column":0},"end":{"row":64,"column":4},"action":"insert","lines":["    "],"id":6}],[{"start":{"row":64,"column":4},"end":{"row":64,"column":8},"action":"insert","lines":["    "],"id":7}],[{"start":{"row":64,"column":8},"end":{"row":64,"column":12},"action":"insert","lines":["    "],"id":8}],[{"start":{"row":64,"column":12},"end":{"row":64,"column":16},"action":"insert","lines":["    "],"id":9}],[{"start":{"row":64,"column":16},"end":{"row":64,"column":20},"action":"insert","lines":["    "],"id":10}],[{"start":{"row":64,"column":20},"end":{"row":64,"column":24},"action":"insert","lines":["    "],"id":11}],[{"start":{"row":64,"column":24},"end":{"row":64,"column":28},"action":"insert","lines":["    "],"id":12}],[{"start":{"row":64,"column":28},"end":{"row":64,"column":32},"action":"insert","lines":["    "],"id":13}],[{"start":{"row":64,"column":32},"end":{"row":64,"column":36},"action":"insert","lines":["    "],"id":14}],[{"start":{"row":64,"column":36},"end":{"row":64,"column":40},"action":"insert","lines":["    "],"id":15}],[{"start":{"row":74,"column":40},"end":{"row":81,"column":45},"action":"remove","lines":["<ul>","                                            <li><a href=\"page-account.html\"><i class=\"fi fi-rs-user mr-10\"></i>My Account</a></li>","                                            <li><a href=\"page-account.html\"><i class=\"fi fi-rs-location-alt mr-10\"></i>Order Tracking</a></li>","                                            <li><a href=\"page-account.html\"><i class=\"fi fi-rs-label mr-10\"></i>My Voucher</a></li>","                                            <li><a href=\"shop-wishlist.html\"><i class=\"fi fi-rs-heart mr-10\"></i>My Wishlist</a></li>","                                            <li><a href=\"page-account.html\"><i class=\"fi fi-rs-settings-sliders mr-10\"></i>Setting</a></li>","                                            <li><a href=\"page-login.html\"><i class=\"fi fi-rs-sign-out mr-10\"></i>ログアウト</a></li>","                                        </ul>"],"id":16},{"start":{"row":74,"column":36},"end":{"row":74,"column":40},"action":"remove","lines":["    "]},{"start":{"row":74,"column":32},"end":{"row":74,"column":36},"action":"remove","lines":["    "]},{"start":{"row":74,"column":28},"end":{"row":74,"column":32},"action":"remove","lines":["    "]},{"start":{"row":74,"column":24},"end":{"row":74,"column":28},"action":"remove","lines":["    "]},{"start":{"row":74,"column":20},"end":{"row":74,"column":24},"action":"remove","lines":["    "]}],[{"start":{"row":74,"column":16},"end":{"row":74,"column":20},"action":"remove","lines":["    "],"id":17},{"start":{"row":74,"column":12},"end":{"row":74,"column":16},"action":"remove","lines":["    "]},{"start":{"row":74,"column":8},"end":{"row":74,"column":12},"action":"remove","lines":["    "]},{"start":{"row":74,"column":4},"end":{"row":74,"column":8},"action":"remove","lines":["    "]},{"start":{"row":74,"column":0},"end":{"row":74,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":73,"column":24},"end":{"row":74,"column":11},"action":"remove","lines":["","\t\t\t\t\t\t\t\t\t\t\t"],"id":18}],[{"start":{"row":26,"column":26},"end":{"row":27,"column":0},"action":"insert","lines":["",""],"id":19},{"start":{"row":27,"column":0},"end":{"row":27,"column":20},"action":"insert","lines":["                    "]}],[{"start":{"row":27,"column":0},"end":{"row":27,"column":20},"action":"remove","lines":["                    "],"id":20}],[{"start":{"row":26,"column":26},"end":{"row":27,"column":0},"action":"remove","lines":["",""],"id":22}],[{"start":{"row":28,"column":24},"end":{"row":49,"column":30},"action":"remove","lines":["<div class=\"search-style-2\">","                            <form action=\"#\">","                                <select class=\"select-active\">","                                    <option>すべてのカテゴリ</option>","                                    <option>肉・畜産</option>","                                    <option>魚介・水産</option>","                                    <option>野菜・農産</option>","                                    <option>調味料・乾物</option>","                                    <option>加工食材・惣菜</option>","                                    <option>米穀・粉類</option>","                                    <option>麺・製菓・製パン</option>","                                    <option>その他食品</option>","                                    <option>酒類</option>","                                    <option>茶・ソフトドリンク</option>","                                    <option>消耗品・備品</option>","                                    <option>衛生・清掃品</option>","                                    <option>販促・事務用品</option>","                                    <option>店舗設備</option>","                                </select>","                                <input type=\"text\" placeholder=\"何をお探しですか？\" />","                            </form>","                        </div>"],"id":42},{"start":{"row":28,"column":20},"end":{"row":28,"column":24},"action":"remove","lines":["    "]},{"start":{"row":28,"column":16},"end":{"row":28,"column":20},"action":"remove","lines":["    "]},{"start":{"row":28,"column":12},"end":{"row":28,"column":16},"action":"remove","lines":["    "]},{"start":{"row":28,"column":8},"end":{"row":28,"column":12},"action":"remove","lines":["    "]},{"start":{"row":28,"column":4},"end":{"row":28,"column":8},"action":"remove","lines":["    "]},{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":27,"column":46},"end":{"row":28,"column":0},"action":"remove","lines":["",""],"id":43}],[{"start":{"row":67,"column":17},"end":{"row":67,"column":18},"action":"remove","lines":[">"],"id":44},{"start":{"row":67,"column":16},"end":{"row":67,"column":17},"action":"remove","lines":["-"]},{"start":{"row":67,"column":15},"end":{"row":67,"column":16},"action":"remove","lines":["-"]},{"start":{"row":67,"column":14},"end":{"row":67,"column":15},"action":"remove","lines":[" "]}],[{"start":{"row":37,"column":44},"end":{"row":37,"column":65},"action":"insert","lines":["\"{{url('/account')}}\""],"id":45}],[{"start":{"row":37,"column":65},"end":{"row":37,"column":84},"action":"remove","lines":["\"page-account.html\""],"id":46}],[{"start":{"row":34,"column":44},"end":{"row":34,"column":65},"action":"insert","lines":["\"{{url('/account')}}\""],"id":47}],[{"start":{"row":34,"column":53},"end":{"row":34,"column":60},"action":"remove","lines":["account"],"id":48},{"start":{"row":34,"column":53},"end":{"row":34,"column":54},"action":"insert","lines":["c"]},{"start":{"row":34,"column":54},"end":{"row":34,"column":55},"action":"insert","lines":["a"]},{"start":{"row":34,"column":55},"end":{"row":34,"column":56},"action":"insert","lines":["r"]},{"start":{"row":34,"column":56},"end":{"row":34,"column":57},"action":"insert","lines":["t"]}],[{"start":{"row":34,"column":62},"end":{"row":34,"column":78},"action":"remove","lines":["\"shop-cart.html\""],"id":49}],[{"start":{"row":40,"column":44},"end":{"row":40,"column":65},"action":"insert","lines":["\"{{url('/account')}}\""],"id":50}],[{"start":{"row":40,"column":65},"end":{"row":40,"column":84},"action":"remove","lines":["\"page-account.html\""],"id":51}],[{"start":{"row":25,"column":32},"end":{"row":25,"column":53},"action":"insert","lines":["\"{{url('/account')}}\""],"id":52}],[{"start":{"row":25,"column":41},"end":{"row":25,"column":48},"action":"remove","lines":["account"],"id":53},{"start":{"row":25,"column":41},"end":{"row":25,"column":42},"action":"insert","lines":["i"]},{"start":{"row":25,"column":42},"end":{"row":25,"column":43},"action":"insert","lines":["n"]},{"start":{"row":25,"column":43},"end":{"row":25,"column":44},"action":"insert","lines":["d"]},{"start":{"row":25,"column":44},"end":{"row":25,"column":45},"action":"insert","lines":["e"]},{"start":{"row":25,"column":45},"end":{"row":25,"column":46},"action":"insert","lines":["x"]}],[{"start":{"row":25,"column":51},"end":{"row":25,"column":63},"action":"remove","lines":["\"index.html\""],"id":54}],[{"start":{"row":32,"column":50},"end":{"row":32,"column":54},"action":"remove","lines":["Nest"],"id":55}],[{"start":{"row":38,"column":68},"end":{"row":38,"column":72},"action":"remove","lines":["Nest"],"id":56}],[{"start":{"row":172,"column":39},"end":{"row":172,"column":63},"action":"insert","lines":["href=\"{{url('/index')}}\""],"id":57}],[{"start":{"row":172,"column":39},"end":{"row":172,"column":40},"action":"insert","lines":[" "],"id":58}],[{"start":{"row":173,"column":54},"end":{"row":173,"column":78},"action":"insert","lines":["href=\"{{url('/index')}}\""],"id":59}],[{"start":{"row":173,"column":54},"end":{"row":173,"column":55},"action":"insert","lines":[" "],"id":60}],[{"start":{"row":173,"column":69},"end":{"row":173,"column":74},"action":"remove","lines":["index"],"id":61},{"start":{"row":173,"column":69},"end":{"row":173,"column":70},"action":"insert","lines":["a"]},{"start":{"row":173,"column":70},"end":{"row":173,"column":71},"action":"insert","lines":["i"]}],[{"start":{"row":173,"column":70},"end":{"row":173,"column":71},"action":"remove","lines":["i"],"id":62},{"start":{"row":173,"column":69},"end":{"row":173,"column":70},"action":"remove","lines":["a"]}],[{"start":{"row":173,"column":69},"end":{"row":173,"column":70},"action":"insert","lines":["q"],"id":63},{"start":{"row":173,"column":70},"end":{"row":173,"column":71},"action":"insert","lines":["u"]},{"start":{"row":173,"column":71},"end":{"row":173,"column":72},"action":"insert","lines":["o"]},{"start":{"row":173,"column":72},"end":{"row":173,"column":73},"action":"insert","lines":["t"]},{"start":{"row":173,"column":73},"end":{"row":173,"column":74},"action":"insert","lines":["t"]},{"start":{"row":173,"column":74},"end":{"row":173,"column":75},"action":"insert","lines":["i"]},{"start":{"row":173,"column":75},"end":{"row":173,"column":76},"action":"insert","lines":["o"]}],[{"start":{"row":173,"column":76},"end":{"row":173,"column":77},"action":"insert","lines":["n"],"id":64}],[{"start":{"row":173,"column":76},"end":{"row":173,"column":77},"action":"remove","lines":["n"],"id":65},{"start":{"row":173,"column":75},"end":{"row":173,"column":76},"action":"remove","lines":["o"]},{"start":{"row":173,"column":74},"end":{"row":173,"column":75},"action":"remove","lines":["i"]},{"start":{"row":173,"column":73},"end":{"row":173,"column":74},"action":"remove","lines":["t"]}],[{"start":{"row":173,"column":73},"end":{"row":173,"column":74},"action":"insert","lines":["a"],"id":66},{"start":{"row":173,"column":74},"end":{"row":173,"column":75},"action":"insert","lines":["t"]},{"start":{"row":173,"column":75},"end":{"row":173,"column":76},"action":"insert","lines":["i"]},{"start":{"row":173,"column":76},"end":{"row":173,"column":77},"action":"insert","lines":["o"]},{"start":{"row":173,"column":77},"end":{"row":173,"column":78},"action":"insert","lines":["n"]}],[{"start":{"row":180,"column":0},"end":{"row":239,"column":18},"action":"remove","lines":["        <section class=\"section-padding footer-mid\">","            <div class=\"container pt-15 pb-20\">","                <div class=\"row\">","                    <div class=\"col\">","                        <div class=\"widget-about font-md mb-md-3 mb-lg-3 mb-xl-0\">","                            <div class=\"logo mb-30\">","                                <a href=\"index.html\" class=\"mb-15\"><img src=\"{{ asset('img/theme/logo.svg') }}\" alt=\"logo\" /></a>","                                <!-- <p class=\"font-lg text-heading\">Awesome grocery store website template</p> -->","                            </div>","                            <ul class=\"contact-infor\">","                                <li><img src=\"{{ asset('img/theme/icons/icon-location.svg') }}\" alt=\"\" /><strong>住所:</strong> <span>東京都XX区XX XX-XX-XX XXX</span></li>","                                <li><img src=\"{{ asset('img/theme/theme/icons/icon-contact.svg') }}\" alt=\"\" /><strong>TEL:</strong><span> 0X0 - XXXX - XXXX</span></li>","                                <li><img src=\"{{ asset('img/theme/theme/icons/icon-email-2.svg') }}\" alt=\"\" /><strong>Email:</strong><span> xxxxx@xxxx.com</span></li>","                                <li><img src=\"{{ asset('img/theme/theme/icons/icon-clock.svg') }}\" alt=\"\" /><strong>受付時間:</strong><span> xx:00 - xx:00</span></li>","                            </ul>","                        </div>","                    </div>","                    <div class=\"footer-link-widget col\">","                        <h4 class=\"widget-title\">会社案内</h4>","                        <ul class=\"footer-list mb-sm-5 mb-md-0\">","                            <li><a href=\"#\">会社概要</a></li>","                            <li><a href=\"#\">沿革</a></li>","                            <li><a href=\"#\">プライバシーポリシー</a></li>","                            <li><a href=\"#\">利用規約</a></li>","                            <li><a href=\"#\">お問い合わせ</a></li>","                        </ul>","                    </div>","                    <div class=\"footer-link-widget col\">","                        <h4 class=\"widget-title\">投資家情報</h4>","                        <ul class=\"footer-list mb-sm-5 mb-md-0\">","                            <li><a href=\"#\">決算概要</a></li>","                            <li><a href=\"#\">IRニュース</a></li>","                            <li><a href=\"#\">IRカレンダー</a></li>","                        </ul>","                    </div>","                    <div class=\"footer-link-widget col\">","                        <h4 class=\"widget-title\">ニュース</h4>","                        <ul class=\"footer-list mb-sm-5 mb-md-0\">","                            <li><a href=\"#\">最新のニュースレポート</a></li>","                        </ul>","                    </div>","                    <div class=\"footer-link-widget col\">","                        <h4 class=\"widget-title\">採用情報</h4>","                        <ul class=\"footer-list mb-sm-5 mb-md-0\">","                            <li><a href=\"#\">新卒採用</a></li>","                            <li><a href=\"#\">キャリア採用</a></li>","                        </ul>","                    </div>","                    <div class=\"footer-link-widget widget-install-app col\">","                        <h4 class=\"widget-title\">アプリのインストール</h4>","                        <div class=\"download-app\">","                            <a href=\"#\" class=\"hover-up mb-sm-2 mb-lg-0\"><img class=\"active\" src=\"{{ asset('img/theme/theme/app-store.jpg') }}\" alt=\"\" /></a>","                            <a href=\"#\" class=\"hover-up mb-sm-2\"><img src=\"{{ asset('img/theme/theme/google-play.jpg') }}\" alt=\"\" /></a>","                        </div>","                        <p class=\"mb-20\">Secured Payment Gateways</p>","                        <img class=\"wow fadeIn animated\" src=\"{{ asset('img/theme/theme/payment-method.png') }}\" alt=\"\" />","                    </div>","                </div>","            </div>","        </section>"],"id":67},{"start":{"row":179,"column":25},"end":{"row":180,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":112,"column":131},"end":{"row":112,"column":137},"action":"remove","lines":["プロダクト名"],"id":68},{"start":{"row":112,"column":131},"end":{"row":112,"column":136},"action":"insert","lines":["牛肩ロース"]}],[{"start":{"row":132,"column":131},"end":{"row":132,"column":137},"action":"remove","lines":["プロダクト名"],"id":69},{"start":{"row":132,"column":131},"end":{"row":132,"column":135},"action":"insert","lines":["鶏もも肉"]}],[{"start":{"row":118,"column":70},"end":{"row":118,"column":71},"action":"remove","lines":["1"],"id":70}],[{"start":{"row":118,"column":70},"end":{"row":118,"column":71},"action":"insert","lines":["2"],"id":71}],[{"start":{"row":160,"column":70},"end":{"row":160,"column":71},"action":"remove","lines":["1"],"id":72}],[{"start":{"row":160,"column":70},"end":{"row":160,"column":71},"action":"insert","lines":["3"],"id":73}],[{"start":{"row":153,"column":131},"end":{"row":153,"column":137},"action":"remove","lines":["プロダクト名"],"id":74},{"start":{"row":153,"column":131},"end":{"row":153,"column":134},"action":"insert","lines":["トマト"]}]]},"ace":{"folds":[],"scrolltop":2021.5,"scrollleft":0,"selection":{"start":{"row":153,"column":131},"end":{"row":153,"column":134},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":17,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1650733757085,"hash":"3255c048a5b9ed4d8dd6476016d46f8b02af316c"}