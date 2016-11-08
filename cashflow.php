<?php

    include('dbsales.php');
        session_start();
            $date1 = '2016-10-24';
            $date2 = '2016-10-30';
            $date3 = '2016-10-31';
            $date4 = '2016-11-01';
        $sales = income($date1);
        $expenses = cashflows($date1);
        $sales1 = income($date2);
        $expenses1 = cashflows($date2);
        $sales2 = income($date3);
        $expenses2 = cashflows($date3);
        $sales3 = income($date4);
        $expenses3 = cashflows($date4);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>KK Income Statement</title>
    
    <style>
    .invoice-box{
        max-width:800px;
        margin:auto;
        padding:30px;
        border:1px solid #eee;
        box-shadow:0 0 10px rgba(0, 0, 0, .15);
        font-size:16px;
        line-height:24px;
        font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color:#555;
    }
    
    .invoice-box table{
        width:100%;
        line-height:inherit;
        text-align:left;
    }
    
    .invoice-box table td{
        padding:5px;
        vertical-align:top;
    }
    
    .invoice-box table tr td:nth-child(2){
        text-align:right;
    }
    
    .invoice-box table tr.top table td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.top table td.title{
        font-size:45px;
        line-height:45px;
        color:#333;
    }
    
    .invoice-box table tr.information table td{
        padding-bottom:40px;
    }
    
    .invoice-box table tr.heading td{
        background:#eee;
        border-bottom:1px solid #ddd;
        font-weight:bold;
    }
    
    .invoice-box table tr.details td{
        padding-bottom:20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom:1px solid #eee;
    }
    
    .invoice-box table tr.item.last td{
        border-bottom:none;
    }
    
    .invoice-box table tr.total td:nth-child(2){
        border-top:2px solid #eee;
        font-weight:bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td{
            width:100%;
            display:block;
            text-align:center;
        }
        
        .invoice-box table tr.information table td{
            width:100%;
            display:block;
            text-align:center;
        }
    }
    </style>
</head>

<body onload="window.print();">
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="images/about-02.jpg" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                           
                             Date Made: <?php echo date('M d, Y'); ?>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="3">
                    <table>
                        <tr>
                            <td>
                                From:
                                Katipunan ng Kabataan - Tisa<br>
                                Barangay Tisa, Cebu City<br>
                                Cebu, Philippines 6000
                            </td>
                            
                            <td>
                                TO:
                                Tisa Barangay Council<br>
                                Barangay Tisa, Cebu City<br>
                                Cebu, Philippines 6000
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="details">
                <td>
                    KK Horror Booth Income Statement (4 nights) as of <?php echo date('M d, Y'); ?>
                </td>
                <td>
              
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                   Entries
                </td>
                <td>
                    Amount
                </td>
            </tr>
            
            <tr class="item">
                <td>
                    Net Sales (October 29, 2016)
                </td>
                <td>
                   <?php $sale1 =  htmlentities($sales['Total']) - htmlentities($expenses['Total']);
                         echo $sale1;?>
                </td>
            </tr>
            <tr class="item">
                <td>
                    Net Sales (October 30, 2016)
                </td>
                <td>
                   <?php $sale2 =  htmlentities($sales1['Total']) - htmlentities($expenses1['Total']);
                            echo $sale2;?>
                </td>
            </tr>
            <tr class="item">
                <td>
                    Net Sales (October 31, 2016)
                </td>
                <td>
                   <?php $sale3 = htmlentities($sales2['Total']) - htmlentities($expenses2['Total']);
                          echo $sale3; ?>
                </td>
            </tr>
            
            <tr class="item last">
                <td>
                    Net Sales (November 1, 2016)
                </td>
                <td>
                     <?php $sale4 = htmlentities($sales3['Total']) - htmlentities($expenses3['Total']);
                                echo $sale4; ?>
                </td>
            </tr>
            
            <tr class="total">
                <td></td>
                <td>
                    Income Net Total: <?php echo $sale1 + $sale2 + $sale3 + $sale4;?>
                </td>
            </tr>

        </table>
            Attending Cashier: <?php echo $_SESSION['fname'];?><br><br>
            Noted by: <br><br>
                &nbsp&nbsp&nbspHarold Pacaña &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMary Sariel Alforque <br>
                &nbsp&nbsp&nbspSK Chairman   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspKK President <br>

                
               
    </div>
</body>
</html>
