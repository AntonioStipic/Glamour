@extends("layout.app")

@section("content")

    {{--<section class="section-video parallax100" style="background-image: url(images/img/background/dvorana.jpeg);">--}}
        {{--<div class="content-video t-center p-t-225 p-b-250">--}}
			{{--<span class="tit2 p-l-15 p-r-15 c-whitesmoke outline">--}}
				{{--Pregled svečane dvorane--}}
			{{--</span>--}}

            {{--<!--<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">-->--}}
            {{--<!---->--}}
            {{--<!--</h3>-->--}}

            {{--<div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="videoModal" data-target="#modal-video-01" id="youtubePlay">--}}
                {{--<div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">--}}
                    {{--<i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    {{--<div class="videoContainer">--}}
        {{--<iframe class="videoContainer__video" width="1920" height="1080" src="http://www.youtube.com/embed/92k1_ByaNqg?modestbranding=1&autoplay=1&controls=0&fs=0&loop=1&rel=0&showinfo=0&disablekb=1" frameborder="0"></iframe>--}}
    {{--</div>--}}

    {{--<div class="video-background">--}}
        {{--<div class="video-foreground">--}}
            {{--<iframe src="https://www.youtube.com/embed/W0LHTWG-UmQ" frameborder="0" allow="autoplay; fullscreen" id="dvoranaVideo"></iframe>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div id="vidtop-content">--}}
        {{--<div class="vid-info">--}}
            {{--<h1>YouTube Fullscreen Background Demo</h1>--}}
            {{--<p>The International Space Station orbits the Earth every 92 minutes, with its crew seeing a sunrise 15 times a day. It exists as a scientific, educational, and engineering platform in low orbit, 330 to 435 kilometres above the Earth.--}}
            {{--<p>Original timelapse by Riccardo Rossi (ISAA), used under a Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License. Raw photos courtesy of http://eol.jsc.nasa.gov/--}}
                {{--<a href="/500/Use-YouTube-Videos-as-Fullscreen-Web-Page-Backgrounds">Full article</a>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="cover">
        <div class="hi">
            <div class="t-center p-t-225 p-b-250">
            <span class="tit2 p-l-15 p-r-15 c-white outline noUnderline">
            Pregled svečane dvorane
            </span>
            </div>
        </div>
    </div>
    <div class="tv">
        <div class="screen mute" id="tv"></div>
    </div>




    <div class="moveDown"></div>
    <section class="section-event">
        <div class="wrap-slick2">
            <div class="slick2">
                <div class="item-slick2 item1-slick2 bg1-pattern">
                    <div class="wrap-content-slide2 p-t-115 p-b-208">
                        <div class="container">

                            <!-- Block2 -->
                            <div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false" data-appear="zoomIn">
                                <!-- Pic block2 -->
                                <div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
                                    <h4 class="tit2 t-center m-b-10 c-black informacije">
                                        Informacije
                                    </h4>

                                    <p class="t-left">
                                        <!--Svečana dvorana ima dovoljno prostora za ugostiti do 550 uzvanika.-->

                                        Svečana dvorana ima kapacitet za primiti od <b>200 do 550</b> uzvanika.<br>
                                        Uz dvoranu, osigurana su parkirna mjesta za goste.<br><br>
                                        Uz maksimalnu popunjenost dvorane ipak je osigurano dovoljno prostora za plesni podij i opuštajuću atmosferu.<br><br>

                                        Modernim sustavom klimatizacije i ventilacije jamčimo ugodnu temperaturu tijekom cijele večeri.<br><br>

                                        U dvorani je dostupan vrlo brzi Wifi.

                                    </p><br>

                                </div>
                                <!-- Text block2 -->
                                <div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
                                    <h4 class="tit2 t-center m-b-10 c-black">
                                        Gdje se nalazimo?
                                    </h4>

                                    <p class="t-left">
                                        Dvorana se nalazi u <a target="_blank" rel="noopener noreferrer" href="https://www.google.com/maps/place/Glamour+sve%C4%8Dana+dvorana/@45.4920841,18.0989821,17z/data=!3m1!4b1!4m5!3m4!1s0x475d0db5059152e1:0x7a0ce93ab9d93884!8m2!3d45.4920804!4d18.1011708">ulici Braće Radića 57, Našice</a>
                                    </p><br>

                                    <div class="container">
                                        <div class="map ">
                                            {{--<div class="contact-map size37" id="google_map" data-map-x="45.492104" data-map-y="18.101176" data-pin="images/icons/point.png" data-scrollwhell="0" data-draggable="1"></div>--}}

                                            <div id="mapid" class="contact-map size37"></div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!--<div class="wrap-slick2-dots"></div>-->
        </div>
    </section>

    <div class="videoModal">
        <div class="videoModalOverlay">
        </div>

        <div class="videoModalVideo">
            <div class="videoModalOverlayX">X</div>

            <iframe src="https://www.youtube.com/embed/92k1_ByaNqg?rel=0&amp;showinfo=0" allow="autoplay; fullscreen" id="videoIframe"></iframe>
        </div>
    </div>
@endsection

