
/*=============================================
EDITAR DADO
=============================================*/
$(document).on("click", ".btnEditarDado", function(){

	var idDado = $(this).attr("idDado");
	 console.log("idDado", idDado);
	
	var datos = new FormData();
	datos.append("idDado", idDado);

	$.ajax({

		url:"ajax/dados.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			console.log("respuesta", respuesta);

			$("#idDado").val(respuesta["id"]);
			$("#editarNombre").val(respuesta["nombre"]);
			$("#editarFinalx").val(respuesta["finalx"]);
			$("#editarFinaly").val(respuesta["finaly"]);
			$("#editarCabenx").val(respuesta["cabenx"]);
			$("#editarCabeny").val(respuesta["cabeny"]);
			$("#editarGapIntx").val(respuesta["GapIntx"]);
			$("#editarGapInty").val(respuesta["GapInty"]);
			$("#editarNoGapsx").val(respuesta["NoGapsx"]);
			$("#editarNoGapsy").val(respuesta["NoGapsy"]);
			$("#editarGapExtx").val(respuesta["GapExtx"]);
			$("#editarGapExty").val(respuesta["GapExty"]);

		}

	})

})

/*=============================================
ELIMINAR DADO
=============================================*/
$(document).on("click", ".btnEliminarDado", function(){

  var idDado = $(this).attr("idDado");
  //console.log("idMaquina", idMaquina);
  var nombre = $(this).attr("nombre");
  var finalx = $(this).attr("finalx");
  var finaly = $(this).attr("finaly");
  var cabenx = $(this).attr("cabenx");
  var cabeny = $(this).attr("cabeny");
  var GapIntx = $(this).attr("GapIntx");
  var GapInty = $(this).attr("GapInty");
  var NoGapsx = $(this).attr("NoGapsx");
  var NoGapsy = $(this).attr("NoGapsy");
  var GapExtx = $(this).attr("GapExtx");
  var GapExty = $(this).attr("GapExty");

  swal({
    title: '¿Está seguro de borrar el dado?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar dado!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=dados&idDado="+idDado+"&nombre="+nombre;

    }

  })

})