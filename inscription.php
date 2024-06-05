<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/form.css">

</head>
<body>
    <fieldset>
        <legend>Inscription</legend>
        <form action="inscription2.php" method="post" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    <th>Matricule</th>
                    <td><input type="text" name="matricule" 
                    placeholder="tapez votre matricule"></td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td><input type="text" name="nom" 
                    placeholder="tapez votre nom"></td>
                </tr>
                <tr>
                    <th>prenom</th>
                    <td><input type="text" name="prenom" 
                    placeholder="tapez votre prenom"></td>
                </tr>
                <tr>
                    <th>adresse</th>
                    <td><input type="text" name="adresse" 
                    placeholder="tapez votre adresse"></td>
                </tr>
                <tr>
                    <th>photo</th>
                    <td><input type="file" name="photo" 
                    placeholder="tapez votre photo"></td>
                </tr>
                <tr>
                    <th>naissance</th>
                    <td><input type="date" name="naissance" 
                    placeholder="tapez votre date de naissance"></td>
                </tr>
                <tr>
                    <th>filiere</th>
                    <td>
                        
                   <select class="form-select" name="filiere"> 
                   <?php
                    include "connexion.php";
                     $sql="select * from filiere";
                     $res=MySQLi_Query($connect,$sql);
                     while($ligne=MySQLi_fetch_Assoc($res))
                     {
                 
                     ?>
                    <option width="100px" value="<?php echo $ligne['filiere']?>"><?php echo $ligne['filiere']?></option>
                    <?php
                     }?>
                
                </select></td>
                </tr>
                <tr>
                    <th>stage</th>
                    <td><select class="form-select" name="stage" >
                    <?php
                     $sql="select * from stage";
                     $res=MySQLi_Query($connect,$sql);
                     while($ligne=MySQLi_fetch_Assoc($res))
                     {
                 
                     ?>
                    <option value="<?php echo $ligne['id-stage']?>"><?php echo $ligne['societe']?></option>
                    <?php
                     }?>
                </select></td>

                </tr>
                <tr>
                    <th>email</th>
                    <td><input type="text" name="email" 
                    placeholder="tapez votre email"></td>
                </tr>
                <tr>
                    <th>password</th>
                    <td><input type="text" name="password" 
                    placeholder="tapez votre password"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="valider"></td>
                    <td><input type="reset" value="annuler"></td>
                </tr>
            </table>
        </form>
</body>
</html>