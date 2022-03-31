<?php
if (isset($_POST['soumettre'])) {
 	if (!empty($_POST['nom_dep']) and !empty($_POST['id_fac'])) {
 		$nom_dep=htmlspecialchars($_POST['nom_dep']);
 		$id_fac=htmlspecialchars($_POST['id_fac']);
 		$reqdep= $bdd->prepare("SELECT * FROM departement WHERE nom_dep=?");
 		$reqdep->execute(array($nom_dep));
 		$depexist= $reqdep->rowCount();
 		if ($depexist==0) {
 		 	$requette= $bdd->prepare('INSERT INTO departement(nom_dep, id_fac) VALUES(?, ?)' );
 			$requette->execute(array($nom_dep, $id_fac));
 		  	echo '<script>alert("Ajout avec succes!")</script>';
 		 }else{
 		 	echo "le departement existe";
 		 }  		
 	}else{
 		echo '<script>alert("Remplissez tous champs")</script>';
 	}
 } 
 ?>