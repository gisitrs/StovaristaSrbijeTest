
function searchObjects(){
    var selectedCity = document.getElementById("select-city");
    var selectedCityValue = selectedCity.value;
    var selectedCityText = selectedCity.options[selectedCity.selectedIndex].text;

    var selectedProductType = document.getElementById("offer-types");
    var selectedProductTypeValue = selectedProductType.value;
    var selectedProductTypeText = selectedProductType.options[selectedProductType.selectedIndex].text;

    var selectedKrizanProduct = document.getElementById("list-types");
    var selectedKrizanProductValue = selectedKrizanProduct.value;
    var selectedKrizanProductText = selectedKrizanProduct.options[selectedKrizanProduct.selectedIndex].text;

    $('*[id*=cityid]:visible').each(function(index, value) {
        $("#"+ value.id + "").hide();
    });

    var filterByCity = 'cityid';
    
    if(selectedCityValue != 0)
    {
        filterByCity = filterByCity + selectedCityValue;
    } 

    $('*[id*='+ filterByCity + ']:hidden').each(function(index, value) {
        var valueIdText = value.id;
        var pId = valueIdText.split('cityid')[0];
        var pkId = "krizan_" + pId;
        var valueP = $("#"+ pId + "").text();
        var valuePK = $("#"+ pkId + "").text();
        var showDiv = 0;

        if (selectedProductTypeValue == 0)
        {
            showDiv = 1;
        }
        else 
        {
            if (valueP.indexOf(selectedProductTypeText) >= 0)
            {
                showDiv = 1;
            }
        }

        if (selectedKrizanProductValue != 0)
        {
            if (valuePK.indexOf(selectedKrizanProductText) >= 0)
            {
                showDiv = 1;
            }
            else {
                showDiv = 0;
            }
        }

        if (showDiv == 1)
        {
            $("#"+ value.id + "").show();
        }
    });
}

var sel = document.getElementById('sortListId');

sel.addEventListener("change", sortObjects);

function sortObjects(){
    var obj = [];
    var value = 2;

    var selectedSortOption = document.getElementById("sortListId");
    var selectedSortValue = selectedSortOption.value;

    $('*[id*=cityid]').each(function(index, value) {
       obj[index] = $(this);
   });
   
   if (selectedSortValue != 0)
   {
   obj.sort(function(a, b) {
       var positionA = $(a).data("position");
       var positionB = $(b).data("position");
       
       var sortValue = 0;

       if (selectedSortValue == 1){
           sortValue = positionA < positionB ? -1 : positionA > positionB ? 1 : 0;
       }
       else if (selectedSortValue == 2){
           sortValue = positionA > positionB ? -1 : positionA < positionB ? 1 : 0
       }

       return sortValue
     });
    }

     $("#objectlistid").prepend(obj);
}