<?php

class BookmarkModel extends Model {

	function __construct() {
		parent::__construct();
		
	}

	public function getBookmarks($userID) {
		$q = $this->db->prepare("SELECT * FROM bookmarks WHERE user_id = :user_id");
		$q->execute([
			":user_id" => $userID
			]);
		$rq = $q->fetchAll(PDO::FETCH_ASSOC);
		return $rq;
	}
	
	public function createBoomMark($userID) {
		$bktitle = $_POST['bktitle'];
		$bkurl = $_POST['bkurl'];
		if (isset($_POST['https'])) {
			$bksecure = 's';
		} else {
			$bksecure = 'n';
		}
		$bkuserid = $userID;

		$q = $this->db->prepare("INSERT INTO bookmarks (user_id, bk_title, bk_url, secure) values(:user_id, :bktitle, :bkurl, :secure)");
		$q->execute([
			":user_id" => $bkuserid,
			":bktitle" => $bktitle,
			":bkurl" => $bkurl,
			":secure" => $bksecure

			]);
		$arr = $q->errorInfo();
		if (empty($arr)) {
		} else {
			header("Location: " . URL . "bookmark");
		}
	}

	public function getSingleBookmark($id) {
		$q = $this->db->prepare("SELECT * FROM bookmarks WHERE bk_id = :bk_id");
		$q->execute([
			":bk_id" => $id
			]);
		$rq = $q->fetch(PDO::FETCH_ASSOC);
		
		return $rq;
	}

	public function editBookmark() {
		$bkTitle = $_POST['bktitle'];
		$bkUrl = $_POST['bkurl'];
		$bkID = $_POST['bkid'];
		$q = $this->db->prepare("UPDATE bookmarks 
			SET `bk_title` = :bk_title, `bk_url` = :bk_url
			WHERE bk_id = :bk_id");
		$q->execute([
			":bk_title" => $bkTitle,
			":bk_url" => $bkUrl,
			":bk_id" => $bkID
			]);
		header("Location: " . URL . "bookmark");
	}

	public function delete($id) {
		$q = $this->db->prepare("DELETE FROM bookmarks WHERE bk_id = :bk_id");
		$q->execute([
			":bk_id" => $id
			]);
		header("Location: " . URL . "bookmark");
	}

}