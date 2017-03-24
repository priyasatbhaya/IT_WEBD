<?php

	session_start();
	
	if(isset($_SESSION['id']))
	{
		echo "<p>Logged In! <a href = 'logout.php'>Log out</a></p>";

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
		
				
		$query="select * from students";
		$result=mysqli_query($connection,$query);
		$numOfRows=mysqli_num_rows($result);
		
		if(!$result){
			die("Database query failed!");
		}
		else{
    		// output data of each row
    		while($row = $result->fetch_assoc()) {
        		echo "Roll no: " . $row["regno"]. " - Name: " . $row["username"]. "<br>";
    		}
		}	
		mysqli_close($connection);
		
		
	}
	else
	{
		header("Location: login_student.php");
	}

?>