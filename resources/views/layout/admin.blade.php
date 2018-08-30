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

    <link rel="stylesheet" type="text/css" href="css/bootstrap-admin.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
{{--    <link href="{{asset("css/bootstrap-admin.css")}}">--}}
{{--    <link href="{{asset("css/admin.css")}}">--}}


</head>
<body> <!-- class="animsition" -->

@if ($title == "Login")

@endif
<div class="bodyContainer" id="app">
    @yield("content")
</div>

{{--<!-- Footer -->--}}
{{--<footer class="bg1">--}}
    {{--<div class="end-footer bg3">--}}
        {{--<div class="container">--}}
            {{--<div class="flex-sb-m flex-w p-t-22 p-b-22">--}}
                {{--<div class="p-t-5 p-b-5">--}}
                    {{--<!--<a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>-->--}}
                    {{--<a href="http://www.facebook.com/glamournasice" class="fs-15 txt17" target="_blank" rel="noopener noreferrer" id="footerFacebook"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>--}}
                    {{--<!--<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>-->--}}
                {{--</div>--}}

                {{--<div class="txt17 p-r-20 p-t-5 p-b-5 m-r-50 t-center" id="copyrightText">--}}
                    {{--© Sva prava pridržana, 2018. Svečana dvorana Glamour.--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</footer>--}}


{{--<!-- Back to top -->--}}
{{--<div class="btn-back-to-top bg0-hov" id="myBtn">--}}
		{{--<span class="symbol-btn-back-to-top">--}}
			{{--<i class="fa fa-angle-double-up" aria-hidden="true"></i>--}}
		{{--</span>--}}
{{--</div>--}}

{{--<!-- Container Selection1 -->--}}
{{--<div id="dropDownSelect1"></div>--}}

</body>
</html>
