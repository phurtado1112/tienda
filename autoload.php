<?php
	/**
	 * Created by PhpStorm.
	 * User: PabloAntonio
	 * Date: 21/01/2019
	 * Time: 10:51 PM
	 */
	function autocargar($classname) {
		include 'controllers/' . $classname . '.php';
	}

	spl_autoload_register('autocargar');