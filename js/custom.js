
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

    /*alert('Selected city text ' + selectedCityText + ' City value ' + selectedCityValue +
          ' ' + selectedProductTypeValue + ' ' + selectedProductTypeText +
          ' ' + selectedKrizanProductValue + ' ' + selectedKrizanProductText
    );*/

    $('*[id*=cityid]:visible').each(function(index, value) {
        $("#"+ value.id + "").hide();
    });

    var filterByCity = 'cityid';
    var filterByProduct = 0;
    
    if(selectedCityValue != 0)
    {
        filterByCity = filterByCity + selectedCityValue;
    } 

    $('*[id*='+ filterByCity + ']:hidden').each(function(index, value) {
        var valueIdText = value.id;
        var pId = valueIdText.split('cityid')[0];
        var valueP = $("#"+ pId + "").text();
        var showDiv = 0;

        if (selectedProductTypeValue == 0)
        {
            showDiv = 1;
        }
        else {
            if (valueP.indexOf(selectedProductTypeText) >= 0)
            {
                showDiv = 1;
            }
        }
        
        //alert(valueP.indexOf(selectedProductTypeText) + ' ' + selectedProductTypeText);

        if (showDiv == 1)
        {
            $("#"+ value.id + "").show();
        }
    });
}