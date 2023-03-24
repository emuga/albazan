<?php

error_reporting();

require_once "conexion.php";

/**
 * CLASE MODELO TINTAS
 */
class ModeloTintas{
	
	/*=============================================
	MOSTRAR TINTAS
	=============================================*/
	static public function mdlMostrarTintas($tabla, $item, $valor){

		if ($item != null) {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt ->bindParam(":".$item, $valor, PDO::PARAM_STR);

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
	// FIN FUNCION MOSTRAR TINTAS

	/*=============================================
	CREAR REGISTRO TINTA
	=============================================*/
	static public function mdlCrearTinta($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (tipo, color, costoTinta, stock, rinde, costoTintaHoja) VALUES (:tipo, :color, :costoTinta, :stock, :rinde, :costoTintaHoja)");

		$stmt->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$stmt->bindParam(":color", $datos["color"], PDO::PARAM_STR);
		$stmt->bindParam(":costoTinta", $datos["costoTinta"], PDO::PARAM_INT);
		$stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_INT);
		$stmt->bindParam(":rinde", $datos["rinde"], PDO::PARAM_STR);
		$stmt->bindParam(":costoTintaHoja", $datos["costoTintaHoja"], PDO::PARAM_INT);

		if ($stmt->execute()) {

			return "ok";

		}else{

			return "error";
		}

		$stmt->close();

		$stmt = null;

	}
	// FIN FUNCION CREAR TINTA
}