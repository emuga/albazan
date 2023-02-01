<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * CLASE MATERIALES
 */
class ControladorPapeles{
	
	/*=============================================
	MOSTRAR MATERIALES
	=============================================*/
	static public function ctrMostrarPapeles($item, $valor){

		$tabla = "papeles";

		$respuesta = ModeloPapeles::mdlMostrarPapeles($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	CREAR REGISTROS PAPELES
	=============================================*/
	static public function ctrCrearPapel(){

		if(isset($_POST["nuevoPapel"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoPapel"]) &&
				preg_match('/^[0-9.]+$/', $_POST["nuevoCostoPapel"]) &&
				preg_match('/^[0-9.]+$/', $_POST["nuevoTamanoHorizontal"]) &&
				preg_match('/^[0-9.]+$/', $_POST["nuevoTamanoVertical"]) &&
				preg_match('/^[a-zA-Z]+$/', $_POST["nuevoColor"]) &&
				preg_match('/^[0-9]+$/', $_POST["nuevoPaquetes"]) &&
				preg_match('/^[0-9]+$/', $_POST["nuevoCantidadPaquete"]) &&
				preg_match('/^[0-9.]+$/', $_POST["nuevoCostoHoja"]) &&
				preg_match('/^[0-9]+$/', $_POST["nuevoStock"])){

				$tabla = "papeles";

				$datos = array("papel" => $_POST["nuevoPapel"],
					           "costoPapel" => $_POST["nuevoCostoPapel"],
					           "tamanoHorizontal" => $_POST["nuevoTamanoHorizontal"],
							   		"tamanoVertical" => $_POST["nuevoTamanoVertical"],
							   		"color" => $_POST["nuevoColor"],
							   		"paquetes" => $_POST["nuevoPaquetes"],
							   		"cantidadPaquete" => $_POST["nuevoCantidadPaquete"],
							   		"costoHoja" => $_POST["nuevoCostoHoja"],
							   		"stock" => $_POST["nuevoStock"]);

				$respuesta = ModeloPapeles::mdlIngresarPapel($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El registro ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "papeles";

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
						
							window.location = "papeles";

						}

					});
				

				</script>';

			}

		}

	}

	/*=============================================
	EDITAR PAPELES
	=============================================*/
	static public function ctrEditarPapel(){

		if (isset($_POST["editarPapel" ])) {

			if (
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarPapel"]) &&
				preg_match('/^[0-9.]+$/', $_POST["editarCostoPapel"]) &&
				preg_match('/^[0-9.]+$/', $_POST["editarTamanoHorizontal"]) &&
				preg_match('/^[0-9.]+$/', $_POST["editarTamanoVertical"]) &&
				preg_match('/^[a-zA-Z]+$/', $_POST["editarColor"]) &&
				preg_match('/^[0-9]+$/', $_POST["editarPaquetes"]) &&
				preg_match('/^[0-9]+$/', $_POST["editarCantidadPaquete"]) &&
				preg_match('/^[0-9.]+$/', $_POST["editarCostoHoja"]) &&
				preg_match('/^[0-9]+$/', $_POST["editarStock"])) {

				$tabla = "papeles";

				$datos = array('id' => $_POST["idPapel"],
								'papel' => $_POST["editarPapel"],
								"costoPapel" => $_POST["editarCostoPapel"],
					       "tamanoHorizontal" => $_POST["editarTamanoHorizontal"],
							   "tamanoVertical" => $_POST["editarTamanoVertical"],
							   "color" => $_POST["editarColor"],
							   "paquetes" => $_POST["editarPaquetes"],
							   "cantidadPaquete" => $_POST["editarCantidadPaquete"],
							   "costoHoja" => $_POST["editarCostoHoja"],
							   "stock" => $_POST["editarStock"]);

				$respuesta = ModeloPapeles::mdlEditarPapel($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El papel ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "papeles";

									}
								})

					</script>';

				}
				
			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡Los campos no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "papeles";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR PAPEL
	=============================================*/
	static public function ctrEliminarPapel(){

		if(isset($_GET["idPapel"])){

			$tabla ="papeles";
			$datos = $_GET["idPapel"];

			$respuesta = ModeloPapeles::mdlEliminarPapel($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El registro ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "papeles";

								}
							})

				</script>';

			}		

		}

	}

}