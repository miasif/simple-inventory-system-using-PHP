<!DOCTYPE HTML>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASIF MIA</title>
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body> 

   <div class="header_area">
		<div class="header_left">
			<h1>XCompany</h1>
		</div>
		
		 <div class="header">	
			<div class="header_index">
				<h3><a href="index.php">Home</a></h3>
			</div>
			<div class="header_login">
				<h3><a href="login.php">Login</a></h3>
			</div>
			<div class="header_registration">
				<h3><a href="registration.php">Registration</a></h3>
		    </div>
		</div>
	</div>	
	
	
	<div class="content_area">
		<h1>LOGIN</h1>
		<form method="post">
			<table>
				
				<tr>
					<td><b>Username :</b></td>
					<td><input type="text" name="uname"/></td>
					
				</tr>
				
				<tr>
					<td><b>Password :</b></td>
					<td><input type="password" name="pass"/></td>
					
				</tr>
				

				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit" /></td>
					
				</tr>
				
			</table>

		
		</form>
	
	</div>
	<div class="footer_area">
		
	</div>
    


</body>
</html>

<?php
	session_start();
?>
<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "userdb";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
		   
		  
		  $sql = "SELECT * FROM users WHERE username = '".$_POST["uname"]."' and password = '".$_POST["pass"]."'";
		  $result = $conn->query($sql);
		  if ($result->num_rows > 0)
		  {
			  $_SESSION["uname"]=$_POST["uname"];
			  header("location: dashboard.php");
		  }
			  
		  else
			  echo "wrong email or password";
   }
	?>