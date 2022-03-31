<?php 
if (isset($_GET['id_edit_D'], $_GET['id_edit_D'])) {
	$id_edit_D=(int)$_GET['id_edit_D'];
	$requete = $bdd->prepare("SELECT * FROM departement WHERE id_dep=?");
	$requete->execute(array($id_edit_D));
	$existe= $requete->rowCount();
	if ($existe==1) {
		$infodep= $requete->fetch();
	}
	if (isset($_POST['envoyer'])) {
		$nom_dep= htmlspecialchars($_POST['nom_dep']);
		$modifier= $bdd->prepare("UPDATE departement SET nom_dep= ? WHERE id_dep=?");
		$modifier->execute(array($nom_dep, $id_edit_D));
		header('Location:?pages=af_departement');
	}
}
if (isset($_GET['id_sup'], $_GET['id_sup'])) {
	$id_sup=(int)$_GET['id_sup'];

	$requete= $bdd->prepare("DELETE FROM etudiant WHERE id_dep=?");
	$requete->execute(array($id_sup));

	$requetes= $bdd->prepare("DELETE FROM departement WHERE id_dep=?");
	$requetes->execute(array($id_sup));

	header('Location:?pages=af_departement');
}
$req = $bdd->query("SELECT * FROM departement  INNER JOIN facullte ON departement.id_fac= facullte.id_fac");
?>
