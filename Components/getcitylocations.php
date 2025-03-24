<?php
     $hostName = "127.0.0.1:3306";
     $dbUser = "root";
     $dbPassword = "WeAreGisTeam2013";
     $dbName = "stovarista_srbije";

     $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
     if (!$conn) {
        die("Something went wrong;");
     }

     $conn->set_charset("utf8mb4");

     $sql = "SELECT * FROM vw_getcitylocations";
     $result = $conn-> query($sql);
                      
     if ($result-> num_rows > 0)
     {
        while ($row = $result-> fetch_assoc())
        {
            echo $row["list_of_citylocations"];
        }
     }
     else {
            echo "0 results";
     }
                      
     $conn-> close();
?>