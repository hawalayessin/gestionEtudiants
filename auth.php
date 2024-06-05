<?php 
include "connexion.php";
$email=$_POST['email'];
$password=$_POST['password'];
$sql="select * from etudiant where email='$email' and password='$password'";
$res=MySQLi_Query($connect,$sql);
if(MySQLi_num_rows($res)==1)
{
    header('location:home.php');
}
else
{
    include 'index.php';
    echo "Impossible! Etudiant intouvable.";
}
?>