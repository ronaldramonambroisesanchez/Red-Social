<?php
$host="localhost";
$dbuser="root";
$dbpwd="";
$db="jyr";

$connect=mysqli_connect($host, $dbuser, $dbpwd);

if (!$connect) echo ("Fallo al conectar la base de datos");
else
$select= mysqli_select_db ($connect,$db);

?>