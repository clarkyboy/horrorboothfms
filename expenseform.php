  <?php
include('db.php');
include('dbsales.php');
session_start();

    $mem = member();
function My_Alert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }

     if(isset($_POST['add'])){


            $name = trim($_POST['itemname']);
            $amount = trim($_POST['amount']);
            $requestor = trim($_POST['requestor']);
            $releasingofficer = trim($_POST['releasingofficer']);
            $dates = trim($_POST['itemdateofreg']);
            expenses($name, $requestor, $releasingofficer, $dates, $amount);
                $full = "Successfully updated!";
                $msg = My_Alert($full);
                header("Location: addsales.php");

            mysql_close($conn);
        
    }
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Expenses</title>

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
        <script>
               {
                   var today=new Date();
                   var t=today.toLocaleTimeString("en-GB");
                    document.getElementById("itemdateofreg").value=t;
               }
              </script>

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
				 <h2>Expenses</h2>
                 <h3>Hello, Admin <?php echo $_SESSION['fname'];?></h3>
         
                            <form method="post">
                            <table  class="table table-striped table-bordered">
                            <thead><th>Expense Form</th></thead>
                            <tbody>
                            <tr><td>Item Name</td><td><input type="text" name="itemname" id="itemname" required></td></tr>
                            <tr><td>Amount</td><td><input type="number" name="amount" id="amount" required></td></tr>
                            <tr><td>Requestor</td><td> <input type="text" name="requestor" id= requestor" list= "list" ><datalist id="list"><?php foreach($mem as $m){?>
                                                        
                                                      <option value="<?php echo htmlentities($m['fname']);?>"><?php echo htmlentities($m['idno']);?></option>
                                                   <?php } ?> </datalist></td>
                                                    </tr>
                             <tr><td>Releasing Officer</td><td><input type="text" name="releasingofficer" id="releasingofficer" value="<?php echo htmlentities($_SESSION['fname'])?>" readonly = "readonly" required></td></tr>
                            <tr><td>Date of Expense Made</td><td><input type="text" name="itemdateofreg" id="itemdateofreg" value="<?php echo date('Y-m-d'); ?>" readonly="readonly"></td></tr>
                            </tbody>
                        
                            <tfoot>
                              <tr>
                                <td><input type="submit" class="btn btn-warning" name="add" value="Get Money">
                                </td>
                              </tr>

                            </tfoot>
                            </table>
                            </form>

            </div>
            </div>
            </div>
        </div>
        </div>


    </body>
</html>

