<?php
 include "../database.php"; 
 $id=$_POST['proId'];
 $imagesForDelete=$_POST['imagesForDelete'];
 
 $sql = "SELECT * FROM vw_getallimages WHERE object_order_number='$id'";
 $result = $conn-> query($sql);

 $images = explode(";", $imagesForDelete);
 
 if ($result-> num_rows > 0)
 {
    while ($row = $result-> fetch_assoc())
    {
        $imageOrder = $row["image_ordering"];
        $imageId = $row["image_id"];
        $objectid = $row["object_id"];

        if (in_array($imageOrder, $images))
        {
         $dirname = "../".$row["image_path"];
         $dirnameMedium = "../images/".$id."/medium/".$row["image_name"];
         $dirnameOriginal = "../images/".$id."/original/".$row["image_name"];
         $dirnameThumb = "../images/".$id."/thumb/".$row["image_name"];
         unlink($dirname);
         unlink($dirnameMedium);
         unlink($dirnameOriginal);
         unlink($dirnameThumb);

         $sql = "delete from object_image where image_id='$imageId'";
         $conn->query($sql);

         $sql1 = "delete from image where id='$imageId'";
         $conn->query($sql1);
        }
    }
    
    /*$mainFolder = "../assets/images/properties/".$id;
    $medumFolder = "../assets/images/properties/".$id."/medium";
    $originalFolder = "../assets/images/properties/".$id."/original";
    $thumbFolder = "../assets/images/properties/".$id."/thumb";
    rmdir($medumFolder);
    rmdir($originalFolder);
    rmdir($thumbFolder);
    rmdir($mainFolder);*/
 }

 /* Reset ordering for deleted property */
 $sql1 = "SELECT * FROM object_image WHERE object_id='$objectid'";
 $result1 = $conn-> query($sql1);
 $counter = 1;

 if ($result1-> num_rows > 0)
 {
   echo "Fotografije uspešno obrisane: ";

   while ($row1 = $result1-> fetch_assoc())
   { 
      $currentImageId = $row1["image_id"];
      $sqlUpdate = "UPDATE image SET ordering = ".$counter."  WHERE id='".$currentImageId."'";
      $conn->query($sqlUpdate);
      $counter = $counter + 1;
   }
 }

 /*$sql = "delete from jos_osrs_photos where pro_id='$id'";

 if ($conn->query($sql) === TRUE) {
    echo "Fotografije uspešno obrisane: ";
 }*/
?>