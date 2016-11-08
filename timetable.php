    <?php 
    include_once('db.php');
    include('dbcon.php');


    session_start();
    $username = $_GET['username'];
    


    $page = $_SERVER['PHP_SELF'];
    $sec = "30000";

    function My_Alert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }


    if(isset($_POST['add'])){

        $total1 = trim($_POST['total']);
        $result = mysql_query( "SELECT * FROM employee WHERE username = '$username'") or die(mysql_error());
        $row=mysql_fetch_array($result);

        if($row['totalhours'] == "0"){

          mysql_query( "UPDATE employee SET totalhours = '$total1' WHERE username = '$username'") or die(mysql_error());
          $full = "Added Successfully!";
          $msg = My_Alert($full);
          header("Location: employee.php");
          exit();
        }

        else{

          $full = "Already added!";
          $msg = My_Alert($full); 
          header("Location: timetable.php");
          exit();
        }

        
    }

    ?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>KK Members</title>

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
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
        <h3>Hello, Admin <?php echo $_SESSION['fname'];?></h3>
				 <h2><?php $uname = name($username); echo htmlentities($uname['fname'])."'s Time Table"?></h2>
                            <table  class="table table-striped table-bordered" id="example">
                                <thead>
                                    <tr>
                                       
                                        <th>Date</th>
                                        <th>Username</th>
                                        <th>Time In</th>
                                        <th>Time Out</th>
                                        <th>Total Hours Rendered</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                            <td>October 29, 2016</td>
                                            <td><?php echo $username; ?></td>
                                            <td><?php  $timein = Oct29TimeIn($username);
                                                        echo htmlentities(date('h:i a',strtotime($timein['login'])));      ?></td>
                                            <td><?php  $timeout = Oct29TimeOut($username);
                                                        echo htmlentities(date('h:i a',strtotime($timeout['logout'])));      ?></td>
                                            <td><?php 
                                                    $login = "2016-10-29";
                                                    $logout = "2016-10-30";
                                                    $start = strtotime($login . ' ' . $timein['login']);
                                                    $end = strtotime($logout. ' ' . $timeout['logout']);

                                                    $diff2 = ($end - $start) / 3600;

                                                    // or if you don't need the exact hours

                                                    if($diff2 == "24"){
                                                      $diff2 = 0;
                                                      echo $diff2;
                                                    }else{
                                                      echo $diff2;
                                                    }
                                                     ?></td>
                                        </tr>
                                       <tr>
                                            <td>October 30, 2016</td>
                                            <td><?php echo $username; ?></td>
                                            <td><?php  $timein = OCT30TimeIn($username);
                                                        echo htmlentities(date('h:i a',strtotime($timein['login'])));      ?></td>
                                            <td><?php  $timeout = OCT30TimeOut($username);
                                                        echo htmlentities(date('h:i a',strtotime($timeout['logout'])));      ?></td>
                                                     ?></td>
                                            <td><?php 
                                                    $login = "2016-10-30";
                                                    $logout = "2016-10-31";
                                                    $start = strtotime($login . ' ' . $timein['login']);
                                                    $end = strtotime($logout. ' ' . $timeout['logout']);

                                                    $diff2 = ($end - $start) / 3600;

                                                    // or if you don't need the exact hours

                                                    if($diff2 == "24"){
                                                      $diff2 = 0;
                                                      echo $diff2;
                                                    }else{
                                                      echo $diff2;
                                                    }
                                                     ?></td>
                                        </tr>
                                         <tr>
                                            <td>October 31, 2016</td>
                                            <td><?php echo $username; ?></td>
                                            <td><?php  $timein = OCT31TimeIn($username);
                                                        echo htmlentities(date('h:i a',strtotime($timein['login'])));      ?></td>
                                            <td><?php  $timeout = OCT31TimeOut($username);
                                                        echo htmlentities(date('h:i a',strtotime($timeout['logout'])));      ?></td>
                                            <td><?php 
                                                    $login = "2016-10-31";
                                                    $logout = "2016-11-01";
                                                    $start = strtotime($login . ' ' . $timein['login']);
                                                    $end = strtotime($logout. ' ' . $timeout['logout']);

                                                    $diff1 = ($end - $start) / 3600;

                                                    // or if you don't need the exact hours

                                                    
                                                     if($diff1 == "24"){
                                                      $diff1 = 0;
                                                      echo $diff1;
                                                    }else{
                                                      echo $diff1;
                                                    } ?></td>
                                        </tr>
                                        <tr>
                                            <td>November 01, 2016</td>
                                            <td><?php echo $username; ?></td>
                                            <td><?php  $timein = Nov01TimeIn($username);
                                                        echo htmlentities(date('h:i a',strtotime($timein['login'])));      ?></td>
                                            <td><?php  $timeout = Nov01TimeOut($username);
                                                        echo htmlentities(date('h:i a',strtotime($timeout['logout'])));      ?></td>
                                            <td><?php 
                                                    $login = "2016-11-01";
                                                    $logout = "2016-11-02";
                                                    $start = strtotime($login . ' ' . $timein['login']);
                                                    $end = strtotime($logout. ' ' . $timeout['logout']);

                                                    $diff2 = ($end - $start) / 3600;

                                                    // or if you don't need the exact hours

                                                    if($diff2 == "24"){
                                                      $diff2 = 0;
                                                      echo $diff2;
                                                    }else{
                                                      echo $diff2;
                                                    }
                                                     ?></td>
                                        </tr>
                                       <tr>
                                            <td>November 02, 2016</td>
                                            <td><?php echo $username; ?></td>
                                            <td><?php  $timein = Nov02TimeIn($username);
                                                        echo htmlentities(date('h:i a',strtotime($timein['login'])));      ?></td>
                                            <td><?php  $timeout = Nov02TimeOut($username);
                                                        echo htmlentities(date('h:i a',strtotime($timeout['logout'])));      ?></td>
                                            <td><?php 
                                                    $login = "2016-11-01";
                                                    $logout = "2016-11-02";
                                                    $start = strtotime($login . ' ' . $timein['login']);
                                                    $end = strtotime($logout. ' ' . $timeout['logout']);

                                                    $diff2 = ($end - $start) / 3600;

                                                    // or if you don't need the exact hours

                                                    if($diff2 == "24"){
                                                      $diff2 = 0;
                                                      echo $diff2;
                                                    }else{
                                                      echo $diff2;
                                                    }
                                                     ?></td>
                                        </tr>
                                        
                                       
                                  
                                </tbody>
                                 <tfoot>
                                           <td><?php echo $username ?></td>
                                           <td>Total Number of Rendered Hours</td>
                                           <td></td>
                                           <td></td>
                                           <td><?php if($diff != "0"){
                                                        if($diff1 != "0"){

                                                          if($diff2 != "0")
                                                          {
                                                              $total = $diff + $diff1 + $diff2;
                                                              echo $total;
                                                          }else{
                                                              $total = $diff + $diff1 + 0;
                                                              echo $total;
                                                          }

                                                        }else{
                                                            $total = $diff + 0 + $diff2;
                                                            echo $total;
                                                        }

                                                      }
                                                      else{

                                                        $total = 0 + $diff1 + $diff2;
                                                        echo $total;
                                                      }
                                                    ?></td>
                                          <td></td>
                                        </tfoot>
                            </table>
                            <form method = "post">
                              <input type = "hidden" id = "username" value = "<?php echo $username?>"/>
                              <input type = "hidden" id = "position" value = "<?php echo $position?>"/>
                              <input type = "hidden" id = "total" name= "total" value = "<?php echo $total?>"/>
                              <input type = "submit" class="btn btn-primary" style="margin-top: 7px;" name = "add" value = "Add to Payroll" />
                             <a class="btn btn-primary" href="employee.php"><span class="glyphicon glyphicon-home"></span></a>
                            </form

            </div>
            </div>
            </div>
        </div>
        </div>


    </body>
</html>


