<?php

class LoginModel extends Model {

	public function checkCreds($userID, $userPassword) {

		// Prepares the SQL statement check against users in the DB
		$q = $this->db->prepare("SELECT * FROM users WHERE email = :email AND userpassword = :userpassword");
		$q->execute([
			":email" => $userID,
			":userpassword" => $userPassword
			]);
		$rq = $q->fetchAll(PDO::FETCH_ASSOC);
		$rowCount = $q->rowCount();
		if ($rowCount == 1){
			Sessionsah::initSess();
			Sessionsah::setSess($rq);
			header("location: ". URL . "bookmark");
		} else {
			header("location: ". URL . "login/badCreds");
			exit;
		}
	}

}