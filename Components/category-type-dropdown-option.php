<?php
     include "database.php";
     $sql = "SELECT * FROM vw_getallcategorytypes";
     $result = $conn-> query($sql);
                      
     if ($result-> num_rows > 0)
     {
        while ($row = $result-> fetch_assoc())
        {
            echo "<option value=".$row["category_id"].">".$row["category_name"]."</option>";
        }
     }
     else {
            echo "0 results";
          }
                      
     $conn-> close();
?>