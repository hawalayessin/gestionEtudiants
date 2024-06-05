<?php 
include "connexion.php";
$id=$_POST['id'];
$matricule=$_POST['matricule'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$naissance=$_POST['naissance'];
$filiere=$_POST['filiere'];
$stage=$_POST['stage'];
$email=$_POST['email'];
$password=$_POST['password'];

//***************** upload *************
$file_name=$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
$file_dest = 'photos/'.$file_name;
$file_extension=strrchr($file_name,".");
$extensions_autorisees= array('.jpg' ,'.JPG' , '.png' , '.PNG','.gif','GIF');
move_uploaded_file($fole_tmp_name,$file_dest);
$photo="photos/".$file_name;

$sql1="select * from etudiant where matricule='$matricule'";
$res1=MySQLi_Query($connect,$sql1);
if(MySQLi_num_rows($res1)==0)
{
    $sql="update etudiant set matricule='$matricule' ,nom='$nom' , prenom='$prenom' ,adresse='$adresse' 
    ,naissance='$naissance',email='$email' where id=$id";
    
    MySQLi_Query($connect,$sql);
}
else{
    $sql="update etudiant set nom='$nom' , prenom='$prenom' ,adresse='$adresse' 
    ,naissance='$naissance',email='$email' where id=$id";
    MySQLi_Query($connect,$sql);

}
//************* upload **************

if($file_name=="" or !in_array($file_extension,$extensions_autorisees))
{
    $sql="update etudiant set nom='$nom' , prenom='$prenom' ,adresse='$adresse' 
    ,naissance='$naissance',email='$email' where id=$id";
    
    MySQLi_Query($connect,$sql);
    

}
else{

    $sql="update etudiant set nom='$nom' , prenom='$prenom' ,adresse='$adresse' 
    ,naissance='$naissance',email='$email', photo='$photo' where id=$id";
    MySQLi_Query($connect,$sql);
}

header('location:home.php');

echo $matricule;
?>