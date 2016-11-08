    <?php 
        include_once('db.php');
         include('dbcon.php');
		$member = members();

        session_start();
        $username = $_SESSION['username'];
  
    $result=mysql_query("select * from employee where position='Admin'")or die (mysql_error());
    $block = mysql_query("select * from employee where position='Monster' ") or die (mysql_error());
    $count1=mysql_num_rows($block);
      
    $count=mysql_num_rows($result);
    $monster = monsterspayroll();
    $wc = WCpayroll();

    ?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <title>KK Members</title>

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta http-equiv="refresh" content="30000; url=<?php echo $_SERVER['PHP_SELF']; ?>">
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
				 <h2>KK Members</h2>
                 <h3>Hello, Admin <?php echo $_SESSION['fname'];?></h3>
         <h3>Monsters: <?php echo $count1; echo "    Total Hours: ".$monster;?></h3><h3>Working Committees: <?php echo $count; echo"    Total Hours: ".$wc;?></h3>
                            <table  class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                       
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Position</th>
                                        <th>Time Sheet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($member as $mem){?>
                                       <tr>
                                            
                                            <td><?php echo strtoupper($mem['fname']); ?></td>
                                            <td><?php echo strtoupper($mem['mname']); ?></td>
                                            <td><?php echo strtoupper($mem['lname']); ?></td>
                                            <td><?php echo $mem['username']; ?></td>
                                            <td><?php echo $mem['position']; ?></td>
                                            <td> <b><a href = "timetable.php?username=<?php echo htmlentities($mem['username'])?>">View Payroll</a></b></td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>

            </div>
            </div>
            </div>
        </div>
        </div>


    </body>
</html>


