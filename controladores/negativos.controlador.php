<?php

class ControladorNegativos{

	/*=============================================
	REGISTRO DE NEGATIVOS
	=============================================*/

	static public function ctrCrearNegativo(){

		if(isset($_POST["agregarNegativo"])){

			if(preg_match('/^[0-9.]+$/', $_POST["agregarNegativo"])){

				$tabla = "negativo";

				$datos = array("negativo" => $_POST["agregarNegativo"]);

				$respuesta = ModeloNegativos::mdlIngresarNegativo($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El registro ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "negativos";

						}

					});
				

					</script>';


				}	


			}else{

				echo '<script>

					swal({

						type: "error",
						title: "¡Los campos no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "negativos";

						}

					});
				

				</script>';

			}


		}


	}

	/*=============================================
	MOSTRAR NEGATIVOS
	=============================================*/

	static public function ctrMostrarNegativos($item, $valor){

		$tabla = "negativo";

		$respuesta = ModeloNegativos::MdlMostrarNegativos($tabla, $item, $valor);

		return $respuesta;
		
	}

	/*=============================================
	EDITAR NEGATIVOS
	=============================================*/

	static public function ctrEditarNegativo(){

		if(isset($_POST["editarCostoNegativo"])){

			if(preg_match('/^[0-9." ]+$/', $_POST["editarCostoNegativo"])){

				$tabla = "negativo";

			    $datos = array("id" => $_POST["idNegativo"],
			                    "editarCostoNegativo" => $_POST["editarCostoNegativo"]);

				$respuesta = ModeloNegativos::mdlEditarNegativo($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El negativo ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "negativos";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El campo no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "negativos";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR NEGATIVO
	=============================================*/

	static public function ctrBorrarNegativo(){

		if(isset($_GET["idNegativo"])){

			$tabla ="negativo";
			$datos = $_GET["idNegativo"];

			$respuesta = ModeloNegativos::mdlBorrarNegativo($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El negativo ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "negativos";

								}
							})

				</script>';

			}		

		}

	}

}