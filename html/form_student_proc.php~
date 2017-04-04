<?php

if($_POST)
{
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
		
		$username=$_POST['username'];
		$birthdate=$_POST['dob'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];
		$branch=$_POST['list'];
		$id=$_POST['regno'];
		$email=$_POST['email'];
		$pass=$_POST['password'];
		//$pass=md5($pass);
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
		
		
		$query="select * from students where email = '$email'";
		$result=mysqli_query($connection,$query);
		$numOfRows=mysqli_num_rows($result);
		if($numOfRows>0)
		{
			echo("Email already exists!!");
			mysqli_close($connection);
		}
		else{
		$query = " 
			INSERT INTO `students` (`username`, `date`, `Gender`, `age`, `branch`, `regno`, `email`,
			`pass`, `contact`, `address`,`t_board`,`t_year`,`t_marks`,`s_board`,`s_year`,`s_marks`,`degree`,`cgpa`,`status`) VALUES
			('$username','$birthdate','$gender','$age','$branch','$id','$email','$pass','$contact','$address','$t_board','$t_year','$t_marks','$s_board','$s_year','$s_marks','$degree','$cgpa',0);";
		
		$result = mysqli_query($connection,$query);
		
		if(!$result){
			die("Database query failed!");
		}
		else{
			header("Location: ../html/submit.php");
		}
			
		mysqli_close($connection);
		
		}
}
?>



