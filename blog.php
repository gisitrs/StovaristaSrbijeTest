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
                  <li><a href="about.php">Projekt Križan proizvodi</a></li>
                  <li class="active"><a href="blog.php" >O nama</a></li>
                  <li><a href="contact.php">Kontakt</a></li>
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay" style="background-image: url(images/ytong1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <!--<span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">Tekst opis</span>-->
              <h1 class="mb-2">YTONG blokovi (sponzor)</h1>
              <!--<p class="mb-5"><strong class="h2 text-success font-weight-bold">Opis</strong></p>-->
              <p><a href="https://www.xella.rs/sr_RS/xella-srbija" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Više detalja</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/ytong2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <!--<span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">Tekst opis</span>-->
              <h1 class="mb-2">YTONG blokovi</h1>
              <!--<p class="mb-5"><strong class="h2 text-success font-weight-bold">Opis</strong></p>-->
              <p><a href="https://www.xella.rs/sr_RS/ytong" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Više detalja</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/ytong3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <!--<span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">Tekst opis</span>-->
              <h1 class="mb-2">YTONG blokovi</h1>
              <!--<p class="mb-5"><strong class="h2 text-success font-weight-bold">Opis</strong></p>-->
              <p><a href="https://www.xella.rs/sr_RS/ytong" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Više detalja</a></p>
            </div>
          </div>
        </div>
      </div>  

    </div>

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0">
      <div class="container about px-lg-0">
          <div class="row g-0 mx-lg-0">
              <div class="col-lg-6 ps-lg-0" style="min-height: 220px;">
                  <div class="position-relative h-100">
                      <img class="position-absolute img-fluid" src="images/about.png" style="object-fit: cover;" alt="">
                  </div>
              </div>
              <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                  <div class="p-lg-5 pe-lg-0">
                      <div class="text-start" style="margin-top: 15px;">
                          <h1 class="display-5 mb-4">O nama</h1>
                      </div>
                      <p class="mb-4 pb-2">Dobro došli na zvaničnu stranicu kompanije Projekt Križan! 
                                          <br><br>Mi smo tim posvećenih stručnjaka specijalizovanih za prodaju vrhunskih građevinskih materijala. 
                                           Naš cilj je da svakom kupcu pružimo proizvode visokog kvaliteta koji ispunjavaju 
                                           najstrožije standarde sigurnosti i izdržljivosti.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="container-fluid bg-light overflow-hidden px-lg-0">
      <div class="container about px-lg-0">
          <div class="row g-0 mx-lg-0">
              <div class="col-lg-6 about-text  wow fadeIn" data-wow-delay="0.5s">
                  <div class="p-lg-5 pe-lg-0">
                      <div class="text-start">
                          <h1 class="display-5 mb-4">Naša Misija</h1>
                      </div>
                      <p class="mb-4 pb-2">Sa bogatim iskustvom u oblasti građevinarstva, 
                          fokusiramo se na pružanje rešenja koja obezbeđuju dugotrajnost i 
                          funkcionalnost. Ključni elementi našeg poslovanja su:</p>
                      <ol style="list-style-type: inherit; margin-top: 20px;">
                          <li>Prodaja građevinskih materijala najvišeg kvaliteta</li>
                          <li>Odabir pouzdanih proizvođača i dobavljača sa međunarodnim 
                              i domaćim sertifikatima</li>
                          <li>Saveti i stručna podrška prilikom izbora materijala za 
                              sve vrste građevinskih projekata</li>
                      </ol>

                      <p class="mb-4 pb-2">Ponosimo se time što radimo isključivo sa materijalima koji 
                          zadovoljavaju visoke standarde bezbednosti i ekoloških normi. 
                          <br><br>Naša ponuda obuhvata širok spektar materijala, od temelja do krova, 
                          kako za stambene, tako i za komercijalne projekte.</p>
                  </div>
              </div>
              <div class="col-lg-6 about-text wow fadeIn" data-wow-delay="0.5s">
                  <div class="p-lg-5 pe-lg-0">
                      <div class="text-start">
                          <h1 class="display-5 mb-4">Naše Vrednosti</h1>
                      </div>
                      <ol style="list-style-type: inherit; margin-top: 20px;">
                          <li><b>Kvalitet:</b>
                              Kvalitet proizvoda je na prvom mestu. Saradjujemo isključivo sa 
                              renomiranim proizvođačima koji su lideri u industriji.
                          </li>
                          <li><b>Sigurnost:</b>
                              Svi naši materijali ispunjavaju važeće sigurnosne standarde i sertifikate, 
                              što vam omogućava sigurno i pouzdano građenje.
                          </li>
                          <li><b>Pouzdanost:</b>
                              Naša posvećenost kvalitetu i usluzi garantuje da će svaki projekat biti uspešno realizovan.
                          </li>
                          <li><b>Usluga:</b>
                              Naš tim vam stoji na raspolaganju sa personalizovanim savetima i tehničkom podrškom, 
                              jer je vaša zadovoljstvo naš glavni cilj.
                          </li>
                      </ol>

                      <p class="mb-4 pb-2">Posvećeni smo tome da obezbedimo najbolje materijale za vaše projekte, 
                          uz visok nivo stručnosti i brige za svakog klijenta. Kontaktirajte nas! 
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </div> 

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
                  <li><a href="about.php">Projekt Križan proizvodi</a></li>
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
  <script src="js/scrollToTop.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>