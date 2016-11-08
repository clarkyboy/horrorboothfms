<?php
$pdo = new PDO("mysql:host=localhost;dbname=cloudwater;charset=utf8", "root", "");

header("Content-Type:application/json; Charset=utf-8");
$prodid = $_GET['prodid'];
$invqty = $_GET['invqty'];
$result = "OK";
// As you can see, here you will have where Employee_ID = :employee_id, this will be
// automatically replaced by the PDO object with the data sent in execute(array('employee_id' => $_POST['Employee_ID']))
// This is a good practice to avoid SqlInyection attacks
if($prodid != ''){
$st = $pdo->prepare("SELECT invreorderpt FROM inventory WHERE prodid = :prodid");
$st->execute(array ('prodid' => $prodid));
$data = $st->fetch(PDO::FETCH_ASSOC);
if($invqty > $data )
	$result = "Order quantity is greater than stock quantity";
}


echo json_encode(array ('result' => $result));
?>