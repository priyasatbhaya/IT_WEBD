<?php

if($_POST)
{
		print_r($_POST);
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "harsha444";
		$dbname = "studentdb";
		
		$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
		

		// Create connection
		if(mysqli_connect_errno()){
			die("Database connection failed: ".mysqli_connect_error()." (".mysqli_connect_errno(). " )");
		}
		
		//perform query
		
		$username=$_POST['username'];
		$birthdate=$_POST['dob'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];
		$branch=$_POST['list'];
		$id=$_POST['adminid'];
		$email=$_POST['email'];
		$pass=$_POST['password'];
		$contact=$_POST['cno'];
		$address=$_POST['addr'];
		
		
		$query = " 
			INSERT INTO `admin` (`username`, `date`, `Gender`, `age`, `branch`, `adminId`, `email`,
			`password`, `contact`, `address`) VALUES ('$username','$birthdate','$gender','$age','$branch','$id','$email','$pass','$contact','$address');";
		
		$result = mysqli_query($connection,$query);
		
		if(!$result){
			die("Database query failed!");
		}
			
		mysqli_close($connection);
}
?>