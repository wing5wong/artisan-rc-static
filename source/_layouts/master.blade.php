<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <!-- <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/customisations.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container-fluid">

            <div id="logo" class="pull-left">
                <h1><a href="/#intro" class="scrollto">Ruapehu College</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <img src="/images/crests/RCLogo.png" alt="Ruapehu College Crest" title="Ruapehu College Crest" />
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-has-children">
                        <a href="/our-school">Our School</a>
                        <ul>
                            @foreach($our_school as $s)
                            <li>
                                <a href="{{$s->getPath()}}">{{$s->title}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="menu-has-children">
                        <a href="/curriculum">Curriculum</a>
                        <ul>
                            @foreach($curriculum as $c)
                            <li>
                                <a href="{{$c->getPath()}}">{{$c->title}}</a>
                            </li>
                            @endforeach
                        </ul>

                    </li>

                    <li class="menu-has-children">
                        <a href="/enrolment" class="sf-with-ul">Enrolment</a>
                        <ul>
                            @foreach($enrolment as $e)
                            <li>
                                <a href="{{$e->getPath()}}">{{$e->title}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="menu-has-children">
                        <a href="https://kamar.ruapehu.school.nz/index.php/notices" class="sf-with-ul">Notices</a>
                        <ul>
                            <li>
                                <a href="/news/newsletters">Newsletters</a>
                            </li>
                            <!-- <li>
                                <a href="https://kamar.ruapehu.school.nz/index.php/">Events</a>
                            </li> -->
                            <li>
                                <a href="https://kamar.ruapehu.school.nz/index.php/calendar">Calendar</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="menu-has-children">
                        <a href="/international">International</a>
                        <ul>
                            @foreach($international as $i)
                            <li>
                                <a href="{{$i->getPath()}}">{{$i->title}}</a>
                            </li>
                            @endforeach
                        </ul>

                    </li> -->
                    
 <li class="menu-has-children">
                        <a href="/emergency-management">Emergency Management</a>
                        <ul>
                            @foreach($emergency_management as $i)
                            <li>
                                <a href="{{$i->getPath()}}">{{$i->title}}</a>
                            </li>
                            @endforeach
                        </ul>

                    </li>
                    
                    <li>
                        <a href="/contact">Contact Us</a>
                    </li>

                    <li class="social-links"><a href="https://www.facebook.com/RuapehuCollege/" class="facebook"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </nav>
        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    @yield('content')


    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>Ruapehu College</h3>
                        Kia Ora Koutou. Ruapehu College is set at the foot of the beautiful Mt Ruapehu and the location defines who we are. Our students continue to seek knowledge so they can head into the future with skills that will ensure success. Whaia e koe te iti kahurangi; ki te tuohu koe, me he maunga teitei. Seek the treasure you value most deeply: if you bow your head, let it be to the lofty mountain.
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="/">Home</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="https://kamar.ruapehu.school.nz/index.php">KAMAR Portal</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            30 Tainui Street <br>
                            Ohakune<br>
                            New Zealand <br>
                            <strong>Phone:</strong> 06 385 8398<br>
                            <strong>Email:</strong> office@ruapehu.school.nz<br>
                        </p>

                        <div class="social-links">
                            <a href="https://www.facebook.com/RuapehuCollege/" class="facebook"><i class="fa fa-facebook"></i></a>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-newsletter footer-links">
                        <h4>Our Newsletters</h4>
                        <ul>
                            @foreach($newsletters->take(4) as $nl)
                            <li>
                                <i class="ion-ios-arrow-right"></i>
                                <a href="{{$nl->file}}" target="_blank">
                                    {{$nl->title}}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                <p>
                    © Ruapehu College {{date('Y')}}. All rights reserved.
                </p>
            </div>
            <div class="credits" style="opacity: 0;">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
                <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="/lib/jquery/jquery.min.js"></script>
    <script src="/lib/jquery/jquery-migrate.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/superfish/hoverIntent.js"></script>
    <script src="/lib/superfish/superfish.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/counterup/counterup.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/lib/lightbox/js/lightbox.min.js"></script>
    <script src="/lib/touchSwipe/jquery.touchSwipe.min.js"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>

</html>
