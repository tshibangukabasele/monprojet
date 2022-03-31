<?php
session_start();
try
{
    $bdd = new PDO('mysql:host=localhost; dbname=inscription;charset=UTF8' ,  'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch ( Exception $e)
{
    die("Une erreur est survenue lors de la connexion à la base données");
}
?>