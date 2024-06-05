<?php
$id=$_GET['id'];
$nom=$_GET['nom'];
$prenom=$_GET['pren'];
include "home.php";
echo "<center>Etes vous sur de supprimer :" .$nom." ".$prenom;

?>
<br>
<a href="supp.php?id=<?php echo $id ?>"><button type="button">oui</button></a>

<a href="Home.php"><button>non</button></a>
