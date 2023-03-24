/*=============================================
EDITAR MATERIAL
=============================================*/
$(document).on("click", ".btnEditarMaterial", function(){

	var idMaterial = $(this).attr("idMaterial");
	 console.log("idMaterial", idMaterial);
	
	var datos = new FormData();
	datos.append("idMaterial", idMaterial);

	$.ajax({

		url:"ajax/materiales.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			 console.log("respuesta", respuesta);

			$("#editarId").val(respuesta["id"]);
			$("#editarPapel").val(respuesta["papel"]);
			$("#editarColor").val(respuesta["color"]);
			$("#editarCostoPaquete").val(respuesta["costoPaquete"]);
			$("#editarCantidadPaquete").val(respuesta["cantidadPaquete"]);
			$("#editarCostoHoja").val(respuesta["costoHoja"]);

		}

	})

})

/*=============================================
ELIMINAR MAQUINA
=============================================*/
$(document).on("click", ".btnEliminarMaterial", function(){

  var idMaterial = $(this).attr("idMaterial");
  var papel = $(this).attr("papel");
  var color = $(this).attr("color");
  var costoPaquete = $(this).attr("costoPaquete");
  var cantidadPaquete = $(this).attr("cantidadPaquete");
  var costoHoja = $(this).attr("costoHoja");

  swal({
    title: '¿Está seguro de borrar el registro?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar registro!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=materiales&idMaterial="+idMaterial+"&idMaterial="+idMaterial;

    }

  })

})
