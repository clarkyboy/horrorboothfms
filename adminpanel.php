    <?php 
        include_once('db.php');
        include('dbcon.php');

		$member = members();
        session_start();
        $username = $_SESSION['username'];

    function My_Alert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }

    if(isset($_POST['activate'])){

        $activation = trim($_POST['total']);
        $username = trim($_POST['username']);
        $result = mysql_query( "SELECT * FROM employee WHERE username = '$username'") or die(mysql_error());
        $row=mysql_fetch_array($result);
        if($row['activation'] == 0){

            activate($username, $activation);
            $full = "User Activated!".$username." ".$activation. " ";
            $msg = My_Alert($full); 
            header("Location: index.php");
            exit();
        }
        else{
        $full = "Already activated";
        $msg = My_Alert($full); 
        }

        
    }
    if(isset($_POST['deactivate'])){

        $activation = 0;
        $username = trim($_POST['username']);
        $result = mysql_query( "SELECT * FROM employee WHERE username = '$username'") or die(mysql_error());
        $row=mysql_fetch_array($result);
        if($row['activation'] == 1){

            deactivate($username, $activation);
            $full = "User Activated!".$username." ".$activation. " ";
            $msg = My_Alert($full); 
            header("Location: index.php");
            exit();
        }
        else{
        $full = "Already activated";
        $msg = My_Alert($full); 
        }

        
    }

    $date = date('Y-m-d');
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

        <title>KK Registered Members</title>

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
                                   <li><a href="inventorypanel.php"><span class="glyphicon glyphicon-user"></span>Inventory Table</a></li>
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
				 <h2>KK Registered Members</h2>
                   <h3>Hello, Admin <?php echo $_SESSION['fname'];?></h3>
         <!-- <h3>Monsters: <?php echo $count1; echo "    Total Hours: ".$monster;?></h3><h3>Working Committees: <?php echo $count; echo"    Total Hours: ".$wc;?></h3> -->
                            <table  class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                        <th>Activity</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
                                        <th>Position</th>
                                        <th>Account Status</th>
                                        <th>Admin Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($member as $mem){?>
                                       <tr>
                                            <td><?php
                                            $username1 = $mem['username'];

                                                $block1 = mysql_query("select stat from time_in where username = '$username1' and dates = '$date' ") or die (mysql_error());
                                                $flag=mysql_fetch_array($block1); 

                                                $block3 = mysql_query("select * from time_in where username = '$username1' and dates = '$date' ") or die (mysql_error());
                                                $check = mysql_num_rows($block3);

                                                $block2 = mysql_query("select stat from time_out where username = '$username1' and dates = '$date' ") or die (mysql_error());
                                                $flag1=mysql_fetch_array($block2);

                                                $block4 = mysql_query("select * from time_in where username = '$username1' and dates = '$date' ") or die (mysql_error());
                                                $check1 = mysql_num_rows($block4);

                                                if($flag['stat'] == 1 && $flag1['stat'] == 1 || $check == 0 && $check1 == 0 || $flag['stat'] == '' && $flag1['stat'] == ''){
                                                    echo '<img src = "images/offline.png">';
                                                }
                                                else{
                                                    echo '<img src = "images/online.png">';
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo strtoupper($mem['fname']); ?></td>
                                            <td><?php echo strtoupper($mem['mname']); ?></td>
                                            <td><?php echo strtoupper($mem['lname']); ?></td>
                                            <td><?php echo $mem['username']; ?></td>
                                            <td><?php echo $mem['position']; ?></td>
                                            <td><?php 
                                                    if($mem['activation'] === "0"){echo htmlentities("Deactivated");}
                                                    else{echo htmlentities("Activated");}
                                            ?></td>
                                            <form method="post">
                                            <td>
                                            <input type = "submit" class="btn btn-primary"  name = "activate" value = "+" />
                                            <input type = "submit" class="btn btn-warning"  name = "deactivate" value = "-" />
                                            </td>
                                            <input type="hidden" id="total" name="total" value= "1" >
                                             <input type="hidden" id="username" name="username" value= <?php echo $mem['username'];?>>
                                            </form>
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


