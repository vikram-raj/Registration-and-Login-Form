<?php
	if(isset($errors) && !empty($errors)) {
		echo '<h1>Errors!</h1>
		<p class="error">The errors occurred:<br />';
		foreach($errors as $msg) {
			echo "-$msg<br />\n";
			}
			
			echo '</p><p>Please try again.</p>';
		}
?>
