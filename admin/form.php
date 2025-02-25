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
    <link href="../assets/images/2019/Logo1.png" rel="icon">

    <title>Neca Prom D.O.O.</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
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

  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <nav class="main-nav">
                    <a href="index.php" class="logo">
                    <img src="../assets/images/2019/Necaprom_transparent.png" alt="" class="mainLogoImage">
                    </a>

                    <ul class="nav">
                      <li><a style="margin-left: -30px;" <?php echo "href="."index.php?userId=".$_GET['userId'] ?> >Kreiraj nekretninu</a></li>
                      <li><a style="margin-left: -30px;" <?php echo "href="."datatable.php?userId=".$_GET['userId'] ?> >Sve Nekretnine</a></li>
                      <li><a style="margin-left: -30px;" <?php echo "href="."sold_properties_datatable.php?userId=".$_GET['userId'] ?> >Prodate nekretnine</a></li>
                      <li><a style="margin-left: -30px;" <?php echo "href="."form.php?userId=".$_GET['userId'] ?> class="active">Upload fotografija</a></li>
                      <li><a style="margin-left: -30px;" href="#" onclick='leaveAdminApp("Edit", "Napušta se sesija, da li ste sigurni?");' >Sajt</a></li>
                      <li><a style="margin-left: -30px;" href="logout.php">Odjavi se</a></li>
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

  <div class="main-banner" style="display:none;">
    <div class="header-text">
    </div>
 </div>

 <?php
        if (isset($_POST["submit"])) {

            require_once "database.php";
            
            $selectedPropertyId = $_POST["property"];
            $dir = "../assets/images/properties/".$selectedPropertyId;
            $dirMedium = $dir."/medium";
            $dirOriginal = $dir."/original";
            $dirThumb = $dir."/thumb";

            if(!is_dir($dir))
            {
                mkdir($dir, 0777);
                //echo "New folder created";
            }

            if(!is_dir($dirMedium))
            {
                mkdir($dirMedium, 0777);
            }

            if(!is_dir($dirOriginal))
            {
                mkdir($dirOriginal, 0777);
            }

            if(!is_dir($dirThumb))
            {
                mkdir($dirThumb, 0777);
            }

            //$countimg = 1;
            $maxOrderingId = "SELECT  MAX(ordering) AS MaxOrderingId FROM jos_osrs_photos WHERE pro_id=".$selectedPropertyId;
            $resultMaxOrderingId = mysqli_query($conn, $maxOrderingId);
            $resultMaxOrderingValue = mysqli_fetch_array($resultMaxOrderingId, MYSQLI_ASSOC);
            $countimg = $resultMaxOrderingValue["MaxOrderingId"] + 1;

            foreach($_FILES["images"]["name"] as $i=>$name)
            {
                $imagename = $_FILES["images"]["name"][$i];
                $tmpname = $_FILES["images"]["tmp_name"][$i];
    
                $image_name = $_FILES['images']['tmp_name'][$i];
                $folder = $dir."/";
                $image_path = $folder.$_FILES['images']['name'][$i];
                move_uploaded_file($image_name, $image_path);

                $folderMedium = $dirMedium."/";
                $image_pathMedium = $folderMedium.$_FILES['images']['name'][$i];
                copy($image_path, $image_pathMedium);

                $folderOriginal = $dirOriginal."/";
                $image_pathOriginal = $folderOriginal.$_FILES['images']['name'][$i];
                copy($image_path, $image_pathOriginal);

                /* Resize images and save on the Thumb folder */
                $folderThumb = $dirThumb."/";
                $image_pathThumb = $folderThumb.$_FILES['images']['name'][$i];
                /*copy($image_path, $image_pathThumb);*/

                $target_width = 170;  // Set target width
                $target_height = 110;  // Set target height

                list($width, $height, $type) = getimagesize($image_path);

                // Calculate the new dimensions
                $aspect_ratio = $width / $height;
                if ($target_width / $target_height > $aspect_ratio) {
                    $target_width = $target_height * $aspect_ratio;
                } else {
                    $target_height = $target_width / $aspect_ratio;
                }

                // Create a new image resource from the uploaded file based on the file type
                switch ($type) {
                    case IMAGETYPE_JPEG:
                        $image = imagecreatefromjpeg($image_path);
                        break;
                    case IMAGETYPE_JPG:
                        $image = imagecreatefromjpg($image_path);
                        break;
                    case IMAGETYPE_PNG:
                        $image = imagecreatefrompng($image_path);
                        break;
                    case IMAGETYPE_GIF:
                        $image = imagecreatefromgif($image_path);
                        break;
                    default:
                        throw new Exception('Unsupported image type');
                }

                // Create a new true color image with the target dimensions
                $new_image = imagecreatetruecolor($target_width, $target_height);

                // Preserve transparency for PNG and GIF images
                if ($type == IMAGETYPE_PNG || $type == IMAGETYPE_GIF) {
                     imagealphablending($new_image, false);
                     imagesavealpha($new_image, true);
                }

                // Resize the image
                imagecopyresampled($new_image, $image, 0, 0, 0, 0, $target_width, $target_height, $width, $height);
                
                // Save the resized image to a new file
                switch ($type) {
                    case IMAGETYPE_JPEG:
                        imagejpeg($new_image, $image_pathThumb, 90);  // Quality set to 90
                        break;
                    case IMAGETYPE_JPG:
                        imagejpg($new_image, $image_pathThumb, 90);  // Quality set to 90
                        break;
                    case IMAGETYPE_PNG:
                        imagepng($new_image, $image_pathThumb, 9);  // Compression level set to 9
                        break;
                    case IMAGETYPE_GIF:
                        imagegif($new_image, $image_pathThumb);
                        break;
                }

                // Free up memory
                imagedestroy($image);
                imagedestroy($new_image);

                $sql = "INSERT INTO jos_osrs_photos (pro_id, image, ordering) VALUES (?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $selectedPropertyId, $imagename, $countimg);
                $stmt->execute();

                $countimg = $countimg + 1;
            }

            /*$sql = "SELECT * FROM images ORDER BY sort";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();
            $data = "<div class='col-lg-12 alert alert-success'>Sledeće fotografije su uspešno učitane!</div><div class='col-lg-12'>";

            while($row = $result->fetch_assoc()){
                $data .= '<div class="col-lg-4">
                             <div class="card-group">
                                 <div class="card mb-3">
                                     <a href="'.$row['path'].'">
                                        <img src="'.$row['path'].'" class="card-img-top" height="150">
                                     </a>
                                 </div>
                              </div>
                           </div>';
            }

            $data .= '</div>';*/

            echo "<div class='col-lg-12 alert alert-success'>Fotografije su uspešno učitane!</div>";
        }

        ?>
            <div class="row justify-content-center">
                <div class="col-lg-9 bg-light mt-4 px-4 p-2 rounded">
                    <h3 class="text-center text-info pb-2">Upload slika</h3>
                    <form <?php echo "href="."action.php?userId=".$_GET['userId'] ?> enctype="multipart/form-data" method="POST">
                       <div class="col-lg-12 bg-light mt-4 px-4 p-2 rounded justify-content-center">
                           <p>Izaberi nekretninu</p>
                           <select name="property" class="form-select">
                              <?php 
                                  require_once "database.php";
                                  $sql = "SELECT id, pro_name, ref FROM jos_osrs_properties WHERE isSold = 0 ORDER BY ref";
                                  $result = mysqli_query($conn, $sql);
                           
                                   while($rows = $result->fetch_assoc()){
                                      $propertyName = $rows['pro_name'];
                                      $propertyId = $rows['id'];
                                      $refValue = $rows['ref'];

                                      echo "<option value='$propertyId'>".$refValue.", ".$propertyName."</option>";
                                   };
                               ?>
                           </select>
                       </div> 
                       <p style="margin-top: 30px;">Izaberi fotografije</p>
                       <div class="form-control mt-4">
                            <input class="form-control" type="file" name="images[]" multiple="multiple"/>
                        </div>
                        <div class="form-btn text-center">
                            <input class="btn btn-info btn-block mt-4" type="submit" name="submit" value="Upload" />
                        </div>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 mt-4">
                    <div class="row p-2" id="images_preview">
                    </div>
                </div>
            </div>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/isotope.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/counter.js"></script>
  <script src="../assets/js/custom.js"></script> 
  <script src="customAdmin.js"></script> 
  </body>
</html>