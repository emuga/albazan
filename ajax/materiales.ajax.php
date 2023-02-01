<?php

require_once "../controladores/materiales.controlador.php";
require_once "../modelos/materiales.modelo.php";

class AjaxMateriales{

	/*=============================================
	EDITAR MATERIALES
	=============================================*/	

	public $idMaterial;
	

	public function ajaxEditarMaterial(){

		$item = "id";
		$valor = $this->idMaterial;

		$respuesta = ControladorMateriales::ctrMostrarMateriales($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
EDITAR MAQUINAS
=============================================*/
if(isset($_POST["idMaterial"])){

	$editarMaterial = new AjaxMateriales();
	$editarMaterial -> idMaterial = $_POST["idMaterial"];
	$editarMaterial -> ajaxEditarMaterial();

}