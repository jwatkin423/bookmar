<?php

class Bookmark extends Controller {

	public function __construct() {
		parent::__construct();
		Sessionsah::initSess();
		if( ! Sessionsah::getSess('userInfo')) {
			Sessionsah::destroySess();
			header("Location: " . URL . "login");
			exit;
		} else {
			$loggedIn = Sessionsah::getSess('userInfo');
		}
		
		
		$this->_sess = $loggedIn['user_id'];
		
		if ($loggedIn['email'] == '' && $loggedIn['isLoggedIn'] != false) {
			Sessionsah::destroySess();
			header("Location: " . URL . "login");
			exit;
		}
	}

	public function index() {
		$userID = $this->_sess;
		$this->view->bmks = $this->model->getBookmarks($userID);
		$this->view->renderView('bookmarks/index');
	}

	public function add() {
		$this->view->renderView('bookmarks/addBookmark');
	}

	public function create() {
		$userID = $this->_sess;
		$this->model->createBoomMark($userID);
	}

	public function edit($id) {
		$this->view->bmkEdit = $this->model->getSingleBookmark($id);
		$this->view->renderView('bookmarks/editBookmark');
	}

	public function update() {
		$this->model->editBookmark();
	}

	public function delete($id) {
		$this->model->delete($id);
	}

	public function logout() {
		Sessionsah::destroySess();
		header("Location: " . URL . "login");
		exit;
	}

}