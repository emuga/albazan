
/*=============================================
EDITAR MAQUINA
=============================================*/
$(document).on("click", ".btnEditarMaquina", function(){

	var idMaquina = $(this).attr("idMaquina");
	 // console.log("idMaquina", idMaquina);
	
	var datos = new FormData();
	datos.append("idMaquina", idMaquina);

	$.ajax({

		url:"ajax/maquinas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			console.log("respuesta", respuesta);

			$("#idMaquina").val(respuesta["id"]);
			$("#editarTipo").val(respuesta["tipo"]);
			$("#editarMarca").val(respuesta["marca"]);
			$("#editarCosto").val(respuesta["costo"]);

		}

	})

})

/*=============================================
ELIMINAR MAQUINA
=============================================*/
$(document).on("click", ".btnEliminarMaquina", function(){

  var idMaquina = $(this).attr("idMaquina");
  //console.log("idMaquina", idMaquina);
  var tipo = $(this).attr("tipo");
  var marca = $(this).attr("marca");
  var costo = $(this).attr("costo");


  swal({
    title: '¿Está seguro de borrar la maquina?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar maquina!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=maquina&idMaquina="+idMaquina+"&tipo="+tipo;

    }

  })

})