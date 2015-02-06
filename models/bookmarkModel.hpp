<?php

class BookmarkModel extends Model {
    
    public function __construct(){
        parent::__construct();
    }

    public function createUser() {

        $title = $_POST['bktitle'];
        $url = $_POST['useremail'];
        $userid = $_POST['userid'];

        $q = $this->db->prepare("INSERT INTO users (name, email, userpassword) values(:name, :email, :userpassword)");
        $q->execute([
            ":name" => $name,
            ":email" => $email,
            ":userpassword" => $userpassword
            ]);
        $arr = $q->errorInfo();
        if (empty($arr)) {
            print_r($arr);
        } else {
            header("Location: " . URL . "newuser/registered");
        }
    }

}