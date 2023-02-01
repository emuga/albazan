<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";

/**
 * 
 */
class AjaxClientes{
	
	public $idCliente;

	public function ajaxEditarCliente(){

		$item = "id";
		$valor = $this->idCliente;

		$respuesta = ControladorClientes::ctrMostrarClientes($item, $valor);

		echo json_encode($respuesta);

	}

}

if (isset($_POST['idCliente'])) {

	$editarCliente = new AjaxClientes();
	$editarCliente -> idCliente = $_POST['idCliente'];
	$editarCliente -> ajaxEditarCliente();

}