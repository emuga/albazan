<?php

require_once "conexion.php";

class ModeloPlacas{

	/*=============================================
	MOSTRAR PLACAS
	=============================================*/

	static public function MdlMostrarPlacas($tabla, $item, $valor){

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
	REGISTRO DE PLACA
	=============================================*/

	static public function mdlIngresarPlaca($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(CostoPulgada) VALUES (:placa)");

        $stmt->bindParam(":placa", $datos["placa"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

	/*=============================================
	EDITAR PLACAS
	=============================================*/
	static public function mdlEditarPlaca($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET CostoPulgada = :editarPulgada WHERE id = :id");

		$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":editarPulgada", $datos["editarPulgada"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BORRAR PLACA
	=============================================*/

	static public function mdlBorrarPlaca($tabla, $datos){

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