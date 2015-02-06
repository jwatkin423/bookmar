<?php

class Login extends Controller {

	function __contruct() {
		parent::construct();

	}

	public function index(){
		$msg = '';
		$this->view->renderView('login/index', $msg);
	}

	public function signIN() {
		$userID = $_POST['useremail'];
		$userPassword = $_POST['userpassword'];
		$check = $this->model->checkCreds($userID, $userPassword);
	}

}