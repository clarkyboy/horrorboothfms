<?php

 error_reporting(0);
// Connect to the database
$conn = mysql_connect("localhost","root","");
// Make sure we connected succesfully
if(!$conn)
{
    die('Connection Failed'.mysql_error());
}
// Select the database to use
mysql_select_db("attendance",$conn);

?>