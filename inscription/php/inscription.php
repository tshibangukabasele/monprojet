<?php
if (isset($_POST['envoyer'])) {
	if (!empty($_POST['nom_etud']) AND !empty($_POST['prenom_etud']) AND !empty($_POST['mail_etud']) AND 
		!empty($_FILES['photo_etud']) AND !empty($_POST['id_dep']) AND !empty($_POST['annee'])) {
		
		$nom_etud = htmlspecialchars(trim($_POST['nom_etud']));
		$prenom_etud = htmlspecialchars(trim($_POST['prenom_etud']));
		$mail_etud = htmlspecialchars(trim($_POST['mail_etud']));
		$id_dep = htmlspecialchars(trim($_POST['id_dep']));
		$annee = htmlspecialchars(trim($_POST['annee']));

		$photo=$_FILES['photo_etud']['name'];
        $file_extension=strrchr($photo, ".");
        $file_tmp_name=$_FILES['photo_etud']['tmp_name'];
        $finalcateg='Image_'.$prenom_etud.'_'.$nom_etud.''.$file_extension;
        $file_dest='./media/profil_etud/'.$finalcateg;
        $extensions_autorisees=array('.JPG','.jpg','.jpeg','.png','.PNG'); 
    if (filter_var($mail_etud, FILTER_VALIDATE_EMAIL)) {
    		$reqmail = $bdd->prepare("SELECT * FROM etudiant WHERE mail_etud=?");
            $reqmail->execute(array($mail_etud));
            $mailexist = $reqmail->rowCount();
            if ($mailexist == 0){
            	if (in_array($file_extension, $extensions_autorisees)) {
            		if(move_uploaded_file($file_tmp_name,$file_dest)){
                            $insert = $bdd->prepare("INSERT INTO etudiant (nom_etud,prenom_etud,mail_etud,photo,id_dep, annee) VALUES (?,?,?,?,?,?)");
                            $insert->execute(array($nom_etud,$prenom_etud,$mail_etud,$finalcateg,$id_dep, $annee));
                            echo '<script>alert("Inscription terminée!")</script>';

                    }else{
                            echo '<script>alert("Une erreur est survenue lors de l\'envoi du fichier!")</script>';
                        }
            	}else{
                        echo '<script>alert("Seuls les images .JPG,.jpg,.jpeg,.png,.PNG sont autorisés!")</script>';
                    }
                }else{
                	echo '<script>alert("le mail entré existe déjà")</script>';
                }
            }else{
            	echo '<script>alert("Le mail entré est incorrect")</script>';
            }
    	}else{
    		echo '<script>alert("Remplissez tous les champs")</script>';
    	}

	}
?>

