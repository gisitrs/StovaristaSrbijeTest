<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Stovarišta Srbije &mdash; Projekt Križan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
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
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrapAdmin.min.css" rel="stylesheet">
    <link href="css/adminMain.css" rel="stylesheet">
    
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="css/aos.css">
    
  </head>
  <body>

  <header class="header-area header-sticky" style="height:3.9rem;">
    <div class="container">
        <div class="row">
            <div class="col-12" style="height:3.9rem;">
              <nav class="main-nav" style="margin-top:0px;">

                    <a href="index.php" class="logo">
                      <img src="images/LOGO-Text.png" alt="" class="mainLogoImage" style="margin-top:10px;">
                    </a>

                    <ul class="nav" style="margin-top:0px;">
                      <li> <select id="categorySelectId" name="propertyCategories" class="form-select" onchange="categoryChanged()" style="margin-left: 35px; margin-top: 10px; width:250px;"> <!--margin-left: -300px;-->
                              <option value="0">Sve kategorije</option>
                                  <?php 
                                      require_once "database.php";
                                      $sql = "SELECT id, name FROM vw_getallcategories";
                                      $result = mysqli_query($conn, $sql);
                           
                                      while($rows = $result->fetch_assoc()){
                                          $cityName = $rows['name'];
                                          $cityId = $rows['id'];

                                          echo "<option value='$cityId'>$cityName</option>";
                                      };
                                  ?>
                            </select>
                      </li>
                      <li> <select id="citySelectId" name="propertyCities" class="form-select" onchange="cityChanged()" style="margin-left: 35px; margin-top: 10px; width:250px;">
                               <option value="0">Svi gradovi</option>
                                   <?php 
                                       require_once "database.php";
                                       $sql = "SELECT id, name FROM vw_getallcitieswithobjects";
                                       $result = mysqli_query($conn, $sql);
                           
                                       while($rows = $result->fetch_assoc()){
                                           $cityName = $rows['name'];
                                           $cityId = $rows['id'];

                                           echo "<option value='$cityId'>$cityName</option>";
                                       };
                                    ?>
                           </select>
                      </li>
                      <li><a style="margin-top:10px;" href="index.php">Naslovna strana</a></li>
                      <li><a href="contact.html" style="display:none"></a></li>
                    </ul>   
                    <a class='menu-trigger' style="margin-top: -10px;">
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>

  <!--<div class="col-lg-12" style="position: absolute; left: 0; top: 0rem; bottom: 0; right: 0;">
      <div class="col-lg-3" style="display:inline-block;">
          <a href="index.php" class="logo">
              <img src="images/LOGO-Text.png" alt="" class="mainLogoImage" style="margin-top:10px;">
          </a>
      </div>
      <div  class="col-lg-6" style="margin-top:20px; display:inline-block;">
          <div class="col-lg-3" style="display:inline-block;">
              <fieldset>
                  <select id="categorySelectId" name="propertyCategories" class="form-select" onchange="categoryChanged()">
                      <option value="0">Sve kategorije</option>
                      <php 
                          require_once "database.php";
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
          <div class="col-lg-3" style="display:inline-block;">
              <fieldset>
                  <select id="citySelectId" name="propertyCities" class="form-select" onchange="cityChanged()">
                      <option value="0">Svi gradovi</option>
                      <php 
                          require_once "database.php";
                          $sql = "SELECT id, name FROM vw_getallcitieswithobjects";
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
      </div>
  </div>-->
  
  
  <div class="site-wrap">
    <p id="objectvaluesId" style="display:block;"></p>
    <p id="citylocationsId" style="display:block;"></p>
    <div id="mainMap" style="position: absolute; left: 0; top: 3.9rem; bottom: 0; right: 0;"></div>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

  <script>
    // Initialize the map
    var map = L.map('mainMap').setView([44.244413, 20.986194], 7); // Coordinates for London, change to your desired location

    // Add OpenStreetMap tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Create a LayerGroup to store markers
    var markersLayer = L.layerGroup().addTo(map);

    $.post("Components/getmapobjects.php", function(data) {
         $("#objectvaluesId").val(data);
    });

    $.post("Components/getcitylocations.php", function(data) {
         $("#citylocationsId").val(data);
    });

    function categoryChanged(){
      var selectElement = document.getElementById("categorySelectId");
      // Get the text of the selected option
      var selectedText = selectElement.options[selectElement.selectedIndex].text;
      createLocations(selectedText, 0);
    }

    function cityChanged(){
      var selectElement = document.getElementById("citySelectId");
      // Get the text of the selected option
      var selectedText = selectElement.options[selectElement.selectedIndex].text;
      //alert(selectedText);
      changeMapZoom(selectedText);
    }

    function createLocations(type, id){
      var listOfObjects = document.getElementById('objectvaluesId').value;

      markersLayer.clearLayers();

      // Step 1: Parse the string into an array of coordinate pairs
      const coordinateString = listOfObjects
          .replace(/\[/g, '')
          .replace(/\]/g, '')
          .split(',')
          .map(String);

      // Step 2: Reformat the parsed data into an array of arrays (latitude, longitude)
      const coordinates = [];
      for (let i = 0; i < coordinateString.length; i += 8) {
         coordinates.push([coordinateString[i], coordinateString[i + 1], coordinateString[i + 2], coordinateString[i + 3], coordinateString[i + 4], coordinateString[i + 5], coordinateString[i + 6], coordinateString[i + 7]]);
      }

      // Step 3: Use forEach to loop through the coordinates array
      coordinates.forEach((coordinate, index) => {
          const latitude = coordinate[0];
          const longitude = coordinate[1];
          const name = coordinate[2];
          const address = coordinate[3];
          const imagePath = coordinate[4];
          const orderNumber = coordinate[5];
          const moreDetails = coordinate[6];
          const categoryName = coordinate[7];
          var showMoreDetails = 'block';

          if (moreDetails == '#'){
            showMoreDetails = 'none';
          }

          if (type == 'Sve kategorije' || categoryName == type || id == orderNumber){
              var marker = L.marker([latitude, longitude]).addTo(markersLayer);
              marker.bindPopup('<img src="'+ imagePath +'" alt="Image" style="width:300px;" /><h2>'+ name +'</h2>'+ 
                              '<h4>'+ address +'</h4><a href="' + moreDetails + '" style="display:' + showMoreDetails + '">Više detalja</a>' +
                              '<h6 style="display:inline-block;">Tip: ' + categoryName + '</h6>' );

          }
      });
    }

    function changeMapZoom(city){
      var listOfObjects = document.getElementById('citylocationsId').value;

      // Step 1: Parse the string into an array of coordinate pairs
      const coordinateString = listOfObjects
         .replace(/\[/g, '')
         .replace(/\]/g, '')
         .split(',')
         .map(String);

      // Step 2: Reformat the parsed data into an array of arrays (latitude, longitude)
      const coordinates = [];
      for (let i = 0; i < coordinateString.length; i += 3) {
          coordinates.push([coordinateString[i], coordinateString[i + 1], coordinateString[i + 2]]);
      }

      // Step 3: Use forEach to loop through the coordinates array
      coordinates.forEach((coordinate, index) => {
          const latitude = coordinate[0];
          const longitude = coordinate[1];
          const name = coordinate[2];

          var newCenter = [];
          var newZoom = 0; 

          if (name == city){
              newCenter = [latitude, longitude];
              newZoom = 10; 
          }
          else if (city == 'Svi gradovi'){
              newCenter = [44.244413, 20.986194];
              newZoom = 7;  
          }
          
          if (newZoom != 0){
             map.setView(newCenter, newZoom);
          }
      });
    }

    window.onload = function() { 
      const url_params = new URLSearchParams(window.location.search);
      const objectId = url_params.get('id');
      var type = 'Sve kategorije';

      if (objectId != 0){
        type = 'Nema kategorije';
      }

      setTimeout(function() { createLocations(type, objectId); }, 1000);
    };

  </script>

  <script src="jquery/jquery.min.js"></script>

  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/isotope.min.js"></script>
  <script src="js/owl-carousel.js"></script>
  <script src="js/custom-js/counter.js"></script> 
  <script src="js/custom-js/custom.js"></script>
  <script src="js/customAdmin.js"></script>
    
  </body>
</html>