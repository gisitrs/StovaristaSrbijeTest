<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link href="../images/LOGO.png" rel="icon">

    <title>Projekt Križan D.O.O.</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrapAdmin.min.css" rel="stylesheet">
    <link href="../css/adminMain.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <!--<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>-->
  <!-- ***** Preloader End ***** -->

  <!--<script type="text/javascript">
       window.onbeforeunload = function() {
         var text = "Leave sajt";
         return text;
       }
  </script>-->

  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <nav class="main-nav">

                    <a href="index.php" class="logo">
                      <img src="../images/LOGO-Text.png" alt="" class="mainLogoImage">
                    </a>

                    <ul class="nav">
                      <li><a style="margin-left: -30px;" <?php echo "href="."index.php?userId=".$_GET['userId'] ?> class="active">Novo stovarište</a></li>
                      <li><a style="margin-left: -30px;" <?php echo "href="."datatable.php?userId=".$_GET['userId'] ?> >Sva stovarišta</a></li>
                      <li><a style="margin-left: -30px;" <?php echo "href="."archive.php?userId=".$_GET['userId'] ?> >Arhiva</a></li>
                      <li><a style="margin-left: -30px;" <?php echo "href="."form.php?userId=".$_GET['userId'] ?> >Dodaj fotografije</a></li>
                      <li><a style="margin-left: -30px;" href="#" onclick='adminToWebsite("Edit", "Ovom akcijom napuštate admin sesiju, da li ste sigurni?");'>Sajt</a></li>
                      <li><a style="margin-left: -30px;" href="#" onclick='adminLogOut("Edit", "Da li želite da napustite Projekt Križan admin?");'>Odjavi se</a></li>
                      <li><a href="contact.html" style="display:none"></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!--<div class="main-banner" style="display:none;">
    <div class="header-text">
    </div>
  </div>-->

  <div class="col-lg-12">
        <?php
        if (isset($_POST["createProperty"])) { 
          function generate_uuid_v4() {
            return sprintf(
                '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                mt_rand(0, 0xffff), mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0x0fff) | 0x4000,  // Version 4
                mt_rand(0, 0x3fff) | 0x8000,  // Variant 1
                mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
            );
           }
        
           $id = generate_uuid_v4();

           $ref = $_POST["ref"];
           $proName = $_POST["fullname"];
           $proSmallDesc = $_POST["description"];

           $lat = $_POST["lat"];
           $lon = $_POST["lon"];
           
           $proCategory =  $_POST["propertyCategories"];
           $proCity =  $_POST["propertyCities"];

           $address = $_POST["address"];
           $isstared = $_POST["isfeatured"];
           $hasdetails = $_POST["hasdetails"];

           require_once "../database.php";
		   
           /*$maxId = "SELECT  MAX(Id) AS MaxId FROM jos_osrs_properties";
           $resultMaxId = mysqli_query($conn, $maxId);
           $resultMaxValue = mysqli_fetch_array($resultMaxId, MYSQLI_ASSOC);
           $newId = $resultMaxValue["MaxId"] + 1;*/

           $sql = "INSERT INTO object (id, order_number, name, description, city_Id, lat, lon, category_id, address, ordering, is_stared, has_details) 
           VALUES ('$id', '$ref', '$proName', '$proSmallDesc', '$proCity', '$lat', '$lon', '$proCategory', '$address', '$ref', '$isstared', '$hasdetails');";
            
           if (mysqli_query($conn, $sql)) {
              echo "<div class='alert alert-success'>Novo stovarište ".$proName." je uspešno kreirano</div>";
           } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
        }

        ?>
    </div>
  
  <div class="contact section" style="margin-top: -30px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 offset-lg-12">
        </div>
      </div>
    </div>
  </div>
  
  <div class="contact-content">
    <div class="container">
    <?php echo "<form id="."contact-form"." style="."width: 100%;"." action="."index.php?userId=".$_GET["userId"]." method="."post".">"  ?>
      <div class="row">
      <div class="section-heading text-center">
          <h3>Kreiraj stovarište</h3>
      </div>
          </br></br>
          <p>Broj stovarišta</p>
        <div class="col-lg-6">
            <div class="contact-content" style="margin-top: 0px;">
               
                  <div class="row">
                     <div class="col-lg-12">
                        <?php
                          require_once "../database.php";
                          $maxOrderNumber = "SELECT  MAX(order_number) AS MaxOrderNumber FROM object";
                          $resultMaxId = mysqli_query($conn, $maxOrderNumber);
                          $resultMaxValue = mysqli_fetch_array($resultMaxId, MYSQLI_ASSOC);
                          $newOrderNumber = $resultMaxValue["MaxOrderNumber"] + 1;
                           
                          echo "<fieldset>".
                                    "<input readonly type="."name"." name="."ref"." autocomplete="."on"." required value=".$newOrderNumber.">".
                               "</fieldset>"
                        ?>
                     </div>
                     <div class="col-lg-12">
                        <fieldset>
                           <input type="name" name="fullname" placeholder="Naziv:" autocomplete="on" required>
                        </fieldset>
                     </div>
                     <div class="col-lg-12" style="margin-bottom: 30px;">
                         <fieldset>
                             <select name="propertyCategories" class="form-select">
                             <?php 
                                 require_once "../database.php";
                                 $sql = "SELECT id, name FROM vw_getallcategories";
                                 $result = mysqli_query($conn, $sql);
                           
                                 while($rows = $result->fetch_assoc()){
                                    $cityName = $rows['name'];
                                    $cityId = $rows['id'];

                                    echo "<option value='$cityId'>$cityName</option>";
                                 };
                             ?>
                             </select>
                         </fieldset>
                     </div>
                     <div class="col-lg-12">
                         <fieldset>
                           <textarea name="description" placeholder="Opis:"></textarea>
                         </fieldset>
                     </div>
                     <div class="col-lg-4">
                        <div style="display: inline-block;">
                          <input type="hidden" id="isFeatured" name="isfeatured" style="margin-left:20px; width:30px; height:30px;" value="0">
                          <input type="checkbox" id="isFeatured" name="isfeatured" style="margin-left:20px; width:30px; height:30px;" value="1">
                        </div>
                        <div style="display: inline-block;">
                          <label for="isFeatured" style="margin-left: 15px; margin-bottom: 20px; margin-bottom: 20px;">Zvezdica</label>
                        </div>
                     </div>
                 </div>
               </form>
            </div>
        </div>

        <div class="col-lg-6">
          <div class="contact-content" style="margin-top: 0px;">
            <div class="row">
              <div class="col-lg-12">
                 <fieldset>
                    <input type="phone" name="address" placeholder="Adresa:" autocomplete="on" required>
                 </fieldset>
              </div>
              <div class="col-lg-12">
                  <fieldset>
                      <input type="number" name="lat" step=".000001" placeholder="Lat:" autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-lg-12">
                  <fieldset>
                      <input type="number" name="lon" step=".000001" placeholder="Lon:" autocomplete="on">
                  </fieldset>
              </div>
              <div class="col-lg-12" style="margin-bottom:30px;">
                  <fieldset>
                     <select name="propertyCities" class="form-select">
                        <?php 
                           require_once "../database.php";
                           $sql = "SELECT id, name FROM vw_getallcities";
                           $result = mysqli_query($conn, $sql);
                           
                           while($rows = $result->fetch_assoc()){
                               $cityName = $rows['name'];
                               $cityId = $rows['id'];

                               echo "<option value='$cityId'>$cityName</option>";
                           };
                        ?>
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-4">
                  <div style="display: inline-block;">
                      <input type="hidden" id="hasDetails" name="hasdetails" style="margin-left:20px; width:30px; height:30px;" value="0">
                      <input type="checkbox" id="hasDetails" name="hasdetails" style="margin-left:20px; width:30px; height:30px;" value="1">
                  </div>
                  <div style="display: inline-block;">
                      <label for="hasDetails" style="margin-left: 15px; margin-bottom: 20px; margin-bottom: 20px;">Ima detalje</label>
                  </div>
              </div>
              <div class="col-lg-12" style="margin-top: 0px;">
                  <fieldset >
                     <button type="submit" name="createProperty" class="orange-button">Kreiraj</button>
                  </fieldset>
              </div>
            </div>
        </div>

      </div>
     </form>
    </div>
  </div> 

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/isotope.min.js"></script>
  <script src="../js/owl-carousel.js"></script>
  <script src="../js/custom-js/counter.js"></script> 
  <script src="../js/custom-js/custom.js"></script>
  <script src="../js/customAdmin.js"></script> 
  </body>
</html>