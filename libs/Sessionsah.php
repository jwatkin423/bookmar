<?php 

class Sessionsah {

	public function initSess() {
		@session_start();
	}

	public static function setSess($v) {
		$userInfo = [];
		$userInfo['user_id'] = $v[0]['user_id'];
		$userInfo['name'] = $v[0]['name'];
		$userInfo['email'] = $v[0]['email'];
		$userInfo['isLoggedIn'] = true;

		$_SESSION['userInfo'] = $userInfo;
	}

	public static function getSess($k) {
		if (isset($_SESSION[$k]))
		return $_SESSION[$k];
	}

	public static function destroySess(){
		session_destroy();
	}

}