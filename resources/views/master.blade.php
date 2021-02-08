<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
    <link rel='stylesheet'
        href='http://fonts.googleapis.com/css?family=Poppins:100,300,400,400italic,500,600,700,700italic'>

    <!-- CSS -->
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='css/structure.css'>
    <link rel='stylesheet' href='css/company.css'>
    <link rel='stylesheet' href='css/custom.css'>

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="plugins/rs-plugin/css/settings.css">

</head>

<body
    class="color-custom style-default button-default layout-full-width if-zoom no-content-padding header-classic minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-title-left menu-link-color menuo-right mobile-tb-center mobile-side-slide mobile-mini-mr-ll be-reg-2078">
    <div id="Wrapper">
        <div id="Header_wrapper" class="bg-parallax" data-enllax-ratio="0.3">
            <header id="Header">
                <div class="header_placeholder"></div>
                <div id="Top_bar">
                    <div class="container">
                        <div class="column one">
                            <div class="top_bar_left clearfix">
                                <div class="logo">
                                    <a id="logo" href="index-company.html" title="BeCompany - BeTheme" data-height="60"
                                        data-padding="15"><img class="logo-main scale-with-grid"
                                            src="images/banner.png" data-retina="images/retina-company.png"
                                            data-height="75" alt="company"><img class="logo-sticky scale-with-grid"
                                            src="images/banner.png" data-retina="images/retina-company.png"
                                            data-height="75" alt="company"><img class="logo-mobile scale-with-grid"
                                            src="images/banner.png" data-retina="images/retina-company.png"
                                            data-height="75" alt="company"><img
                                            class="logo-mobile-sticky scale-with-grid" src="images/banner.png"
                                            data-retina="images/retina-company.png" data-height="75" alt="company"></a>
                                </div>
                                <div class="menu_wrapper">
                                    <nav id="menu">
                                        <ul id="menu-main-menu" class="menu menu-main">
                                            <li
                                            @if(url()->current() == route('home'))
                                            class="current-menu-item"
                                            @endif
                                            >
                                                <a href="{{route('home')}}"><span>Home</span></a>
                                            </li>

                                            <li
                                            @if(url()->current() == route('about'))
                                            class="current-menu-item"
                                            @endif
                                            >
                                                <a href="{{route('about')}}"><span>About us</span></a>
                                            </li>
                                            <li
                                            @if(url()->current() == route('contact'))
                                            class="current-menu-item"
                                            @endif
                                            >
                                                <a href="{{route('contact')}}"><span>Contact</span></a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="http://bit.ly/1M6lijQ"><span><span
                                                            style="padding:0;color:#003eaf">Buy now</span></span></a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <a class="responsive-menu-toggle" href="#"><i class="icon-menu-fine"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                </header>
                </div>

                @yield('content')

                <footer id="Footer" class="clearfix">
                    <div class="widgets_wrapper" style="padding:90px 0;">
                        <div class="container">
                            <div class="column one-fourth">
                                <aside class="widget_text widget widget_custom_html">
                                    <h4>Aliquam fringilla</h4>
                                    <div class="textwidget custom-html-widget">
                                        <ul>
                                            <li style="margin-bottom:10px">
                                                <i class="fas fa-envelope-square"></i><a href="#">Morbi
                                                    accum</a>
                                            </li>
                                            <li style="margin-bottom:10px">
                                                <i style="color:#e34b50" class="icon-right-open"></i><a href="#">Nam
                                                    tellus </a>
                                            </li>
                                            <li style="margin-bottom:10px">
                                                <i style="color:#e34b50" class="icon-right-open"></i><a href="#">Class
                                                    taciti velit</a>
                                            </li>
                                            <li style="margin-bottom:10px">
                                                <i style="color:#e34b50" class="icon-right-open"></i><a href="#">Nam
                                                    tellus </a>
                                            </li>
                                            <li style="margin-bottom:10px">
                                                <i style="color:#e34b50" class="icon-right-open"></i><a href="#">Class
                                                    taciti velit</a>
                                            </li>
                                            <li style="margin-bottom:10px">
                                                <i style="color:#e34b50" class="icon-right-open"></i><a href="#">Mauris
                                                    justo</a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="column one-fourth">
                                <aside class="widget_text widget widget_custom_html">
                                    <h4>Mauris rhoncus</h4>
                                    <div class="textwidget custom-html-widget">
                                        <ul>
                                            <li style="margin-bottom:10px">
                                                <i style="color:#e34b50" class="icon-right-open"></i><a href="#">Nam
                                                    tellus </a>
                                            </li>
                                            <li style="margin-bottom:10px">
                                                <i style="color:#e34b50" class="icon-right-open"></i><a href="#">Class
                                                    taciti velit</a>
                                            </li>
                                            <li style="margin-bottom:10px">
                                                <i style="color:#e34b50" class="icon-right-open"></i><a href="#">Nam
                                                    tellus </a>
                                            </li>
                                            <li style="margin-bottom:10px">
                                                <i style="color:#e34b50" class="icon-right-open"></i><a href="#">Class
                                                    taciti velit</a>
                                            </li>
                                            <li style="margin-bottom:10px">
                                                <i style="color:#e34b50" class="icon-right-open"></i><a href="#">Mauris
                                                    justo</a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="column one-fourth">
                                <aside class="widget_text widget widget_custom_html">
                                    <div class="textwidget custom-html-widget">
                                        <div
                                            class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                            <div class="image_wrapper">
                                                <img class="scale-with-grid" src="images/home_company_pic11.png">
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="column one-fourth">
                                <aside class="widget_text widget widget_custom_html">
                                    <div class="textwidget custom-html-widget">
                                        <h6>CONTACT US</h6>
                                        <p class="big">
                                            #620 Mangalam Fun Square,
                                            <br> Durga Nursery Road,
                                            <br> Udaipur - 313001
                                        </p>
                                        <p class="big">
                                            <i style="color: #c6464b;" class="icon-mail"></i><a
                                                href="#"><span>www.jpnfoods.in </span></a>
                                        </p>
                                        <p class="big">
                                            <i style="color: #c6464b;" class="icon-phone"></i>+91 7665262888
                                        </p>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                    <div class="footer_copy">
                        <div class="container">
                            <div class="column one">
                                <a id="back_to_top" class="button button_js" href="#"><i
                                        class="icon-up-open-big"></i></a>
                                <div class="copyright">
                                    &copy; Copyright by <a target="_blank"
                                        rel="nofollow" href="http://bit.ly/1M6lijQ">@JPN Atta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
        </div>

        <!-- side menu -->
        <div id="Side_slide" class="right dark" data-width="250">
            <div class="close-wrapper">
                <a href="#" class="close"><i class="icon-cancel-fine"></i></a>
            </div>
            <div class="menu_wrapper"></div>
        </div>
        <div id="body_overlay"></div>

        <!-- JS -->
        <script src="js/jquery-2.1.4.min.js"></script>

        <script src="js/mfn.menu.js"></script>
        <script src="js/jquery.plugins.js"></script>
        <script src="js/jquery.jplayer.min.js"></script>
        <script src="js/animations/animations.js"></script>
        <script src="js/translate3d.js"></script>
        <script src="js/scripts.js"></script>

        <script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <script src="plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
        <script src="plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

        <script>
            var revapi1, tpj = jQuery;
            tpj(document).ready(function() {
                if (tpj("#rev_slider_1_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_1_1");
                } else {
                    revapi1 = tpj("#rev_slider_1_1").show().revolution({
                        sliderType: "hero",
                        sliderLayout: "auto",
                        dottedOverlay: "none",
                        delay: 9000,
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: 1240,
                        gridheight: 720,
                        lazyType: "none",
                        shadow: 0,
                        spinner: "spinner2",
                        autoHeight: "off",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            disableFocusListener: false,
                        }
                    });
                }
            });

        </script>

</body>

</html>
