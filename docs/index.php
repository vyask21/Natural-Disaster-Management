<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="cache-control" content="no-cache">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Natural Disaster Management</title>

        <!-- CSS -->   
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">     
        <link rel="stylesheet" href="../assets/cssbootstrap/css/bootstrap.min.css"> <!-- //allignment of form -->
        <link rel="stylesheet" href="../assets/cssfont-awesome/css/font-awesome.min.css"> <!-- //fonts -->
        <link rel="stylesheet" href="../assets/csscss/form-elements.css"> <!-- //form control style -->
        <link rel="stylesheet" href="../assets/csscss/style.css"> <!-- //form control style --> 
        <link rel="stylesheet" href="../assets/csscss/c.css">          

        
        <link rel="stylesheet" href="../assets/csscss/font.css">
        <link rel="stylesheet" href="../assets/csscss/commons.css">
        <link rel="stylesheet" href="../assets/csscss/owid.css">      
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../assets/cssico/favicon.ico">

        
        <style type="text/css">        

          /********************************/
          /*       Fade Bs-carousel       */
          /********************************/
          h3 {
              color: white; 
              font-weight: normal;               
              }

          .fade-carousel {
              position: relative;
              height: 100vh;
          }
          .fade-carousel .carousel-inner .item {
              height: 100vh;
          }
          .fade-carousel .carousel-indicators > li {
              margin: 0 2px;
              background-color: #f39c12;
              border-color: #f39c12;
              opacity: .7;
          }
          .fade-carousel .carousel-indicators > li.active {
            width: 10px;
            height: 10px;
            opacity: 1;
          }

          /********************************/
          /*          Hero Headers        */
          /********************************/
          .hero {
              position: absolute;
              top: 50%;
              left: 50%;
              z-index: 3;
              color: #fff;
              text-align: center;
              text-transform: uppercase;
              text-shadow: 1px 1px 0 rgba(0,0,0,.75);
                -webkit-transform: translate3d(-50%,-50%,0);
                   -moz-transform: translate3d(-50%,-50%,0);
                    -ms-transform: translate3d(-50%,-50%,0);
                     -o-transform: translate3d(-50%,-50%,0);
                        transform: translate3d(-50%,-50%,0);
          }
          .hero h1 {
              color: white;
              font-size: 3em;    
              font-weight: bold;
              margin: 10;
              padding: 0;
          }

          .fade-carousel .carousel-inner .item .hero {
              opacity: 0;
              -webkit-transition: 2s all ease-in-out .1s;
                 -moz-transition: 2s all ease-in-out .1s; 
                  -ms-transition: 2s all ease-in-out .1s; 
                   -o-transition: 2s all ease-in-out .1s; 
                      transition: 2s all ease-in-out .1s; 
          }
          .fade-carousel .carousel-inner .item.active .hero {
              opacity: 1;
              -webkit-transition: 2s all ease-in-out .1s;
                 -moz-transition: 2s all ease-in-out .1s; 
                  -ms-transition: 2s all ease-in-out .1s; 
                   -o-transition: 2s all ease-in-out .1s; 
                      transition: 2s all ease-in-out .1s;    
          }

          /********************************/
          /*            Overlay           */
          /********************************/
          .overlay {
              position: absolute;
              width: 100%;
              height: 100%;
              z-index: 2;
              background-color: #080d15;
              opacity: .7;
          }

          /********************************/
          /*          Custom Buttons      */
          /********************************/
          .btn.btn-lg {padding: 10px 40px;}
          .btn.btn-hero,
          .btn.btn-hero:hover,
          .btn.btn-hero:focus {
              color: #f5f5f5;
              background-color: #1abc9c;
              border-color: #1abc9c;
              outline: none;
              margin: 20px auto;
          }

          /********************************/
          /*       Slides backgrounds     */
          /********************************/
          .fade-carousel .slides .slide-1, 
          .fade-carousel .slides .slide-2,
          .fade-carousel .slides .slide-3 {
            height: 100vh;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
          }
          .fade-carousel .slides .slide-1 {
            background-image: url('assets/img/3.jpg'); 
          }
          .fade-carousel .slides .slide-2 {
            background-image: url('assets/img/1.jpg');
          }
          .fade-carousel .slides .slide-3 {
            background-image: url('assets/img/2.jpg');
          }

          /********************************/
          /*          Media Queries       */
          /********************************/
          @media screen and (min-width: 980px){
              .hero { width: 980px; }    
          }
          @media screen and (max-width: 640px){
              .hero h1 { font-size: 4em; }    
          }


          .wrapper .site-navigation-bar {
            overflow: hidden;

          }
          .sticky {
            position: fixed;
            top: 0;
            width: 100%;
          }


          </style>

    </head>

    <body class="LongFormPage">
        <header class="site-header">
          <div class="wrapper site-navigation-bar">
            <div class="site-logo"><a href="index.php">Natural Disaster <br>Management</a>
            </div>
            <nav class="site-navigation lg-only">
              <div>
                <div class="site-primary-navigation">
                  <ul class="site-primary-links">   
                    <li><a href="isql.php" data-track-click="true" data-track-note="header-navigation">SQL Injection demo</a></li>                               
                    <li><a href="about.php" data-track-click="true" data-track-note="header-navigation">About</a></li> 
                    <li><a href="donate.php" data-track-click="true" data-track-note="header-navigation">Donate</a></li>                   
                    <li><a href="register.php" data-track-click="true" data-track-note="header-navigation">Register</a></li>                                
                    <li><a href="login.php" data-track-click="true"  data-track-note="header-navigation">Login</a></li>
                    <li><a href="contact.php" data-track-click="true" data-track-note="header-navigation">Contact Us</a></li>
                    <li><a href="alogin.php" data-track-click="true" data-track-note="header-navigation">Admin</a></li>
                  </ul>                           
                </div>
              </div>
            </nav>
            <div class="site-navigation sm-only">               
               <button data-track-click="true" data-track-note="mobile-hamburger-button">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14 " role="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                     <!-- <ul class="site-primary-links">   
                    <li><a href="isql.php" data-track-click="true" data-track-note="header-navigation">SQL Injection demo</a></li> 
                    <li><a href="donate.php" data-track-click="true" data-track-note="header-navigation">Donate</a></li>                 
                    <li><a href="about.php" data-track-click="true" data-track-note="header-navigation">About</a></li>                    
                    <li><a href="register.php" data-track-click="true" data-track-note="header-navigation">Register</a></li>                                
                    <li><a href="login.php" data-track-click="true" data-track-note="header-navigation">Login</a></li>
                    <li><a href="contact.php" data-track-click="true" data-track-note="header-navigation">Contact Us</a></li>
                    <li><a href="alogin.php" data-track-click="true" data-track-note="header-navigation">Admin</a></li>
                  </ul> -->
                     <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path>
                  </svg>
               </button>
            </div>            
        </header>
      <div>
        <!-- Page content -->
        <style type="text/css">
            @media screen and (min-width: 480px) {
                      body {
                        background-color: #E3F8FD;
                      }
                    }
        </style>
          <section>
            <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">      
                 <div class="carousel-inner">
                  <div class="item slides active">
                    <div class="slide-1">
                        <div class="overlay"></div>
                    </div>
                    <div class="hero">
                      <hgroup>
                          <h1>Prepare. Plan. Stay Informed</h1>        
                          <h3>Welcome! This website is designed to keep track of natural disasters occuring across the nation and to provide safety measures in the event of a disaster.
                          </h3>
                      </hgroup>                      
                    </div>
                  </div>               
                </div> 
              </div>
            </section>
            <section>
              <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">      
                 <div class="carousel-inner">
                  <div class="item slides active">
                    <div class="slide-2">
                        <div class="overlay"></div>
                    </div>
                    <div class="hero">
                      <hgroup>
                          <h1>Our Mission</h1>        
                          <h3>With this portal anyone across the nation will be able to access and get latest updates on any natural disaster occuring across the nation. Users will also be able to make <a href="donate.php">donations.</a></h3>
                      </hgroup>                      
                    </div>
                  </div>                 
                </div> 
              </div>              
            </section>
            <section>
              <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">      
                 <div class="carousel-inner">
                  <div class="item slides active">
                    <div class="slide-3">
                        <div class="overlay"></div>
                    </div>
                    <div class="hero">
                      <hgroup>
                          <h1>Our Role</h1>        
                          <h3>We aim to reach people till the remote corners of the nation to spread awareness about all forms of natural disasters and the necessary safety measures to be taken.</h3><br>
                          <h3>Get yourself <a href="register.php">registered</a> now!</h3>
                      </hgroup>                      
                    </div>
                  </div>                
                </div> 
              </div>
            </section>
       </div>
     <div id="ad">

        <br><a href="https://www.indianredcross.org/ircs/index.php" target="_blank"><img src="../assets/cssimg/ad.png" alt="Red Cross" width="400" height="90" border="0"></a>
            </div>


  <section>
    <div class="google-map">
      <div class="col-sm-8 col-sm-offset-2 text">
                  <h1 style="font-size: 4  em; color: black;"><strong>Find Us</strong></h1>               
              </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.6693193422366!2d73.1254814142114!3d18.99020605960007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e866de88667f%3A0xc1c5d5badc610f5f!2sPillai%20College%20of%20Engineering%2C%20New%20Panvel!5e0!3m2!1sen!2sin!4v1568826930506!5m2!1sen!2sin" width="90%" height="400px" frameborder="1" style="z-index: 0;" allowfullscreen=""></iframe>
    </div>
  </section>
  <!-- footer -->
  <section>
    <div class="footer container">
      <span>
        <hr>
        <footer>&copy; Copyright 2019, Natural Disaster Management. </footer>
      </span>
      <br><span>
        All Rights Reserved.
      </span>      
    </div>
  </section>

    <script type="text/javascript">
      // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the navbar
        var navbar = document.getElementById("wrapper", "site-navigation-bar");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>
