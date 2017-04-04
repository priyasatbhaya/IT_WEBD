<?php
	
	
	session_start();
	
	if(isset($_SESSION['id']))
	{
		//echo "<p>Logged In! <a href = 'logout.php'><img src='images/lo.png'></a></p>";
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "harsha444";
		$dbname = "studentdb";
		
		$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
		
		if(mysqli_connect_errno()){
			die("Database connection failed: ".mysqli_connect_error()." (".mysqli_connect_errno(). " )");
		}
		
		$id_temp=$_SESSION['id'];
		
		$query = "SELECT * FROM students where id='$id_temp'";
		$result = mysqli_query($connection, $query);
		
		
		if (mysqli_num_rows($result) > 0) {
			// output data of each row
			$row = mysqli_fetch_assoc($result);
			/*echo("email: " . $row["email"] . "<br>");
			echo($row["pass"]);
			echo($row["Gender"]);
			echo($row["date"]);*/
			$name = ($row["username"]);
			$dob = ($row["date"]);
			$gender = ($row["Gender"]);
			$age = ($row["age"]);
			$branch = ($row["branch"]);
			$rollno = ($row["regno"]);
			$email = ($row["email"]);
			$phone=($row["contact"]);
			$addr = ($row["address"]);
			$t_board = ($row["t_board"]);
			$t_year = ($row["t_year"]);
			$t_marks = ($row["t_marks"]);
			$s_board = ($row["s_board"]);
			$s_year = ($row["s_year"]);
			$s_marks = ($row["s_marks"]);
			$degree = ($row["degree"]);
			$cgpa = ($row["cgpa"]);
			$pic="nit_icon.png";
			if($branch == "it")
			{
				$branch="INFORMATION TECHNOLOGY";
			}
			else if($branch == "bt")
			{
				$branch="BIO-TECHNOLOGY";
			}
			else if($branch == "che")
			{
				$branch="CHEMICAL ENGINEERING";
			}
			else if($branch == "civ")
			{
				$branch="CIVIL ENGINEERING";
			}
			else if($branch == "cse")
			{
				$branch="COMPUTER SCIENCE";
			}
			else if($branch == "ece")
			{
				$branch="ECE";
			}
			else if($branch == "ee")
			{
				$branch="ELECTRICAL ENGINEERING";
			}
			else if($branch == "mme")
			{
				$branch="METTULURGICAL";
			}
			
		} else {
			echo "0 results";
		}

	}
	else
	{
		header("Location: login_student.php");
	}
?>

<html lang="en">
<head>
	<title>Profile page</title>
	<link href="css/style.css" rel='stylesheet' type='text/css'/>
	<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">
</head>
<body>
	
	<div id = "navi">
		<p id="navi-p"><a href = 'logout.php'><img id="lo" src='images/lo.png'></a></p>
	</div>

	<h1>WELCOME <?php echo("$name"); ?></h1>
		<div class="main-agileits">
		<div class="right-wthree">
				<img src="images/<?php echo($pic);?>" alt="image" />
				<h2><?php echo("$name"); ?></h2>
				<p><?php echo("$branch"); ?></p>
			</div>
			<div class="left-w3ls">
			<ul class="address">
				<li>
					<ul class="address-text und" >
						<li><b>PERSONAL DETAILS </b></li>
						<hr>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>NAME </b></li>
						<li>: <?php echo("$name"); ?></li>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>Date of Birth </b></li>
						<li>: <?php echo("$dob"); ?></li>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>Gender </b></li>
						<li>: <?php if($gender=="m"){echo("Male");}else{echo("Female");} ?></li>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>Age </b></li>
						<li>: <?php echo("$age"); ?></li>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>E-mail </b></li>
						<li>: <?php echo("$email"); ?></li>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>Contact </b></li>
						<li>: <?php echo("$phone"); ?></li>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>Address </b></li>
						<li>: <?php echo("$addr"); ?></li>
					</ul>
				</li>
				<li>
					<ul class="address-text und" >
						<br>
						<li><b>ACADEMIC DETAILS </b></li>
						<hr>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>Tenth Board </b></li>
						<li>: <?php echo("$t_board"); ?></li>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>Tenth year of passing </b></li>
						<li>: <?php echo("$t_year"); ?></li>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>Tenth marks (in %)</b></li>
						<li>: <?php echo("$t_marks"); ?></li>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>12th Board </b></li>
						<li>: <?php echo("$s_board"); ?></li>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>12th year of passing </b></li>
						<li>: <?php echo("$s_year"); ?></li>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>12th marks (in %)</b></li>
						<li>: <?php echo("$s_marks"); ?></li>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>Degree </b></li>
						<li>: <?php echo("$degree"); ?></li>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>Branch </b></li>
						<li>: <?php echo("$branch"); ?></li>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>Roll number </b></li>
						<li>: <?php echo("$rollno"); ?></li>
					</ul>
				</li>
				<li>
					<ul class="address-text">
						<li><b>CGPA </b></li>
						<li>: <?php echo("$cgpa"); ?></li>
					</ul>
				</li>
				
				
			</ul>
				
		
					

			</div>
			
			<div class="clear"></div>
		</div>
</body>
</html>