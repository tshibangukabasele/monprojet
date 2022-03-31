<?php 
if (isset($_GET['id_edit_etud'], $_GET['id_edit_etud'])) {
	$id_edit_etud=(int)$_GET['id_edit_etud'];
	$requete = $bdd->prepare("SELECT * FROM etudiant WHERE id_dep=?");
	$requete->execute(array($id_edit_etud));
	$existe= $requete->rowCount();
	if ($existe==1) {
		$infodep= $requete->fetch();
	}
	if (isset($_POST['envoi'])) {
		$nom_etud= htmlspecialchars($_POST['nom_etud']);
		$modifier= $bdd->prepare("UPDATE etudiant SET nom_etud= ? WHERE id_etud=?");
		$modifier->execute(array($nom_etud, $id_edit_etud));
		header('Location:?pages=af_etudiant');
	}
}

if (isset($_GET['id_edit_etud'], $_GET['id_edit_etud'])) {
	$id_edit_etud=(int)$_GET['id_edit_etud'];
	$requete = $bdd->prepare("SELECT * FROM etudiant WHERE id_dep=?");
	$requete->execute(array($id_edit_etud));
	$existe= $requete->rowCount();
	if ($existe==1) {
		$infodep= $requete->fetch();
	}
	if (isset($_POST['envoi2'])) {
		$prenom_etud= htmlspecialchars($_POST['prenom_etud']);
		$modifier= $bdd->prepare("UPDATE etudiant SET prenom_etud= ? WHERE id_etud=?");
		$modifier->execute(array($prenom_etud, $id_edit_etud));
		header('Location:?pages=af_etudiant');
	}
}



if (isset($_GET['id_sup'], $_GET['id_sup'])) {
	$id_sup=(int)$_GET['id_sup'];
	$requette= $bdd->prepare("DELETE FROM etudiant WHERE id_etud= ?");
	$requette->execute(array($id_sup));
	header('Location:?pages=af_etudiant');
}
$reqs = $bdd->query('SELECT * FROM departement'); 

//$reqs = $bdd->query('SELECT * FROM etudiant  INNER JOIN departement ON departement.id_dep= etudiant.id_dep
												 // INNER JOIN facullte ON  facullte.id_fac= departement.id_fac');

 ?>
