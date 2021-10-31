<!DOCTYPE html>
<html  lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet"  href="splash.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

	<title>Splash screen</title>
</head>
<body>
	
	<div class="intro">
		<h1 class="logo-header">
			<span class="logo">VIT Internship </span>  <span class="logo"> Mangement System</span>
		</h1>
	</div>
<section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>VIT Internship Mangement Portal</h6>
              <h2><em>Welcome</em> Back</h2>
             
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4>Admin</h4>
              </div>
              <div class="content-hide">
                <p>Only admin can logine here.</p>
                
               <a href="employer/login.php"> <div class="scroll-to-section">Admin Login</div></a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4>Student</h4>
              </div>
              <div class="content-hide">
                <p>Only students can login here</p>
             <a href="login.php">   <div class="scroll-to-section">Student Login</div></a>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4>Visit Site</h4>
              </div>
              <div class="content-hide">
                <p>Any query Contact Us</p>
                <a href="https://vit.edu.in/"><div class="scroll-to-section">View now</div></a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>

<script src="app.js"></script>

</body>
</html>