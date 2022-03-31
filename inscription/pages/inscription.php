<div class="row">
    <div class="col-md-12">
        <h2>INSCRIPTION</h2>
        <hr/>
    </div>
</div>
<?php if(isset($erreur)) { ?>
    <div style="width: 100%;background-color: #f2dede;padding: 20px; text-align: left">
        <b style="color:red"> <?= $erreur ?> </b>
    </div>
<?php } ?>
<form role="form" class="col-md-6" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nom</label>
        <input type="text" name="nom_etud" placeholder="Votre nom" class="form-control col-md-12" />
    </div>
    <div class="form-group">
        <label>Prenom</label>
        <input type="text" name="prenom_etud" placeholder="Votre prenom" class="form-control col-md-12" />
    </div>
    
    <div class="form-group">
        <label>Mail</label>
        <input type="email" name="mail_etud"  class="form-control col-md-12" placeholder="Votre mail" />
    </div>
       <div class="form-group">
        <label>Photo</label>
        <input type="file" name="photo_etud" class="form-control col-md-12"/>
    </div>
    <br/><br/>
       
      <div class="form-group">
        <label>Département</label>
    <select name="id_dep" class="form-control col-md-12">
            <option >Choisir...</option>
            <?php  
            $reqfac=$bdd->query("SELECT * FROM departement");
            while ($a=$reqfac->fetch()) { ?>
                <option value="<?= $a['id_dep'] ?>" > <?= $a['nom_dep'] ?></option>
            <?php } ?>
            
        </select></div><br><br>
        <label>Année</label>
       <div class="form-group">
        <input type="text" name="annee" class="form-control col-md-12" placeholder="Année">
        </div>
    <div class="form-group"><br><br>
    <button type="submit" class="btn btn-primary" name="envoyer">S'inscrire</button>
    </div>
</form>