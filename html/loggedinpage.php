<?php

	session_start();
	
	if(isset($_SESSION['id']))
	{
		echo "<p>Logged In! <a href = 'logout.php'>Log out</a></p>";
	}
	else
	{
		header("Location: login_student.php");
	}

?>