<?php

class Conexion{

	static public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=albazan", "root", "31a2wn6a");

		$link->exec("set names utf8");

		return $link;

	}

}