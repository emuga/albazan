<?php

require_once "../controladores/rebobinados.controlador.php";
require_once "../modelos/rebobinados.modelo.php";

class AjaxRebobinados{

	/*=============================================
	EDITAR REBOBINADOS
	=============================================*/	

	public $idRebobinado;
	

	public function ajaxEditarRebobinado(){

		$item = "id";
		$valor = $this->idRebobinado;

		$respuesta = ControladorRebobinados::ctrMostrarRebobinados($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
EDITAR REBOBINADOS
=============================================*/
if(isset($_POST["idRebobinado"])){

	$editarRebobinado = new AjaxRebobinados();
	$editarRebobinado -> idRebobinado = $_POST["idRebobinado"];
	$editarRebobinado -> ajaxEditarRebobinado();

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