<?php
    $msg = "";
  use PHPMailer\PHPMailer\PHPMailer;
  include_once "PHPMailer/PHPMailer.php";
  include_once "PHPMailer/Exception.php";
  include_once "PHPMailer/SMTP.php";

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (isset($_FILES['attachment']['name']) && $_FILES['attachment']['name'] != "") {
      $file = "attachment/" . basename($_FILES['attachment']['name']);
      move_uploaded_file($_FILES['attachment']['tmp_name'], $file);
    } else
      $file = "";

    $mail = new PHPMailer();

    //if we want to send via SMTP
    $mail->Host = "smtp.gmail.com";
    //$mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "senaidbacinovic@gmail.com";
    $mail->Password = "5C1bcnPkDI4Wd%#";
    $mail->SMTPSecure = "ssl"; //TLS
    $mail->Port = 465; //587

    $mail->addAddress('info@sbmozmedia.com');
    $mail->name = $name;
    $mail->setFrom($email, $name);
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = $message;
    $mail->addAttachment($file);

    if ($mail->send())
        $msg = "Your email has been sent, thank you!";
    else
        $msg = "Please try again!";

    unlink($file);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Google verification - Indixing website-->
    <meta name="google-site-verification" content="vAXOM-C5EUGGIwrxTNowJclsNz2vX4n1x9oochtq--s" />
    <title>Contact SB.MOZMEDIA - Digital Marketing Agency in Mozambiquet</title>
    <meta name="description"
    content="SB.MOZMEDIA is a Digital Marketing Agency based in Mozambique offering leading Social Media Marketing, Website Design &amp; Development, Email Marketing, SMS Marketing, SEO Search Engine Marketing, eCommerce Development, Domain Registration &amp; Web Hosting, Call +258 321 2622 or email at info@sbmozmedia.com">
  <meta name="keywords"
    content="Web Design &amp; Development Mozambique, Digital Marketing Mozambique, Affordable Websites Mozambique, eCommerce Mozambique, Domain Registration Mozambique, Web Hosting Mozambique, Website Quotes Mozambique, Branding Mozambique, Professional Email Mozambique, Website Maintenance Mozambique">
  <meta name="twitter:description"
    content="Digital Marketing Agency Mozambique, Flexible and Affordable for Every Business">
  <meta name="twitter:title" content="SB.MOZMEDIA Digital Marketing Agency in Mozambique">
  <meta name="twitter:description"
    content="Digital Marketing Agency in Mozambique, Flexible and Affordable for Every Business">
  <link rel="canonical" href="https://www.sbmozmedia.com/">
  <meta property="og:title" content="SB.MOZMEDIA Digital Marketing Agency in Mozambique">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://www.sbmozmedia.com/">
  <meta property="og:site_name" content="SB.MOZMEDIA">

    
    <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122993878-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-122993878-1');
      </script>
     <!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="image/png" href="img/assets/sb_favicon.png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
   <link rel="stylesheet" type="text/css" href="css/main_mini.css">
 <script src="https://kit.fontawesome.com/b0d58c42f6.js" crossorigin="anonymous"></script>
 <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '221281109041824');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=221281109041824&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>
  <body id="home">
     <div class="spinner-ctn">
    <div class="spinner">
      <div class="rectagle1"></div>
      <div class="rectagle2"></div>
      <div class="rectagle3"></div>
      <div class="rectagle4"></div>
      <div class="rectagle5"></div>
    </div>
  </div>
    <!--Navigation menu-->
      <nav class="navbar fixed-top navbar-expand-lg navbar-light">
     <div class="container-fluid wild"><a class="navbar-brand" href="index.html"><img src="img/assets/sb_logo.jpg"
          alt="logo"></a><button class="navbar-toggler compressed" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
             <li class="nav-item dropdown dropbtn"><a class="nav-link" href="#">Services <i
                class="fas fa-chevron-down"></i></a>
           <li class="nav-item dropdown dropbtn"><a class="nav-link" href="#">Services <i
                class="fas fa-chevron-down"></i></a>
            <div class="dropdown-content">
              <a href="dev.html">Web
                Design &amp; Development</a>
              <a href="ecommerce.html">E-commerce Development</a>
              <a href="digital.html">Digital
                Marketing</a>
              <a href="domain_hosting.html">Custom Domain &amp; Web Hosting</a>
              <a href="email.html">Professional Emails</a>
              <a href="maintenance.html">Website Maintenance</a>
            </div>
          </li>
                 <li class="nav-item"><a class="nav-link" href="portfolio.html">portfolio</a></li>
           <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
          <li class="nav-item"><a class="nav-link get_touch" href="sendemail.php">contacts</a></li>
             </ul>      
            </div>
          </div>
        </nav>
      <!--hero section-->
      <section id="maintanance_horo">
        <div class="container-fluid wild">
          <div class="row">
            <div class="col-12">
              <div class="hero-caption">
                  <h1><span class="making-cont">Ready to </span> talk?</span></h1>
                  <p class="dev-wrapper">contact us today!</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!--contact form-->
      <section class="contactForm section-space text-center">
        <div class="container-fluid wild">
          <div class="row justify-content-center">
            <div class="col-md-9">
              <h2>Let's Do Magic Together!</h2>
              <p>We would love to take on your next project...</p>

                      <?php if ($msg != "") echo "$msg<br><br>"; ?>

              <div class="contact_form">
                <form method="post" action="sendemail.php" enctype="multipart/form-data">
                <input class="form-control" name="name" placeholder="Full Name..."><br>
                <input class="form-control" name="subject" placeholder="Subject..."><br>
                <input class="form-control" name="email" type="email" placeholder="Email..."><br>
                <textarea placeholder="Message..." class="form-control" name="message"></textarea><br>
                <input id="sendBtn" class="btn contact-btn" name="submit" type="submit" value="Send Email">
              </form>
              </div>
            </div>
          </div>
        </div>
      </section>
       <!--call to action two--->
       <section class="call2 upb_row_bg">
        <div class="container-fluid wild">
          <div class="row">
            <div class="col-md-12">
              <div class="call-caption">
                <h3>Get a proposal for your project!</h3>
                <span class="call_text">Web Design and Development, E-commerce Development, Web Maintenance, Digital Marketing, Professional Email, Custom Domain &amp; Web Hosting</span>
                 <a class="btn call2_btn" href="#">request proposal</a>
              </div>
            </div>
          </div>
        </div>
      </section>
   <!--footer-->
      <section class=" services footer footer-right section-space">
    <div class="container-fluid wild">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <h2 class="footer-h2">CONTACT US</h2>
          <h2 class="number">+258 84 321 2622</h2>
          <ul class="list-unstyled">
            <li><i class="far fa-envelope"></i> info@sbmozmedia.com</li>
            <li><i class="fas fa-globe"></i> www.sbmozmedia.com</li>
            <li><i class="far fa-clock"></i> Mon. to Fri.:08:00 - 12:00 | 14:00 - 17:00</li>
            <li><i class="far fa-clock"></i> Sat. and Sun.:Closed</li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 footer-left">
          <h3>Sign up today and get 10% discount!</h3>
          <div id="mailchimp">
            <form id="mc-embedded-subscribe-form" class="validate"
              action="https://sbmozmedia.us4.list-manage.com/subscribe/post?u=94596a46a11ea88474943128f&amp;id=705cd2acdc"
              method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
              target="_blank" novalidate>
              <input id="mce-FNAME" class="name" name="FNAME" size="30" type="text" value=""
                placeholder="Enter your name" />
              <input id="mce-EMAIL" class="required email" name="EMAIL" size="30" type="email" value=""
                placeholder="Enter your email" />
              <input id="mc-embedded-subscribe" class="button contact-btn" name="subscribe" type="submit"
                value="sign up!" />
            </form>
          </div>
          <ul class="list-unstyled social">
            <li><a href="https://www.linkedin.com/company/sbmozmedia/" target="_blank"> <i
                  class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://www.instagram.com/sbmozmedia/" target="_blank"><i class="fab fa-instagram"></i></a>
            </li>
            <li><a href="https://web.facebook.com/SBmozmedia-1213522845455533/" target="_blank"><i
                  class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/sbmozmedia" target="_blank"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
      <section class="footerline">
        <div class="container-fluid wild">
          <div class="row">
            <div class="col-12">
               <p>2017-2020 &copy; SB-MOZMEDIA - Full service Creative, Digital Marketing, Development & Web Design Agency -
            Maputo - Mozambique</p>
            </div>
          </div>
        </div>
      </section>


<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <script src="js/main.js"></script>
</body>

</html>

