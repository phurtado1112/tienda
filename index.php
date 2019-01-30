<?php
	/**
	 * Created by PhpStorm.
	 * User: PabloAntonio
	 * Date: 21/01/2019
	 * Time: 9:40 PM
	 */

	require_once 'autoload.php';

	if (isset($_GET['controller'])) {
		$nombre_controlador = $_GET['controller'] . 'Controller';
	} else {
		$nombre_controlador = 'InicioController';
	}

	if (class_exists($nombre_controlador)) {
		$controlador = new $nombre_controlador();

		if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
			$action = $_GET['action'];
		} else {
			$action = 'inicio';
		}

		$controlador->$action();

	} else {

		$controlador = new $nombre_controlador();
		$action = 'inicio';
		$controlador -> $action();
	}


