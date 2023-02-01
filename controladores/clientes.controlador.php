<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*=============================================
	MOSTRAR CLIENTE
=============================================*/

class ControladorClientes{

	static public function ctrMostrarClientes($item, $valor){

		$tabla = "clientes";

		$respuesta = ModeloClientes::MdlMostrarClientes($tabla, $item, $valor);

		return $respuesta;
		
	}

	/*=============================================
	CREAR NUEVOS REGISTRO CLIENTES
	=============================================*/
	static public function ctrAgregarCliente(){

		if (isset($_POST["nuevoNombreEmpresa"])) {

			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombreEmpresa"]) &&
				preg_match('/^[a-zA-Z0-9-]+$/', $_POST["nuevoRfc"]) &&
				preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
				preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoApellido"]) &&
				preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["nuevoCorreo"]) &&
				preg_match('/^[()\-0-9 ]+$/', $_POST["nuevoTelefono"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCalle"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoColonia"]) &&
				preg_match('/^[0-9]+$/', $_POST["nuevoCodigoPostal"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoCiudad"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoEstado"]) &&
				preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoPais"])) {

				$tabla = "clientes";

				$datos = array('nombreEmpresa' => $_POST['nuevoNombreEmpresa'],
								'rfc' => $_POST['nuevoRfc'],
								'nombre' => $_POST['nuevoNombre'],
								'apellido' => $_POST['nuevoApellido'],
								'correo' => $_POST['nuevoCorreo'],
								'telefono' => $_POST['nuevoTelefono'],
								'calle' => $_POST['nuevoCalle'],
								'colonia' => $_POST['nuevoColonia'],
								'codigoPostal' => $_POST['nuevoCodigoPostal'],
								'ciudad' => $_POST['nuevoCiudad'],
								'estado' => $_POST['nuevoEstado'],
								'pais' => $_POST['nuevoPais']);
				// echo '<pre>'; print_r($datos); echo '</pre>';

				$respuesta = ModeloClientes::mdlAgregarCliente($tabla, $datos);
				// echo '<pre>'; print_r($respuesta); echo '</pre>';

				if($respuesta == "ok"){

					echo '<script>

					swal({

						type: "success",
						title: "¡El registro ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "clientes";

						}

					});
				

					</script>';


				}

			}else{

				echo '<script>

					swal({

						type: "error",
						title: "¡Los campos:    no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "clientes";

						}

					});
				

				</script>';
				
			}

		}

	}

	/*=============================================
	MODIFICAR CLIENTES
	=============================================*/

	static public function ctrEditarCliente(){

		if (isset($_POST['editarEmpresa'])) {

			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarEmpresa"]) &&
				preg_match('/^[a-zA-Z0-9- ]+$/', $_POST["editarRfc"]) &&
				preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombre"]) &&
				preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarApellido"]) &&
				preg_match('/^[a-zA-Z0-9@.]+$/', $_POST["editarCorreo"]) &&
				preg_match('/^[0-9]+$/', $_POST["editarTelefono"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCalle"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarColonia"]) &&
				preg_match('/^[0-9]+$/', $_POST["editarCp"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCiudad"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarEstado"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarPais"])) {

			$tabla = "clientes";

			$datos = array('id' => $_POST['idCliente'],
										'nombreEmpresa' => $_POST['editarEmpresa'],
										'rfc' => $_POST['editarRfc'],
										'nombre' => $_POST['editarNombre'],
										'apellido' => $_POST['editarApellido'],
										'correo' => $_POST['editarCorreo'],
										'telefono' => $_POST['editarTelefono'],
										'calle' => $_POST['editarCalle'],
										'colonia' => $_POST['editarColonia'],
										'codigoPostal' => $_POST['editarCp'],
										'ciudad' => $_POST['editarCiudad'],
										'estado' => $_POST['editarEstado'],
										'pais' => $_POST['editarPais']);

			$respuesta = ModeloClientes::mdlEditarCliente($tabla, $datos);

			if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "El papel ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "clientes";

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

							window.location = "clientes";

							}
						})

			  	</script>';

			}

		}

	}

	/*=============================================
	ELIMINAR CLIENTES
	=============================================*/

	static public function ctrEliminarCliente(){

		if (isset($_GET['idCliente'])) {

			$tabla = "clientes";
			$datos = $_GET['idCliente'];

			$respuesta = ModeloClientes::mdlEliminarCliente($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El cliente ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "clientes";

								}
							})

				</script>';

			}

		}

	}

}