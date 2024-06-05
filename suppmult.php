<?php
include "connexion.php";

if (isset($_POST['suppm']))
{


$id=$_POST['suppm'];
//echo $id ; 
foreach($id as $key => $value){
    $sql="delete from etudiant where id= $value ";
if(MySQLi_Query($connect,$sql))
  header('location:home.php');

}
}
else
header('location:home.php');
?>