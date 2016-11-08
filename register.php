
<?php
include('db.php');
function My_Alert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
if(isset($_POST['register']))
{
			$firstname = trim($_POST['fname']);
			$middlename = trim($_POST['mname']);
			$lastname = trim($_POST['lname']);
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);
			$activation = trim($_POST['activation']);
			$position = trim($_POST['position']);
			if(($firstname != '') || ($middlename != '') || ($lastname != '') || ($password != '') || ($username != ''))
			{
				try {
					$handler = new PDO('mysql:host=localhost;dbname=attendance','root', '');
					$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch (PDOException $e){
					exit($e->getMessage());
				}

				$sthandler = $handler->prepare("SELECT fname, lname FROM employee WHERE fname = :fname and lname = :lname");
				$sthandler->bindParam(':fname', $firstname);
				$sthandler->bindParam(':lname', $lastname);
				$sthandler->execute();

				if($sthandler->rowCount() <= 0)
				{
						try {
						$handler = new PDO('mysql:host=localhost;dbname=attendance','root', '');
						$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					} catch (PDOException $e){
						exit($e->getMessage());
					}

					$sthandler1 = $handler->prepare("SELECT username FROM employee WHERE username = :username");
					$sthandler1->bindParam(':username', $username);
					$sthandler1->execute();
					if($sthandler1->rowCount() <= 0){
						add_user( $username, $password, $firstname, $middlename, $lastname, $activation, $position);
					$full = "Welcome ".$firstname. " " .$middlename. " ".$lastname. " ". "You are successfully registered. Enjoy your work!";
					$msg = 
							My_Alert($full);  
					}
					else{
						$full = "Your username is already existing! Please try another :D";
					$msg = 
							My_Alert($full);
					}
				}
				else{
					$full = "This person is already in the database!";
					$msg = 
							My_Alert($full);  
				}
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
<h1>Volunteer Registration</h1>
     <div class="contact-form">
	 <div class="signin">
     <form method="post">
	     <input type="text" id="username" name="username" class="user" value="Enter Your Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Username';}" />
		 <input type="password" id="password" name="password" class="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" />
		  <input type="text" id="fname" name="fname" class="user" value="Enter Your First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your First Name';}" />
		   <input type="text" id="mname" name="mname" class="user" value="Enter Your Middle Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Middle Name';}" />
		    <input type="text" id="lname" name="lname" class="user" value="Enter Your Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Last Name';}" />
		    <input type="hidden" name="activation" id="activation" value = "0">
		    <input type="hidden" name="position" id="position" value = "Volunteer">
         <input type="submit" name="register" value="Register" />
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