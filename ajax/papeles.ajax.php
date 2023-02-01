<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "../controladores/papeles.controlador.php";
require_once "../modelos/papeles.modelo.php";

class AjaxPapeles{

	/*=============================================
	EDITAR PAPELES
	=============================================*/	

	public $idPapel;

	public function ajaxEditarPapel(){

		$item = "id";
		$valor = $this->idPapel;

		$respuesta = ControladorPapeles::ctrMostrarPapeles($item, $valor);

		echo json_encode($respuesta);

	}

}

/*=============================================
EDITAR PAPEL
=============================================*/
if(isset($_POST["idPapel"])){

	$editarPapel = new AjaxPapeles();
	$editarPapel -> idPapel = $_POST["idPapel"];
	$editarPapel -> ajaxEditarPapel();

}