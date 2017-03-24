<?php
if($_POST)
{

		/*session_start();
		
		if(isset($_SESSION['id']))
		{
			header("Location: loggedinpage.php");
		}*/
		//print_r($_POST);


		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "harsha444";
		//$dbpass = "ubuntu";
		$dbname = "studentdb";
		
		$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
		

		// Create connection
		if(mysqli_connect_errno()){
			die("Database connection failed: ".mysqli_connect_error()." (".mysqli_connect_errno(). " )");
		}
		
		//perform query
		$email=$_POST['email'];
		$pass=$_POST['password'];
		
		$query = "select * from students where email='$email'";
		
		$result = mysqli_query($connection, $query);
		
		$row = mysqli_fetch_array($result);
		
		if(isset($row))
		{
			if($pass == $row['pass'])
			{
				$_SESSION['id']=$row['id'];
				
				header("Location: loggedinpage.php");
				
			}
			else
			{
				echo("Invalid");
			}
		}
		else
		{	
			echo("Invalid email / Password!!");
		}
		mysqli_close($connection);
}
	
?>