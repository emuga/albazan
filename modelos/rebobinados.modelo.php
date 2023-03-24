    <?php

require_once "conexion.php";

class ModeloRebobinados{

	/*=============================================
	MOSTRAR REBOBINADOS
	=============================================*/

	static public function MdlMostrarRebobinados($tabla, $item, $valor){

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
	REGISTRO DE REBOBINADOS
	=============================================*/

	static public function mdlIngresarRebobinado($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Tres, UnoPuntoCinco, Uno) VALUES (:Tres, :UnoPuntoCinco, :Uno)");

        $stmt->bindParam(":Tres", $datos["Tres"], PDO::PARAM_STR);
        $stmt->bindParam(":UnoPuntoCinco", $datos["UnoPuntoCinco"], PDO::PARAM_STR);
        $stmt->bindParam(":Uno", $datos["Uno"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}

	/*=============================================
	EDITAR REBOBINADO
	=============================================*/
	static public function mdlEditarRebobinado($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Tres = :editarTres, UnoPuntoCinco = :editarUnoPuntoCinco, Uno = :editarUno WHERE id = :id");

		$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":editarTres", $datos["tres"], PDO::PARAM_STR);
		$stmt->bindParam(":editarUnoPuntoCinco", $datos["unoPuntoCinco"], PDO::PARAM_STR);
		$stmt->bindParam(":editarUno", $datos["uno"], PDO::PARAM_STR);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	BORRAR REBOBINADO
	=============================================*/

	static public function mdlBorrarRebobinado($tabla, $datos){

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