<?php
	//check if idno is passed from the URL
	if(isset($_GET['itemno']))
	{
		include('db.php');
		$itemno = trim($_GET['itemno']);
		deleteInv($itemno);
		header('location: inventorypanel.php');
		//echo "Student record has been deleted.";
	}
?>