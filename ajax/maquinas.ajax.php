<?php

require_once "../controladores/maquinas.controlador.php";
require_once "../modelos/maquinas.modelo.php";

class AjaxMaquinas{

	/*=============================================
	EDITAR MAQUINAS
	=============================================*/	

	public $idMaquina;
	

	public function ajaxEditarMaquina(){

		$item = "id";
		$valor = $this->idMaquina;

		$respuesta = ControladorMaquinas::ctrMostrarMaquinas($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
EDITAR MAQUINAS
=============================================*/
if(isset($_POST["idMaquina"])){

	$editarMaquina = new AjaxMaquinas();
	$editarMaquina -> idMaquina = $_POST["idMaquina"];
	$editarMaquina -> ajaxEditarMaquina();

}

	/*=============================================
	ACTIVAR USUARIO
	=============================================*/	

	// public $activarUsuario;
	// public $activarId;


	// public function ajaxActivarUsuario(){

	// 	$tabla = "usuarios";

	// 	$item1 = "estado";
	// 	$valor1 = $this->activarUsuario;

	// 	$item2 = "id";
	// 	$valor2 = $this->activarId;

	// 	$respuesta = ModeloUsuarios::mdlActualizarUsuario($tabla, $item1, $valor1, $item2, $valor2);

	// }

	/*=============================================
	VALIDAR NO REPETIR USUARIO
	=============================================*/	

// 	public $validarUsuario;

// 	public function ajaxValidarUsuario(){

// 		$item = "usuario";
// 		$valor = $this->validarUsuario;

// 		$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

// 		echo json_encode($respuesta);

// 	}
// }


/*=============================================
ACTIVAR USUARIO
=============================================*/	

// if(isset($_POST["activarUsuario"])){

// 	$activarUsuario = new AjaxUsuarios();
// 	$activarUsuario -> activarUsuario = $_POST["activarUsuario"];
// 	$activarUsuario -> activarId = $_POST["activarId"];
// 	$activarUsuario -> ajaxActivarUsuario();

// }

/*=============================================
VALIDAR NO REPETIR USUARIO
=============================================*/

// if(isset( $_POST["validarUsuario"])){

// 	$valUsuario = new AjaxUsuarios();
// 	$valUsuario -> validarUsuario = $_POST["validarUsuario"];
// 	$valUsuario -> ajaxValidarUsuario();

// }