<?php

include "connexion.php";
$sql="select * from etudiant";
$res=MySQLi_Query($connect,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste etudiant</title>
    <link rel="stylesheet" href="css/home.css">
    <script  type="text/javascript">
       function cocher(etat)
       {
        var inputs = document.getElementtById('formu').
            getElementByTagName('input');
            for (var i = 0 ;i<inputs.length,i++){
              if (inputs[i].type=='checkbox')
              inputs[i].checked=etat;
            }
       }

    </script>
</head>
<body>
<h1 align="center" color="#F0006A">Recherche des Etudiants</h1>

<form action="rech.php" method="post">
        <center><input type="text" name="rech" class="form-control">
        <br><input type="submit" value="Rechcerche">
        </center>
</form>
    <h1 align="center" color="#F0006A">Liste des Etudiants</h1>
    
    <form id ="formu" action="suppmult.php" method="post">
<table align="center" border="10" width="1000px"  >
    <tr>
        <th>Photo</th>
        <th>Matricule</th>
        <th>nom</th>
        <th>prenom</th>
        <th>adresse</th>
        <th>naissance</th>
        <th>filiere</th>
        <th>stage</th>
        <th>email</th>
        <th>password</th>
        <th>Actions</th>
        <th>Suppression Multiple</th>
  </tr>
  
    <?php 
    while($ligne=MySQLi_fetch_Assoc($res))
    {

    
    ?>
  <tr align="center">
  <td><img src ="<?php Echo $ligne['photo'] ?>" width="80"></td>
  <td><?php echo $ligne["matricule"] ?></td>
  <td><?php echo $ligne["nom"] ?></td>
  <td><?php echo $ligne["prenom"] ?></td>
  <td><?php echo $ligne["adresse"] ?></td>
  <td><?php echo $ligne["naissance"] ?></td>
  <td><?php echo $ligne["filiere"] ?></td>
  <td><?php echo $ligne["stage"] ?></td>
  <td><?php echo $ligne["email"] ?></td>
  <td><?php echo $ligne["password"] ?></td>
  <td>
    <a href="suppinter.php?id=<?php echo $ligne['id']?>&nom=<?php echo $ligne['nom']?>&pren=<?php echo $ligne['prenom']?>"><button type="button">Supp</button></a>
    <a href="modif.php?id=<?php echo $ligne['id']?>"><button type="button">Modif</button></a>
    
  </td>
  <td><input type="checkbox" name="suppm[]" value="<?php echo $ligne['id']?>"></td>
  </tr>
  <?php 
    }
  ?>
  <tr align="center">  
    <td colspan="11"></td>
    <td>Tout cocher<br>
    <input type="checkbox" onclick="cocher(this.checked)"><br>
    <input type="submit" value="Supprimer"></td>
  </tr>
 
</table>
</form>
</body>
</html>