<?php

if($_POST)
{
		//print_r($_POST);
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
		$id=$_POST['regno'];
		$email=$_POST['email'];
		$pass=$_POST['password'];
		$contact=$_POST['cno'];
		$address=$_POST['addr'];
		$t_board=$_POST['t_board'];
		$t_year=$_POST['t_year'];
		$t_marks=$_POST['t_marks'];
		$s_board=$_POST['s_board'];
		$s_year=$_POST['s_year'];
		$s_marks=$_POST['s_marks'];
		$degree=$_POST['degree'];
		$cgpa=$_POST['cgpa'];
		
		
		$query = " 
			INSERT INTO `students` (`username`, `date`, `Gender`, `age`, `branch`, `regno`, `email`,
			`pass`, `contact`, `address`,`t_board`,`t_year`,`t_marks`,`s_board`,`s_year`,`s_marks`,`degree`,`cgpa`) VALUES
			('$username','$birthdate','$gender','$age','$branch','$id','$email','$pass','$contact','$address','$t_board','$t_year','$t_marks','$s_board','$s_year','$s_marks','$degree','$cgpa');";
		
		$result = mysqli_query($connection,$query);
		
		if(!$result){
			die("Database query failed!");
		}
		else{
			header("Location: ../html/submit.php");
		}
			
		mysqli_close($connection);
}
?>



