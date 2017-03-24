<html>
	<head>	
	
		<title>Login Page for admin</title>
		<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="../css/login_admin_css.css"/>
		<script src="../js/login_validation_admin.js"></script>

	</head>
	
	<body>
		
		<div class="nav">
		
		<div class="container">
			
				<ul>
					<li><a href="../html/main.html">Home</a></li>
					<li><a href="../html/registration_admin.php">Register-admin</a></li>
					<li><a href="../html/registration_student.php">Register-student</a></li>
					<li><a href="../html/login_student.php">Login-student</a></li>
				</ul>
			
			</div>
		
		</div>
		
		<div id="formfull">
		<div id="form">
		
		<div id="heading" >
			
				<p><span id="admin_style">Admin </span><span id="registration_style">Login</span></p>
			
		</div>
			
			<form action="login_admin_proc.php" name="admin_login_form" onsubmit="return validateForm()" method="post">
				
				<p>User Name: <input name="email" type="text" placeholder="sriharshashm@gmail.com" required="required" onfocusin="email_in()" onfocusout="email_out()"></p>
				<p>Password: <input name="password" type="password" placeholder="*********" required="required" onfocusin="pass_in()" onfocusout="pass_out()"></p>
				<br>
				<br>
				<a href="#"><p id="f_p">Forgot Password?</p></a>
				<input type="submit" value="SUBMIT">
			</form>
		</div>
		</div>
		
	</body>
	
</html>