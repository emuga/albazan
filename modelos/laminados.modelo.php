<?php

require_once "conexion.php";

class ModeloLaminados{

	/*=============================================
	MOSTRAR LAMINADOS
	=============================================*/

	static public function MdlMostrarLaminados($tabla, $item, $valor){

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
	REGISTRO DE LAMINADOS
	=============================================*/

	static public function mdlIngresarLaminado($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(CostoLaminado) VALUES (:CostoLaminado)");

        $stmt->bindParam(":CostoLaminado", $datos["CostoLaminado"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

	/*=============================================
	EDITAR LAMINADO
	=============================================*/
	static public function mdlEditarLaminado($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET CostoLaminado = :editarLaminado WHERE id = :id");

		$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":editarLaminado", $datos["editarLaminado"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BORRAR LAMINADOS
	=============================================*/

	static public function mdlBorrarLaminado($tabla, $datos){

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