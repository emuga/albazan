<?php

class ModeloEmpresas{

    /*=============================
    MOSTRAR EMPRESAS
    =============================*/
    static public function mdlMostrarEmpresas($tabla, $item, $valor){

        if ($item != null) {

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt -> fetch();

        }else {
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt -> execute();

            return $stmt -> fetchAll();
            
        }

        $stmt -> close();

        $stmt = null;

    }

    /*=============================================
	CREAR EMPRESA
	=============================================*/
	static public function mdlAgregarEmpresa($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombreEmpresa, razonSocial, rfc, regimenFiscal, domicilio, colonia, codigoPostal, ciudad, estado, pais)
        VALUES (:nombreEmpresa, :razonSocial, :rfc, :regimenFiscal, :domicilio, :colonia, :codigoPostal, :ciudad, :estado, :pais)");

		$stmt->bindParam(":nombreEmpresa", $datos["nombreEmpresa"], PDO::PARAM_STR);
        $stmt->bindParam(":razonSocial", $datos["razonSocial"], PDO::PARAM_STR);
		$stmt->bindParam(":rfc", $datos["rfc"], PDO::PARAM_STR);
		$stmt->bindParam(":regimenFiscal", $datos["regimenFiscal"], PDO::PARAM_STR);
		$stmt->bindParam(":domicilio", $datos["domicilio"], PDO::PARAM_STR);
		$stmt->bindParam(":colonia", $datos["colonia"], PDO::PARAM_STR);
		$stmt->bindParam(":codigoPostal", $datos["codigoPostal"], PDO::PARAM_INT);
		$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
		

		if($stmt->execute()){

			echo '<pre>'; print_r($stmt); echo '</pre>';

			return "ok";	

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}
    
}
