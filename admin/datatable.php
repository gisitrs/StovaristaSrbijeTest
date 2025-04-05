<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Favicon -->
    <link href="../images/LOGO.png" rel="icon">

    <title>Projekt Križan D.O.O.</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrapAdmin.min.css" rel="stylesheet"> 
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/adminMain.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Additional CSS Files 
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="../assets/css/owl.css">
    <link rel="stylesheet" href="../assets/css/animate.css">-->
    
    <style type="text/css">
    body {
        color: #404E67;
        background: #F5F7FA;

 }
 .table-wrapper {
  width: 100%;
  margin: 30px auto;
        background: #fff;
        padding: 20px; 
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
  height: 30px;
  font-weight: bold;
  font-size: 12px;
  text-shadow: none;
  min-width: 100px;
  border-radius: 50px;
  line-height: 13px;
    }
 .table-title .add-new i {
  margin-right: 4px;
 }
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
  cursor: pointer;
        display: inline-block;
        margin: 0 5px;
  min-width: 24px;
    }   
 table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete a.deleteimages{
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
 table.table td a.add i {
        font-size: 24px;
     margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
 table.table .form-control.error {
  border-color: #f50000;
 }

 table.table td .add {
  display: none;
 }

 table.table td .close {
    display: none;
 }

 i {
   cursor: pointer;
 }
 
 .parent { 
    width: 100%; 
} 
.child { 
    float: left; 
    width: 20%; 
} 

#tdId1 {
    width: 5%; 
}

#tdId2 {
    width: 40%;
}

#tdId3 {
    width: 30%;
}

#tdId4 {
    width: 15%;
}

@media (min-width: 650px){
  .child {
    clear:both;
  }
}

@media (max-width: 650px){
    th {
        display: none;
    }

    td {
        display: block;
        /*padding: 0.5rem 1rem;*/
        width: 100%;
        margin-top: 10px;
    }

    #txtaddress, #txtsmalldescription, #txtmetadesc {
        margin-top: 2px;
    }

    #txtSquareFeet {
        margin-left: 1px;
    }

    #tdId1, #tdId2, #tdId3, #tdId4 {
        width: 100%;
        border: 2px solid black;
    }

    #tdId1 {
        background-color: #9fa1f5;
    }

    #tdId4 {
        margin-bottom: 10px;
        height: 90px;
    }

    #PropertyNameHeaderId, #DivDescriptionId {
        margin-top: 15px;
    }

    /*td:first-child {
        padding-top: 2rem;
    }

    td:last-child {
        padding-top: 2rem;
    }*/

    td::before {
        content: attr(data-cell) ":";
        font-weight: 700;
        /*text-transform: capitalize;*/
        margin-top: 10px;
    }

    #tdId31::before {
        content: attr(data-cell) "";
    }

    #tdId23::before {
        content: attr(data-cell) "";
    } 
    
    #tdId33::before {
        content: attr(data-cell) "";
    } 
    
    #tdId21::before {
        content: attr(data-cell) "";
    } 
    
    #tdId31::before {
        content: attr(data-cell) "";
    } 
    
    #tdId22::before {
        content: attr(data-cell) "";
    } 
    
    #tdId32::before {
        content: attr(data-cell) "";
    } 
}

</style>

<script type="text/javascript">
   // Delete row on delete button click
   $(document).on("click", ".delete", function(e){
      var id = $(this).attr("id");
      $('#user_id').val(id);
      $('#deleteusermodal').modal('show');

      /*$(this).parents("tr").remove();
      $(".add-new").removeAttr("disabled");*/
      var id = $(this).attr("id");
      var string = id;
      //alert(string);
      /*$.post("delete_confirm.php", { string: string, 'confirm_delete_btn':true}, function(data) {
      //$("#displaymessage").html(data);
      });*/
      
      /*$.post("ajax_delete.php", { string: string }, function(data) {
           //$("#displaymessage").html(data);
        });*/
    });
   
    $(document).on("click", "#finalDeleteDataId", function(){
        var id = $('#user_id').val();
        var id1 = $('#'+ id +'').attr("id");
        var string = id1;

        $('#deleteusermodal').modal('hide');
        $.post("ajax_delete.php", { string: string }, function(data) {
           $("#displaymessage").html(data);
        });
        $('#'+ id +'').parents("tr").remove();
    }); 

    $(document).on("click", "#closeDeleteDataId", function(){
        $('#deleteusermodal').modal('hide');
    }); 

    $(document).on("click", "#xCloseDeleteButtonId", function(){
        $('#deleteusermodal').modal('hide');
    });
    
    $(document).on("click", ".archive", function(e){
      var id = $(this).attr("id");
      $('#user_id').val(id);
      
      $.post("getmetadesc.php", { propId: id}, function(data) {
         $("#archivetxtmetadesc").val(data);
      });

      $('#archiveusermodal').modal('show');
    });

    $(document).on("click", "#finalArchiveId", function(){
        var txtprice = $('#soldprice_id').val();
        var txtdate = $('#solddate_id').val();
        var txtmetadesc = $('#archivetxtmetadesc').val();
        //var soldPrice1 = $('#'+ soldPrice +'').attr("id");

        var id = $('#user_id').val();
        var id1 = $('#'+ id +'').attr("id");
        var proId = id1;
        
        //$('#archiveusermodal').modal('hide');
        //alert("Cena " + txtprice + " Datum " + txtdate + " id " + proId);

        $.post("archive_update.php", { proId: proId, txtprice: txtprice, txtdate: txtdate, txtmetadesc: txtmetadesc }, function(data) {
           $("#displaymessage").html(data);
        })

        $('#archiveusermodal').modal('hide');
        $('#'+ id +'').parents("tr").remove();
    });

// Delete images for row on delete button click
   $(document).on("click", ".deleteimages", function(){
      var propId = $(this).attr("id");
      var string = propId;
      
      $('#deleteimagespropid').val(propId);
      $('#deleteimagesusermodal').modal('show');

      $.post("imagesgallery.php", { propId: propId}, function(data) {
         $("#deleteImagesRowId").html(data);
      });
    });

    $(document).on("click", ".checkbox_images", function(){
        var id = $(this).attr('id');
        var newList = '';
        var clcikedvalues = $("#clickedImagesListId").text();

        if (clcikedvalues.length == 0){
            newList = newList + id;
        }
        else {
            newList = clcikedvalues + ';' + id;
        }

        $("#clickedImagesListId").text(newList);
        //alert(newList);        
    });

    $(document).on("click", "#finalDeleteImagesId", function(){

        var id = $('#deleteimagespropid').val();
        var id1 = $('#'+ id +'').attr("id");
        var proId = id1;
        
        var clcikedvalues = $("#clickedImagesListId").text();

        //alert('PropId = ' + proId + ' Izabrane fotografije ' + clcikedvalues);

        //$('#archiveusermodal').modal('hide');
        //alert("Cena " + txtprice + " Datum " + txtdate + " id " + proId);
        
        if (clcikedvalues.length > 0){
            $.post("ajax_delete_images.php", { proId: proId, imagesForDelete: clcikedvalues }, function(data) {
                $("#displaymessage").html(data);
            });
        }

        $("#clickedImagesListId").text('');
        
        $('#deleteimagesusermodal').modal('hide');
    });

    // update rec row on edit button click
 $(document).on("click", ".update", function(){
  var id = $(this).attr("id");
  var proId = id;
  var txtref = $("#txtref").val();
  var isFeatured = $('#txtisfeatured').is(":checked");
  var txtname = $("#txtname").val();
  var txtprice = $("#txtprice").val();
  var txtSquareFeet = $("#txtSquareFeet").val();
  var txtLandArea = $("#txtLandArea").val();
  var txtaddress = $("#txtaddress").val();
  var txtsmalldescription = $("#txtsmalldescription").val();
  var txtmetadesc = $("#txtmetadesc").val();
  var txtType = $("#txttype").text();
  var isChecked = 'checked';
  var isFeaturedValue = 1;
  
  if (isFeatured == 0){
    isChecked = '';
    isFeaturedValue = 0;
  }
  
  $(this).parents("tr").find(".exit").removeClass("exit").addClass("close");
  $(this).parents("tr").find(".update").removeClass("update").addClass("add");
  $(this).parents("tr").find(".edit, .add").toggle();

  $(this).parents("tr").find("td:not(:last-child)").each(function(i){
    if (i == 1){
       $(this).html('<td id="tdId23">' +
                       '<h4 style="display: inline-block;" id="'+ id + '_pName">'+ txtname +'</h4>' +
                       '<div>' +
                            '<div>' +
                                '<p style="display: inline-block; margin-top:10px;"><b>Istaknuto:</b></p>' +
                                '<input id="'+ id + '_pIsFeatured" style="display: inline-block; margin-top:10px; margin-left:10px;" type="checkbox" disabled ' + isChecked + ' value="'+ isFeaturedValue + '"></input>' +
                            '</div>' + 
                            '<div>' +
                                '<p style="display: inline-block; margin-top:10px;"><b>Broj nepokretnosti:</b></p>' +
                                '<p id="'+ id + '_pRef" style="display: inline-block; margin-top:10px;">'+ txtref + '</p>' +
                            '</div>' + 
                            '<div>' +
                                '<p style="display: inline-block;"><b>Kvadratura (m<sup>2</sup>):</b></p>' +
                                '<p id="'+ id + '_pSquareFeet" style="display: inline-block;">' + txtSquareFeet + '</p>' +
                            '</div>' +
                            '<div>' +
                                '<p style="display: inline-block;"><b>Površina placa (ar):</b></p>' +
                                '<p id="'+ id + '_pLandArea" style="display: inline-block;">' + txtLandArea + '</p>' +
                            '</div>' +
                            '<div>' +
                                '<p style="display: inline-block;"><b>Cena (€):</b></p>' +
                                '<p id="'+ id + '_pPrice" style="display: inline-block;">' + txtprice + '</p>' +
                            '</div>' +
                            '<div>' +
                                '<p style="display: inline-block;"><b>Adresa:</b></p>' +
                                '<p id="'+ id +'_pAddress" style="display: inline-block;">' + txtaddress + '</p>' +
                            '</div>' +
                            '<div>' +
                                '<p style="display: inline-block;"><b>Tip:</b></p>' +
                                '<p id="'+ id +'_pType" style="display: inline-block;">'+ txtType +'</p>' +
                            '</div>' +
                        '</div>' +
                    '</td>' 
                   );
       } 
       else if (i == 2){
        $(this).html('<td id="tdId33">' +
                         '<div>' +
                              '<p><b>Opis:</b></p>' +
                              '<p id="' + id + '_pSmalldesc" style="display: inline-block;">'+ txtsmalldescription +'</p>' +
                         '</div>' +
                         '<div>' +
                              '<p style="margin-top:10px; "><b>Beleška agent:</b></p>' +
                              '<p id="'+ id + '_pMetadesc">'+ txtmetadesc +'</p>' +
                         '</div>' +
                     '</td>');
       }
    });

  $.post("ajax_update.php", { proId: proId,txtref: txtref, txtname: txtname, txtprice: txtprice, txtSquareFeet: txtSquareFeet, txtLandArea: txtLandArea, txtaddress:txtaddress, txtsmalldescription:txtsmalldescription, txtmetadesc:txtmetadesc, isFeaturedValue:isFeaturedValue }, function(data) {
      $("#displaymessage").html(data);
      //location.reload(true);
  });

  });
 
 // Catch Filter button
 $(document).on("click", "#filterDataTableId", function(){
   //var selectedType = $("#typeSelectId option:selected").text();
   var typeId = $("#typeSelectId").val();
   var selectedType = "cityid" + typeId + "c";

   if (typeId == 0){
       $('*tr[id*=cityid]:hidden').each(function(index, value) {
	       $("#"+ value.id + "").show();
	   });
   }
   else {
    $('*tr[id*=cityid]:visible').each(function(index, value) {
		$("#"+ value.id + "").hide();
	});

    $('*tr[id*=' + selectedType + ']:hidden').each(function(index, value) {
	    $("#"+ value.id + "").show();
	});
   }
 });
    
 // Edit row on edit button click
 $(document).on("click", ".edit", function(){  
   var id = $(this).attr("id");

   var refValue = $('#' + id + '_pRef').text();
   var isFeatured = $('#' + id + '_pIsFeatured').val();
   var txtNameValue = $('#' + id + '_pName').text();
   var txtPriceValue = $('#' + id + '_pPrice').text();
   var txtSquareFeetValue = $('#' + id + '_pSquareFeet').text();
   var txtLandAreaValue = $('#' + id + '_pLandArea').text();
   var txtAddressValue = $('#' + id + '_pAddress').text();
   var txtType = $('#' + id + '_pType').text();
   var txtSmallDescriptionValue = $('#' + id + '_pSmalldesc').text();
   var txtMetadescValue = $('#' + id + '_pMetadesc').text();
   var isChecked = 'checked';

   if (isFeatured == '0'){
      isChecked = '';
   }
   
   $(this).parents("tr").find("td:not(:last-child)").each(function(i){
       
       if (i == 1){
       $(this).html('<td id="tdId21">' +
                        '<div>' +
                           '<input type="text" name="updaterec" id="txtname" class="form-control" value="' + txtNameValue + '"></input>' +
                           '<p style="display:none" id="txtname_old">' + txtNameValue + '</p>' + 
                       '<div>'+ 
                       '<div>' +
                            '<div>' +
                                '<p style="display: inline-block; margin-top:10px;"><b>Istaknuto:</b></p>' +
                                    '<input type="checkbox" name="updaterec" id="txtisfeatured" value="' + isFeatured +  
                                        '" style="display: inline-block; margin-top:10px; margin-left:10px; width: 20px;"' + isChecked + '></input>' +
                                 '<p style="display:none" id="txtisfeatured_old">' + isFeatured + '</p>' + 
                             '</div>' +
                            '<div>' +
                                '<p style="display: inline-block; margin-top:10px;"><b>Broj nepokretnosti:</b></p>' +
                                    '<input type="text" name="updaterec" id="txtref" ' + 
                                        'style="display: inline-block; margin-top:10px; width: 60px;" value="'+ refValue + '"></input>' +
                                 '<p style="display:none" id="txtref_old">' + refValue + '</p>' + 
                             '</div>' +
                             '<div>' +
                                    '<p style="display: inline-block;"><b>Kvadratura (m<sup>2</sup>):</b></p>' +
                                    '<input type="text" name="updaterec" id="txtSquareFeet" ' + 
                                       'style="display: inline-block; width: 80px;" value="' + txtSquareFeetValue + '"></input>' +
                                    '<p style="display:none" id="txtSquareFeet_old">' + txtSquareFeetValue + '</p>' + 
                            '</div>' +
                            '<div>' +
                                    '<p style="display: inline-block;"><b>Površina placa (ar):</b></p>' +
                                    '<input type="text" name="updaterec" id="txtLandArea" ' + 
                                       'style="display: inline-block; width: 80px;" value="' + txtLandAreaValue + '"></input>' +
                                    '<p style="display:none" id="txtLandArea_old">' + txtLandAreaValue + '</p>' + 
                            '</div>' +
                             '<div>' +
                                    '<p style="display: inline-block;"><b>Cena (€):</b></p>' +
                                    '<input type="text" name="updaterec" id="txtprice" ' + 
                                       'style="display: inline-block; width: 200px;" value="' + txtPriceValue + '"></input>' +
                                    '<p style="display:none" id="txtprice_old">' + txtPriceValue + '</p>' + 
                            '</div>' +
                            '<div>' +
                                    '<p style="display: inline-block;"><b>Adresa:</b></p>' +
                                    '<input type="text" name="updaterec" id="txtaddress" ' + 
                                      'style="display: inline-block; width: 100%;" value="' + txtAddressValue + '"></input>' +
                                    '<p style="display:none" id="txtaddress_old">' + txtAddressValue + '</p>' + 
                            '</div>' +
                            '<div>' +
                                    '<p style="display: inline-block;"><b>Tip:</b></p>' +
                                    '<p id="txttype" style="display: inline-block;">' + txtType + '</p>' +
                                    '<p style="display:none" id="txttype_old">' + txtType + '</p>' +
                            '</div>' + 
                        '</div>' +
                    '</td>');
       } else if(i == 2){
        $(this).html('<td id="tdId31" style="width:40%;">' +
                          '<div>' +
                                '<p><b>Opis:</b></p>' +
                                '<textarea type="text" name="updaterec" id="txtsmalldescription" ' +
                                 'style="width:100%;">'+ txtSmallDescriptionValue + '</textarea>' +
                                 '<p style="display:none" id="txtsmalldescription_old">' + txtSmallDescriptionValue + '</p>' + 
                          '</div>' +
                          '<div>' +
                                '<p style="margin-top:10px;"><b>Beleška agent:</b></p>' + 
                                '<textarea type="text" name="updaterec" id="txtmetadesc" ' + 
                                'style="width:100%;">' + txtMetadescValue + '</textarea>' +
                                '<p style="display:none" id="txtmetadesc_old">' + txtMetadescValue + '</p>' +
                          '</div>' +
                        '</td>');
       } 
    
  });

  $(this).parents("tr").find(".add, .edit").toggle();
  $(".add-new").attr("disabled", "disabled");
  $(this).parents("tr").find(".add").removeClass("add").addClass("update");
  $(this).parents("tr").find(".close").removeClass("close").addClass("exit");
    });

  // Close edit form
  $(document).on("click", ".exit", function(){ 
    $(this).parents("tr").find(".exit").removeClass("exit").addClass("close");
    $(this).parents("tr").find(".update").removeClass("update").addClass("add");
    $(this).parents("tr").find(".edit, .add").toggle();
    
    var id = $(this).attr("id");

    var txtref = $('#txtref_old').text();
    var isfeatured = $('#txtisfeatured_old').text();
    var txtname = $('#txtname_old').text();
    var txtprice = $('#txtprice_old').text();
    var txtSquareFeet = $('#txtSquareFeet_old').text();
    var txtLandArea = $('#txtLandArea_old').text();
    var txtaddress = $('#txtaddress_old').text();
    var txtType = $('#txttype_old').text();
    var txtsmalldescription = $('#txtsmalldescription_old').text();
    var txtmetadesc = $('#txtmetadesc_old').text();
    var isChecked = 'checked';

    if (isfeatured == 0){
        isChecked = '';
    }
    
    $(this).parents("tr").find("td:not(:last-child)").each(function(i){
        if (i == 1){
       $(this).html('<td id="tdId22">' +
                       '<h4 id="'+ id + '_pName">'+ txtname +'</h4>' +
                       '<div>' +
                            '<div>' +
                                '<p style="display: inline-block; margin-top:10px;"><b>Istaknuto:</b></p>' +
                                '<input id="'+ id + '_pIsFeatured" style="display: inline-block; margin-top:10px; margin-left:10px;" type="checkbox" disabled ' + isChecked + ' value="'+ isfeatured + '"></input>' +
                            '</div>' + 
                            '<div>' +
                                '<p style="display: inline-block; margin-top:10px;"><b>Broj nepokretnosti:</b></p>' +
                                '<p id="'+ id + '_pRef" style="display: inline-block; margin-top:10px;">'+ txtref + '</p>' +
                            '</div>' + 
                            '<div>' +
                                '<p style="display: inline-block;"><b>Kvadratura (m<sup>2</sup>):</b></p>' +
                                '<p id="'+ id + '_pSquareFeet" style="display: inline-block;">' + txtSquareFeet + '</p>' +
                            '</div>' +
                            '<div>' +
                                '<p style="display: inline-block;"><b>Površina placa (ar):</b></p>' +
                                '<p id="'+ id + '_pLandArea" style="display: inline-block;">' + txtLandArea + '</p>' +
                            '</div>' +
                            '<div>' +
                                '<p style="display: inline-block;"><b>Cena (€):</b></p>' +
                                '<p id="'+ id + '_pPrice" style="display: inline-block;">' + txtprice + '</p>' +
                            '</div>' +
                            '<div>' +
                                '<p style="display: inline-block;"><b>Adresa:</b></p>' +
                                '<p id="'+ id +'_pAddress" style="display: inline-block;">' + txtaddress + '</p>' +
                            '</div>' +
                            '<div>' +
                                '<p style="display: inline-block;"><b>Tip:</b></p>' +
                                '<p id="'+ id +'_pType" style="display: inline-block;">'+ txtType +'</p>' +
                            '</div>' +
                        '</div>' +
                    '</td>' 
                   );
       } 
       else if (i == 2){
        $(this).html('<td id="tdId32">' +
                         '<div>' +
                              '<p><b>Opis:</b></p>' +
                              '<p id="' + id + '_pSmalldesc" style="display: inline-block;">'+ txtsmalldescription +'</p>' +
                         '</div>' +
                         '<div>' +
                              '<p style="margin-top:10px; "><b>Beleška agent:</b></p>' +
                              '<p id="'+ id + '_pMetadesc">'+ txtmetadesc +'</p>' +
                         '</div>' +
                     '</td>');
       }
    });
    
  });

</script>

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <!--<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>-->
  <!-- ***** Preloader End ***** -->

  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
              <nav class="main-nav">

                    <a href="index.php" class="logo">
                      <img src="../images/LOGO-Text.png" alt="" class="mainLogoImage">
                    </a>

                    <ul class="nav">
                      <li><a style="margin-left: -30px;" <?php echo "href="."index.php?userId=".$_GET['userId'] ?> >Novo stovarište</a></li>
                      <li><a style="margin-left: -30px;" <?php echo "href="."datatable.php?userId=".$_GET['userId'] ?> class="active">Sva stovarišta</a></li>
                      <!--<li><a style="margin-left: -30px;" <php echo "href="."archive.php?userId=".$_GET['userId'] ?> >Arhiva</a></li>-->
                      <li><a style="margin-left: -30px;" <?php echo "href="."form.php?userId=".$_GET['userId'] ?> >Dodaj fotografije</a></li>
                      <li><a style="margin-left: -30px;" href="#" onclick='adminToWebsite("Edit", "Ovom akcijom napuštate admin sesiju, da li ste sigurni?");'>Sajt</a></li>
                      <li><a style="margin-left: -30px;" href="#" onclick='adminLogOut("Edit", "Da li želite da napustite Projekt Križan admin?");'>Odjavi se</a></li>
                      <li><a href="contact.html" style="display:none"></a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" style="display:none;">
    <div class="header-text">
    </div>
 </div>

 <!--<div  style="position:absolute; top: 0; right:0;">
        <a href="logout.php" class="btn btn-warning" >Logout</a>
    </div>-->

    <div class="container col-lg-12">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="text-center">
                    <h3>Detalji o stovarištima</h3>
                </div>
                <div style="height: 50px;"></div>
                <div class="row">
                    <div class="col-sm-4">
                        <!--<button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i>Dodaj novu</button>-->
                    </div>
                </div>
                <div class="row col-lg-12">
                    <div class="col-lg-3">
                        <fieldset>
                            <select id="typeSelectId" name="testDT" class="form-select" style="margin-bottom:10px;">
                                <?php 
                                    require_once "../database.php";
                                    $sql = "SELECT order_id, name FROM vw_getallcitieswithobjects ORDER BY id";
                                    $result = mysqli_query($conn, $sql);
                          
                                    while($rows = $result->fetch_assoc()){
                                        $cityName = $rows['name'];
                                        $cityId = $rows['order_id'];

                                        echo "<option value='$cityId'>$cityName</option>";
                                    };
                                ?>    
                            </select>
                       </fieldset>
                   </div>
                   <div class="col-lg-1">
                      <p id="displaymessage" style="display: block;"></p>
                      <fieldset >
                          <button id="filterDataTableId" type="submit" name="filterProperties" class="btn btn-primary btn-block" style="background-color: #36389b; border: none; width:120px;">Filtriraj</button>
                      </fieldset>
                   </div>
               </div>
            </div>
        <table id="propertiesTableId" class="table table-bordered">
                <thead>
                    <tr style="width:90%;">
                        <th style="width:5%;">ID</th>
                        <th style="width:40%;">Informacije o stovarištu</th>
                        <th style="width:40%;">Opis</th>
                        <th style="width:15%;">Akcije</th>
                    </tr>
                </thead>
                <tbody>
               <?php 
                  //include"dbcon.php"; 
                  require_once "../database.php";
                  $query_pag_data = "SELECT * FROM vw_getallobjects";
                  $result_pag_data = mysqli_query($conn, $query_pag_data);
                  while($row = mysqli_fetch_assoc($result_pag_data)) {
                      $property_id=$row['order_number']; 
                      $div_id=$row['div_id']; 
                      $property_name=$row['name'];
                      $isFeatured=$row['is_stared'];
                      $hasDetails=$row['has_details'];
                      $cityName=$row['city_name'];
                      $property_address=$row['address']; 
                      $typeName=$row['category_name'];
                      $smalldesc=$row['small_description'];
                      /*$property_price=$row['price']; 
                       
                      $metadesc=$row['metadesc']; 
                      $typeName=$row['type_name'];
                      $squareFeet=$row['square_feet'];
                      $landArea=$row['land_area'];
                      */
                ?>
                    <tr <?php echo "id=".$div_id."c" ?> style="width:90%;">
                        <td id="tdId1" data-cell="ID">
                           <p style="display: inline-block;" <?php echo "id=".$property_id."_pId" ?>><?php echo $property_id; ?></p>
                        </td>
                        <td id="tdId2" data-cell="Informacije o nepokretnosti">
                            <div id="PropertyNameHeaderId">
                                <h4 <?php echo "id=".$property_id."_pName" ?>><?php echo $property_name; ?></h4>
                            </div>
                            <div>
                                <div>
                                    <p style="display: inline-block; margin-top:10px;"><b>Zvezdica:</b></p>
                                    <input <?php echo "id=".$property_id."_pIsFeatured" ?> type="checkbox" style="display: inline-block; margin-top:10px; margin-left:10px;" <?php echo "value=".$isFeatured."" ?> disabled <?php echo ($isFeatured == 1 ? 'checked' : '');?>></input>
                                </div>
                                <div>
                                    <p style="display: inline-block; margin-top:10px;"><b>Ima detalje:</b></p>
                                    <input <?php echo "id=".$property_id."_pHasDetails" ?> type="checkbox" style="display: inline-block; margin-top:10px; margin-left:10px;" <?php echo "value=".$hasDetails."" ?> disabled <?php echo ($hasDetails == 1 ? 'checked' : '');?>></input>
                                </div>
                                <div>
                                    <p style="display: inline-block; margin-top:10px;"><b>Grad:</b></p>
                                    <p <?php echo "id=".$property_id."_pRef" ?> style="display: inline-block; margin-top:10px;"><?php echo $cityName; ?></p>
                                </div>
                                <div>
                                    <p style="display: inline-block;"><b>Adresa:</b></p>
                                    <p <?php echo "id=".$property_id."_pAddress" ?> style="display: inline-block;"><?php echo $property_address; ?></p>
                                </div>
                                <div>
                                    <p style="display: inline-block;"><b>Tip:</b></p>
                                    <p <?php echo "id=".$property_id."_pType" ?> style="display: inline-block;"><?php echo $typeName; ?></p>
                                </div>
                                <!--<div>
                                    <p style="display: inline-block;"><b>Površina placa (ar):</b></p>
                                    <p <php echo "id=".$property_id."_pLandArea" ?> style="display: inline-block;"><php echo $landArea; ?></p>
                                </div>
                                <div>
                                    <p style="display: inline-block;"><b>Cena (€):</b></p>
                                    <p <php echo "id=".$property_id."_pPrice" ?> style="display: inline-block;"><php echo $property_price; ?></p>
                                </div>
                                -->
                            </div>
                        </td>
                        <td id="tdId3" data-cell="Opis">
                            <div Id="DivDescriptionId">
                                <p><b>Opis:</b></p>
                                <p <?php echo "id=".$property_id."_pSmalldesc" ?> style="display: inline-block;"><?php echo $smalldesc; ?></p>
                            </div>
                            <!--<div>
                                <p style="margin-top:10px; "><b>Beleška agent:</b></p>
                                <p <php echo "id=".$property_id."_pMetadesc" ?> ><php echo $metadesc; ?></p>
                            </div>-->
                        </td>
                        <td id="tdId4" data-cell="Akcije">
                            <div class="parent">
                                <div class="child">
                                    <div class="add" title="Sačuvaj izmene" data-toggle="tooltip" id="<?php echo $property_id; ?>"><i class="fa fa-check"></i></div>
                                </div>
                                <div class="close child" title="Napusti izmene" data-toggle="tooltip" id="<?php echo $property_id; ?>"><i class="fa fa-close"></i></div>
                                <div class="edit child" title="Izmeni oglas" data-toggle="tooltip" id="<?php echo $property_id; ?>"><i class="fa fa-pencil"></i></div>
                                <div class="delete child" title="Ukloni oglas" data-toggle="tooltip" id="<?php echo $property_id; ?>"><i class="fa fa-trash-o"></i></div>
                                <div class="deleteimages child" title="Brisanje fotografija" data-toggle="tooltip" id="<?php echo $property_id; ?>"><img src="../images/icons/remove-image.svg" style="width:30px;"></img></div>
                                <div class="archive child" title="Arhiviraj oglas" data-toggle="tooltip" id="<?php echo $property_id; ?>"><img src="../images/icons/pin.webp" style="width:30px;"></img></div>
                            </div>
                            <!--<div class="edit" title="Edit" data-toggle="tooltip" id="<php echo $property_id; ?>"><i class="fa fa-pencil"></i></div>
                            <div class="delete" title="Delete" data-toggle="tooltip" id="<php echo $property_id; ?>"><i class="fa fa-trash-o"></i></div>
                            <div class="deleteimages" title="Delete Image" data-toggle="tooltip" id="<php echo $property_id; ?>"><img src="../assets/images/2019/remove-image.svg" style="width:30px;"></img></div>
                            <div class="archive" title="Arhiviraj nepokretnost" data-toggle="tooltip" id="<php echo $property_id; ?>"><img src="../assets/images/2019/archive.png" style="width:30px;"></img></div>-->
                        </td>
                    </tr>   
          <?php } ?>     
                </tbody>
            </table>
        </div>
    </div>

    <p id="clickedImagesListId" style="display: none"></p>

    <div class="modal fade" id="deleteusermodal" tabindex="-1" aria-labelledby="deleteusermodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteusermodalLabel">Brisanje stovarišta</h1>
                    <button id="xCloseDeleteButtonId" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <input type="text" name="user_id" id="user_id" style="display: none;">
                    <div class="modal-body">
                        <h4>Da li ste sigurni da želite da obrišete ovo stovarište?</h4>
                    </div>    
                    <div class="modal-footer">
                        <button id="closeDeleteDataId" type="button" name="close_delete_data" class="btn btn-secondary" data-bs-dismiss="modal">Ne</button>
                        <button id="finalDeleteDataId" type="button" name="delete_data" class="btn btn-danger">Da | Obriši</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--<div class="modal fade" id="archiveusermodal" tabindex="-1" aria-labelledby="archiveusermodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="leaveadminusermodalLabel">Arhiviranje nepokretnosti</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <input type="text" name="user_id" id="user_id" style="display: none;">
                    <div class="modal-body">
                        <h4>Unesite datum kada je prodata i cenu za koju je prodata nepokretnost</h4>
                    </div>    
                    <p style="display: inline-block; margin-left: 10px; margin-right: 20px;">Cena prodaje (€)</p>
                        <input type="text" name="user_id" id="soldprice_id" style="width:200px; display: inline-block; margin-left: 10px;">
                        <br/><br/>
                    <p style="display: inline-block; margin-left: 10px; margin-right: 38px;">Datum prodaje</p>
                        <input type="date" name="date_id" id="solddate_id" value="<php echo date('Y-m-d'); ?>" style="width:200px; display: inline-block; margin-left: 10px;">
                        <br/><br/>
                    <p style="display: inline-block; margin-left: 10px; margin-right: 38px;">Beleška agent</p>
                        <textarea type="text" name="updaterec" id="archivetxtmetadesc" style="width:200px; min-height:150px; display: inline-block; margin-left: 17px;">
                        </textarea>
                    <div class="modal-footer" style="margin-top: 10px;">
                        <button id="closeLeaveAdminId" type="button" name="close_delete_data" class="btn btn-secondary" data-bs-dismiss="modal">Odustani</button>
                        <button id="finalArchiveId" type="button" name="delete_data" class="btn btn-danger">Snimi promene</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteimagesusermodal" tabindex="-1" aria-labelledby="deleteimagesusermodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteusermodalLabel">Brisanje fotografija</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form name="form" action="" method="post">
                    <input type="text" name="testname" id="deleteimagespropid" style="display: none;">
                    <div class="modal-body">
                        <h4>Odaberite fotografije koje želite da obrišete</h4><br/>
                        <div id="deleteImagesRowId" class="row">
                        </div>
                    </div>    
                    <div class="modal-footer">
                        <button id="closeDeleteImagesId" type="button" name="close_delete_data" class="btn btn-secondary" data-bs-dismiss="modal">Odustani</button>
                        <button id="finalDeleteImagesId" type="button" name="delete_data" class="btn btn-danger">Obriši</button>
                    </div>
                </form>
            </div>
        </div>
    </div>-->


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/isotope.min.js"></script>
  <script src="../js/owl-carousel.js"></script>
  <script src="../js/custom-js/counter.js"></script> 
  <script src="../js/custom-js/custom.js"></script>
  <script src="../js/customAdmin.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>

  </body>
</html>