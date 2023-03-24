<?php

require_once "conexion.php";

class ModeloNegativos{

	/*=============================================
	MOSTRAR NEGATIVOS
	=============================================*/

	static public function MdlMostrarNegativos($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor,  PDO::PARAM_STR);

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
	REGISTRO DE NEGATIVO
	=============================================*/

	static public function mdlIngresarNegativo($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(CostoNegativo) VALUES (:negativo)");

        $stmt->bindParam(":negativo", $datos["negativo"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

	/*=============================================
	EDITAR NEGATIVO
	=============================================*/
	static public function mdlEditarNegativo($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET CostoNegativo = :editarCostoNegativo WHERE id = :id");

		$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":editarCostoNegativo", $datos["editarCostoNegativo"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BORRAR NEGATIVO
	=============================================*/

	static public function mdlBorrarNegativo($tabla, $datos){

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