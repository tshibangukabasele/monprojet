<?php
 if (isset($_GET['id_prof'], $_GET['id_prof'])) {
 	$id_prof = (int)$_GET['id_prof'];
 	$requete= $bdd->prepare("SELECT * FROM etudiant WHERE id_etud= ?");
 	$requete->execute(array($id_prof));
 	$existe= $requete->rowCount();
 	if ($existe==1) {
 		$save= $requete->fetch();

 		$id_etud= $save['id_etud'];
 		$nom_etud= $save['nom_etud'];
 		$prenom_etud= $save['prenom_etud'];
 		$mail_etud= $save['mail_etud'];
 		$photo= $save['photo'];
 		$id_dep= $save['id_dep'];
 		$annee= $save['annee'];
 	$user= $bdd->prepare("SELECT * FROM departement WHERE id_dep= ?");
 	$user->execute(array('id_dep'));
 	$saveuser= $user->fetch();
 	$nom_dep= $saveuser['nom_dep'];
 }else{
 	header('Location:?pages=af_etudiant');
 }
}
 ?>