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

      <div id="logo" class="pull-left" >
        <h1><a href="/#intro" class="scrollto">Ruapehu College</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
            <img src="/images/crests/RCLogo.png" alt="Ruapehu College Crest" title="Ruapehu College Crest" style="width: 100px;"/>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          
            <li class="menu-has-children">
              <a href="/our-school">Our School</a>
              <ul><li>
                
                  <a href="/our-school/principal-s-message">Principal's Message</a>
              </li><li>
                
                  <a href="/our-school/charter">Charter</a>
              </li><li>
                
                  <a href="/our-school/staff">Staff</a>
              </li><li>
                
                  <a href="/our-school/student-leaders">Student Leaders</a>
              </li><li>
                
                  <a href="/our-school/board-of-trustees">Board of Trustees</a>
              </li><li>
                
                  <a href="/our-school/policies">Policies</a>
              </li><li>
                
                  <a href="/our-school/ruapehu-trust">Laurenson Trust</a>
              </li><li>
                
                  <a href="/our-school/whanau-houses">Whanau / Houses</a>
              </li><li>
                
                  <a href="/our-school/our-values-rock">Our Values (ROCK)</a>
              </li><li>
                
                  <a href="/our-school/education-review-office">Education Review Office</a>
              </li><li>
                
                  <a href="/our-school/term-dates">Term Dates</a>
              </li></ul>
             
            </li>
          
            <li class="menu-has-children">
              <a href="/curriculum" class="sf-with-ul">Curriculum</a>
              <ul><li>
                
                  <a href="/curriculum/ncea">NCEA</a>
              </li><li>
                
                  <a href="/curriculum/junior-curriculum">Junior Curriculum</a>
              </li><li>
                
                  <a href="/curriculum/co-curricular">Co-Curricular</a>
              </li><li>
                
                  <a href="/curriculum/sport">Sport</a>
              </li><li>
                
                  <a href="/curriculum/culture">Culture</a>
              </li><li>
                
                  <a href="/curriculum/snow-academy">Snow Academy</a>
              </li><li>
                
                  <a href="/curriculum/weekly-timetable">Weekly Timetable</a>
              </li><li>
                
                  <a href="/curriculum/performing-arts">Performing Arts </a>
              </li><li>
                
                  <a href="/curriculum/examinations">Examinations </a>
              </li><li>
                
                  <a href="/curriculum/curriculum-pathways">Curriculum Pathways</a>
              </li></ul>
             
            </li>
          
            <li class="menu-has-children">
              <a href="/enrolment" class="sf-with-ul">Enrolment</a>
              <ul><li>
                
                  <a href="/enrolment/forms">Forms</a>
              </li><li>
                
                  <a href="/enrolment/uniform">Uniform</a>
              </li><li>
                
                  <a href="/enrolment/attendance">Attendance</a>
              </li></ul>
             
            </li>
          
            <li class="menu-has-children">
              <a href="/news" class="sf-with-ul">News</a>
              <ul><li>
                
                  <a href="/news/school-newsletter">School Newsletters</a>
              </li><li>
                
                  <a href="/news/upcoming-events">Upcoming Events</a>
              </li><li>
                <a href="https://kamar.ruapehu.school.nz/">Calendar</a>
                  
              </li></ul>
             
            </li>
          
            <li class="menu-has-children">
              <a href="/international" class="sf-with-ul">International</a>
              <ul><li>
                
                  <a href="/international/international-students">International Students</a>
              </li><li>
                
                  <a href="/international/our-mountains-our-town">Our Mountains....Our Town</a>
              </li><li>
                
                  <a href="/international/ohakune">Ohakune </a>
              </li><li>
                
                  <a href="/international/application-process">Application Process</a>
              </li><li>
                
                  <a href="/international/location">Why Ruapehu College?</a>
              </li><li>
                
                  <a href="/international/location-2">Why Ohakune?</a>
              </li><li>
                
                  <a href="/international/location-3">Why NZ?</a>
              </li><li>
                
                  <a href="/international/fees">Fees</a>
              </li></ul>
             
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

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletters</h4>
            <pop:content from="school-newsletter" wrap="div" class="footer-links">
              <pop:entries limit="4" wrap="ul" break="li" >
                <i class="ion-ios-arrow-right"></i>
                <a href="<pop:file.src />" target="_blank"><pop:title/></a>
              </pop:entries>
            </pop:content>
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
