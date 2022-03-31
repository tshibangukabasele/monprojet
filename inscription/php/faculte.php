<?php 
if (isset($_POST['ajout'])){ 
	if (!empty($_POST['nom_fac'])) {
		$nom_fac = htmlspecialchars($_POST['nom_fac']);
		$reqfac= $bdd->prepare("SELECT * FROM facullte WHERE nom_fac=?");
 		$reqfac->execute(array($nom_fac));
 		$facexist= $reqfac->rowCount();
 		if ($facexist==0) {
 			$requette= $bdd->prepare('INSERT INTO facullte (nom_fac) VALUES(?)' );
 			$requette->execute(array($nom_fac));
 		  	echo "Inscription reuissie";
 		}else{
 			echo '<script> alert("la faculté existe")</script>';
 		}
	}else{
		echo '<script> alert("Remplissez tous les champs")</script>';
	}
}
?>