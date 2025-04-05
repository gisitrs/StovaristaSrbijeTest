<?php
include"../database.php"; 
 $id=$_POST['string'];
 
 $sqlId = "SELECT * FROM object WHERE order_number='$id'";
 $resultId = $conn-> query($sqlId);
 $rowId = $resultId-> fetch_assoc();
 $objectId = $rowId['id'];
 
 $sql = "SELECT * FROM vw_getallimages WHERE object_id='$objectId'";
 $result = $conn-> query($sql);
 
 if ($result-> num_rows > 0)
 {
    while ($row = $result-> fetch_assoc())
    {
        $dirname = "../".$row["image_path"];
        $dirnameMedium = "../images/".$id."/medium/".$row["image_name"];
        $dirnameOriginal = "../images/".$id."/original/".$row["image_name"];
        $dirnameThumb = "../images/".$id."/thumb/".$row["image_name"];
        unlink($dirname);
        unlink($dirnameMedium);
        unlink($dirnameOriginal);
        unlink($dirnameThumb);
        
    }
    
    $mainFolder = "../images/".$id;
    $medumFolder = "../images/".$id."/medium";
    $originalFolder = "../images/".$id."/original";
    $thumbFolder = "../images/".$id."/thumb";
    rmdir($medumFolder);
    rmdir($originalFolder);
    rmdir($thumbFolder);
    rmdir($mainFolder);
 }

 $sql = "delete from object_image where object_id='$objectId'";

 if ($conn->query($sql) === TRUE) {
    $sql = "delete from object_product where object_id='$objectId'";
    
    if ($conn->query($sql) === TRUE) {
        $sql = "delete from object where id='$objectId'";
        
        if ($conn->query($sql) === TRUE) {
            echo "<p class='btn btn-info' align='center'>Record deleted successfully</p>";
        }
    }
 } else {
  echo "Error deleting record: " . $conn->error;
 } 
 
?>