<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Stovarišta Srbije &mdash; Projekt Križan</title>
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
  <body>
  
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

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/Carousel1.jfif);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Detalji o stovarištu</span>
            <h1 class="mb-2">Adresa</h1>
            <p class="mb-5"><strong class="h2 text-success font-weight-bold">Opis</strong></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div>
              <div class="slide-one-item home-slider owl-carousel">
                  <?php
                      include "database.php";
                          
                      $selectedObjectId = $_GET["object"];
                      $sql = "SELECT * FROM vw_getallimages WHERE object_order_number=".$selectedObjectId;
                      $result = $conn-> query($sql);
                      
                      if ($result-> num_rows > 0)
                      {
                          while ($row = $result-> fetch_assoc())
                          {
                              echo "<div><img src=".$row["image_path"]." alt="."Image"." class="."img-fluid"."></div>";
                          }
                      }
                      else {
                            echo "0 results";
                      }
                      
                      $conn-> close();
                  ?>
              </div>
            </div>
            <div class="bg-white property-body border-bottom border-left border-right">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3">
                  <?php
                      include "database.php";
                          
                      $selectedObjectId = $_GET["object"];
                      $sql = "SELECT * FROM vw_getallobjects WHERE order_number=".$selectedObjectId;
                      $result = $conn-> query($sql);
                      
                      if ($result-> num_rows > 0)
                      {
                          while ($row = $result-> fetch_assoc())
                          {
                              echo $row["name"];
                          }
                      }
                      else {
                            echo "0 results";
                      }
                      
                      $conn-> close();
                  ?>
                  </strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs">Detalj1</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Detalj2</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Detalj3</span>
                    <span class="property-specs-number">7,000</span>
                    
                  </li>
                </ul>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Tip stovarišta</span>
                  <strong class="d-block">Kompletan građevinski materijal</strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Datum osnivanja</span>
                  <strong class="d-block">2018</strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Price/Sqft</span>
                  <strong class="d-block">$520</strong>
                </div>
              </div>
              <h2 class="h4 text-black">Više detalja</h2>
              <p>
              <?php
                      include "database.php";
                          
                      $selectedObjectId = $_GET["object"];
                      $sql = "SELECT * FROM vw_getallobjects WHERE order_number=".$selectedObjectId;
                      $result = $conn-> query($sql);
                      
                      if ($result-> num_rows > 0)
                      {
                          while ($row = $result-> fetch_assoc())
                          {
                              echo $row["large_description"];
                          }
                      }
                      else {
                            echo "0 results";
                      }
                      
                      $conn-> close();
                  ?>
              </p>

              <div class="row no-gutters mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Galerija</h2>
                </div>
                <?php
                      include "database.php";
                          
                      $selectedObjectId = $_GET["object"];
                      $sql = "SELECT * FROM vw_getallimages WHERE object_order_number=".$selectedObjectId;
                      $result = $conn-> query($sql);
                      
                      if ($result-> num_rows > 0)
                      {
                          while ($row = $result-> fetch_assoc())
                          {
                              echo  "<div class="."col-lg-3".">".
                                        "<a href=".$row["image_path"]." class="."image-popup"."><img src=".$row["image_path"]." alt="."Image"." class="."img-fluid"."></a>".
                                     "</div>";
                          }
                      }
                      else {
                            echo "0 results";
                      }
                      
                      $conn-> close();
                  ?>
              </div>
            </div>
          </div>
          <div class="col-lg-4">

            <div class="bg-white widget border rounded">

              <h3 class="h4 text-black widget-title mb-3">Pošaljite nam poruku</h3>
              <form action="" class="form-contact-agent">
                <div class="form-group">
                  <label for="name">Ime</label>
                  <input type="text" id="name" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="phone">Telefon</label>
                  <input type="text" id="phone" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" id="phone" class="btn btn-primary" value="Pošalji">
                </div>
              </form>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Opis</h3>
              <p>
              <?php
                      include "database.php";
                          
                      $selectedObjectId = $_GET["object"];
                      $sql = "SELECT * FROM vw_getallobjects WHERE order_number=".$selectedObjectId;
                      $result = $conn-> query($sql);
                      
                      if ($result-> num_rows > 0)
                      {
                          while ($row = $result-> fetch_assoc())
                          {
                              echo $row["description"];
                          }
                      }
                      else {
                            echo "0 results";
                      }
                      
                      $conn-> close();
                  ?>
              </p>
            </div>

          </div>
          
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm bg-light">
      <div class="container">

        <div class="row">
          <div class="col-12">
            <div class="site-section-title mb-5">
              <h2>Povezana stovarišta</h2>
            </div>
            
            <div class="row mb-5">
            <?php 
                include "database.php";
                $selectedObjectId = $_GET["object"];
                
                $sql = "SELECT * FROM vw_getallobjects WHERE order_number<>".$selectedObjectId;
                $result = $conn-> query($sql);
            
                if ($result-> num_rows > 0)
                {
                   while ($row = $result-> fetch_assoc())
                   {
                       echo "<div id=".$row["div_id"]." class="."col-lg-4"." data-position=".$row["name"].">".
                                "<div class="."property-entry".">".
                                    "<a href=".$row["has_details_path"]." class=".$row["a_active"]." >".
                                        "<img src=".$row["image_path"]." alt="."Image"." class="."img-fluid"." style="."width:100%; height:50%".">".
                                    "</a>".
                                    "<div class="."property-body".">".
                                        "<div style="."display:inline-block;".">".
                                            "<h2 class=".$row["title_active"].">
                                                 <a href=".$row["has_details_path"].">".$row["name"]."</a>
                                             </h2>".
                                        "</div>".
                                        "<div style="."display:inline-block;margin-left:10px;".">".
                                            "<img src="."images/icons/Star.png"." style="."width:20px;display:".$row["star_visibility"].";"."></img>".
                                        "</div>".
                                        "<br><span class="."property-location"."><span class="."icon-room"."></span>".$row["address_city"]."</span>".
                                        "<br><br><strong class="."d-block"." style="."color:green; font-size:15px;".">".$row["description"]."</strong>".
                                        /*"<br><ul class="."property-specs-wrap".">".
                                        "<li>".
                                          "<span class="."property-specs".">Broj proizvoda</span>".
                                           "<span class="."property-specs-number".">".$row["number_of_products"]."</span>".
                                        "</li>".
                                        "</ul>".*/
                                       "<br/>".
                                       "<p id=".$row["project_list_id"]."><b>Kategorija: </b>".$row["category_name"]."</p>".
                                       "<a href=".$row["has_details_path"]." class=".$row["a_active"]." style="."display:".$row["display_details"].">Više detalja</a>".
                                      "<p id=".$row["krizan_project_list_id"]." style="."display:none"."><b>".$row["list_of_krizan_products"]."</b></p>".
                                "</div>". 
                            "</div>".
                        "</div>";
                    }
              }
              else {
                 echo "0 results";
              }
            
              $conn-> close();
            ?>
            </div>

          </div>
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
  <script src="js/circleaudioplayer.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>