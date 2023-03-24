<?php

require_once "../controladores/laminados.controlador.php";
require_once "../modelos/laminados.modelo.php";

class AjaxLaminados{

	/*=============================================
	EDITAR LAMINADOS
	=============================================*/	

	public $idLaminado;
	

	public function ajaxEditarLaminado(){

		$item = "id";
		$valor = $this->idLaminado;

		$respuesta = ControladorLaminados::ctrMostrarLaminados($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
EDITAR LAMINADOS
=============================================*/
if(isset($_POST["idLaminado"])){

	$editarLaminado = new AjaxLaminados();
	$editarLaminado -> idLaminado = $_POST["idLaminado"];
	$editarLaminado -> ajaxEditarLaminado();

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