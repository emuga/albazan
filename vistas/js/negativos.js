
/*=============================================
EDITAR NEGATIVO
=============================================*/
$(document).on("click", ".btnEditarCostoNegativo", function(){

	var idNegativo = $(this).attr("idNegativo");
	 console.log("idNegativo", idNegativo);
	
	var datos = new FormData();
	datos.append("idNegativo", idNegativo);

	$.ajax({

		url:"ajax/negativos.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			console.log("respuesta", respuesta);

			$("#idNegativo").val(respuesta["id"]);
			$("#editarCostoNegativo").val(respuesta["CostoNegativo"]);

		}

	})

})

/*=============================================
ELIMINAR NEGATIVO
=============================================*/
$(document).on("click", ".btnEliminarNegativo", function(){ /*al cargar el documento al hacer clic en el boton .btneliminarnegativos activa una funcion*/

  var idNegativo = $(this).attr("idNegativo"); /*la variable idnegativo toma el valor del atributo creado en el input oculto*/
  //console.log("idMaquina", idMaquina);
  var CostoNegativo = $(this).attr("CostoNegativo"); /*"costonegativo trae el registro de la columna costonegativo"*/

  swal({
    title: '¿Está seguro de borrar el negativo?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar negativo!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=negativos&idNegativo="+idNegativo+"&CostoNegativo="+CostoNegativo;

    }

  })

})