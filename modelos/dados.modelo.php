<?php

require_once "conexion.php";

class ModeloDados{

	/*=============================================
	MOSTRAR DADOS
	=============================================*/

	static public function MdlMostrarDados($tabla, $item, $valor){

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
	REGISTRO DE DDOS
	=============================================*/

	static public function mdlIngresarDado($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, finalx, finaly, cabenx, cabeny, GapIntx, GapInty, NoGapsx, NoGapsy, GapExtx, GapExty) VALUES 
		                                    (:nombre, :finalx, :finaly, :cabenx, :cabeny, :GapIntx, :GapInty, :NoGapsx, :NoGapsy, :GapExtx, :GapExty)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":finalx", $datos["finalx"], PDO::PARAM_STR);
		$stmt->bindParam(":finaly", $datos["finaly"], PDO::PARAM_STR);
		$stmt->bindParam(":cabenx", $datos["cabenx"], PDO::PARAM_STR);
		$stmt->bindParam(":cabeny", $datos["cabeny"], PDO::PARAM_STR);
		$stmt->bindParam(":GapIntx", $datos["GapIntx"], PDO::PARAM_STR);
		$stmt->bindParam(":GapInty", $datos["GapInty"], PDO::PARAM_STR);
		$stmt->bindParam(":NoGapsx", $datos["NoGapsx"], PDO::PARAM_STR);
		$stmt->bindParam(":NoGapsy", $datos["NoGapsy"], PDO::PARAM_STR);
		$stmt->bindParam(":GapExtx", $datos["GapExtx"], PDO::PARAM_STR);
		$stmt->bindParam(":GapExty", $datos["GapExty"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

	/*=============================================
	EDITAR DADO
	=============================================*/
	static public function mdlEditarDado($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :editarNombre, finalx = :editarFinalx, finaly = :editarFinaly, cabenx = :editarCabenx, cabeny = :editarCabeny, 
		GapIntx = :editarGapIntx, GapInty = :editarGapInty, NoGapsx = :editarNoGapsx, NoGapsy = :editarNoGapsy, GapExtx = :editarGapExtx, GapExty = :editarGapExty  WHERE id = :id");

		$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":editarNombre", $datos["editarNombre"], PDO::PARAM_STR);
		$stmt->bindParam(":editarFinalx", $datos["editarFinalx"], PDO::PARAM_STR);
		$stmt->bindParam(":editarFinaly", $datos["editarFinaly"], PDO::PARAM_STR);
		$stmt->bindParam(":editarCabenx", $datos["editarCabenx"], PDO::PARAM_STR);
		$stmt->bindParam(":editarCabeny", $datos["editarCabeny"], PDO::PARAM_STR);
		$stmt->bindParam(":editarGapIntx", $datos["editarGapIntx"], PDO::PARAM_STR);
		$stmt->bindParam(":editarGapInty", $datos["editarGapInty"], PDO::PARAM_STR);
		$stmt->bindParam(":editarNoGapsx", $datos["editarNoGapsx"], PDO::PARAM_STR);
		$stmt->bindParam(":editarNoGapsy", $datos["editarNoGapsy"], PDO::PARAM_STR);
		$stmt->bindParam(":editarGapExtx", $datos["editarGapExtx"], PDO::PARAM_STR);
		$stmt->bindParam(":editarGapExty", $datos["editarGapExty"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BORRAR DADO
	=============================================*/

	static public function mdlBorrarDado($tabla, $datos){

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