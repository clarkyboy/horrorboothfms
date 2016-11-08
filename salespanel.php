    <?php 
        include_once('db.php');
        include('dbsales.php');

		$sales = sale();
        session_start();
        $username = $_SESSION['username'];

    function My_Alert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
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
                                       
                                        <th>Sequence Number</th>
                                        <th>Date</th>
                                        <th>Customer Name</th>
                                        <th>No. of Adult</th>
                                        <th>No. of Children</th>
                                        <th>Adult Price Subtotal</th>
                                        <th>Children Price Subtotal</th>
                                        <th>Grand Total</th>
                                        <th>Attending Cashier</th>
                                        <th>Cashier Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($sales as $mem){?>
                                       <tr>
                                            
                                            <td><?php echo strtoupper($mem['salesid']); ?></td>
                                            <td><?php echo $mem['dates']; ?></td>
                                            <td><?php echo strtoupper($mem['name']); ?></td>
                                            <td><?php echo $mem['adult']; ?></td>
                                            <td><?php echo $mem['child']; ?></td>
                                            <td><?php 
                                                        echo "Php ".$mem['adultprice'];
                                            ?></td>
                                             <td><?php 
                                                        echo "Php ".$mem['childprice'];
                                            ?></td>
                                             <td><?php 
                                                        $total = $mem['adultprice'] + $mem['childprice'];
                                                        echo "Php ". $total;
                                            ?></td>
                                            <td><?php 
                                                        echo $mem['cashier'];
                                            ?></td>
                                            <td>
                                                <a class="btn btn-info" href="invoice.php?username=<?php echo htmlentities($_SESSION['fname']);?>&orid=<?php echo htmlentities($mem['orid'])?>"><span class="glyphicon glyphicon-print"></span></a>
                                            </td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                              <a class="btn btn-primary"  href="addsales.php"><<</a>
                              <a class="btn btn-success"  href="salesroster.php">View Income Statements</a>
            </div>
            </div>
            </div>
        </div>
        </div>


    </body>
</html>


