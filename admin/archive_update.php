<?php
include"database.php"; 
$proId  = $_POST['proId'];
$txtprice  = $_POST['txtprice'];
$txtdate = $_POST['txtdate'];


 $sql = "UPDATE jos_osrs_properties 
 SET isSold = '1', 
     soldOn = '$txtdate', 
     price_original ='$txtprice'
 WHERE id = '$proId' ";
 
 if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
 } else {
  //echo "Error updating record: " . $conn->error;
  echo "<div class='alert alert-success'>".$conn->error."</div>";
 } 
?>