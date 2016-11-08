    <?php 
        include_once('db.php');
        include('dbcon.php');

		$inventory = inventory();
        session_start();
        $username = $_SESSION['username'];

    function My_Alert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    $result=mysql_query("select * from employee where position='Working Committee'")or die (mysql_error());
    $block = mysql_query("select * from employee where position='Monster' ") or die (mysql_error());
    $count1=mysql_num_rows($block);
      
    $count=mysql_num_rows($result);
    $monster = monsterspayroll();
    $wc = WCpayroll();

    ?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <title>KK Inventory</title>

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta http-equiv="refresh" content="3000; url=<?php echo $_SERVER['PHP_SELF']; ?>">
    </head>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>

        <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

    <body>

       <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
             <div class="container">
                 <div class="navbar-header navbar-right">
                    <div class="dropdown">
                        <a style=" margin-top:7px; margin-bottom: 2px;" class="dropdown-toggle btn btn-info" data-toggle="dropdown"><span class="glyphicon glyphicon-align-justify"> <b>Menu</b></span> <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                                   <li><a href="employee.php"><span class="glyphicon glyphicon-user"></span>Payroll Table</a></li>
                                   <li><a href="adminpanel.php"><span class="glyphicon glyphicon-user"></span>Employee Table</a></li>
                                   <li><a href="inventorypanel.php"><span class="glyphicon glyphicon-cloud"></span>Inventory Table</a></li>
                                   <li><a href="addsales.php"><span class="glyphicon glyphicon-user"></span>Sale form</a></li>
                                   <li><a href="adminlogout.php"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
                      </ul>
                  </div>
                 </div>
                 <a class="btn btn-primary" style="margin-top: 7px;" href="index.php?username=<?php echo htmlentities($_SESSION['username']) ?>"><span class="glyphicon glyphicon-edit"></span>Home</a>
             </div>
            </div>       
        <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12" >
                <div class="container">
				<h2>HORROR BOOTH</h2>
				 <h2>Registered Items</h2>
                   <h3>Hello, Admin <?php echo $_SESSION['fname'];?></h3>
         <!-- <h3>Monsters: <?php echo $count1; echo "    Total Hours: ".$monster;?></h3><h3>Working Committees: <?php echo $count; echo"    Total Hours: ".$wc;?></h3> -->

                            <table  class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                       
                                        <th>Item Number</th>
                                        <th>Item Date of Registration</th>
                                        <th>Item Name</th>
                                        <th>Item Description</th>
                                        <th>Item Quantity</th>
                                        <th>Item Status</th>
                                        <th>Admin Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($inventory as $mem){?>
                                       <tr>
                                            
                                            <td><?php echo strtoupper($mem['itemno']); ?></td>
                                            <td><?php echo strtoupper($mem['itemdateofreg']); ?></td>
                                            <td><?php echo strtoupper($mem['itemname']); ?></td>
                                            <td><?php echo $mem['itemdesc']; ?></td>
                                            <td><?php echo $mem['itemquantity']; ?></td>
                                            <td><?php 
                                                    if($mem['itemstatus'] == 0){echo htmlentities("Available");}
                                                    else{echo htmlentities("Unavailable");}
                                            ?></td>
                                            <td>
                                                <a class="btn btn-warning"  href="inventoryupdate.php?username=<?php echo htmlentities($_SESSION['fname']);?>&itemno=<?php echo htmlentities($mem['itemno'])?>"><span class="glyphicon glyphicon-edit"></span></a>
                                                <a class="btn btn-danger"  href="deleteinv.php?itemno=<?php echo htmlentities($mem['itemno'])?>"><span class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure?');"></span></a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                            <a class="btn btn-primary"  href="addinventory.php?username=<?php echo htmlentities($_SESSION['fname'])?>"><span class="glyphicon glyphicon-plus"></span></a>

            </div>
            </div>
            </div>
        </div>
        </div>


    </body>
</html>


