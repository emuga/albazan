<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "conexion.php";

/**
 * MODELO PAPELES
 */
class ModeloPapeles{
	
	static public function mdlMostrarPapeles($tabla, $item, $valor){

		if ($item != null) {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	CREAR PAPELES
	=============================================*/
	static public function mdlIngresarPapel($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(papel, costoPapel, tamanoHorizontal, tamanoVertical, color, paquetes, cantidadPaquete, costoHoja, stock) VALUES (:papel, :costoPapel, :tamanoHorizontal, :tamanoVertical, :color, :paquetes, :cantidadPaquete, :costoHoja, :stock)");

		$stmt->bindParam(":papel", $datos["papel"], PDO::PARAM_STR);
		$stmt->bindParam(":costoPapel", $datos["costoPapel"], PDO::PARAM_INT);
		$stmt->bindParam(":tamanoHorizontal", $datos["tamanoHorizontal"], PDO::PARAM_INT);
		$stmt->bindParam(":tamanoVertical", $datos["tamanoVertical"], PDO::PARAM_INT);
		$stmt->bindParam(":color", $datos["color"], PDO::PARAM_STR);
    $stmt->bindParam(":paquetes", $datos["paquetes"], PDO::PARAM_INT);
    $stmt->bindParam(":cantidadPaquete", $datos["cantidadPaquete"], PDO::PARAM_INT);
    $stmt->bindParam(":costoHoja", $datos["costoHoja"], PDO::PARAM_INT);
    $stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}
	
	/*=============================================
	EDITAR PAPELES
	=============================================*/
	static public function mdlEditarPapel($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET papel=:papel, costoPapel=:costoPapel, tamanoHorizontal=:tamanoHorizontal, tamanoVertical=:tamanoVertical, color=:color, paquetes=:paquetes, cantidadPaquete=:cantidadPaquete, costoHoja=:costoHoja, stock=:stock WHERE id=:id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		$stmt->bindParam(":papel", $datos["papel"], PDO::PARAM_STR);
		$stmt->bindParam(":costoPapel", $datos["costoPapel"], PDO::PARAM_INT);
        $stmt->bindParam(":tamanoHorizontal", $datos["tamanoHorizontal"], PDO::PARAM_INT);
        $stmt->bindParam(":tamanoVertical", $datos["tamanoVertical"], PDO::PARAM_INT);
        $stmt->bindParam(":color", $datos["color"], PDO::PARAM_STR);
        $stmt->bindParam(":paquetes", $datos["paquetes"], PDO::PARAM_INT);
        $stmt->bindParam(":cantidadPaquete", $datos["cantidadPaquete"], PDO::PARAM_INT);
        $stmt->bindParam(":costoHoja", $datos["costoHoja"], PDO::PARAM_INT);
        $stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BORRAR PAPELES
	=============================================*/
	static public function mdlEliminarPapel($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}
	
}