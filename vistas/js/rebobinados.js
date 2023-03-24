
/*=============================================
EDITAR REBOBINADOS
=============================================*/
$(document).on("click", ".btnEditarRebobinado", function(){

	var idRebobinado = $(this).attr("idRebobinado");
	 console.log("idRebobinado", idRebobinado);
	
	var datos = new FormData();
	datos.append("idRebobinado", idRebobinado);

	$.ajax({

		url:"ajax/rebobinados.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			console.log("respuesta", respuesta);

			$("#idRebobinado").val(respuesta["id"]);
			$("#editarTres").val(respuesta["Tres"]);
			$("#editarUnoPuntoCinco").val(respuesta["UnoPuntoCinco"]);
			$("#editarUno").val(respuesta["Uno"]);

		}

	})

})

/*=============================================
ELIMINAR REBOBINADO
=============================================*/
$(document).on("click", ".btnEliminarRebobinado", function(){

  var idRebobinado = $(this).attr("idRebobinado");
  //console.log("idMaquina", idMaquina);
  var tres = $(this).attr("Tres");
  var unopuntocinco = $(this).attr("UnoPuntoCinco");
  var uno = $(this).attr("Uno");
  
  swal({
    title: '¿Está seguro de borrar el Rebobinado?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar rebobinado!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=rebobinados&idRebobinado="+idRebobinado+"&tres="+tres;

    }

  })

})