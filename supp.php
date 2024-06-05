<?php
include "connexion.php";
$id=$_GET['id'];
echo $id;
$sql="delete from etudiant where id= $id ";
if(MySQLi_Query($connect,$sql))
  header('location:home.php');

?>