<?php 
    $con = mysql_connect("localhost:3306","root","") or die('Unable to connect ' . mysql_error());
    $sdb = mysql_select_db("prrs", $con) or die ('Can\'t use db : ' . mysql_error());
?>
