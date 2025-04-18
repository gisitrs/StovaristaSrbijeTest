<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Stovarišta Srbije &mdash; Projekt Križan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    
    <link rel="stylesheet" href="css/adminMain.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-loader"></div>

  <?php 
        include "Components/scroll-to-top-button.php";
  ?>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.html" class="text-white h2 mb-0"><strong>Stovarišta Srbije<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li>
                    <a href="index.php">Naslovna</a>
                  </li>
                  <li class="has-children">
                    <a href="properties.php?city=SviGradovi">Gradovi</a>
                    <ul class="dropdown arrow-top">
                      <?php
                         include "Components/city-dropdown.php";
                      ?>
                    </ul>
                  </li>
                  <!--<li class="has-children">
                    <a href="buy.php?producttype=SviProizvodi">Proizvodi</a>
                    <ul class="dropdown arrow-top">
                      <php
                        include "Components/product-type-dropdown.php";
                      ?>
                    </ul>
                  </li>-->
                  <li><a href="map.php?id=0">Mapa</a></li>
                  <li class="active"><a href="about.php">Projekt Križan proizvodi</a></li>
                  <li><a href="blog.php">O nama</a></li>
                  <li><a href="contact.php">Kontakt</a></li>
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/Carousel3.jfif);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Projekt Križan</h1>
          </div>
        </div>
      </div>
    </div>

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center">
              <h1 class="display-5 mb-5">Naši proizvodi</h1>
          </div>
          <div class="row g-4">
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <a href="https://www.projektkrizan.rs/product6.html">
                              <img class="img-fluid" src="images/service-6.png" alt="">
                          </a>
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Krovne folije</h4>
                          <p>Različiti tipovi krovnih, građevinskih i ostalih folija</p>
                          <a class="fw-medium" href="https://www.projektkrizan.rs/product6.html">Pročitaj više<i class="fa fa-arrow-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <a href="https://www.projektkrizan.rs/product4.html">
                              <img class="img-fluid" src="images/service-4.jpg" alt="">
                          </a>
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">ALU i drvene merdevine</h4>
                          <p>Sve vrste i dimenzije molerskih merdevina i skela</p>
                          <a class="fw-medium" href="https://www.projektkrizan.rs/product4.html">Pročitaj više<i class="fa fa-arrow-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <a href="https://www.projektkrizan.rs/product5.html">
                              <img class="img-fluid" src="images/service-5.png" alt="">
                          </a>
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Krovni prozori</h4>
                          <p>Ponuda krovnih prozora, svetlarnika, opšivki i tavanskih merdevina.</p>
                          <a class="fw-medium" href="https://www.projektkrizan.rs/product5.html">Pročitaj više<i class="fa fa-arrow-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <a href="https://www.projektkrizan.rs/product1.html">
                              <img class="img-fluid" src="images/service-1.jpg" alt="">
                          </a>
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Erlus crep</h4>
                          <p>Crep vrhunskog kvaliteta uvezen iz Nemačke</p>
                          <a class="fw-medium" href="https://www.projektkrizan.rs/product1.html">Pročitaj više<i class="fa fa-arrow-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <a href="https://www.projektkrizan.rs/product2.html">
                              <img class="img-fluid" src="images/service-2.jpg" alt="">
                          </a>
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Schiedel dimnjaci</h4>
                          <p>INOX i zidani dimnjaci renomiranog proizvođača iz Austrije.</p>
                          <a class="fw-medium" href="https://www.projektkrizan.rs/product2.html">Pročitaj više<i class="fa fa-arrow-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <a href="https://www.projektkrizan.rs/product3.html">
                              <img class="img-fluid" src="images/service-3.jpg" alt="">
                          </a>
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Klima uređaji</h4>
                          <p>GREE i Bergen su sinonimi za inverter klime vrhunskog kvaliteta.</p>
                          <a class="fw-medium" href="https://www.projektkrizan.rs/product3.html">Pročitaj više<i class="fa fa-arrow-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <a href="https://www.projektkrizan.rs/product8.html">
                              <img class="img-fluid" src="images/service-8.png" alt="">
                          </a>
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Krovni dodaci</h4>
                          <p>Kopče za krov, krovne šetalice, klupe za dimnjake...</p>
                          <a class="fw-medium" href="https://www.projektkrizan.rs/product8.html">Pročitaj više<i class="fa fa-arrow-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                  <div class="service-item">
                      <div class="overflow-hidden">
                          <a href="https://www.projektkrizan.rs/product7.html">
                              <img class="img-fluid" src="images/service-7.png" alt="">
                          </a>
                      </div>
                      <div class="p-4 text-center border border-5 border-light border-top-0">
                          <h4 class="mb-3">Kamena vuna</h4>
                          <p>Rockwool kamene vune i zvučne izolacije</p>
                          <a class="fw-medium" href="https://www.projektkrizan.rs/product7.html">Pročitaj više<i class="fa fa-arrow-right ms-2"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Service End -->
    

    <!--<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <img src="images/about.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-5 ml-auto"  data-aos="fade-up" data-aos-delay="200">
            <div class="site-section-title">
              <h2>Our Company</h2>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus in cum odio./p>
            <p>Illum repudiandae ratione facere explicabo. Consequatur dolor optio iusto, quos autem voluptate ea? Sunt laudantium fugiat, mollitia voluptate? Modi blanditiis veniam nesciunt architecto odit voluptatum tempore impedit magnam itaque natus!</p>
            <p><a href="#" class="btn btn-outline-primary rounded-0 py-2 px-5">Read More</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center"  data-aos="fade-up" >
        <div class="col-md-7">
          <div class="site-section-title text-center">
            <h2>Leadership</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero magnam officiis ipsa eum pariatur labore fugit amet eaque iure vitae, repellendus laborum in modi reiciendis quis! Optio minima quibusdam, laboriosam.</p>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">

              <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. Totam atque corporis nisi, veniam non. Tempore cupiditate, vitae minus obcaecati provident beatae!</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">

              <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cumque vitae voluptates culpa earum similique corrupti itaque veniam doloribus amet perspiciatis recusandae sequi nihil tenetur ad, modi quos id magni!</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5"  data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">

              <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores illo iusto, inventore, iure dolorum officiis modi repellat nobis, praesentium perspiciatis, explicabo. Atque cupiditate, voluptates pariatur odit officia libero veniam quo.</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>



        </div>
    </div>
    </div>


    <div class="site-section bg-light">
      <div class="container" data-aos="fade">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7">
            <div class="site-section-title text-center">
              <h2>Our Agents</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero magnam officiis ipsa eum pariatur labore fugit amet eaque iure vitae, repellendus laborum in modi reiciendis quis! Optio minima quibusdam, laboriosam.</p>
            </div>
          </div>
        </div>
        <div class="row">
            
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">

              <img src="images/person_4.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Steven Ericson</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates sed qui at harum ipsum earum voluptas a unde error sapiente, sint perspiciatis, fugiat neque iure rerum repellendus tempora odio doloribus.</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">

              <img src="images/person_5.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Nathan Dumlao</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo nobis commodi rerum dicta, nulla. Delectus neque hic deserunt consequuntur esse facere, necessitatibus corrupti! Blanditiis ratione consequuntur beatae adipisci, voluptatum consequatur.</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">

              <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa nam tenetur molestiae maiores officiis consectetur, distinctio aperiam in illum praesentium corrupti, harum porro reiciendis magnam non enim dolorem aut explicabo.</p>
                <p>
                  <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <div class="site-section-title">
              <h2>Frequently Ask Questions</h2>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores quisquam saepe architecto error corporis aliquam. Cum ipsam a consectetur aut sunt sint animi, pariatur corporis, eaque, deleniti cupiditate officia.</p>
          </div>
        </div>

        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">What is the name of your company<span class="icon"></span></a>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur quae cumque perspiciatis aperiam accusantium facilis provident aspernatur nisi optio debitis dolorum, est eum eligendi vero aut ad necessitatibus nulla sit labore doloremque magnam! Ex molestiae, dolor tempora, ad fuga minima enim mollitia consequuntur, necessitatibus praesentium eligendi officia recusandae culpa tempore eaque quasi ullam magnam modi quidem in amet. Quod debitis error placeat, tempore quasi aliquid eaque vel facilis culpa voluptate.</p>
                </div>
              </div>
            </div>
            
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">How much pay for 3  months?<span class="icon"></span></a>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> 

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Do I need to register?  <span class="icon"></span></a>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> 

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Who should I contact in case of support.<span class="icon"></span></a>
              </h3>
              <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div>
            </div> 

          </div>
          </div>
        </div>
      
      </div>
    </div>-->

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div id="aboutDivId" class="col-lg-5">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">O Stovarištima Srbije</h3>
              <p>"Stovaršta Srbije" je jedinstvena platforma koja povezuje stovarišta širom Srbije, omogućavajući lako pronalaženje i nabavku građevinskog materijala po konkurentnim cenama.</p>
            </div>
          </div>
          <div id="linksDivId" class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Brzi linkovi</h3>
              </div>
              <div class="col-md-8 col-lg-8">
                <ul class="list-unstyled">
                  <li><a href="index.php">Naslovna</a></li>
                  <li><a href="properties.php">Gradovi</a></li>
                  <li><a href="blog.php">O nama</a></li>
                  <li><a href="contact.php">Kontakt</a></li>
                  <!--<li><a href="buy.html">Proizvodi</a></li>-->
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 mb-3 mb-lg-0">
            <h3 id="followDivId" class="footer-heading mb-4">Pratite nas</h3>
                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
          </div>
        </div>
      </div>
    </footer>

  </div>

  <div style="padding-bottom: 15px; padding-top: 15px; background-color: #FFFFFF;">
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center" style="font-size:11px;">
                   <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                   <b>Created By</b> <a href="https://www.gisit.rs">
                   <img src="images/icons/Gisit_transparent.png" alt="" style="max-width:100px;">
                   </a>
                </div>
            </div>
        </div>
    </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/circleaudioplayer.js"></script>
  <script src="js/scrollToTop.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>