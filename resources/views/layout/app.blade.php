<!doctype html>
{{--<html lang="{{ app()->getLocale() }}">--}}
<head>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config("app.name", "Glamour")}}</title>

    <title>Glamour</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="EI=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/img/favicon.jpg"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

</head>
<body class="animsition">

    @include("inc.navbar")
    @if ($title == "Dvorana")
        @include("inc.dvoranaInc")
    @endif

    <div class="bodyContainer" id="app">
        @yield("content")
    </div>


    <!-- Footer -->
    <footer class="bg1">
        <div class="end-footer bg3">
            <div class="container">
                <div class="flex-sb-m flex-w p-t-22 p-b-22">
                    <div class="p-t-5 p-b-5">
                        <!--<a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>-->
                        <a href="http://www.facebook.com/glamournasice" class="fs-15 txt17" target="_blank" rel="noopener noreferrer" id="footerFacebook"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
                        <!--<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>-->
                    </div>

                    <div class="txt17 p-r-20 p-t-5 p-b-5 m-r-50 t-center" id="copyrightText">
                        © Sva prava pridržana, 2018. Svečana dvorana Glamour.
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Back to top -->
    <div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
    </div>

    <!-- Container Selection1 -->
    <div id="dropDownSelect1"></div>


    <script src="{{asset("js/app.js")}}"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/slick-custom.js"></script>


    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
    <script type="text/javascript">
        $('.parallax100').parallax100();
    </script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    @if ($title == "Galerija")
        <script src="{{asset("js/galerija.js")}}"></script>
        <script src="{{asset("js/lazyload.js")}}"></script>
    @endif

    @if ($title == "Planer")
        <script src="{{asset("js/planer.js")}}"></script>
    @endif
</body>
</html>
