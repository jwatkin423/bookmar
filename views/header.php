<!DOCTYPE html>
<html lang="en">

<header>
	<title>Your BookMark App</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo URL; ?>public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo URL; ?>public/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo URL; ?>public/bootstrap/css/style.css">
	<script src="<?php echo URL; ?>public/bootstrap/js/jquery.min.js"></script>
	<script src="<?php echo URL; ?>public/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo URL; ?>public/bootstrap/js/main.js"></script>
</header>

<?php
	Sessionsah::initSess();
	$loggedIn = Sessionsah::getSess('userInfo');
	$isLogged = $loggedIn['isLoggedIn'];
?>
<body>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Joe's Wacky Bookmark App!</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo URL; ?>index">Home</a></li>
				<li><a href="<?php echo URL; ?>newuser">New User</a></li>
				<li></li>
				<?php if ($isLogged == true) : ?>
					<li><a href="<?php echo URL; ?>bookmark/logout">Log Out</a></li>
					<li><a href="<?php echo URL; ?>bookmark">Bookmarks</a></li>
				<?php else: ?>
					<li><a href="<?php echo URL; ?>login">Log In</a></li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>