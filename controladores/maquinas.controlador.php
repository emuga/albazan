<?php

class ControladorMaquinas{

	/*=============================================
	REGISTRO DE MAQUINA
	=============================================*/

	static public function ctrCrearMaquina(){

		if(isset($_POST["nuevoTipo"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoTipo"]) &&
			   preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["nuevaMarca"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["nuevoCosto"])){

				$tabla = "maquinas";

				$datos = array("tipo" => $_POST["nuevoTipo"],
					           "marca" => $_POST["nuevaMarca"],
					           "costo" => $_POST["nuevoCosto"]);

				$respuesta = ModeloMaquinas::mdlIngresarMaquina($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El registro ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "maquina";

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
						
							window.location = "maquina";

						}

					});
				

				</script>';

			}


		}


	}

	/*=============================================
	MOSTRAR MAQUINA
	=============================================*/

	static public function ctrMostrarMaquinas($item, $valor){

		$tabla = "maquinas";

		$respuesta = ModeloMaquinas::MdlMostrarMaquinas($tabla, $item, $valor);

		return $respuesta;
		
	}

	/*=============================================
	EDITAR MAQUINA
	=============================================*/

	static public function ctrEditarMaquina(){

		if(isset($_POST["editarTipo"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarTipo"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarMarca"]) &&
				preg_match('/^[0-9.]+$/', $_POST["editarCosto"])){

				$tabla = "maquinas";

				$datos = array("id" => $_POST["idMaquina"],
									"tipo" => $_POST["editarTipo"],
							   	"marca" => $_POST["editarMarca"],
							   	"costo" => $_POST["editarCosto"]);

				$respuesta = ModeloMaquinas::mdlEditarMaquina($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El usuario ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "maquina";

									}
								})

					</script>';

				}


			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El nombre no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "maquina";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR MAQUINA
	=============================================*/

	static public function ctrBorrarMaquina(){

		if(isset($_GET["idMaquina"])){

			$tabla ="maquinas";
			$datos = $_GET["idMaquina"];

			$respuesta = ModeloMaquinas::mdlBorrarMaquina($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El usuario ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "maquina";

								}
							})

				</script>';

			}		

		}

	}

}
	


