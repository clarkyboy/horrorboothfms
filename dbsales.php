<?php

function sales_db()
	{
		try
		{
			return new PDO('mysql:host=localhost;dbname=attendance','root','');
		}
		catch(PDOException $ex)
		{
			echo "Connection Error: ", $ex->getMessage();
		}
	}
function ordid(){
    	$id = "OR".rand(0000001, 1000000);
    	return $id;
    }
function sales($name, $adult, $child, $date, $adultprice, $childprice, $cashier){
		$id = ordid();
		$db = sales_db();
		$sql = "INSERT into sales (orid, name, adult, child, dates, adultprice, childprice, cashier ) VALUES (?,?,?,?,?,?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($id, $name, $adult, $child, $date, $adultprice, $childprice, $cashier));	
		$db = null;
}
function expenses ($name, $requestor, $releasingofficer, $dates, $amount){
		$id = ordid();
		$db = sales_db();
		$sql = "INSERT into expenses ( name, requestor, releasingofficer, dates, amount ) VALUES (?,?,?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($name, $requestor, $releasingofficer, $dates, $amount));	
		$db = null;
}
function findCashier($fname){

		$db = sales_db();
		$sql = "SELECT * FROM employee WHERE fname = '$fname' AND position = 'Admin'";
		$st = $db->prepare($sql);
		$st->execute(array($username));	
		$rows = $st->fetch();
		return $rows;
		$db = null;
}
function sale()
    {
        $sql = "SELECT DISTINCT * FROM attendance.sales";
		$db = sales_db();
		$st = $db->prepare($sql);
		$st->execute();
		$grp = $st->fetchAll(); //returns and array of arrays
		$db = null;
		return $grp;
    }
function findsale($orid)
    {
        $sql = "SELECT DISTINCT * FROM sales WHERE orid = '$orid'";
		$db = sales_db();
		$st = $db->prepare($sql);
		$st->execute(array($orid));
		$grp = $st->fetchAll(); //returns and array of arrays
		$db = null;
		return $grp;
    }
function income($dates){

		$sql = "SELECT SUM(adultprice + childprice) AS 'Total' FROM sales WHERE dates = '$dates'";
		$db = sales_db();
		$st = $db->prepare($sql);
		$st->execute(array($dates));
		$expenses = $st ->fetch();
		$db = null;
		return $expenses;
}
function cashflows ($dates){

		$sql = "SELECT SUM(amount) AS 'Total' FROM expenses WHERE dates = '$dates'";
		$db = sales_db();
		$st = $db->prepare($sql);
		$st->execute(array($dates));
		$expenses = $st ->fetch();
		$db = null;
		return $expenses;
}
?>