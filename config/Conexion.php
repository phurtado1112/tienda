<?php
	/**
	 * Created by PhpStorm.
	 * User: PabloAntonio
	 * Date: 21/01/2019
	 * Time: 10:58 PM
	 */

	class Conexion {
		public static function conectar() {
			$conexion = new mysqli('localhost', 'root', '', 'empleado');
			$conexion->query("SET NAMES 'utf8'");

			return $conexion;
		}
	}

//	require_once 'config.php';
//
//	class Conexion {
//		private $server;
//		private $database;
//		private $usuario;
//		private $password;
//		private $charset;
//
//		public function __construct(){
//			$this->server = constant('SERVER');
//			$this->database = constant('DATABASE');
//			$this->usuario = constant('USUARIO');
//			$this->password = constant('PASSWORD');
//			$this->charset = constant('CHARSET');
//		}
//
//		public static function conectar(){
//
//			$conexion = null;
//
//			try {
//				$conexion = new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE . ";",
//					USUARIO,
//					PASSWORD,
//					[
//						PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
//						PDO::ATTR_ERRMODE,
//						PDO::ERRMODE_EXCEPTION
//					]);
//
//			} catch (PDOException $e){
//				print_r('Error de Conexión: ' .$e->getMessage());
//			}
//
//			return $conexion;
//		}
//	}