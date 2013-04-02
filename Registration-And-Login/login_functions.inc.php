<?php
	function redirect_user($page = 'a.php') {
		$url = 'http://' .$_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
		$url = rtrim($url, '/\\');
		
		$url .= '/'.$page;
		
		header("Location: $url");
		exit();
	}
	
	function check_login($dbc, $email = '', $pass1 = '') {
		$errors = array();
		
		if(empty($email)) {
			$errors[] = 'You forgot to enter email';
		}else {
			$e = mysqli_real_escape_string($dbc, trim($email));
			
		}
		
		if(empty($pass1)) {
			$errors[] = 'You forgot to enter password';
		} else {
			$p = mysqli_real_escape_string($dbc, trim($pass1));
		}
		
		if(empty($errors)) {
			$q = "SELECT user_id, first_name FROM user WHERE email='$e' AND pass1=SHA1('$p')";
			$r = @mysqli_query($dbc, $q);
			
			if(mysqli_num_rows($r) == 1) {
				$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
				return array(true, $row);
			} else {
				$errors[] = 'The email address and password entered do not match';
			}
		}
		return array(false, $errors);
	}
