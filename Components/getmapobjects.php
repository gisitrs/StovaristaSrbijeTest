<?php
     include "../database.php";
     if (!$conn) {
        die("Something went wrong;");
     }

     $conn->set_charset("utf8mb4");

     $sql = "SELECT * FROM vw_getallmapobjects";
     $result = $conn-> query($sql);
                      
     if ($result-> num_rows > 0)
     {
        while ($row = $result-> fetch_assoc())
        {
            echo $row["list_of_mapobjects"];
        }
     }
     else {
            echo "0 results";
     }
                      
     $conn-> close();
?>