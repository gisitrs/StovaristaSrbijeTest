<?php
     include "database.php";
     $sql = "SELECT * FROM vw_getallproducttypes";
     $result = $conn-> query($sql);
                      
     if ($result-> num_rows > 0)
     {
        while ($row = $result-> fetch_assoc())
        {
            echo "<option value=".$row["order_id"].">".$row["product_type_name"]."</option>";
        }
     }
     else {
            echo "0 results";
          }
                      
     $conn-> close();
?>