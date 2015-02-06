<?php

class Controller {

	function __construct(){
		$this->view = new View();
	}

	public function loadModel($name) {

		$modelPath = 'models/' . $name . 'Model.php'; 

		if (file_exists($modelPath)) {
			require 'models/' . $name . 'Model.php';
			$modelName = $name . 'Model';
			$this->model = new $modelName();
		} elseif ($name != 'index' && $name != 'error') {
			echo "Model Doesn't exist, name:" . $name;
		} else {
			$msg = "There seems to be an error with model for this class!";
		}
	}
}

