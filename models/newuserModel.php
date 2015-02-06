<?php

class NewuserModel extends Model {
	
	public function __construct(){
		parent::__construct();
	}

	

	public function createUser() {

		$name = $_POST['username'];
		$email = $_POST['useremail'];
		$userpassword =$_POST['userpassword'];

		$ceq = $this->db->prepare("SELECT email FROM users");
		$ceq->execute();
		$rq = $ceq->fetchAll(PDO::FETCH_ASSOC);
		foreach($rq as $r) {
			echo $r['email'];
			if ($r['email'] == $email) {
				$emailStatus = false;
				break;
			} else {
				$emailStatus = true;
			}
		}
		if ($emailStatus == true) {
			$q = $this->db->prepare("INSERT INTO users (name, email, userpassword) values(:name, :email, :userpassword)");
			$q->execute([
				":name" => $name,
				":email" => $email,
				":userpassword" => $userpassword
				]);
			$arr = $q->errorInfo();
			if (empty($arr)) {
			} else {
				header("Location: " . URL . "newuser/registered");
			}
		} else {

			header("location: " . URL . "newuser/badEmail");
			exit;
		}
	}

}