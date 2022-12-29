<!--Template Name: vacayhome
File Name: home.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/icons/favicon.png" />
    <title>hotel</title>


    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('fonts/antonio-exotic/stylesheet.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/lightbox.min.css')}}" />
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />
    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/lightbox-plus-jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/instafeed.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>
</head>

<body>
    <div id="page">
        <!---header top---->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!--                            <a href="#"> </a>
                                                        <div class="info-block"><i class="fa fa-map"></i>701 Old York Drive Richmond USA.</div>-->
                    </div>
                    <div class="col-md-6">
                        <div class="social-grid">
                            <ul class="list-unstyled text-right">
                                <li>
                                    <a><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header--->
        <header class="header-container">
            <div class="container">
                <div class="top-row">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-xs-6">
                            <div id="logo">
                                <!--<a href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                                <a><span style="font-size: 4rem;">Reservasi</span>Hotel</a>
                            </div>
                        </div>
                        <div class="col-sm-6 visible-sm">
                            <div class="text-right">
                                <button type="button" class="book-now-btn">Book Now</button>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                            <nav class="navbar navbar-default">
                                <div class="navbar-header page-scroll">
                                    <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                    <ul id="" class="list-unstyled nav1 cl-effect-10">
                                        <li>
                                            <a data-hover="Home" href="{{route('home.index')}}"><span>Home</span></a>
                                        </li>
                                        <li>
                                            <a data-hover="About" href="{{route('about.index')}}"><span>About</span></a>
                                        </li>
                                        <li>
                                            <a data-hover="Hotel" href="{{route('hotel.index')}}"><span>Hotel</span></a>
                                        </li>
                                        <li>
                                            <a data-hover="Manage" href="{{route('manage.index')}}"><span>Manage</span></a>
                                        </li>
                                        <li>
                                            <a data-hover="Detail" href="{{route('detail.index')}}"><span>Detail</span></a>
                                        </li>
                                        <li>
                                            <a data-hover="Contact Us" href="{{route('kontak.index')}}"><span>contact Us</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-12 hidden-sm">
                            <div class="text-right">
                                <a href="{{route('reg.index')}}"> <button style="border-radius: 12px;" class="book-now-btn" href="">SING-IN</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <!---footer--->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 width-set-50">
                        <div class="footer-details">
                            <h4>Get in touch</h4>
                            <ul class="list-unstyled footer-contact-list">
                                <li>
                                    <i class="fa fa-envelope-o fa-lg"></i>
                                    <p><a href="mailto:riskabx04@gmail.com"> riskabx04@gmail.com</a></p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o fa-lg"></i>
                                    <p><a href="mailto:baiqevy25@gmail.com"> baiqevy25@gmail.com</a></p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o fa-lg"></i>
                                    <p><a href="mailto:istivalbaiq@gmail.com"> istivalbaiq@gmail.com</a></p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o fa-lg"></i>
                                    <p><a href="murrizal023@gmail.com"> murrizal023@gmail.com</a></p>
                                </li>
                            </ul>
                            <div class="footer-social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                            <div class="input-group" id="subscribe">
                                <input type="text" class="form-control subscribe-box" value="" name="subscribe" placeholder="EMAIL ID" />
                                <span class="input-group-btn">
                                    <button type="button" class="btn subscribe-button">
                                        <i class="fa fa-paper-plane fa-lg"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 width-50 width-set-50">
                        <div class="footer-details">
                            <h4>explore</h4>
                            <ul class="list-unstyled footer-links">
                                <li class="active"><a href="{{route('home.index')}}">Home</a></li>
                                <li><a href="{{route('about.index')}}" style="border-radius: 12 px;">About</a></li>
                                <li><a href="{{route('hotel.index')}}">Hotel</a></li>
                                <li><a href="{{route('manage.index')}}">Manage</a></li>
                                <li><a href="{{route('detail.index')}}">Detail</a></li>
                                <li><a href="{{route('kontak.index')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="footer-details">
                            <h4>Now On Instagram</h4>
                            <div class="row">
                                <div class="instagram-images">
                                    <div id="instafeed"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copyright">
                    &copy; TUGAS FRAMEWORK
                    <a href="http://www.themevault.net/" target="_blank">StmikLombok.</a>
                </div>
            </div>
        </footer>

        <!--back to top--->
        <a style="display: none" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
            <span>Top</span>
        </a>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        $(function() {
            var path = window.location.href; // Mengambil data URL pada Address bar
            $('nav a').each(function() {
                // Jika URL pada menu ini sama persis dengan path...
                if (this.href === path) {
                    // Tambahkan kelas "active" pada menu ini
                    $(this).addClass('active');
                }
            });
        });
    </script>
</body>

</html>