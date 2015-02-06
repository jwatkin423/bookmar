<?php

class View extends Controller {
	
	function __construct() {

	}

	public function renderView($name) {
		require 'views/header.php';
		require 'views/' . $name . '.php';
		require 'views/footer.php';
	}
}