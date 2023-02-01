<?php

require_once "../controladores/dados.controlador.php";
require_once "../modelos/dados.modelo.php";



class AjaxDados{

  /*=============================================
  GENERAR CÓDIGO A PARTIR DE ID CATEGORIA
  =============================================*/
  public $idDado;

  public function ajaxAgregarCabenx(){

  	$item = "id";
  	$valor = $this->idDado;

  	$respuesta = ControladorDados::ctrMostrarDados($item, $valor);

  	echo json_encode($respuesta);

  }

}


/*=============================================
GENERAR CÓDIGO A PARTIR DE ID CATEGORIA
=============================================*/	

if(isset($_POST["idDado"])){

	$cabenxDado = new AjaxDados();
	$cabenxDado -> idDado = $_POST["idDado"];
	$cabenxDado -> ajaxAgregarCabenx();

}
