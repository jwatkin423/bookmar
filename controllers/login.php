<?php

class Login extends Controller {

	function __contruct() {
		parent::construct();

	}

	public function index(){
		$this->view->renderView('login/index');
	}

	public function signIN() {
		$userID = $_POST['useremail'];
		$userPassword = $_POST['userpassword'];
		$check = $this->model->checkCreds($userID, $userPassword);
	}

	public function badCreds() {
		$this->view->loginError = "Invalid username or password";
		$this->view->renderView('login/index');
	}

}