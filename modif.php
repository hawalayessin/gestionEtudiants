<?php

$id=$_GET['id'];
include "connexion.php";
$sql="select * from etudiant where id=$id";
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
    <h1 align="center" color="#F0006A">Modifier un Etudiant</h1>

    <form action="modif2.php" method="post" enctype="multipart/form-data">
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
        
   
  </tr>
  
    <?php 
    while($ligne=MySQLi_fetch_Assoc($res))
    {

    
    ?>
    
  <tr align="center">
  <td><img src ="<?php Echo $ligne['photo'] ?>" width="80">
  <input type="file" name="photo"></td>
  <td><input type="text" name="matricule" value="<?php echo $ligne["matricule"] ?>"></td>
  <td><input type="text" name="nom" value="<?php echo $ligne["nom"] ?>" ></td>
  <td><input type="text" name="prenom" value="<?php echo $ligne["prenom"] ?>"></td>
  <td><input type="text" name="adresse" value="<?php echo $ligne["adresse"] ?>"></td>
  <td><input type="date" name="naissance" value="<?php echo $ligne["naissance"] ?>"></td>
  <td>
    <select>
        
            <?php
                $sql1="select * from filiere ";
                $res1=MySQLi_Query($connect,$sql1);
                while($ligne1=MySQLi_fetch_Assoc($res1))
                {
                    if ($ligne['filiere']==$ligne1['filiere'])
                        {
            ?>
                    <option value="<?php echo $ligne1['filiere']?>" selected>
                        <?php echo $ligne1['filiere']?>
                    </option>
                    <?php 
                        }
                        else{
                    ?>
                    
                        <option value="<?php echo $ligne1['filiere']?>" >
                        <?php echo $ligne1['filiere']?>
                    </option>  
            <?php
                        }
                }
            ?>
    </select>
  </td>

  <td>
  <select>
        
        <?php
            $sql2="select * from stage";
            $res2=MySQLi_Query($connect,$sql2);
            while($ligne2=MySQLi_fetch_Assoc($res2))
            {
                if ($ligne['stage']==$ligne2['id-stage'])
                    {
        ?>
                <option value="<?php echo $ligne2['id-stage']?>" selected>
                    <?php echo $ligne2['societe']?>
                </option>
                <?php 
                    }
                    else{
                ?>
                
                    <option value="<?php echo $ligne2['id-stage']?>" >
                    <?php echo $ligne2['societe']?>
                </option>  
        <?php
                    }
            }
        ?>
</select>
  </td>
  <td><input type="email" name="email" value="<?php echo $ligne["email"] ?>"></td>
  <td><input type="password" name="password" value="<?php echo $ligne["password"] ?>"></td>
  <input type="hidden" name="id" value="<?php echo $ligne["id"] ?>">
  
  </tr>
  <?php 
    }
  ?>
  <tr>
    <td colspan="10" align="center">
        <input type="submit" value="Modif">
        <a href="home.php"><button>Annuler</button></a>
    </td>
  </tr>
  
 
</table>
</form>
</body>
</html>