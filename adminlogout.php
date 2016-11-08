<?php
include('dbcon.php');
function My_Alert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
session_start();
$username = $_SESSION['username'];
$date = date("Y-m-d");
	 	$block = mysql_query("select * from time_out where dates = '$date' ") or die (mysql_error());
		$count1=mysql_num_rows($block);
if($count1  >= 0 ){

	$full = "You have successfully logged out!";
	mysql_query( "INSERT INTO admin_timeout (username,dates,logout) values ('$username', curdate(),curtime())") or die(mysql_error());
	$msg = My_Alert($full);
	session_destroy();
	header("Location: index.php");
}
else{

	$full = "You have already logged out!";
				$msg = 
					My_Alert($full);

}
?>