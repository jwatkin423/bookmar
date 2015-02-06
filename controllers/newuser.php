<?php

class Newuser extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->view->renderView('newuser/index');
	}

	public function createUser() {
		$this->model->createUser();
	}

	public function registered() {
		$this->view->renderView('newuser/registered');
	}

	public function badEMail() {
		$this->view->regError = "Email already in use";
		$this->view->renderView('newuser/badEmail');
	}

}