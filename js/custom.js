
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
    
    if(selectedCityValue != 0)
    {
        filterByCity = filterByCity + selectedCityValue;
    }

    $('*[id*='+ filterByCity + ']:hidden').each(function(index, value) {
        $("#"+ value.id + "").show();
    });
}