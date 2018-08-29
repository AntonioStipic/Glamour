@extends("layout.app")

@section("content")

    <section class="section-video parallax100" style="background-image: url(images/img/background/dvorana.jpeg);">
        <div class="content-video t-center p-t-225 p-b-250">
			<span class="tit2 p-l-15 p-r-15 c-whitesmoke outline">
				Pregled svečane dvorane
			</span>

            <!--<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">-->
            <!---->
            <!--</h3>-->

            <div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="videoModal" data-target="#modal-video-01" id="youtubePlay">
                <div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
                    <i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>










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
                                        Dvorana se nalazi u ulici Braće Radića 57, Našice
                                    </p><br>

                                    <div class="container">
                                        <div class="map ">
                                            <div class="contact-map size37" id="google_map" data-map-x="45.492104" data-map-y="18.101176" data-pin="images/icons/point.png" data-scrollwhell="0" data-draggable="1"></div>
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
@endsection

