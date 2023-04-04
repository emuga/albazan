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
    
}

