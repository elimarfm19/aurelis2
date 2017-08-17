// FUNCIÓN PARA ELIMINAR CLIENTE, RECIBE EL cliente
function eliminarCliente(cliente){
    // VARIABLE QUE GUARDA LA REFERENCIA PARA ELIMINAR UN CLIENTE (eliminarCliente)
	var url = '../php/eliminarCliente.php';
    // VARIABLE DE CONFIRMACIÓN PARA ELIMINAR REGISTRO
	var pregunta = confirm('¿Esta seguro de eliminar este Registro?');

	if(pregunta==true){
        // AJAX PARA ELIMINAR Y POSTERIORMENTE RECARGAR LA PÁGINA
		$.ajax({
            a: true,
            type:'POST',
            url:url,
            data:{"cliente":+cliente},
            success: function(registro){
                $('#agregaClientes').html(registro);
                return false;
            }
        });
	}
}