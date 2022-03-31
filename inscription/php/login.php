<?php
if(isset($_POST['login'])){
    $mail=  htmlspecialchars($_POST['mail']);
    $password= sha1($_POST['password']);
    if(!empty($mail)AND !empty($password)){

        $requser=$bdd->prepare("SELECT * FROM administration WHERE mail_admini=? AND mdp_admini=?");
        $requser->execute(array($mail,$password));
        $userexist=$requser->rowCount();

        if($userexist==1){
            $userinfo=$requser->fetch();
            $_SESSION['id_admini']=$userinfo['id_admini'];
            $_SESSION['pseudo_admini']=$userinfo['pseudo_admini'];
            $_SESSION['mail_admini']=$userinfo['mail_admini'];
            $_SESSION['photo_admini']=$userinfo['photo_admini'];
           header('Location:?pages=inscription');
        }  else {
            $erreur="Si vous venez de créer ce compte, contactez les administrateurs (via le chat) pour l'opération de validation de votre compte
                <br> avant tout tentative de connexion ou vérifier si vous avez entré le bon pseudo ou mot de passe!";
        }
    }  else {
        $erreur="Tous les champs n'ont pas été remplis!";
    }
}

?>