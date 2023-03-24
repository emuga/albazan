
/*=============================================
EDITAR LAMINADO
=============================================*/
$(document).on("click", ".btnEditarLaminado", function(){

	var idLaminado = $(this).attr("idLaminado");
	 console.log("idLaminado", idLaminado);
	
	var datos = new FormData();
	datos.append("idLaminado", idLaminado);

	$.ajax({

		url:"ajax/laminados.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			console.log("respuesta", respuesta);

			$("#idLaminado").val(respuesta["id"]);
			$("#editarLaminado").val(respuesta["CostoLaminado"]);

		}

	})

})

/*=============================================
ELIMINAR LAMINADO
=============================================*/
$(document).on("click", ".btnEliminarLaminado", function(){

  var idLaminado = $(this).attr("idLaminado");
  //console.log("idMaquina", idMaquina);
  var CostoLaminado = $(this).attr("CostoLaminado");

  swal({
    title: '¿Está seguro de borrar el dado?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar laminado!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=laminado&idLaminado="+idLaminado+"&CostoLaminado="+CostoLaminado;

    }

  })

})