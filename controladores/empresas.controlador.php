<?php

class ControladorEmpresas{

    /*=============================
    MOSTRAR EMPRESAS
    =============================*/
    static public function ctrMostrarEmpresas($item, $valor){

        $tabla = "empresas";

        $respuesta = ModeloEmpresas::mdlMostrarEmpresas($tabla, $item, $valor);

        return $respuesta;

    }

    /*=============================================
	CREAR EMPRESA
	=============================================*/
    static public function ctrAgregarEmpresa(){

        if (isset($_POST["nuevaEmpresa"])) {

            if (preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaEmpresa"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaRS"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoRfc"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaRF"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoDomicilio"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaColonia"]) &&
                preg_match('/^[0-9]+$/', $_POST["nuevoCP"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCiudad"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoEstado"]) &&
                preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoPais"])) {

                $tabla ="empresas";

                $datos = array('nombreEmpresa' => $_POST['nuevaEmpresa'],
                                'razonSocial' => $_POST['nuevaRS'],
                                'rfc' => $_POST['nuevoRfc'],
                                'regimenFiscal' => $_POST['nuevaRF'],
                                'domicilio' => $_POST['nuevoDomicilio'],
                                'colonia' => $_POST['nuevaColonia'],
                                'codigoPostal' => $_POST['nuevoCP'],
                                'ciudad' => $_POST['nuevaCiudad'],
                                'estado' => $_POST['nuevoEstado'],
                                'pais' => $_POST['nuevoPais']);

                $respuesta = ModeloEmpresas::mdlAgregarEmpresa($tabla, $datos);

                if ($respuesta == "ok") {

                    echo '<script>
                    
                        swal({

                            type: "success",
                            title: "La empresa ha sido guardada correctamente!",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"

                        }).then(function(result){

                            if(result.value){

                                window.location = "empresa";

                            }

                        });
                    
                    </script>';

                }

            }else{

				echo '<script>

					swal({

						type: "error",
						title: "¡Los campos:    no pueden ir vacíos o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "empresa";

						}

					});
				

				</script>';
				
			}

        }

    }

    
}

