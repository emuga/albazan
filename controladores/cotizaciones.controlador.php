<?php

/**
 * COTIZACIONES
 */
class ControladorCotizaciones{
	
	static public function ctrMostrarCotizaciones($item, $valor){

		$tabla = "cotizacion";

		$respuesta = ModeloCotizaciones::mdlMostrarCotizaciones($tabla, $item, $valor);

		return $respuesta;

	}

}