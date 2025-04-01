<?php
     include "../database.php";
     if (!$conn) {
        die("Something went wrong;");
     }

     $conn->set_charset("utf8mb4");

     $sql = "SELECT * FROM vw_getallmapobjects1";
     $result = $conn-> query($sql);
                      
     if ($result-> num_rows > 0)
     {
        while ($row = $result-> fetch_assoc())
        {
            echo "[".$row['latitude'].",".$row['longitude'].",".$row['name'].",".$row['address'].",".$row['imagePath'].",".$row['order_number'].",".$row['moreDetails'].",".$row['categoryName'].",".$row['cityName'].","."]";
        }
     }
     else {
            echo "0 results";
     }
                      
     $conn-> close();
?>