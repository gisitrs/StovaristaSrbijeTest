<?php
     include "database.php";
     $sql = "SELECT * FROM vw_getallcities";
     $result = $conn-> query($sql);
                      
     if ($result-> num_rows > 0)
     {
        while ($row = $result-> fetch_assoc())
        {
            echo "<a href="."#"." class="."view-list"." style="."margin-left:10px;".">".$row["name"]."</a>";
        }
     }
     else {
            echo "0 results";
          }
                      
     $conn-> close();
?>