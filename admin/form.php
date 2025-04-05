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

  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <nav class="main-nav">

                    <a href="index.php" class="logo">
                      <img src="../images/LOGO-Text.png" alt="" class="mainLogoImage">
                    </a>

                    <ul class="nav">
                      <li><a style="margin-left: -30px;" <?php echo "href="."index.php?userId=".$_GET['userId'] ?> >Novo stovarište</a></li>
                      <li><a style="margin-left: -30px;" <?php echo "href="."datatable.php?userId=".$_GET['userId'] ?> >Sva stovarišta</a></li>
                      <!--<li><a style="margin-left: -30px;" <php echo "href="."archive.php?userId=".$_GET['userId'] ?> >Arhiva</a></li>-->
                      <li><a style="margin-left: -30px;" <?php echo "href="."form.php?userId=".$_GET['userId'] ?> class="active">Dodaj fotografije</a></li>
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

  <div class="main-banner" style="display:none;">
    <div class="header-text">
    </div>
 </div>

 <?php
        if (isset($_POST["submit"])) {

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

            require_once "../database.php";
            
            $selectedPropertyId = $_POST["property"];

            $sql = "SELECT order_number FROM object WHERE id='".$selectedPropertyId."'";
            $result = mysqli_query($conn, $sql);

            while($rows = $result->fetch_assoc()){
                $refValue = $rows['order_number'];
             };

            $dir = "../images/".$refValue;
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
            $maxOrderingId = "SELECT  MAX(ordering) AS MaxOrderingId FROM image WHERE id IN (SELECT image_id FROM object_image WHERE object_id='".$selectedPropertyId."')";
            $resultMaxOrderingId = mysqli_query($conn, $maxOrderingId);
            $resultMaxOrderingValue = mysqli_fetch_array($resultMaxOrderingId, MYSQLI_ASSOC);
            $countimg = $resultMaxOrderingValue["MaxOrderingId"] + 1;
            //$countimg = 1;

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

                //throw new Exception($type);

                // Create a new image resource from the uploaded file based on the file type
                switch ($type) {
                    case IMAGETYPE_JPEG:
                        $image = imagecreatefromjpeg($image_path);
                        break;
                    /*case IMAGETYPE_JPG:
                        $image = imagecreatefromjpg($image_path);
                        break;*/
                    case IMAGETYPE_PNG:
                        $image = imagecreatefrompng($image_path);
                        break;
                    case IMAGETYPE_GIF:
                        $image = imagecreatefromgif($image_path);
                        break;
                    /*default:
                        throw new Exception('Unsupported image type');*/
                }

                // Create a new true color image with the target dimensions
                $new_image = imagecreatetruecolor($target_width, $target_height);

                // Preserve transparency for PNG and GIF images
                /*if ($type == IMAGETYPE_PNG || $type == IMAGETYPE_GIF) {
                     imagealphablending($new_image, false);
                     imagesavealpha($new_image, true);
                }*/

                // Resize the image
                imagecopyresampled($new_image, $image, 0, 0, 0, 0, $target_width, $target_height, $width, $height);
                
                // Save the resized image to a new file
                switch ($type) {
                    case IMAGETYPE_JPEG:
                        imagejpeg($new_image, $image_pathThumb, 90);  // Quality set to 90
                        break;
                    /*case IMAGETYPE_JPG:
                        imagejpg($new_image, $image_pathThumb, 90);  // Quality set to 90
                        break;*/
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

                $newid = generate_uuid_v4();

                $path = "images/".$refValue."/".$imagename;

                $sql = "INSERT INTO image (id, name, path, ordering) VALUES (?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssss", $newid, $imagename, $path, $countimg);
                $stmt->execute();

                $countimg = $countimg + 1;

                $newobjectimageid = generate_uuid_v4();

                $sql = "INSERT INTO object_image (id, object_id, image_id) VALUES (?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $newobjectimageid, $selectedPropertyId, $newid);
                $stmt->execute();
            }

            echo "<div class='col-lg-12 alert alert-success'>Fotografije su uspešno učitane!</div>";
        }

        ?>
            <div class="row justify-content-center">
                <div class="col-lg-9 bg-light mt-4 px-4 p-2 rounded">
                <div class="text-center">
                    <h3>Dodaj fotografije</h3>
                </div>
                    <form <?php echo "href="."action.php?userId=".$_GET['userId'] ?> enctype="multipart/form-data" method="POST">
                        <div class="col-lg-12 bg-light mt-4 px-4 p-2 rounded justify-content-center">
                            <p style="font-size: 16px;">Izaberi stovarište</p>
                            <select name="property" class="form-select">
                              <?php 
                                  require_once "../database.php";
                                  $sql = "SELECT id, name, order_number FROM object ORDER BY order_number DESC";
                                  $result = mysqli_query($conn, $sql);
                           
                                   while($rows = $result->fetch_assoc()){
                                      $propertyName = $rows['name'];
                                      $propertyId = $rows['id'];
                                      $refValue = $rows['order_number'];
                                      echo "<option value='$propertyId'>".$refValue.", ".$propertyName."</option>";
                                   };
                               ?>
                            </select>
                       
                            <p style="margin-top: 30px; font-size: 16px;">Izaberi fotografije</p>
                            <div class="form-control">
                                <input class="form-control" type="file" name="images[]" multiple="multiple" style="margin-top:-7px;"/>
                            </div>
                            <div class="form-btn text-center">
                                <input class="btn btn-primary btn-block mt-4" type="submit" name="submit" value="Upload" style="margin-top: 30px; margin-bottom: 30px; background-color: #36389b; border: none;"/>
                            </div>
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
  <script src="../jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/isotope.min.js"></script>
  <script src="../js/owl-carousel.js"></script>
  <script src="../js/custom-js/counter.js"></script> 
  <script src="../js/custom-js/custom.js"></script>
  <script src="../js/customAdmin.js"></script> 
  </body>
</html>