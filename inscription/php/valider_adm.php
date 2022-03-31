<?php
if(isset($_SESSION['id_util'])==1){

//confirmation d'inscription
if(isset($_GET['confirmer'])AND !empty($_GET['confirmer']))
{
    $confirmer=(int) $_GET['confirmer'];

    $req=$bdd->prepare('UPDATE utilisateur SET confirmer=1 WHERE id_util=?');
    $req->execute(array($confirmer));
}
//deconfirmation d'inscription
if(isset($_GET['deconfirmer'])AND !empty($_GET['deconfirmer']))
{
    $confirmer=(int) $_GET['deconfirmer'];

    $req=$bdd->prepare('UPDATE utilisateur SET confirmer=0 WHERE id_util=?');
    $req->execute(array($confirmer));
}
//confirmation d'inscription
if(isset($_GET['acces1'])AND !empty($_GET['acces1']))
{
    $confirmer=(int) $_GET['acces1'];

    $req=$bdd->prepare('UPDATE utilisateur SET niveau=7 WHERE id_util=?');
    $req->execute(array($confirmer));
}
//deconfirmation d'inscription
if(isset($_GET['acces2'])AND !empty($_GET['acces2']))
{
    $confirmer=(int) $_GET['acces2'];

    $req=$bdd->prepare('UPDATE utilisateur SET niveau=5 WHERE id_util=?');
    $req->execute(array($confirmer));
}

$administrateur=$bdd->query("SELECT * FROM utilisateur ORDER BY nom ASC");
//function

}else{
header("Location:?pages=login");
}