src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js";



jQuery.noConflict();
jQuery(document).ready(function(){
var menuID = jQuery('#menu-item-282');

findA = menuID.find('a');

findA.click(function(event){
alert("Du er nu logget ud!");

});
});

