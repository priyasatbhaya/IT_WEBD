<?php

	session_start();
	
	if(isset($_SESSION['id']))
	{

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
    		echo "<table><tr><th>ID</th><th>Name</th><th>Roll no</th><th>Profile</th></tr>";
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["regno"]."</td><td>"."<a href = 'loggedinpage.php'>".$row["email"]."</a><button>Accept</button></td></tr>";
			}	
		mysqli_close($connection);	
		}
	}

?>