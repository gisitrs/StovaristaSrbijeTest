<?php
     include "database.php";
     $sql = "SELECT * FROM vw_getallproducttypes";
     $result = $conn-> query($sql);
                      
     if ($result-> num_rows > 0)
     {
        while ($row = $result-> fetch_assoc())
        {
            echo "<li><a href="."buy.php?producttype=".$row["product_type_name"]."".">".$row["product_type_name"]."</a></li>";
        }
     }
     else {
            echo "0 results";
          }
                      
     $conn-> close();
?>