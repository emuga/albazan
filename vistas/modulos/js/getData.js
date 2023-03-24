$(document).ready(function(){

	// code to get all records from table via select box
	$("#etiqueta").change(function() {    //cuando haya un cambio en la lista

		var id = $(this).find(":selected").val();

		var dataString = 'dadid='+ id;    

		$.ajax({

			url: 'vistas/modulos/getEtiqueta.php',
			dataType: "json",
			data: dataString,  
			cache: false,
			success: function(etiquetaData) {

			   if(etiquetaData) {

					$("#heading").show();		  
					$("#no_records").hide();					
					$("#nombre").text(etiquetaData.nombre);
					$("#finalx").text(etiquetaData.finalx);
					$("#finaly").text(etiquetaData.finaly);

					$("#cabenx").text(etiquetaData.cabenx);
					$("#cabeny").text(etiquetaData.cabeny);
					$("#GapIntx").text(etiquetaData.GapIntx);
					$("#GapInty").text(etiquetaData.GapInty);
					$("#NoGapsx").text(etiquetaData.NoGapsx);
					$("#NoGapsy").text(etiquetaData.NoGapsy);
					$("#GapExtx").text(etiquetaData.GapExtx);
					$("#GapExty").text(etiquetaData.GapExty);
					$("#records").show();

				} else {

					$("#heading").hide();
					$("#records").hide();
					$("#no_records").show();

				}

			}

		});

 	})

});