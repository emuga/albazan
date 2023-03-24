<?php

class ControladorDados{

	/*=============================================
	REGISTRO DE DADO
	=============================================*/

	static public function ctrCrearDado(){

		if(isset($_POST["finalx"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ". ]+$/', $_POST["nombre"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["finalx"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["finaly"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["cabenx"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["cabeny"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["GapIntx"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["GapInty"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["NoGapsx"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["NoGapsy"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["GapExtx"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["GapExty"])){

				$tabla = "dados";

				$datos = array("nombre" => $_POST["nombre"],
				                "finalx" => $_POST["finalx"],
					           "finaly" => $_POST["finaly"],
					           "cabenx" => $_POST["cabenx"],
					           "cabeny" => $_POST["cabeny"],
					           "GapIntx" => $_POST["GapIntx"],
					           "GapInty" => $_POST["GapInty"],
					           "NoGapsx" => $_POST["NoGapsx"],
					           "NoGapsy" => $_POST["NoGapsy"],
					           "GapExtx" => $_POST["GapExtx"],
					           "GapExty" => $_POST["GapExty"]);

				$respuesta = ModeloDados::mdlIngresarDado($tabla, $datos);
			
				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El registro ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "dados";

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
						
							window.location = "dados";

						}

					});
				

				</script>';

			}


		}


	}

	/*=============================================
	MOSTRAR DADO
	=============================================*/

	static public function ctrMostrarDados($item, $valor){

		$tabla = "dados";

		$respuesta = ModeloDados::MdlMostrarDados($tabla, $item, $valor);

		return $respuesta;
		
	}

	/*=============================================
	EDITAR DADO
	=============================================*/

	static public function ctrEditarDado(){

		if(isset($_POST["editarNombre"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ." ]+$/', $_POST["editarNombre"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["editarFinalx"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["editarFinaly"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["editarCabenx"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["editarCabeny"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["editarGapIntx"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["editarGapInty"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["editarNoGapsx"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["editarNoGapsy"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["editarGapExtx"]) &&
			   preg_match('/^[0-9.]+$/', $_POST["editarGapExty"])){

				$tabla = "dados";

			    $datos = array("id" => $_POST["idDado"],
			                    "editarNombre" => $_POST["editarNombre"],
				                "editarFinalx" => $_POST["editarFinalx"],
					           "editarFinaly" => $_POST["editarFinaly"],
					           "editarCabenx" => $_POST["editarCabenx"],
					           "editarCabeny" => $_POST["editarCabeny"],
					           "editarGapIntx" => $_POST["editarGapIntx"],
					           "editarGapInty" => $_POST["editarGapInty"],
					           "editarNoGapsx" => $_POST["editarNoGapsx"],
					           "editarNoGapsy" => $_POST["editarNoGapsy"],
					           "editarGapExtx" => $_POST["editarGapExtx"],
					           "editarGapExty" => $_POST["editarGapExty"]);

				$respuesta = ModeloDados::mdlEditarDado($tabla, $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El dado ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "dados";

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

							window.location = "dados";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	BORRAR DADO
	=============================================*/

	static public function ctrBorrarDado(){

		if(isset($_GET["idDado"])){

			$tabla ="dados";
			$datos = $_GET["idDado"];

			$respuesta = ModeloDados::mdlBorrarDado($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El dado ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "dados";

								}
							})

				</script>';

			}		

		}

	}

}