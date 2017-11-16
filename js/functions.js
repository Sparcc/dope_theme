console.log("functions.js has been loaded");
$=jQuery.noConflict();
function iconChange(x) {
	x.classList.toggle("change");
	$("#menu-mobile-navigation").toggleClass("change");
	$("#menu-mobile-navigation").toggle();
}