<?php

$servername="localhost";
$username="root";
$password="";
$dbname="base_rahma";

$connect=new MySQLi($servername,$username,$password,$dbname);
if($connect)
echo "";
else 
echo "Erreur";
?>