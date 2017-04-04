<html>
	<head>	
	
		<title>Login Page for student</title>
		<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="../css/login_student_css.css"/>
		<script src="../js/login_validation_student.js"></script>
	
	</head>
	
	<body>
		
		<div class="nav">
		
		<div class="container">
			
				<ul>
					<li><a href="../html/main.html">Home</a></li>
					<!--li><a href="../html/registration_admin.php">Register-admin</a></li-->
					<li><a href="../html/registration_student.php">Register-student</a></li>
					<li><a href="../html/login_admin.php">Login-admin</a></li>
				</ul>
			
			</div>
		
		</div>
	
		<div id="formfull">
		<div id="form">
			<div id="heading" >
			
				<p><span id="student_style">Student </span><span id="registration_style">Login</span></p>
			
			</div>
			
			<form action="login_student_proc.php" name="student_login_form" submit="return validateForm()" method="post">
				
				<p>E-mail Id: <input name="email" type="email" placeholder="sriharshashm@gmail.com" required="required" onfocusin="email_in()" onfocusout="email_out()"></p>
				<p>Password: <input name="password" type="password" placeholder="*********" required="required" onfocusin="pass_in()" onfocusout="pass_out()"></p>
				<div id="x1"><input name="stayLoggedIn" type="checkbox" value=0 ></div><div id="x">Stay signed in</div>
				<br>
				<br>
				<a href="#"><p id="f_p">Forgot Password?</p></a>
				<input type="submit" value="SUBMIT">
			</form>
		</div>
		</div>
		
	</body>
	
</html>
