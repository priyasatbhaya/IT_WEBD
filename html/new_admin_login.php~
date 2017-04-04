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
		
		$query = "SELECT * FROM admin where id='$id_temp'";
		$result = mysqli_query($connection, $query);
		
		
		if (mysqli_num_rows($result) > 0) {
			// if admin is there
			 $query = "Select id,username,email,contact,regno from students where status=0";
			 $result = mysqli_query($connection,$query);
			 //echo("I'm inhere");
			 //DELETE ITEMS
			 //print_r($_POST);
			if(isset($_POST['DELETE'])){
			$count=0;
		//while($row = mysqli_fetch_assoc($result))
		//{
			$row = mysqli_fetch_assoc($result);
			$index = $row['id'];
			//echo("INDEX ".$index);
			//print_r($row);
			//if(array_key_exists($index, $_POST))
			//{
				/*print_r($row);
				echo ("INDEX " . $index);
				$count = $count+1;
				$query = "SELECT * FROM students ";
			    $query .= "WHERE id = '{$index}' ";
			    $result_set = mysqli_query($connection,$query);
			    confirm_query($result_set);

			    if (mysqli_num_rows($result_set)==1)
			    {*/
			   /* 	$query2 = "DELETE FROM students ";
			    	$query2 .= "WHERE id = '{$index}' ";
			    	$result_set2 = mysqli_query($connection,$query2);
			    	confirm_query($result_set2);
			    	redirect_to("new_admin_login.php"); */
			    //}
			//}
		//}
		
		foreach($_POST['checkbox'] as $checkbox){
				//echo $checkbox;
				$query2 = "DELETE FROM students ";
			   $query2 .= "WHERE id = $checkbox ";
			   $result_set2 = mysqli_query($connection,$query2);
			   //confirm_query($result_set2);
			   
			}header("Location: new_admin_login.php");
		
		if($count<=0) echo 'No students were selected';
		else echo 'Selected students deleted';
		
		}
		
		//FOR ACCEPTAL
		
		if(isset($_POST['ACCEPT'])){
			$count=0;
		//while($row = mysqli_fetch_assoc($result))
		//{
			$row = mysqli_fetch_assoc($result);
			$index = $row['id'];
		   foreach($_POST['checkbox'] as $checkbox){
		   	$count=$count+1;
				echo ("Checkbox::".$checkbox);
				$query2 = "UPDATE students SET status=1 ";
			   $query2 .= "WHERE id = $checkbox ";
			   $result_set2 = mysqli_query($connection,$query2);
			   //confirm_query($result_set2);
			   //header("Location: loggedinpage.php");
			}header("Location: new_admin_login.php");
		
		if($count<=0) echo 'No students were selected';
		else echo 'Selected students deleted';
		
		}		
		

	
		} else {
			echo "0 results";
		}

	}
	else
	{
		header("Location: login_admin.php");
	}
?>



<html lang="en">
<head>
	<title>Profile page</title>
	<link href="css/style.css" rel='stylesheet' type='text/css'/>
	<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">
	<style>
	table {
    width: 100%;
	}

	th {
    height: 50px;
    position: relative;
    left:-20px;
	}

	td {
    height: 50px;
	}	
	input[type=submit] {
				padding:5px 15px; 
				background:#44C1A9; 
				border:0 none;
				cursor:pointer;
				margin:20 -20 10 60;
				color:white;
				font-weight:bold;
				font-size:15px;
				font-family:'Play', sans-serif;
				position: relative;
				float: right;
				left: 50%;
				z-index:1;

	}
	input[type=submit]:hover{
				
				background: #0D2635;
				cursor: pointer;
				transition: background .5s;	
			}
	</style>
</head>
<body>

	<div id = "navi">
		<p id="navi-p"><a href = 'logout_admin.php'><img id="lo" src='images/lo.png'></a></p>
	</div>
	
	
	<h1>WELCOME ADMIN</h1>
		<div class="main-agileits">
			
				<form action="new_admin_login.php" method="POST">
				<table style="color: #CCCCCC" align="center" border="1px" bordercolor="white">
					<tr>
						<th> <i> Name </i> </th>
						<th> <i> Email </i> </th>
						<th> <i> Registration No. </i> </th>
						<th> <i> Mobile No. </i></th>
					</tr>	

					<?php 
						while($row=mysqli_fetch_assoc($result)){
					?>
						<tr>
						<!--<p>This is just a para that we want to use</p> -->
							<td> <?php 	echo $row['username']; ?> </td>
							<td> <?php 	echo $row['email']; ?> </td>
							<td> <?php 	echo $row['regno']; ?> </td>
							<td> <?php 	echo $row['contact']; ?> </td>
						<td> <input type="checkbox" value="<?php echo($row['id']); ?>" name="checkbox[]"> </td>
						</tr>	

					<?php } ?>
					<tr>
						<th> <input type="submit" align="center" name="DELETE" value="DECLINE"> </th>
						<th> <input type="submit" align="center" name="ACCEPT" value="ACCEPT"> </th>					
					</tr>
				</table>
			</form>
			

			
			<div class="clear"></div>
		</div>
</body>
</html>
