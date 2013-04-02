<?php 
	
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		require('connect.php');
		$errors = array();
		
		if(empty($_POST['first_name'])) {
			$errors[] = 'You forgot to enter your last name.';
		}
		else {
			$fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
		}
		
		if	(empty($_POST['last_name']))	{
			$errors[]	=	'You	forgot	to	enter	your	last	name.';
		}	else	{
				$ln	= mysqli_real_escape_string($dbc, trim($_POST['last_name']));
		}
		
		if(empty($_POST['email'])) {
			$errors[] = 'You forgot to enter your email address.';
		}
		else {
			$e = mysqli_real_escape_string($dbc, trim($_POST['email']));
		}
		
		if(!empty($_POST['pass1'])){
			if($_POST['pass1'] != $_POST['pass2']) {
				$errors[] = 'Your password did not match the confirmed password.';
			} else {
				$p = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
			}
		}
		else {
			$errors[] = 'You forgot to enter your password';
		}
		
		if(empty($_POST['phone'])) {
			$errors[] = 'You forgot to enter your phone number.';
		}
		else {
			$ph = mysqli_real_escape_string($dbc, trim($_POST['phone']));
		}
		
	    if(empty($errors)) {
			require('connect.php');
			
			$q = "INSERT INTO user (first_name, last_name, email, pass1, phone_no, registration_date) VALUES ('$fn',
			'$ln', '$e', SHA1('$p'), '$ph', NOW() )";
			
			$r = @mysqli_query ($dbc, $q);
			if($r) {
				
				echo '<h1>Thank you!</h1>
				<p>You are now registered. you will able to login !</p>
				<p><br /</p>';
			}
			
			else {
				'<h1>System error</h1>
				<p class="error">You cloud not be registered due to system error. We apologize for
				any inconvenience.</p>';
				
				echo '<p>'.mysqli_error($dbc). '<br/ ><br />Query:'.$q.'</p>';
			}
			mysqli_close($dbc);
			
			exit();
		} else {
			echo '<h1>Error!</h1>
			<p class="error">The following error(s) ocurred:<br />';
			foreach($errors as $msg) {
				echo "-$msg<br />\n";
				}
				echo '</p><p>Please try again.</p><p><br /></p>';
			}
			mysqli_close($dbc); 
		}
?>
	
