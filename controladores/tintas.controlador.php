<?php

/**
 * CLASE TINTAS
 */
class ControladorTintas{
	
	/*=============================================
	MOSTRAR TINTAS
	=============================================*/
	static public function ctrMostrarTintas($item, $valor){

		$tabla = "tintas";

		$respuesta = ModeloTintas::mdlMostrarTintas($tabla, $item, $valor);

		return $respuesta;

	}
	// FIN FUNCION MOSTRAR TINTAS

	/*=============================================
	CREAR NUEVA TINTA
	=============================================*/
	static public function ctrCrearTinta(){

		if (isset($_POST["nuevoColor"])) {

			if (preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoTipo"]) &&
				preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoColor"]) &&
				preg_match('/^[0-9.]+$/', $_POST["nuevoCostoTinta"]) &&
				preg_match('/^[0-9]+$/', $_POST["nuevoStock"]) &&
				preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoRinde"]) &&
				preg_match('/^[0-9.]+$/', $_POST["nuevoCostoTintaHoja"])) {

				$tabla = "tintas";

				$datos = array('tipo' => $_POST['nuevoTipo'],
								'color' => $_POST['nuevoColor'], 
								'costoTinta' => $_POST['nuevoCostoTinta'],
								'stock' => $_POST['nuevoStock'],
								'rinde' => $_POST['nuevoRinde'],
								'costoTintaHoja' => $_POST['nuevoCostoTintaHoja']);

				$respuesta = ModeloTintas::mdlCrearTinta($tabla, $datos);

				if ($respuesta == "ok") {

					echo '<script>

						swal({

							type: "success",
							title: "¡El registro ha sido guardado correctamente!",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"

							}).then(function(result){

								if(result.value){
									window.location = "tintas";
								}

							});

					</script>';

				}

			}

		}

	}
	// FIN CREAR NUEVA TINTA
}