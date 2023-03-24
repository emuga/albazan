<?php

class ControladorPlacas{

	/*=============================================
	REGISTRO DE PLACAS
	=============================================*/

	static public function ctrCrearPlaca(){

		if(isset($_POST["agregarPlaca"])){

			if(preg_match('/^[0-9.]+$/', $_POST["agregarPlaca"])){

				$tabla = "placa";

				$datos = array("placa" => $_POST["agregarPlaca"]);

				$respuesta = ModeloPlacas::mdlIngresarPlaca($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El registro ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "placas";

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
						
							window.location = "placas";

						}

					});
				

				</script>';

			}


		}


	}

	/*=============================================
	MOSTRAR PLACAS
	=============================================*/

	static public function ctrMostrarPlacas($item, $valor){

		$tabla = "placa";

		$respuesta = ModeloPlacas::MdlMostrarPlacas($tabla, $item, $valor);

		return $respuesta;
		
	}

	/*=============================================
	EDITAR PLACA
	=============================================*/

	static public function ctrEditarPlaca(){

		if(isset($_POST["editarCostoPulgada"])){

			if(preg_match('/^[0-9.]+$/', $_POST["editarCostoPulgada"])){

				$tabla = "placa";

			    $datos = array("id" => $_POST["idPlaca"],
			                    "editarPulgada" => $_POST["editarCostoPulgada"]);

				$respuesta = ModeloPlacas::mdlEditarPlaca($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La placa ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "placas";

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

							window.location = "placas";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR PLACA
	=============================================*/

	static public function ctrBorrarPlaca(){

		if(isset($_GET["idPulgada"])){

			$tabla ="placa";
			$datos = $_GET["idPulgada"];

			$respuesta = ModeloPlacas::mdlBorrarPlaca($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "La placa ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "placas";

								}
							})

				</script>';

			}		

		}

	}

}