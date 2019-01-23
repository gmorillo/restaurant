require('./bootstrap');

$('#inicio').click(function(event) {
	$('#inicio').addClass('active');
	$('#conocenos').removeClass('active');
	$('#promociones').removeClass('active');
	$('#carta').removeClass('active');
	$('#equipo').removeClass('active');
	$('#galerianav').removeClass('active');
	$('#contacto').removeClass('active');



});
$('#conocenos').click(function(event) {
	$('#conocenos').addClass('active');
	$('#inicio').removeClass('active');
	$('#promociones').removeClass('active');
	$('#carta').removeClass('active');
	$('#equipo').removeClass('active');
	$('#galerianav').removeClass('active');
	$('#contacto').removeClass('active');



});
$('#promociones').click(function(event) {
	$('#promociones').addClass('active');
	$('#conocenos').removeClass('active');
	$('#inicio').removeClass('active');
	$('#carta').removeClass('active');
	$('#equipo').removeClass('active');
	$('#galerianav').removeClass('active');
	$('#contacto').removeClass('active');



});
$('#carta').click(function(event) {
	$('#carta').addClass('active');
	$('#promociones').removeClass('active');
	$('#conocenos').removeClass('active');
	$('#inicio').removeClass('active');
	$('#equipo').removeClass('active');
	$('#galerianav').removeClass('active');
	$('#contacto').removeClass('active');



});
$('#equipo').click(function(event) {
	$('#equipo').addClass('active');
	$('#carta').removeClass('active');
	$('#promociones').removeClass('active');
	$('#conocenos').removeClass('active');
	$('#inicio').removeClass('active');
	$('#galerianav').removeClass('active');
	$('#contacto').removeClass('active');


});
$('#galerianav').click(function(event) {
	$('#galerianav').addClass('active');
	$('#equipo').removeClass('active');
	$('#carta').removeClass('active');
	$('#promociones').removeClass('active');
	$('#conocenos').removeClass('active');
	$('#inicio').removeClass('active');
	$('#contacto').removeClass('active');

});
$('#contacto').click(function(event) {
	$('#contacto').addClass('active');
	$('#galerianav').removeClass('active');
	$('#equipo').removeClass('active');
	$('#carta').removeClass('active');
	$('#promociones').removeClass('active');
	$('#conocenos').removeClass('active');
	$('#inicio').removeClass('active');
});