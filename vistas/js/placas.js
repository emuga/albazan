
/*=============================================
EDITAR PLACAS
=============================================*/
$(document).on("click", ".btnEditarPlaca", function(){

	var idPlaca = $(this).attr("idPlaca");
	 //console.log("idPlaca", idPlaca);

	var datos = new FormData();
	datos.append("idPlaca", idPlaca);

	$.ajax({

		url:"ajax/placas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			console.log("respuesta", respuesta);

			$("#idPlaca").val(respuesta["id"]);
			$("#editarCostoPulgada").val(respuesta["CostoPulgada"]);

		}

	})

})

/*=============================================
ELIMINAR PLACAS
=============================================*/
$(document).on("click", ".btnEliminarPulgada", function(){

  var idPlaca = $(this).attr("idPlaca");
  //console.log("idMaquina", idMaquina);
  var CostoPulgada = $(this).attr("CostoPulgada");

  swal({
    title: '¿Está seguro de borrar el placa?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar placa!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=placas&idPlaca="+idPlaca+"&CostoPulgada="+CostoPulgada;

    }

  })

})