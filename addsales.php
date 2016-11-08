<?php
include('db.php');
include_once('dbsales.php');
session_start();

function My_Alert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
function post_value($key)
    {
        if(isset($_POST[$key]))
            echo  htmlentities($_POST[$key]);
    }

 if(isset($_POST['add'])){

            $name = trim($_POST['itemname']);
            $adult = trim($_POST['adult']);
            $child = trim($_POST['child']);
            $date = trim($_POST['itemdateofreg']);
            $adultprice = trim($_POST['price1']);
            $childprice = trim($_POST['price2']);
            $cashier = trim($_POST['cashier']);
           sales($name, $adult, $child, $date, $adultprice, $childprice, $cashier);
           header("Location: addsales.php");
           exit();
        
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
        <script type="text/javascript" src="dist/js/jquery.1.4.2.js"></script>
        <script type="text/javascript">
        var calculateForm = function () {
            document.getElementById("price1").value = ( Number(document.getElementById("adult").value) * 25 );
            document.getElementById("price2").value = ( Number(document.getElementById("child").value) * 15 );

             document.getElementById("total").value =
                (
                    Number(document.getElementById("price1").value) +
                    Number(document.getElementById("price2").value) 
                 );

        };
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
                 <a class="btn btn-primary" style="margin-top: 7px;" href="index.php"><span class="glyphicon glyphicon-edit"></span>Home</a>
             </div>
            </div>       
        <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12" >
                <div class="container">
				<h2>HORROR BOOTH</h2>
				 <h2>Sales Invoice</h2>
                 <h3>Hello, Admin <?php echo $_SESSION['fname'];?></h3>
         
                            <form method="post">
                            <table  class="table table-striped table-bordered">
                            <thead><th>Sales Invoice</th></thead>
                            <tbody>

                            <tr><td>Name</td> <td><input type="text" name="itemname" id="itemname" required></td></tr>

                            <tr><td>No.of Adult</td><td><input type="number" name="adult" onBlur="calculateForm();" id="adult" required></td><td><label>SubTotal</label>&nbsp&nbsp<input type="text" readonly = "readonly" name="price1" id="price1" value ="<?php post_value('price1') ?>"></td></tr>

                            <tr><td>No. of Children</td><td><input type="number" name="child" onBlur="calculateForm();" id="child" required></td><td><label>SubTotal</label>&nbsp&nbsp<input type="text" readonly = "readonly" name="price2" id="price2" value ="<?php post_value('price2') ?>"></td></tr>

                            <tr><td>Date</td><td><input type="text" readonly = "readonly" name="itemdateofreg" id="itemdateofreg" value="<?php echo date('Y-m-d'); ?>"></td><td><label>SumTotal</label>&nbsp&nbsp<input type="text" readonly = "readonly" name="total" id="total"></td></tr>

                            <tr><td>Cashier</td><td><input type="text" readonly = "readonly" name="cashier" id = "cashier" value="<?php 
                                            echo $_SESSION['fname'];
                            ?>"></td></tr>

                            </tbody>
                            <tfoot>
                              <tr>
                                <td><input type="submit" class="btn btn-warning" style="color: black" name="add" value="Cash Register">
                                     <a class="btn btn-danger" href="expenseform.php">Expense Form</a>
                                     <a class="btn btn-primary" href="index.php">Back</a>
                                     <a class="btn btn-primary" href="salespanel.php">Sales Table</a>
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

