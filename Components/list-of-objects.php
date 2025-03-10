<?php 
    include "database.php";
    $sql = "SELECT * FROM vw_getallobjects";
    $result = $conn-> query($sql);
            
    if ($result-> num_rows > 0)
    {
        while ($row = $result-> fetch_assoc())
        {
            echo "<div id=".$row["div_id"]." class="."col-lg-4"." data-position=".$row["name"].">".
                    "<div class="."property-entry".">".
                        "<a href=".$row["has_details_path"]." class=".$row["a_active"]." >".
                            "<img src=".$row["image_path"]." alt="."Image"." class="."img-fluid"." style="."width:100%; height:50%".">".
                        "</a>".
                        "<div class="."property-body".">".
                           "<div style="."display:inline-block;".">".
                               "<h2 class=".$row["title_active"].">
                                   <a href=".$row["has_details_path"].">".$row["name"]."</a>
                                </h2>".
                           "</div>".
                           "<div style="."display:inline-block;margin-left:10px;".">".
                               "<img src="."images/icons/Star.png"." style="."width:20px;display:".$row["star_visibility"].";"."></img>".
                           "</div>".
                           "<br><span class="."property-location"."><span class="."icon-room"."></span>".$row["address_city"]."</span>".
                           "<br><br><strong class="."d-block"." style="."color:green; font-size:15px;".">".$row["description"]."</strong>".
                           /*"<br><ul class="."property-specs-wrap".">".
                               "<li>".
                                   "<span class="."property-specs".">Broj proizvoda</span>".
                                   "<span class="."property-specs-number".">".$row["number_of_products"]."</span>".
                               "</li>".
                               "</ul>".*/
                               "<br/>".
                               "<p id=".$row["project_list_id"]."><b>Kategorija: </b>".$row["category_name"]."</p>".
                               "<a href=".$row["has_details_path"]." class=".$row["a_active"]." style="."display:".$row["display_details"].">Više detalja</a>".
                               "<p id=".$row["krizan_project_list_id"]." style="."display:none"."><b>".$row["list_of_krizan_products"]."</b></p>".
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