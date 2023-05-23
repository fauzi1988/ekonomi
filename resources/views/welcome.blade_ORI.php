@extends('front_layouts/main')

@section('container')
<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div id="home" class="first-section" style="background-image:url('front/master/images/slider-01.jpg');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-right">
                                <div class="big-tagline">
                                
                                </div>
                            </div>
                        </div><!-- end row -->            
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <div class="carousel-item">
            <div id="home" class="first-section" style="background-image:url('front/master/images/slider-02.jpg');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-left">
                                <div class="big-tagline">
                                    <h2 data-animation="animated zoomInRight">SmartEDU <strong>education school</strong></h2>
                                    <p class="lead" data-animation="animated fadeInLeft">With Landigoo respsds sdfsdf onsive landing page template, you can promote your all hosting, domain and email services. </p>
                                        <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="#" class="hover-btn-new"><span>Read More</span></a>
                                </div>
                            </div>
                        </div><!-- end row -->            
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <div class="carousel-item">
            <div id="home" class="first-section" style="background-image:url('front/master/images/slider-03.jpg');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="big-tagline">
                                    <h2 data-animation="animated zoomInRight"><strong>VPS Servers</strong> Company</h2>
                                    <p class="lead" data-animation="animated fadeInLeft">1 IP included with each server 
                                        Your Choice of any OS (CentOS, Windows, Debian, Fedora)
                                        FREE Reboots</p>
                                        <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="#" class="hover-btn-new"><span>Read More</span></a>
                                </div>
                            </div>
                        </div><!-- end row -->            
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <!-- Left Control -->
        <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div id="overviews" class="section wb">
    <div class="container">
        
        <div class="row">  
            <div class="col-md-8">
                <div class="widget-search">
                <i class="fa fa-newspaper-o fa-2x" aria-hidden="true"> <b>berita2</b></i>
                </div>
                <div class="div">
                    <h3>&nbsp;</h3>
                </div>
                <div class="row">
                    @foreach ($beritas as $berita)
                    <div class="col-lg-6 col-md-6 col-12 mb-3">
                        <div class="blog-item">
                            <div class="image-blog">
                                <img src="{{ asset('storage/' . $berita->image) }}" alt="" class="img-fluid">
                            </div>
                            <div class="meta-info-blog">
                                <span><i class="fa fa-calendar"></i> <a href="#">{{ $berita->created_at }}</a> </span>
                                <span><i class="fa fa-pencil"></i>  <a href="#">{{ $berita->penulis }}</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">Berita</a></span>
                            </div>
                            <div class="blog-title">
                                <h2><a href="#" title="">{{ $berita->judul }}</a></h2>
                            </div>
                            <div class="blog-desc">
                                <p>Lorem ipsum door sit amet, fugiat deicata sdfs sdfs sdfs sdfs sdfsf sdf  avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegeb sdf sdf sd sf sdf sdf sdf sd sd sd  sdf at, liber regione eu sit sdfsd fdsf sdf sd fsd fs df dsf s fsd .... </p>
                            </div>
                            <div class="blog-button">
                                <a class="hover-btn-new orange" href="#"><span>Read More<span></a>
                            </div>
                        </div>
                        
                    </div><!-- end col -->
                    @endforeach

                </div>
            </div>
            <div class="col-4">
                
                    <div class="col right-single">
                        <div class="widget-search">
                            <div class="site-search-area">
                                <form method="get" id="site-searchform" action="#">
                                    <div>
                                        <input class="input-text form-control" name="search-k" id="search-k" placeholder="Search keywords..." type="text">
                                        <input id="searchsubmit" value="Search" type="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget-categories">
                        <i class="fa fa-bullhorn fa-2x" aria-hidden="true"> <b>Pengumuman</b></i><hr>
                            <ul>
                                <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true">  Penerimaan Mahasiswa Baru</i></a></li>
                                <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true">  Seminar Perbankan</i></a></li>
                                <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true">  Seminar Keuangan</i></a></li>
                                <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true">  Seminar Akuntansi</i></a></li>
                                <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true">  Seminar Ekonomi</i></a></li>
                                <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true">  Pelatihan Pengelolaan Dana</i></a></li>
                            </ul>
                        </div>
                        <div class="widget-categories">
                        <i class="fa fa-bullhorn fa-2x" aria-hidden="true"> <b>Kegiatan</b></i><hr>
                            <ul>
                                <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true">  Penerimaan Mahasiswa Baru</i></a></li>
                                <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true">  Seminar Perbankan</i></a></li>
                                <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true">  Seminar Keuangan</i></a></li>
                                <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true">  Seminar Akuntansi</i></a></li>
                                <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true">  Seminar Ekonomi</i></a></li>
                                <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true">  Pelatihan Pengelolaan Dana</i></a></li>
                            </ul>
                        </div>
                        
                    </div>
                <!-- end col -->
                
            
            <!-- end col -->
            </div>
           


            
        </div>
        <!-- end row -->
        <!-- end row -->
    </div><!-- end container -->
    
</div><!-- end section -->

<div class="section cl">
    <div class="container">
        <div class="row text-left stat-wrap">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-study"></i></span>
                <p class="stat_count">12000</p>
                <h3>Mahasiswa</h3>
            </div><!-- end col -->

            <div class="col-md-4 col-sm-4 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-online"></i></span>
                <p class="stat_count">4</p>
                <h3>Prodi</h3>
            </div><!-- end col -->

            <div class="col-md-4 col-sm-4 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-years"></i></span>
                <p class="stat_count">2023</p>
                <h3>Tahun</h3>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<section class="section lb page-section">
    <div class="container">
         <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
            <i class="fa fa-users fa-2x" aria-hidden="true"> <b>Program Studi</b></i>
            </div>
        </div><!-- end title -->
        <div class="hmv-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="inner-hmv">
                        <img src="front/master/images/pbs-kor.jpg" width="220" height="200" alt="">
                        <div class="p-3 mb-2 mt-2 bg-warning text-dark">Dr. Zainal Abidin Marasabessy, SE., M.Sc</div>
                            <h3>PBS</h3>
                            <div class="tr-pa"></div>
                            <p>Program Studi Perbankan Syariah IAIN Ternate merupakan Program Studi Perbankan dengan spesifikasi keilmuan berbasis prinsi Islam.
                                 Adapun Visi program studi Perbankan Syariah IAIN Ternate adalah “ Menjadi pusat Pengembangan ilmu Perbankan syariah berbasis riset 
                                 dalam pengembangan masyarakat Islam Kepulauan”</p>
                            <div class="pricing-table-sign-up">
                                <a href="#" class="hover-btn-new orange"><span>Kunjungi</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="inner-hmv">
                        <img src="front/master/images/mks-kor.jpg" width="220" height="200" alt="">
                        <div class="p-3 mb-2 mt-2 bg-warning text-dark">Cici Aryansi Quilim, S.E., MM</div>
                            
                            <h3>MKS</h3>
                            
                            <div class="tr-pa"></div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam eligendi expedita, provident cupiditate in excepturi.</p>
                            <div class="pricing-table-sign-up">
                                <a href="#" class="hover-btn-new orange"><span>Kunjungi</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="inner-hmv">
                        <img src="front/master/images/asy-kor.jpg" width="220" height="200" alt="">
                        <div class="p-3 mb-2 mt-2 bg-warning text-dark">Muhammad Daud bin Mahmud, SE., M.Acc</div>
                            <h3>ASY</h3>
                            <div class="tr-pa"></div>
                            <p>Prodi Akuntansi Syariah IAIN ternate merupakan Program Studi Akuntansi dengan spesifikasi keilmuan berbasis prinsip islam. Visi yang 
                                diusung oleh Prodi Akuntansi Syariah adalah 
                                “Unggul dan Terkemuka di Bidang Keilmuan Akuntansi Syariah Berbasis Riset dalam Pengembangan Masyarakat Islam Kepulauan tahun 2030”.</p>
                            <div class="pricing-table-sign-up">
                                <a href="#" class="hover-btn-new orange"><span>Kunjungi</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="inner-hmv">
                        <img src="front/master/images/eks-kor.jpg" width="220" height="200" alt="">
                        <div class="p-3 mb-2 mt-2 bg-warning text-dark">Nursinita Killian, S.Sy., M.HI</div>
                            <h3>EKS</h3>
                            <div class="tr-pa"></div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam eligendi expedita, provident cupiditate in excepturi.</p>
                            <div class="pricing-table-sign-up">
                                <a href="#" class="hover-btn-new orange"><span>Kunjungi</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('front/master/images/parallax_04.jpg');">
    <div class="container">
        <div class="section-title text-center">
            <h3>Prestasi Mahasiswa</h3>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="testi-carousel owl-carousel owl-theme">
                    <div class="testimonial clearfix">
                        <div class="testi-meta">
                            <img src="front/master/images/testi_01.png" alt="" class="img-fluid">
                            <h4>Monkey D. Luffy</h4>
                        </div>
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i>Juara I Lomba </h3>
                            <p class="lead">Data ini merupakan data testing, data akan segera diperbahrui dengan data terkini</p>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="testi-meta">
                            <img src="front/master/images/testi_02.png" alt="" class="img-fluid">
                            <h4>Roronoa Zoro </h4>
                        </div>
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Juara Lomba Melukis</h3>
                            <p class="lead">Data ini merupakan data testing, data akan segera diperbahrui dengan data terkini</p>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <div class="testi-meta">
                            <img src="front/master/images/testi_03.png" alt="" class="img-fluid ">
                            <h4>Nami Chan </h4>
                        </div>
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Juara Lomba Lari</h3>
                            <p class="lead">Data ini merupakan data testing, data akan segera diperbahrui dengan data terkini</p>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->
                    
                </div><!-- end carousel -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->
@endsection