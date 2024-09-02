$('.btn_new_cliente').click(function(e){
e.preventDefault();
$('#nombre_cli').removeAttr('disabled');
$('#ci_cliente').removeAttr('disabled');
$('#direccion').removeAttr('disabled');
$('#div_registro_cliente').slideDown();
});