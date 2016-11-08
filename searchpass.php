
<?php
include('dbcon.php');
function My_Alert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

if (isset($_POST['submit1'])) {
	$fname 	= $_POST['fname'];
	
	
		$result=mysql_query("select username, password from employee where username='$username' 
          or fname='$fname'")or die (mysql_error());
		
$count=mysql_num_rows($result);
$row=mysql_fetch_array($result);

       

if ($count > 0) 
  {
   session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $username = $row['username'];
    $pass = $row['password'];
	 
	 $full = "Your username is ".$username.","." and your Password is ". $pass."!"." Don't forget it next time!";
	 $msg = My_Alert($full);  
	}
	else
	{
		 $full = $username. " User doesn't exist!";
		 $msg = My_Alert($full); 

	}

}

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
<h1>Volunteer Query</h1>
     <div class="contact-form">
	 <div class="signin">
     <form method="post">
		  <input type="text" id="fname" name="fname" class="user" value="Enter Your First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your First Name';}" />
         <input type="submit" name="submit1" value="Search Username and Password" />
         <p><a href="check_in.php">Login?</a></p>					 
     </form>
	 </div>
	 </div> 
</div>
<div class="footer">
     <p>Copyright &copy; 2015 Christian Barral. All Rights Reserved | Design by <a href="http://facebook.com/smileeypin">Christian Barral</a></p>
</div>

</body>
</html>