<?php
include "connexion.php";


$m=$_POST['matricule'];
$m1=$_POST['nom'];
$m2=$_POST['prenom'];
$m3=$_POST['adresse'];
$m4=$_POST['photo'];
$m5=$_POST['naissance'];
$m6=$_POST['filiere'];
$m7=$_POST['stage'];
$m8=$_POST['email'];
$m9=$_POST['password'];
///***Upload ***/
$file_name=$_FILES['photo']['name'];
$file_tmp_name=$_FILES['photo']['tmp_name'];
$file_dest = 'photos/'.$file_name;
$file_extension=strrchr($file_name,".");
$extensions_autorisees= array('.jpg' ,'.JPG' , '.png' , '.PNG','.gif','GIF');

$photo="photos/".$file_name;

move_uploaded_file($file_tmp_name,$file_dest);


$sql1="select * from etudiant where matricule='$m'";
$res1=MySQLi_Query($connect,$sql1);
if(MySQLi_num_rows($res1)==1){
include "inscription.php";
 echo "matricule existant";
}
else if(!in_array($file_extension,$extensions_autorisees)){
    include "inscription.php";
    echo "extension non autorisee";
}





else
{
move_uploaded_file($file_tmp_name,$file_dest);


//echo $m."<br>".$m1."<br>".$m2."<br>".$m3."<br>".$m4."<br>".$m5."<br>".$m6."<br>".$m7."<br>".$m8."<br>".$m9;





$sql="insert into etudiant (matricule,nom,prenom,adresse,photo,naissance,filiere,stage,email,password) values('$m','$m1','$m2','$m3','$m4','$m5','$m6',$m7,'$m8','$m9')";
if(MySQLi_Query($connect,$sql))
 Header ('Location:home.php');
}
?>