
<?php
function site_db()
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

// Insertion functions
function add_user( $username, $password, $firstname, $middlename, $lastname, $activation, $position)
	{
		$db = site_db();
		$sql = "INSERT into employee (username, password, fname, mname, lname, activation, position) VALUES (?,?,?,?,?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($username, $password, $firstname, $middlename, $lastname, $activation, $position));	
		$db = null;
	}
function add_admin( $username, $password, $firstname, $middlename, $lastname, $position)
	{
		$db = site_db();
		$sql = "INSERT into employee (username, password, fname, mname, lname, position) VALUES (?,?,?,?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($username, $password, $firstname, $middlename, $lastname, $position));	
		$db = null;
	}
function add_item( $itemname, $itemdesc, $itemdateofreg, $itemquantity)
	{	$itemrop = $itemquantity * 0.50;
		$db = site_db();
		$sql = "INSERT into inventory (itemname, itemdesc, itemdateofreg, itemquantity, itemrop) VALUES (?,?,?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($itemname, $itemdesc, $itemdateofreg, $itemquantity, $itemrop));	
		$db = null;
	}
// Search functions
function searchpassword($username, $fname){
		$db = site_db();
		$sql = "SELECT password FROM employee WHERE username = '$username' AND fname = '$fname'";
		$st = $db->prepare($sql);
		$st->execute(array($username, $fname));	
		$rows = $st->fetch();
		return $rows;
		$db = null;

	}
function members()
    {
        $sql = "SELECT DISTINCT * FROM attendance.employee";
		$db = site_db();
		$st = $db->prepare($sql);
		$st->execute();
		$grp = $st->fetchAll(); //returns and array of arrays
		$db = null;
		return $grp;
    }
function member()
    {
        $sql = "SELECT DISTINCT * FROM attendance.employee where position != 'Admin'";
		$db = site_db();
		$st = $db->prepare($sql);
		$st->execute();
		$grp = $st->fetchAll(); //returns and array of arrays
		$db = null;
		return $grp;
    }
function OCT30TimeIn ($username){

    	$sql = "SELECT * FROM time_in WHERE username  = '$username' AND dates = '2016-10-30'";
        $db = site_db();
        $st = $db->prepare($sql);
		$st->execute(array($username));
		$rows = $st->fetch();
		$db = null;
		return $rows;

    }
function OCT30TimeOut ($username){

    	$sql = "SELECT logout FROM time_out WHERE username  = '$username' AND dates = '2016-10-31'";
        $db = site_db();
        $st = $db->prepare($sql);
		$st->execute(array($username));
		$rows = $st->fetch();
		$db = null;
		return $rows;
	}
function OCT31TimeIn ($username){

    	$sql = "SELECT * FROM time_in WHERE username  = '$username' AND dates = '2016-10-31'";
        $db = site_db();
        $st = $db->prepare($sql);
		$st->execute(array($username));
		$rows = $st->fetch();
		$db = null;
		return $rows;

    }
function OCT31TimeOut ($username){

    	$sql = "SELECT logout FROM time_out WHERE username  = '$username' AND dates = '2016-11-01'";
        $db = site_db();
        $st = $db->prepare($sql);
		$st->execute(array($username));
		$rows = $st->fetch();
		$db = null;
		return $rows;
	}
function Nov01TimeIn ($username){

    	$sql = "SELECT * FROM time_in WHERE username  = '$username' AND dates = '2016-11-01'";
        $db = site_db();
        $st = $db->prepare($sql);
		$st->execute(array($username));
		$rows = $st->fetch();
		$db = null;
		return $rows;

    }
function Nov01TimeOut ($username){

    	$sql = "SELECT logout FROM time_out WHERE username  = '$username' AND dates = '2016-11-02'";
        $db = site_db();
        $st = $db->prepare($sql);
		$st->execute(array($username));
		$rows = $st->fetch();
		$db = null;
		return $rows;
	}
function Nov02TimeIn ($username){

    	$sql = "SELECT * FROM time_in WHERE username  = '$username' AND dates = '2016-11-02'";
        $db = site_db();
        $st = $db->prepare($sql);
		$st->execute(array($username));
		$rows = $st->fetch();
		$db = null;
		return $rows;

    }
function Nov02TimeOut ($username){

    	$sql = "SELECT logout FROM time_out WHERE username  = '$username' AND dates = '2016-11-03'";
        $db = site_db();
        $st = $db->prepare($sql);
		$st->execute(array($username));
		$rows = $st->fetch();
		$db = null;
		return $rows;
	}
function Oct29TimeIn ($username){

    	$sql = "SELECT * FROM time_in WHERE username  = '$username' AND dates = '2016-10-29'";
        $db = site_db();
        $st = $db->prepare($sql);
		$st->execute(array($username));
		$rows = $st->fetch();
		$db = null;
		return $rows;

    }
function Oct29TimeOut ($username){

    	$sql = "SELECT logout FROM time_out WHERE username  = '$username' AND dates = '2016-10-30'";
        $db = site_db();
        $st = $db->prepare($sql);
		$st->execute(array($username));
		$rows = $st->fetch();
		$db = null;
		return $rows;
	}
function addtoPayroll($username, $total){
		$sql = "UPDATE employee
				SET totalhours = '$total'
				WHERE username = '$username'";
		$db = site_db();
		$st = $db->prepare($sql);
		$st->execute(array( 
			$total,
			$username)
		);
		$db = null;
	}
function monsterspayroll(){
	   
		$sql = "SELECT SUM(totalhours) FROM employee WHERE position = 'Volunteer'";
		$db = site_db();
		$st = $db->prepare($sql);
		$st->execute();
		$expenses = $st ->fetchColumn();
		$db = null;
		return $expenses;
	}
function WCpayroll(){
	   
		$sql = "SELECT SUM(totalhours) FROM employee WHERE position = 'Admin'";
		$db = site_db();
		$st = $db->prepare($sql);
		$st->execute();
		$expenses = $st ->fetchColumn();
		$db = null;
		return $expenses;
	}



function activate($username, $activation){
		$sql = "UPDATE employee
				SET activation = '$activation'
				WHERE username = '$username'";
		$db = site_db();
		$st = $db->prepare($sql);
		$st->execute(array( 
			$activation,
			$username)
		);
		$db = null;
	}
function deactivate($username, $activation){
		$sql = "UPDATE employee
				SET activation = '$activation'
				WHERE username = '$username'";
		$db = site_db();
		$st = $db->prepare($sql);
		$st->execute(array( 
			$activation,
			$username)
		);
		$db = null;
	}
function name ($username){

    	$sql = "SELECT * FROM employee WHERE username  = '$username'";
        $db = site_db();
        $st = $db->prepare($sql);
		$st->execute(array($username));
		$rows = $st->fetch();
		$db = null;
		return $rows;

    }
function inventory()
    {
        $sql = "SELECT DISTINCT * FROM attendance.inventory";
		$db = site_db();
		$st = $db->prepare($sql);
		$st->execute();
		$grp = $st->fetchAll(); //returns and array of arrays
		$db = null;
		return $grp;
    }
function findItem ($itemno){

    	$sql = "SELECT * FROM invrequest WHERE itemno  = '$itemno'";
        $db = site_db();
		$st = $db->prepare($sql);
		$st->execute(array($itemno));
		$grp = $st->fetchAll(); //returns and array of arrays
		$db = null;
		return $grp;
	}
function findItems ($itemno){

    	$sql = "SELECT * FROM inventory WHERE itemno  = '$itemno'";
        $db = site_db();
		$st = $db->prepare($sql);
		$st->execute(array($itemno));
		$grp = $st->fetchAll(); //returns and array of arrays
		$db = null;
		return $grp;
	}
function checkItem ($itemno){

    	$sql = "SELECT * FROM inventory WHERE itemno=?";
		$db = site_db();
		$st = $db->prepare($sql);
		$st->execute(array($itemno));
		$customer = $st->fetch();
		$db = null;
		return $customer;
	}
function itemrequest ( $itemno, $itemquantity, $itemrequestor, $releasingofficer, $dateofupdate)
	{
		$db = site_db();
		$sql = "INSERT into invrequest(itemno, requestor, releasingofficer, itemquantity, dateupdated) VALUES (?,?,?,?,?)";
		$st = $db->prepare($sql);
		$st->execute(array($itemno, $itemrequestor, $releasingofficer, $itemquantity, $dateofupdate));	
		$db = null;

		$sql1 = "UPDATE inventory
				SET itemquantity = itemquantity - '$itemno'
				WHERE itemno = '$itemno'";
		$db1 = site_db();
		$st1 = $db1->prepare($sql1);
		$st1->execute(array( 
			$itemquantity,
			$itemno)
		);
		$db1 = null;
	}
function deleteInv($itemno)
	{
		$sql = "DELETE FROM inventory WHERE itemno=?";
		$db = site_db();
		$st = $db->prepare($sql);
		$st->execute(array($itemno));
		$db = null;
	}
function online_stat($username){

		$stat = 1;
		$sql = "UPDATE time_in SET stat = 1 where username = '$username'";
		$st = $db->prepare($sql);
		$st->execute(array($username));
		$db = null;
}

?>