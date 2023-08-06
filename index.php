<!DOCTYPE html>

<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    

    $connection= mysqli_connect('localhost','root','','tfms');
    $msg= "" ;
    
    if(isset($_POST['submit'])){
        $contact= $_POST['contact'];
        $mail= $_POST['mail'];
        
        $res=false;
        $insert_query="INSERT INTO `contactus`(`mobile`, `mail`) VALUES ('$contact','$mail')";
        
        $res= mysqli_query($connection,$insert_query);
            
        if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Success!',
                                            'success'
                                            );
				          </script>";
        }
        
    }
    
    //$msg="";

    
        
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transport and Fees Management System</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Rubik:wght@400;500;600;700&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header style="background-color: turquoise">
    <div class="container">

      <h1>
        <a href="#" class="logo">TFMS</span></a>
      </h1>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">Transport</a>

          <button class="nav-close-btn" aria-label="Clsoe menu" data-nav-toggler>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>
              <span>Home</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-nav-link>
              <span>About</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#service" class="navbar-link" data-nav-link>
              <span>Service</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>
          
          <li class="navbar-item">
            <a href="#Contact" class="navbar-link" data-nav-link>
              <span>Contacts</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>
          

          <li class="navbar-item">
              <a href="FeesStructure.php" class="navbar-link" data-nav-link>
              <span>Fees</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <li class="navbar-item">
              <a href="SignUp.php" target="_blank" class="navbar-link" data-nav-link>
              <span>Sign Up</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>
          
           <li class="navbar-item">
               <a href="Login.php" target="_blank" class="navbar-link" data-nav-link>
              <span>Login</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>
          <li class="navbar-item">
              <a href="StudentLogin.php" target="_blank" class="navbar-link" data-nav-link>
              <span>Student Login</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>
          <li class="navbar-item">
              <a href="FeesPanelSubmit.php" target="_blank" class="navbar-link" data-nav-link>
              <span>Pay Fees</span>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>
        </ul>

      </nav>
      <div>
        
      </div>


      <!-- <div class="header-contact">

        
        <div>
          <li class="navbar-item">
            <a href="#blog" class="navbar-link" data-nav-link>
              <button style="border:1px solid;">Sign Up</button>

              <ion-icon name="chevron-forward"></ion-icon>
            </a>
          </li>
        </div>-->

        <div> 
          
        </div>
        
      <!-- </div> -->

      <div class="contact-icon">
        <!-- <ion-icon name="call-outline"></ion-icon> -->
      </div>

    </div>

    <button class="nav-open-btn" aria-label="Open menu" data-nav-toggler>
      <ion-icon name="menu-outline"></ion-icon>
    </button>

    <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" aria-label="home" id="home"
        style="background-image: url('./assets/images/hero-banner.jpeg')">
        <div class="container">

          <div class="hero-content">

            <h2 class="h1 hero-title">
              <span class="span">MMIT</span> College
            </h2>

            <p class="hero-text">
              There are many variety transport and fees structure
            </p>

            <a href="#" class="btn-outline">View Services</a>

            <img src="./assets/images/hero-shape.png" width="116" height="116" loading="lazy"
              class="hero-shape shape-1">

            <img src="./assets/images/hero-shape.png" width="116" height="116" loading="lazy"
              class="hero-shape shape-2">

          </div>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner img-holder" style="width: 400;height: 720;">
            <img src="./assets/images/about-banner.jpg" width="400" height="720" loading="lazy" alt=""
              class="img-cover">
<!-- 
            <img src="./assets/images/about-shape-1.png" width="260" height="170" loading="lazy" alt=""
              class="abs-img abs-img-1"> -->

            <img src="./assets/images/about-shape-2.png" width="500" height="500" loading="lazy" alt=""
              class="abs-img abs-img-2">
          </figure>

          <div class="about-content">

            <p class="section-subtitle">Notification</p>

            <h2 class="h2 section-title">Details</h2>

            <p class="section-text">
              A bus (contracted from omnibus, with variants multibus, motorbus, autobus, etc.) is a road vehicle that carries significantly more passengers than an average car or van. It is most commonly used in public transport, but is also in use for charter purposes, or through private ownership.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                  Go beyond logistics, make the world go round and revolutionize business.
                </p>
              </li>

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                  Logistics through innovation, dedication, and technology. ready, set, done.
                </p>
              </li>

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                  We take pride in serving our customers safely. together with passion.
                </p>
              </li>

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                  Imagination what we can easily see is only a small percentage.
                </p>
              </li>

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                  Quality never goes out of style. safety, quality, professionalism.
                </p>
              </li>

              <li class="about-item">
                <div class="about-icon">
                  <ion-icon name="chevron-forward"></ion-icon>
                </div>

                <p class="about-text">
                  The quality shows in every move we make where business lives.
                </p>
              </li>

            </ul>

            <a href="#" class="btn">Learn More</a>

          </div>

        </div>
      </section>
      
      
      <!-- 
        - #CONTACTS
      -->

      <section class="section Contact" id="Contact" aria-label="Contact">
        <div class="container">
<div >
</div>
          <p class="section-subtitle" align="center">Contact US</p>
    
          <form method="post" action="index.php" style="padding-left: 120px; padding-top: 30px;">
              <div class="mb-3">
                  <label class="form-label" style="font-size: 20px; color: black">Contact Number :</label>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                  <input type="number" class="form-control" id="number" name="contact"  aria-describedby="number" style="background: aliceblue linear-gradient(to bottom, black, aliceblue);padding: 2px;margin: 2px 0;font-size:18px;color:white;text-align:center;" contenteditable="">
              </div>
              
              <div class="mb-3" style="padding-top: 20px;">
                  <label for="email" class="form-label" style="font-size: 20px; color: black">E-mail :</label>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="mail" class="form-control" id="number" name="mail" aria-describedby="number" style="background: aliceblue linear-gradient(to bottom, black, aliceblue);padding: 2px;margin: 2px 0;font-size:24px;color:white;text-align:center;" contenteditable="">
              </div>
              
              <input type="submit" value="Submit Now" class="form-control btn btn-success" name="submit">
          </form>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="service" aria-label="service">
        <div class="container">

          <p class="section-subtitle">All Services</p>

          <h2 class="h2 section-title">Trusted For Our Services</h2>

          <p class="section-text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry the standard dummy text ever since
            the when an
            printer took.
          </p>

          <ul class="service-list grid-list">
            <li>
              <div class="service-card">

                <h3 class="h3 card-title">
                  <span class="span">01</span> Bus service
                </h3>

                <p class="card-text">
                  Our aim is to optimize and improve your supply chain so that we can give you the best service.
                </p>

                <a href="#" class="btn-link">
                  <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                  <span class="span">View Detail</span>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <h3 class="h3 card-title">
                  <span class="span">02</span> Student Details
                </h3>

                <p class="card-text">
                  Our aim is to optimize and improve your supply chain so that we can give you the best service.
                </p>

                <a href="#" class="btn-link">
                  <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                  <span class="span">View Detail</span>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <h3 class="h3 card-title">
                  <span class="span">03</span> Collage Branches
                </h3>

                <p class="card-text">
                  Our aim is to optimize and improve your supply chain so that we can give you the best service.
                </p>

                <a href="#" class="btn-link">
                  <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                  <span class="span">View Detail</span>
                </a>

              </div>
            </li>

            <li>
              <div class="service-card">

                <h3 class="h3 card-title">
                  <span class="span">04</span> Facality
                </h3>

                <p class="card-text">
                  Our aim is to optimize and improve your supply chain so that we can give you the best service.
                </p>

                <a href="#" class="btn-link">
                  <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                  <span class="span">View Detail</span>
                </a>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <div class="footer-top section">

        <div class="footer-brand">

          <a href="#" class="logo">TFMS</a>

          <p class="footer-text">
           It is most commonly used in public transport, but is also in use for charter purposes, or through private ownership.
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Quick Links</p>
          </li>

          <li>
            <a href="#" class="footer-link">About</a>
          </li>

          <li>
            <a href="#" class="footer-link">Services</a>
          </li>
          
          <li>
            <a href="#" class="footer-link">Query</a>
          </li>
        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Services</p>
          </li>

          <li>
              <a href="FeesStructure.php" class="footer-link">Fees Structure</a>
          </li>

          <li>
              <a href="Login.php" class="footer-link">Login</a>
          </li>
          
          <li>
            <a href="#" class="footer-link">Transport Details</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">About us</p>
          </li>

          <li>
            <a href="#" class="footer-link">Transport Details</a>
          </li>

          <li>
              <a href="StudentLogin.php" class="footer-link">Student Login</a>
          </li>
          
          <li>
              <a href="Login.php" class="footer-link">Buses Routes</a>
          </li>
        </ul>

      </div>

      <div class="footer-bottom">
        <p class="copyright">
          This is Designed and Developed by <a href="#" class="copyright-link">Cks and Teams</a>
        </p>
      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>