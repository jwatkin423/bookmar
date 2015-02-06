<?php

class Database extends PDO {

	function __construct() {
		parent::__construct('mysql:host=localhost;dbname=bookmark', 'root', 'Orange34');
	}

}