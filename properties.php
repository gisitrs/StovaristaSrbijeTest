<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Stovarišta Srbije &mdash; Projekat Križan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

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
  <body onload = "searchObjects()">
  
  <div class="site-loader"></div>
  
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
                  <li class="has-children active">
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
                  <li><a href="about.php">Projekt Križan proizvodi</a></li>
                  <li><a href="blog.php">O nama</a></li>
                  <li><a href="contact.php">Kontakt</a></li>
                </ul>
              </nav>
            </div>
           

          </div>
        </div>
      </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay" style="background-image: url(images/Carousel1.jfif);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">Tekst opis</span>
              <h1 class="mb-2">Naziv stovarišta</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">Opis</strong></p>
              <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Više detalja</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/Carousel2.jfif);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">Tekst opis</span>
              <h1 class="mb-2">Naziv stovarišta</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">Opis</strong></p>
              <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Više detalja</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/Carousel3.jfif);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">Tekst opis</span>
              <h1 class="mb-2">Naziv stovarišta</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">Opis</strong></p>
              <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Više detalja</a></p>
            </div>
          </div>
        </div>
      </div>  

    </div>

    <div class="site-section site-section-sm pb-0">
      <div class="container">
        <div class="row">
          <form class="form-search col-md-12" style="margin-top: -100px;">
            <div class="row  align-items-end">
              <div class="col-md-3">
                <label for="list-types">Sortiraj</label>
                <!--<div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="list-types" id="list-types" class="form-control d-block rounded-0">
                     <option value="0">Svi proizvodi</option>
                     <php
                        include "Components/krizan-product-type-dropdown-option.php";
                     ?>
                  </select>
                </div>-->
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select id="sortListId" class="form-control d-block rounded-0">
                    <option value="0">Sortiraj po nazivu</option>
                    <option value="1">Rastuće</option>
                    <option value="2">Opadajuće</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="offer-types">Kategorija</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                      <option value="0">Sve kategorije</option>
                      <?php
                        include "Components/category-type-dropdown-option.php";
                      ?>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="select-city">Gradovi</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="select-city" id="select-city" class="form-control d-block rounded-0">
                      <option value="0">Svi gradovi</option>
                      <?php
                          include "database.php";
                          
                          $selectedCity = $_GET["city"];
                          $sql = "SELECT * FROM vw_getallcities";
                          $result = $conn-> query($sql);
                      
                          if ($result-> num_rows > 0)
                          {
                              while ($row = $result-> fetch_assoc())
                              {
                                  if ($selectedCity == $row["name"])
                                  {
                                     echo "<option value=".$row["order_id"]." selected>".$row["name"]."</option>";
                                  }
                                  else 
                                  {
                                     echo "<option value=".$row["order_id"]." >".$row["name"]."</option>";
                                  }
                              }
                          }
                          else {
                              echo "0 results";
                          }
                      
                          $conn-> close();
                      ?>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                  <button type="button" class="btn btn-success text-white btn-block rounded-0"  onclick="searchObjects()">Search</button>
              </div>
            </div>
          </form>
        </div>  

        <!--<div class="row">
          <div class="col-md-12">
            <div class="view-options bg-white py-3 px-3 d-md-flex align-items-center">-->
              <!--<div class="mr-auto">
                <a href="index.html" class="icon-view view-module active"><span class="icon-view_module"></span></a>
                <a href="view-list.html" class="icon-view view-list"><span class="icon-view_list"></span></a>
                
              </div>-->
              <!--<div class="ml-auto d-flex align-items-center">-->
                <!--<div>
                  <a href="#" class="view-list px-3 border-right active">Sva stovarišta</a>
                  <a href="#" class="view-list px-3 border-right">Beograd</a>
                  <a href="#" class="view-list px-3 border-right">Novi Sad</a>
                  <a href="#" class="view-list px-3 border-right">Niš</a>
                  <a href="#" class="view-list px-3 border-right">Prijepolje</a>
                  <a href="#" class="view-list px-3">Kraljevo</a>
                </div>-->


                <!--<div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select id="sortListId" class="form-control form-control-sm d-block rounded-0">
                    <option value="0">Sortiraj po nazivu</option>
                    <option value="1">Rastuće</option>
                    <option value="2">Opadajuće</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>-->
       
      </div>
    </div>

    <div class="site-section site-section-sm bg-light">
      <div class="container">
      
        <div id="objectlistid" class="row mb-5">
           <?php 
               include "Components/list-of-objects.php";
           ?>
        </div>
      </div>
    </div>

        <footer class="site-footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div class="mb-5">
                  <h3 class="footer-heading mb-4">O Stovarištima Srbije</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
                </div>
              </div>
              <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row mb-5">
                  <div class="col-md-12">
                    <h3 class="footer-heading mb-4">Brzi linkovi</h3>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <ul class="list-unstyled">
                      <li><a href="index.html">Naslovna</a></li>
                      <li><a href="properties.html">Gradovi</a></li>
                      <li><a href="buy.html">Proizvodi</a></li>
                    </ul>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <ul class="list-unstyled">
                      <li><a href="about.html">Projekt Križan proizvodi</a></li>
                      <li><a href="blog.html">O nama</a></li>
                      <li><a href="contact.html">Kontakt</a></li>
                    </ul>
                  </div>
                </div>
    
    
              </div>
    
              <div class="col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Pratite nas</h3>
    
                    <div>
                      <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                      <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                      <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                      <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>
    
                
    
              </div>
              
            </div>
            <!--<div class="row pt-5 mt-5 text-center">
              <div class="col-md-12">
                <p>
                Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                </p>
              </div>
              
            </div>-->
          </div>
        </footer>

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
  <script src="js/custom.js"></script>


  <script src="js/main.js"></script>
    
  </body>
</html>