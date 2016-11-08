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
	 	$block = mysql_query("select * from time_out where dates = '$date' ") or die (mysql_error());
		$count1=mysql_num_rows($block);
		
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);

       

if ($count > 0) 
  {
  	if($count1  == 0 ){
   session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['fname'] = $row['fname'];
    $_SESSION['mname'] = $row['mname'];
    $_SESSION['lname'] = $row['lname'];
	 
	 $fname = strtoupper($row['fname']);
	 $mname = strtoupper($row['mname']);
	 $lname = strtoupper($row['lname']);
	 
	 $full = "Welcome ".$fname. " " .$mname. " ".$lname. "! ". "You have successfully logged out. Bye!";
	 
	 				$stat = 1;
	 				$date = date('Y-m-d');
	 				$time = date("h:i a");
					mysql_query( "INSERT INTO time_out (username,dates,logout,stat) values ('$username', curdate(),curtime(), '$stat')") or die(mysql_error());
					mysql_query( "UPDATE time_in SET stat = '1' WHERE username = '$username' and dates = curdate()") or die(mysql_error());
					//online_stat($username);
					//online_stat($username);
					$msg = 
					My_Alert($full);
					session_destroy();

		}
		else{
				$full = "You have already logged out!";
				$msg = 
					My_Alert($full);

		}}
					else
					{
						?>
							<div class="alert alert-danger alert-dismissable" align='center'>
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<?php echo 'Invalid username and/or password'; ?>
							</div> 
						<?php
					}
		
				
			}

		mysql_close($conn);


?>

<!DOCTYPE html>
<html>
<head>
<title>Horror Booth 2015</title>
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
     <div class="contact-form">
	 <div class="signin">
     <form method="post">
	     <input type="text" id="username" name="username" class="user" value="Enter Your ID Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Username';}" />
		 <input type="password" id="password" name="password" class="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" />
         <input type="submit" name="submit1" value="Logout" />					
 			<p><a href="register.php">Register?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="searchpass.php">Forgot Password?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">Home</a></p>
      </form>
	 </div>
	 </div> 
</div>
<div class="footer">
     <p>Copyright &copy; 2015 Christian Barral. All Rights Reserved | Design by <a href="http://facebook.com/smileeypin">Christian Barral</a></p>
</div>

</body>
</html>