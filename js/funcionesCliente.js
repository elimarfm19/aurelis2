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


// FUNCIÓN PARA EDITAR CLIENTE, RECIBE EL cliente
function modificarCliente(cliente){
    // $('#formulario')[0].reset();
    var url = '../php/modificarCliente.php';
        $.ajax({
        type:'POST',
        url:url,
        data:{"cliente":+cliente},
        success: function(valores){
                var datos = eval(valores);
                $('#nacionalidad').val(datos[0]);
                $('#ciRif').val(cliente);
                $('#nombre').val(datos[2]);
                $('#apellido').val(datos[3]);
                $('#tlfPC').val(datos[4]);
                $('#tlfPO').val(datos[5]);
                $('#direccion').val(datos[6]);
                $('#nuevoC').modal({
                    show:true,
                    backdrop:'static'
                });
            return false;
        }
    });
}