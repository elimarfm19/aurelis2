// FUNCIÓN PARA AGREGAR CLIENTE
function agregarCliente(){
    var url = '../php/agregarCliente.php';
    $.ajax({
        type:'POST',
        url:url,
        data:$('#forumlarioC').serialize(),
        success:function(registro){
            
                $('#formularioC')[0].reset();
                $('#mensaje').addClass('bien').html('Cliente registrado con éxito').show(200).delay(4500).hide(200);
                $('#agrega-registros').html(registro);
                $('#pro').val('Nuevo');
                $('#editar').hide();
                $('#nuevo').show();
                $('#nuevoC').modal({
                    show:true,
                    backdrop:'static'
                });
            }
        });
}

// FUNCIÓN PARA ELIMINAR CLIENTE, RECIBE EL cliente
function eliminarCliente(cliente){
    // VARIABLE QUE GUARDA LA REFERENCIA PARA ELIMNAR UN CLIENTE (eliminarCliente)
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