<?php
if (isset($_GET['editf'], $_GET['editf'])) {
	$id_edit=(int) $_GET['editf'];

	$reqfac=$bdd->prepare("SELECT * FROM facullte where id_fac=?");
	$reqfac->execute(array($id_edit));
	$row=$reqfac->rowCount();
	if($row==1){
		$infofac=$reqfac->fetch();
	}
}
	if(isset($_POST['ok'])){
		$nom_fac=htmlspecialchars($_POST['nom_fac']);
		$update=$bdd->prepare("UPDATE facullte SET nom_fac=? WHERE id_fac=?");
		$update->execute(array($nom_fac,$id_edit));
		header("Location:?pages=af_faculte");
	}


if (isset($_GET['id_sup'], $_GET['id_sup'])) {
	$id_sup=(int)$_GET['id_sup'];

	$req=$bdd->prepare("SELECT * FROM departement where id_fac=?");
	$req->execute(array($id_sup));
	$row=$req->fetch();
	
	$requette= $bdd->prepare("DELETE FROM etudiant WHERE id_dep= ?");
	$requette->execute(array($row['id_dep']));

	$requettes= $bdd->prepare("DELETE FROM departement WHERE id_fac= ?");
	$requettes->execute(array($id_sup));

	$requettess= $bdd->prepare("DELETE FROM facullte WHERE id_fac= ?");
	$requettess->execute(array($id_sup));

	header('Location:?pages=af_faculte');
}
$requette= $bdd->query("SELECT * FROM facullte"); 
?>