<?php
//include("stockage.php");
$nbrprofil=$bdd->query('SELECT * FROM administration');
$nbrMembre=$nbrprofil->rowCount();

if(isset($_POST['envoyer'])){

    $pseudo =  htmlspecialchars($_POST['pseudo']);
    $mail=  htmlspecialchars($_POST['mail']);
    $password = sha1($_POST['password']);
    $password2 = sha1($_POST['password2']);


    if(!empty($_POST['pseudo'])
        AND !empty($_POST['mail'])
        AND !empty($_POST['password'])
        AND !empty($_POST['password2'])
    ){
        $photo=$_FILES['photo']['name'];
        $file_extension=strrchr($photo, ".");
        $file_tmp_name=$_FILES['photo']['tmp_name'];
        $finalcateg='Infonet_'.$nbrMembre.'_'.$pseudo.''.$file_extension;
        $file_dest='./media/imgUser/'.$finalcateg;
        $extensions_autorisees=array('.JPG','.jpg','.jpeg','.png','.PNG');

        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){

            $reqmail = $bdd->prepare("SELECT * FROM administration WHERE mail_admini=?");
            $reqmail->execute(array($mail));
            $mailexist = $reqmail->rowCount();
            // if($nbrMembre <= $nombreTotalUser){
            if($mailexist == 0){
                if ($password == $password2){
                    if(in_array($file_extension, $extensions_autorisees)){
                        if(move_uploaded_file($file_tmp_name,$file_dest)){
                            $insert = $bdd->prepare("INSERT INTO administration(pseudo_admini,mail_admini,mdp_admini,photo_admini)VALUES(?,?,?,?)");
                            $insert->execute(array($pseudo,$mail,$password,$finalcateg));
                            echo '<script>alert("Inscription terminée! Pour se connecter, contacter votre directeur pour la vilidation du compte!")</script>';

                        }else{
                            echo '<script>alert("Une erreur est survenue lors de l\'envoi du fichier!")</script>';
                        }
                    }else{
                        echo '<script>alert("Seuls les images .JPG,.jpg,.jpeg,.png,.PNG sont autorisés!")</script>';
                    }
                }else {
                    echo '<script>alert("Vos mots de passes ne correspondent pas !")</script>';
                }
            } else{
                echo '<script>alert("Mail déjà utilisée ! choisi un autre!")</script>';
            }
            //}else{
            // $erreur =  "L'espace insuffisant contacté l’administrateur !";
            //}
        }else{
            echo '<script>alert("Votre adresse mail n\'est pas valide !")</script>';
        }
    }else{
        echo '<script>alert("Tous les champs doivent etre completer!")</script>';
    }
}
