@extends("layout.blogApp")

@section("content")
    <!-- Content page -->


    <section class="section-video parallax100" style="background-image: url(../images/img/background/blog.jpeg);">
        <div class="content-video t-center p-t-225 p-b-225">
			<span class="tit2 p-l-15 p-r-15 c-whitesmoke outline">
				Blog
			</span>

        </div>
    </section>

    <section>
        <div class="bread-crumb bo5-b p-t-17 p-b-17">
            <div class="container">
                <a href="/" class="txt27">
                    Naslovnica
                </a>

                <span class="txt29 m-l-10 m-r-10">/</span>

                <a href="/blog" class="txt27">
                    Blog
                </a>
            </div>
        </div>

        <div class="container">
            <div class="row ">
                <div class="col-md-8 col-lg-9">
                    <div class="p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md">
                        <!-- Block4 -->
                        <div class="blo4 p-b-63">
                            <!-- - -->
                            <div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
                                <a href="/blog/1">
                                    <img src="../images/img/background/imageedit_2_2042114764.jpg" alt="IMG-BLOG">
                                </a>

                                <div class="date-blo4 flex-col-c-m">
									<span class="txt30 m-b-4">
										25
									</span>

                                    <span class="txt31">
										Sij, 2018.
									</span>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="text-blo4 p-t-33">
                                <h4 class="p-b-16">
                                    <a href="/blog/1" class="tit9">NAJČEŠĆA PITANJA S KOJIMA SE SUSREĆEMO PRILIKOM ORGANIZACIJE VJENČANJA</a>
                                </h4>

                                <div class="txt32 flex-w p-b-24">
									<span>
										by Admin
										<span class="m-r-6 m-l-4">|</span>
									</span>

                                    <span>
										25.01.2018.
										<span class="m-r-6 m-l-4">|</span>
									</span>
                                </div>

                                <p>
                                    Nakon što budući bračni par odluči započeti organizaciju vlastitog vjenčanja, na prvi trenutak se uvijek čini kako je posla puno, a pitanja i nedoumica možda još i više.
                                    Kako bi vam olakšali puno toga i pomogli vam u planiranju svakog detalja za vaše vjenčanje, donosimo nekoliko najčešćih pitanja koje nam postavljaju mladenci nakon što se odluče za naše dvorane.

                                    1. Koliko se vremenski ranije treba rezervirati svečana dvorana/Do kada najkasnije trebamo poslati končani popis gostiju?

                                    Svečanu dvoranu je najbolje rezervirati odmah čim ste se odlučili za proslavu vašeg vjenčanja. Termin možete dogovoriti na dva načina –
                                    putem telefonskog broja ili putem Facebook-a. Također na našoj web stranici pod rubrikom – Isplanirajte vjenčanje, možete provjeriti dostupnost i kapacitet svih naše dvorane, putem pripadajuće forme. Nakon što je ovaj glavni korak dogovoren, stojimo na raspolaganju za daljnje dogovore. Točan broj uzvanika se utvrđuje 3 dana prije vjenčanja. Tada se ujedno i sklapa završni ugovor kojim se definiraju sva prava i obveze.

                                </p>
                            </div>
                        </div>

                        <!-- Leave a comment -->
                        <form class="leave-comment p-t-10">
                            <h4 class="txt33 p-b-14">
                                Komentiraj
                            </h4>

                            <textarea class="bo-rad-10 size29 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-40" name="commentent" placeholder="Komentar..."></textarea>

                            <div class="size30 bo2 bo-rad-10 m-t-3 m-b-20">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Ime">
                            </div>

                            <div class="size30 bo2 bo-rad-10 m-t-3 m-b-20">
                                <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email">
                            </div>

                            <!-- Button3 -->
                            <button type="submit" class="btn3 flex-c-m size31 txt11 trans-0-4">
                                Objavi komentar
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Footer -->

@endsection