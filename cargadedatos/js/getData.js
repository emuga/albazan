$(document).ready(function(){

	// code to get all records from table via select box
	$("#etiqueta").change(function() {    //cuando haya un cambio en la lista

		var id = $(this).find(":selected").val();

		var dataString = 'dadid='+ id;    

		$.ajax({

			url: 'getEtiqueta.php',
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