<?php

class ControladorLaminados{

	/*=============================================
	REGISTRO DE LAMINADO
	=============================================*/

	static public function ctrCrearLaminado(){

		if(isset($_POST["agregarCostoLaminado"])){

			if(preg_match('/^[0-9.]+$/', $_POST["agregarCostoLaminado"])){

				$tabla = "laminado";

				$datos = array("CostoLaminado" => $_POST["agregarCostoLaminado"]);

				$respuesta = ModeloLaminados::mdlIngresarLaminado($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El registro ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "laminados";

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
						
							window.location = "laminados";

						}

					});
				

				</script>';

			}


		}


	}

	/*=============================================
	MOSTRAR DADO
	=============================================*/

	static public function ctrMostrarLaminados($item, $valor){

		$tabla = "laminado";

		$respuesta = ModeloLaminados::MdlMostrarLaminados($tabla, $item, $valor);

		return $respuesta;
		
	}

	/*=============================================
	EDITAR LAMINADO
	=============================================*/

	static public function ctrEditarLaminado(){

		if(isset($_POST["editarLaminado"])){

			if(preg_match('/^[0-9." ]+$/', $_POST["editarLaminado"])){

				$tabla = "laminado";

			    $datos = array("id" => $_POST["idLaminado"],
			                    "editarLaminado" => $_POST["editarLaminado"]);

				$respuesta = ModeloLaminados::mdlEditarLaminado($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El laminado ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "laminados";

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

							window.location = "laminados";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR LAMINADO
	=============================================*/

	static public function ctrBorrarLaminado(){

		if(isset($_GET["idLaminado"])){

			$tabla ="laminado";
			$datos = $_GET["idLaminado"];

			$respuesta = ModeloLaminados::mdlBorrarLaminado($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El laminado ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "laminados";

								}
							})

				</script>';

			}		

		}

	}

}