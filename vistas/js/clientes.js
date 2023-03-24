/*=============================================
EDITAR CLIENTE
=============================================*/

$(document).on("click", ".btnEditarCliente", function(){

	var idCliente = $(this).attr("idCliente");

	var datos = new FormData();
	datos.append("idCliente", idCliente);

	$.ajax({

		url:"ajax/clientes.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			$("#idCliente").val(respuesta["id"]);
			$("#editarEmpresa").val(respuesta["nombreEmpresa"]);
			$("#editarRfc").val(respuesta["rfc"]);
			$("#editarNombre").val(respuesta["nombre"]);
			$("#editarApellido").val(respuesta["apellido"]);
			$("#editarCorreo").val(respuesta["correo"]);
			$("#editarTelefono").val(respuesta["telefono"]);
			$("#editarCalle").val(respuesta["calle"]);
			$("#editarColonia").val(respuesta["colonia"]);
			$("#editarCp").val(respuesta["codigoPostal"]);
			$("#editarCiudad").val(respuesta["ciudad"]);
			$("#editarEstado").val(respuesta["estado"]);
			$("#editarPais").val(respuesta["pais"]);

		}

	})

})


/*=============================================
ELIMINAR CLIENTES
=============================================*/
$(document).on("click", ".btnEliminarCliente", function(){

	var idCliente = $(this).attr("idCliente");
	var empresa = $(this).attr("nombreEmpresa");
	var rfc = $(this).attr("rfc");
	var nombre = $(this).attr("nombre");
	var apellido = $(this).attr("apellido");
	var correo = $(this).attr("correo");
	var telefono = $(this).attr("telefono");
	var calle = $(this).attr("calle");
	var colonia = $(this).attr("colonia");
	var cp = $(this).attr("codigoPostal");
	var ciudad = $(this).attr("ciudad");
	var estado = $(this).attr("estado");
	var pais = $(this).attr("pais");

	swal({
    title: '¿Está seguro de eliminar el cliente?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar Cliente!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=clientes&idCliente="+idCliente+"&rfc="+rfc;

    }

  })

})