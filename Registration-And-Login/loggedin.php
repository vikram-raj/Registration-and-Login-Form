<?php
	if(!isset($_COOKIE['user_id'])) {
		require('login_functions.inc.php');
		redirect_user();
	}
	
	echo "<h1>Logged In!!</h1>
	<p>You are now logged in, {$_COOKIE['first_name']}!</p>
	<p><a href=\"logout.php\">Logout</a></p>";
	
?>
