<?php
     include "database.php";
     $sql = "SELECT * FROM vw_getallcitieswithobjects";
     $result = $conn-> query($sql);
                      
     if ($result-> num_rows > 0)
     {
        while ($row = $result-> fetch_assoc())
        {
            echo "<li><a href="."properties.php?city=".$row["name"]."".">".$row["name"]."</a></li>";
        }
     }
     else {
            echo "0 results";
     }
                      
     $conn-> close();
?>