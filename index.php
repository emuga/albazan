<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/papeles.controlador.php";
require_once "controladores/maquinas.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";
require_once "controladores/cotizaciones.controlador.php";
require_once "controladores/tintas.controlador.php";
require_once "controladores/dados.controlador.php";
require_once "controladores/laminados.controlador.php";
require_once "controladores/placas.controlador.php";
require_once "controladores/negativos.controlador.php";
require_once "controladores/rebobinados.controlador.php";
require_once "controladores/empresas.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/papeles.modelo.php";
require_once "modelos/maquinas.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";
require_once "modelos/cotizaciones.modelo.php";
require_once "modelos/tintas.modelo.php";
require_once "modelos/dados.modelo.php";
require_once "modelos/laminados.modelo.php";
require_once "modelos/placas.modelo.php";
require_once "modelos/negativos.modelo.php";
require_once "modelos/rebobinados.modelo.php";
require_once "modelos/empresas.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
