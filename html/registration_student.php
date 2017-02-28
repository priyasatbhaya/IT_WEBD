<html>
	<head>	
	
		<title>Registration Page</title>
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="../css/registration_student_css.css"/>
		<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
		<style type="text/css"></style>
		<script src="../js/signup_validation_student.js"></script>
		
	</head>
	
	<body>
		
		<div class="nav">
		
		<div class="container">
			
				<ul>
					<li><a href="../html/main.html">Home</a></li>
					<li><a href="../html/registration_admin.html">Register-admin</a></li>
					<li><a href="../html/login_student.html">Login-student</a></li>
					<li><a href="../html/login_admin.html">Login-admin</a></li>
				</ul>
			
			</div>
		
		</div>
		
		<div id="formfull">
		<div id="form">
		<div id="heading" >
			
				<p><span id="student_style">Student </span><span id="registration_style">Registration</span></p>
			
		</div>
			
			<form action="form_student_proc.php" name="student_signup_form" onsubmit="return validateForm()" method="post">

				<p>User Name: <input name="username"type="text" id="a" placeholder="Your Name" required="required" onfocusin="name_in()" onfocusout="name_out()"></p>
				<p>Date of Birth: <input name="dob" type="date" id="a" placeholder="dd/mm/yyyy" required="required" onfocusout="dob_out()"></p>
				Gender: <div id="x"><div id="x1"><input type="radio" name="gender" value="f"> Female</div>
				<input type="radio" name="gender" value="m" checked>Male</div>
				<p>Age <input name="age" type="text" id="a" onclick ="getAge()" onfocusin="age_in()" required="required"></p>
				<p>Branch: 
				
					<select type="dropdown" name="list" id="a" required="required" onfocusout="branch_out()">
					
					<option value="">--Select--</option>
					<option value='bt'>BT</option>
					<option value='che'>CHE</option>
					<option value='civ'>CE</option>
					<option value='cse'>CSE</option>
					<option value='ee'>EE</option>
					<option value='ece'>ECE</option>
					<option value='it'>IT</option>
					<option value='me'>ME</option>
					<option value='mme'>MME</option>

					</select>
				
				</p>
				<p>Registration No: <input name="regno" type="text" id="a" onclick="getReg()" required="required" onfocusin="id_in()"></p>
				<p>E-mail Id: <input name="email" type="email" id="a" placeholder="sriharshashm@gmail.com" required="required" onfocusin="email_in()" onfocusout="email_out()"></p>
			
				<p>Password: <input name="password" type="password" id="a" placeholder="*********" required="required" onfocusin="pass_in()" onfocusout="pass_out()"></p>
				<p>Retype-Password: <input name="repassword" type="password" id="a" placeholder="*********" required="required" onfocusin="repass_in()" onfocusout="repass_out()"></p>
				<p>Contact No: <input name="cno" type="text" id="a" placeholder="7076XXXXXX" required="required" onfocusin="cno_in()" onfocusout="cno_out()"></p>
				<p>Upload image: <input name="pic" type="file" id="a" accept="image/*"> </p>
				Hobbies: <div id="x"><div id="x1"><input type="checkbox"> Music</div>
				<input type="checkbox">Cricket</div>
				<p>Address: <textarea name="addr" type="address" id="a" placeholder="Room-445, Hall-1, NIT,Durgapur"></textarea>
				<br>
				<br>
				<input type="submit" id="a" value="SIGN UP">
			</form>
		</div>
		</div>
		
	</body>
	
</html>

