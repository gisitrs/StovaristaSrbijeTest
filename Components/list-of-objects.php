<?php 
    include "database.php";
    $sql = "SELECT * FROM vw_getallobjects";
    $result = $conn-> query($sql);
            
    if ($result-> num_rows > 0)
    {
        while ($row = $result-> fetch_assoc())
        {
            echo "<div class="."col-lg-4".">".
                    "<div class="."property-entry".">".
                        "<a href="."property-details.html"." class="."property-thumbnail".">".
                            "<img src=".$row["image_path"]." alt="."Image"." class="."img-fluid"." style="."width:100%; height:50%".">".
                        "</a>".
                        "<div class="."property-body".">".
                           "<h2 class="."property-title"."><a href="."property-details.html".">".$row["name"]."</a></h2>".
                           "<br><span class="."property-location"."><span class="."icon-room"."></span>".$row["address_city"]."</span>".
                           "<br><br><strong class="."d-block"." style="."color:green; font-size:15px;".">".$row["description"]."</strong>".
                           "<br><ul class="."property-specs-wrap".">".
                               "<li>".
                                   "<span class="."property-specs".">Broj proizvoda</span>".
                                   "<span class="."property-specs-number".">".$row["number_of_products"]."</span>".
                               "</li>".
                            "</div>". 
                        "</div>".
                    "</div>";
        }
    }
    else {
            echo "0 results";
         }
            
    $conn-> close();
?>