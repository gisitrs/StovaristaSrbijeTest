<?php 
    include"../database.php";
    $propId  = $_POST['propId'];
    $sql = "SELECT * FROM vw_getallimages WHERE object_order_number =".$propId." ORDER BY image_ordering";
    $result = $conn-> query($sql);
    $counter = 1;
            
    if ($result-> num_rows > 0)
    {
        while ($row = $result-> fetch_assoc())
        {
            echo "<div class="."col-lg-4".">
                      <a  href="."../".$row["image_path"]."?image=".$counter." data-toggle="."lightbox"." data-gallery="."photo_gallery".">
                          <img src=../".$row["image_path"]." ?image=".$counter." title=".$row["image_ordering"]." class="."img-fluid"." >
                      </a>
                      <input id=".$row["image_ordering"]." class="."checkbox_images"." type="."checkbox"." style="."position:absolute;width:40px;height:40px;margin-left:-40px;".">
                  </div>";
                
                  $counter++;
        }
    }
    else {
            echo "";
    }
            
    $conn-> close();
?>