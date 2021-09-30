<?php
include 'lib/Database.php';
include 'helpers/Format.php';

spl_autoload_register(function ($class) {
    include_once "classes/" . $class . ".php";
});
$db  = new Database();
$fm  = new Format();
$faq = new Faq();
$why = new Why();
$tm = new Team();
?>

<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: max-age=2592000");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MT Rajpath Bangladesh ltd</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

   <style>
       .someDiv {
           display:none;
       }

       /*css for gallery image*/

         * {
             box-sizing: border-box;
         }

       /* Position the image container (needed to position the left and right arrows) */
       .container {
           position: relative;
       }

       /* Hide the images by default */
       .mySlides {
           display: none;
       }

       /* Add a pointer when hovering over the thumbnail images */
       .cursor {
           cursor: pointer;
       }

       /* Next & previous buttons */
       .prev,
       .next {
           cursor: pointer;
           position: absolute;
           top: 40%;
           width: auto;
           padding: 16px;
           margin-top: -50px;
           color: white;
           font-weight: bold;
           font-size: 20px;
           border-radius: 0 3px 3px 0;
           user-select: none;
           -webkit-user-select: none;
       }

       /* Position the "next button" to the right */
       .next {
           right: 15px;
           border-radius: 3px 0 0 3px;
       }

       /* On hover, add a black background color with a little bit see-through */
       .prev:hover,
       .next:hover {
           background-color: rgba(0, 0, 0, 0.8);
       }

       /* Number text (1/3 etc) */
       .numbertext {
           color: #f2f2f2;
           font-size: 12px;
           padding: 8px 12px;
           position: absolute;
           top: 0;
       }

       /* Container for image text */
       .caption-container {
           text-align: center;
           background-color: #222;
           padding: 2px 16px;
           color: white;
       }

       .row:after {
           content: "";
           display: table;
           clear: both;
       }
       .row1{
           margin-right: 0px;
           margin-left: 0px;
       }

       /* Six columns side by side */
       .column {
           float: left;
           width: 16.66%;
       }

       /* Add a transparency effect for thumnbail images */
       .demo {
           opacity: 0.6;
       }

       .active,
       .demo:hover {
           opacity: 1;
       }



   </style>

  <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!--<h1 class="logo mr-auto"><a href="index.php">Arsha</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#skills">Gallery</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#team">Management</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>MT Rajpath Bangladesh Ltd</h1>
          <h2>Rajpathe Jonotar Sathe. It aims to bring a positive change in Bangladesh </h2>
          <div class="d-lg-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content" style="text-align: justify">
          <div class="col-lg-6">
            <p>
                Since its beginning in 26/7/2021. MT Rajpath Bangladesh Ltd has grown to be one of
                the leading multi business company in Bangladesh. MT Rajpath Bangladesh (Ltd) aims
                to bring a positive change in Bangladesh and make huge job platform for the all
                job seekers.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> The purpose of MT Rajpath Bangladesh Ltd is to bring progressive revolution in Bangladesh.</li>
              <li><i class="ri-check-double-line"></i> We want to create huge job opportunities for our youth generation.</li>
              <li><i class="ri-check-double-line"></i> Our dream is to develop a most viable multi business environment in our country. </li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
                MT Rajpath Bangladesh Ltd has consistently excelled with a strong performance
                in the Bangladesh. Our vision is to be among the most sustainability multi business
                in this country. We will do this by integrating sustainable thinking in our operations
                by empowering all employees to take ownership in our sustainability work. We have owned a 24-hour
                Bengali media and news private online television named <a href="https://www.rajpathbd.tv/" target="_blank">Rajpath TV. </a>
                Our Programs are also media and news based, always focused on the up to date news information.
            </p>
            <a href="#why-us" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3 style="text-align: center"><strong>Why Us?</strong></h3>
            </div>

            <div class="accordion-list">
              <ul>

                  <?php
                  $getwhy = $why->getWhy();
                  if($getwhy){
                      $i=0;
                      while ($result = $getwhy->fetch_assoc()){
                          $i++
                  ?>

                <li>
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span><?php echo $i;?></span> <?php echo $result['title'];?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                    <p>
                        <?php echo $result['description'];?>
                    </p>
                  </div>
                </li>
                  <?php
                      }
                  }
                  ?>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/building1.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;
          </div>


        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <!--<div class="container" data-aos="fade-up">
      </div>-->

        <!-- Container for the image gallery -->
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Gallery</h2>
            </div>

            <!-- Full-width images with number text -->

            <?php
                $getimage = $tm->getImages();
                if($getimage){
                $i=0;
                while ($result = $getimage->fetch_assoc()){
                $i++
            ?>
            <div class="mySlides">
                <div class="numbertext"><?php echo $i;?>/ 6</div>
                <img src="admin/<?php echo $result['image'];?>" style="height:500px; width: 100%">
            </div>

            <?php
                    }
                }
            ?>


            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Image text -->
            <!--<div class="caption-container">
                <p id="caption"></p>
            </div>-->

            <!-- Thumbnail images -->
            <div class="row row1">

                <?php
                $getthumimage = $tm->getThumImages();
                if($getthumimage){
                $i=0;
                while ($result = $getthumimage->fetch_assoc()){
                $i++
                ?>
                <div class="column">
                    <img class="demo cursor" src="admin/<?php echo $result['image'];?>" style="height:130px; width:100%" onclick="currentSlide(<?php echo $i;?>)">
                </div>
                    <?php
                }
                }
                ?>


            </div>
        </div>

    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Buyer, Seller of Flats, Apartments</a></h4>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Builders, Engineering, Manufacturer, Supplier</a></h4>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Air Ticketing, Hajj, Tourist & Transport</a></h4>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Travelling Agent, Recruiting Agencies, Students consultant </a></h4>
            </div>
          </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Importer, Exporter, Buying Agent, Commission Agent, Sole Agent</a></h4>
            </div>
          </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Foreign Travels by air, land, sea and river</a></h4>
            </div>
          </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Clinics, Hospitals, Healthcare center, Medical center</a></h4>
            </div>
          </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href=""> Electromechanical industries, Poultry firming, Dairy firming, Agricultural </a></h4>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3>Call To Action</h3>
            <p>If you want to do business with our company, Please contact with us. We are always 24/7 waiting for your kind response. </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#contact">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" style="padding: 0px 0">
      <div class="container" data-aos="fade-up">

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Management</h2>
        </div>

        <div class="row">

            <?php
            $getteam = $tm->getTeamMembers();
            if($getteam){
            $i=0;
            while ($result = $getteam->fetch_assoc()){
            $i++
            ?>

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="admin/<?php echo $result['image'];?>" style="height:100px; width: 180px" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?php echo $result['name'];?></h4>
                <span><?php echo $result['title'];?></span>
                <p><?php echo $result['shortDescription'];?></p>
                <div class="social">
                  <a href="<?php echo $result['tw'];?>" target="_blank"><i class="ri-twitter-fill"></i></a>
                  <a href="<?php echo $result['fb'];?>" target="_blank"><i class="ri-facebook-fill"></i></a>
                  <a href="<?php echo $result['ln'];?>" target="_blank"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>
            <?php
            }
            }
            ?>
          <!--<div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                  <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
              </div>
            </div>
          </div>-->


        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing" style="padding: 20px 0">
      <div class="container" data-aos="fade-up">

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
          <ul>
              <?php
              $getfaq = $faq->getFaq();
              if ($getfaq){
                  while ($result = $getfaq->fetch_assoc()){
              ?>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1"><?php echo $result['title'];?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                    <?php echo $result['description'];?>
                </p>
              </div>
            </li>
              <?php
                  }
              }
              ?>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
            <h4 class="sent-notification"></h4>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>254/1, Haji Sonamia market (3rd Floor), Mahmudnagar, Sign Board, Demra, Dhaka-1361</p>

              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>mtrajpathbangladeshltd@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+8809612113322</p>
              </div>

              <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58443.566078426076!2d90.44477377225454!3d23.721588239107696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b7aba09d5aff%3A0xce98e5bc6fd9d131!2sDemra%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1629811987308!5m2!1sen!2sbd" frameborder="0" width="100%" height="290px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form id="myForm" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea id="body" class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center">
                  <button type="submit" onclick="sendEmail()" VALUE="Send an Email">Send Message</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter" style="padding: 0px 0">
      <div class="container">

      </div>
    </div>

    <div class="footer-top" style="background-color:#f2fcf7">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>MT Rajpath Bangladesh Ltd</h3>
            <p>
              54/1, Haji Sonamia Market (3rd Floor) <br>
                Mahmud Nagar, Sign board (North)<br>
                Demra, Dhaka.<br><br>
              <strong>Phone:</strong> +8809612113322<br>
              <strong>Email:</strong> mtrajpathbangladeshltd@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Buyer and Seller of Flats and Apartments</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Builders, Engineering, Manufacturer, Supplier</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Air Ticketing, Hajj, Tourist & Transport</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Travelling Agent, Recruiting Agencies, Students consultant </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Importer, Exporter, Buying Agent, Commission Agent, Sole Agent</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Foreign Travels by air, land, sea and river</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Please Follow our Social Newtorks</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/RajpathTV.bd" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
      <div class="someDiv">
        <div class="container footer-bottom clearfix">
          <div class="copyright">
            &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
      function sendEmail() {
          var name = $("#name");
          var email = $("#email");
          var subject = $("#subject");
          var body = $("#body");

          if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
              $.ajax({
                  url: 'sendEmail.php',
                  method: 'POST',
                  dataType: 'json',
                  data: {
                      name: name.val(),
                      email: email.val(),
                      subject: subject.val(),
                      body: body.val()
                  }, success: function (response) {
                      $('#myForm')[0].reset();
                      $('.sent-notification').text("Message Sent Successfully.");
                  }
              });
          }
      }

      function isNotEmpty(caller) {
          if (caller.val() == "") {
              caller.css('border', '1px solid red');
              return false;
          } else
              caller.css('border', '');

          return true;
      }

      /*Javascript for gallery imges*/
      var slideIndex = 1;
      showSlides(slideIndex);

      // Next/previous controls
      function plusSlides(n) {
          showSlides(slideIndex += n);
      }

      // Thumbnail image controls
      function currentSlide(n) {
          showSlides(slideIndex = n);
      }

      function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          var captionText = document.getElementById("caption");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          captionText.innerHTML = dots[slideIndex-1].alt;
      }

  </script>
</body>

</html>