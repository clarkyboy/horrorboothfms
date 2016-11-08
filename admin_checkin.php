
<?php
include('dbcon.php');
function My_Alert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

if (isset($_POST['submit1'])) {
	$username	=  $_POST['username'];
	$password 	= $_POST['password'];
	
	
		$result=mysql_query("select * from employee where username='$username' 
          AND password='$password'")or die (mysql_error());
		
		$date = date("Y-m-d");
	 	$block = mysql_query("select * from time_in where username = '$username' and dates = '$date' ") or die (mysql_error());
		$count1=mysql_num_rows($block);
		
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);

       

if ($count > 0) 
  {
 	
  	if($count1 <= 0 ){
  		if($row['position'] === 'Admin'){
   session_start();
  
    $_SESSION['username'] = $row['username'];
    $_SESSION['fname'] = $row['fname'];
    $_SESSION['mname'] = $row['mname'];
    $_SESSION['lname'] = $row['lname'];
	$_SESSION['position'] = $row['position'];
	 $fname = strtoupper($row['fname']);
	 $mname = strtoupper($row['mname']);
	 $lname = strtoupper($row['lname']);
	 
	 $full = "Welcome ".$fname. " " .$mname. " ".$lname. "! ". "You have successfully logged in. Enjoy your work!";
	 

					mysql_query( "INSERT INTO admin_timein (username,dates,login) values ('$username', curdate(),curtime())") or die(mysql_error());
					$msg = 
					My_Alert($full);  
					header("Location: adminpanel.php"); 
					exit();
		}
		else{
				$full = "You don't have administrator rights";
				$msg = 
					My_Alert($full);

		}}
		else{
				$full = "You have already logged in!";
				$msg = 
					My_Alert($full);
					header("Location: adminpanel.php");
					exit();

		}
			}
					else
					{
						
						$full = "Invalid username and password!";
							$msg = 
								My_Alert($full);
					}
					

				
			}

		mysql_close($conn);


?>
<!DOCTYPE html>
<html>
<head>
<title>Horror Booth 2016 Admin Login</title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Simple User Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, SonyErricsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
 <script src="js/bootstrap.min.js"></script>
 <link href="js/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h1>HORROR BOOTH ATTENDANCE</h1>
<h1>Administrator Login</h1>>
     <div class="contact-form">
	 <div class="signin">
     <form method="post">
	     <input type="text" id="username" name="username" class="user" value="Enter Your Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Username';}" />
		 <input type="password" id="password" name="password" class="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" />
         <input type="submit" name="submit1" value="Login" />					
		 <p><a href="admin_register.php">Register?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="searchpass.php">Forgot Password?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">Home</a></p>  
     </form>
	 </div>
	 </div> 
</div>
<div class="footer">
     <p>Copyright &copy; 2015 Christian Barral. All Rights Reserved | Design by <a href="http://facebook.com/smileeypin">Christian Barral</a></p>
</div>

</body>
</html>