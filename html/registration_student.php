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
					<li><a href="../html/registration_admin.php">Register-admin</a></li>
					<li><a href="../html/login_student.html">Login-student</a></li>
					<li><a href="../html/login_admin.html">Login-admin</a></li>
				</ul>
			
			</div>
		
		</div>
		<div id="formfull">
		<div id="form">
		<div id="heading" >
			
				<p id="stu"><span id="student_style">1. Personal </span><span id="registration_style">Details</span></p>
				<p id="aca"><span id="aca_style">2. Academic </span><span id="det_style">Details</span></p>

		</div>
			
			<form action="form_student_proc.php" name="student_signup_form" submit="return validateForm()" method="post">

				<div id="first">
				
				<p>User Name: <input name="username"type="text" id="a" placeholder="Your Name" required="required" onfocusin="name_in()" onfocusout="name_out()"></p>
				<p>Date of Birth: <input name="dob" type="date" id="a" placeholder="dd/mm/yyyy" required="required" onfocusout="dob_out()"></p>
				Gender: <div id="x"><div id="x1"><input type="radio" name="gender" value="f"> Female</div>
				<input type="radio" name="gender" value="m" checked>Male</div>
				<p>Age <input name="age" type="text" id="a" onclick ="getAge()" onfocusin="age_in()" required="required"></p>

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
				<input type="reset" id="res" value="Reset">
				<input type="button" onclick="next_step1()" id="nex" value="Next">
				
				</div>
				
				<div id="second">
				
				<p>10th Board: 
				
					<select type="dropdown" name="t_board" id="a" required="required" onfocusout="tboard_out()">
					
					<option value="">Your Board</option>
					<option value='cbse'>CBSE</option>
					<option value='icse'>ICSE</option>
					<option value='state'>State Board</option>

					</select>
				
				</p>
				<p>Year of passing: 
				
					<select type="dropdown" name="t_year" id="a" required="required" onfocusout="tyear_out()">
					
					<option value="">Select Year</option>
					<option value='2013'>2013</option>
					<option value='2012'>2012</option>
					<option value='2011'>2011</option>

					</select>
				
				</p>
				<p>Tenth Marks (in %): <input name="t_marks" type="text" id="a" placeholder="10th marks" required="required" onfocusin="tmarks_in()" onfocusout="tmarks_out()"></p>
				<p>12th Board: 
				
					<select type="dropdown" name="s_board" id="a" required="required" onfocusout="sboard_out()">
					
					<option value="">Your Board</option>
					<option value='cbse'>CBSE</option>
					<option value='icse'>ICSE</option>
					<option value='state'>State Board</option>

					</select>
				
				</p>
				<p>Year of passing: 
				
					<select type="dropdown" name="s_year" id="a" required="required" onfocusout="syear_out()">
					
					<option value="">Select Year</option>
					<option value='2013'>2013</option>
					<option value='2012'>2012</option>
					<option value='2011'>2011</option>

					</select>
				
				</p>
				<p>12th Marks (in %): <input name="s_marks" type="text" id="a" placeholder="12th marks" required="required" onfocusin="smarks_in()" onfocusout="smarks_out()"></p>
				Degree: <div id="x"><div id="x1"><input type="radio" name="degree" value="m.tech"> M.tech</div>
				<input type="radio" name="degree" value="b.tech" checked>B.tech</div>
				<p>Branch: 
				
					<select type="dropdown" name="list" id="a" required="required" onfocusout="branch_out()">
					
					<option value="">Your Branch</option>
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
				<p>CGPA: <input name="cgpa" type="text" id ="a" placeholder="Your CGPA (till date)" required="required" onfocusin="cgpa_in()" onfocusout="cgpa_out()">
				<p>Remarks: <textarea name="rem" type="address" id="a" placeholder="Please provide remarks (if any)"></textarea>
				<br>
				<br>
				<input type="button" id="pre" onclick="prev_step1()" value="Previous">
				<input type="submit" id="fin" value="SIGN UP">
				
				</div>
			</form>
		</div>
		</div>
		
		<!--<div id="formfull">
		<div id="form">
		<div id="heading" >
			
				<p><span id="student_style">Academic </span><span id="registration_style">Details</span></p>
			
		</div>
			
			

			
		</div>
		</div>-->
		
	</body>
	
</html>
