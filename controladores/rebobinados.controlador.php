<?php

class ControladorRebobinados{
    
    /*=============================================
	MOSTRAR REBOBINADOS
	=============================================*/

	static public function ctrMostrarRebobinados($item, $valor){

		$tabla = "rebobinado";

		$respuesta = ModeloRebobinados::MdlMostrarRebobinados($tabla, $item, $valor);

		return $respuesta;
		
	}

	/*=============================================
	REGISTRO DE REBOBINADOS
	=============================================*/

	static public function ctrCrearRebobinado(){

		if(isset($_POST["agregarTres"])){

			if(preg_match('/^[0-9]+$/', $_POST["agregarTres"]) &&
			    preg_match('/^[0-9.]+$/', $_POST["agregarUnoPuntoCinco"]) &&
			    preg_match('/^[0-9]+$/', $_POST["agregarUno"])){

				$tabla = "rebobinado";

				$datos = array("Tres" => $_POST["agregarTres"],
				                "UnoPuntoCinco" => $_POST["agregarUnoPuntoCinco"],
				                "Uno" => $_POST["agregarUno"]);

				$respuesta = ModeloRebobinados::mdlIngresarRebobinado($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El registro ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "rebobinados";

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
						
							window.location = "rebobinados";

						}

					});
				

				</script>';

			}


		}


	}

	/*=============================================
	EDITAR REBOBINADO
	=============================================*/

	static public function ctrEditarRebobinado(){

		if(isset($_POST["editarTres"])){

			if(preg_match('/^[0-9." ]+$/', $_POST["editarTres"]) &&
			    preg_match('/^[0-9." ]+$/', $_POST["editarUnoPuntoCinco"]) &&
			    preg_match('/^[0-9." ]+$/', $_POST["editarUno"])){

				$tabla = "rebobinado";

			    $datos = array("id" => $_POST["idRebobinado"],
			                    "tres" => $_POST["editarTres"],
			                    "unoPuntoCinco" => $_POST["editarUnoPuntoCinco"],
			                    "uno" => $_POST["editarUno"]);

				$respuesta = ModeloRebobinados::mdlEditarRebobinado($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El rebobinado ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "rebobinados";

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

							window.location = "rebobinados";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR REBOBINADO
	=============================================*/

	static public function ctrBorrarRebobinado(){

		if(isset($_GET["idRebobinado"])){

			$tabla ="rebobinado";
			$datos = $_GET["idRebobinado"];

			$respuesta = ModeloRebobinados::mdlBorrarRebobinado($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El rebobinado ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "rebobinados";

								}
							})

				</script>';

			}		

		}

	}

}