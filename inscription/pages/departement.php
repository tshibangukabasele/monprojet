<form role="form" class="col-md-6" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Ajouter un departement</label>
        <input type="text" name="nom_dep" placeholder="Votre nom" class="form-control col-md-12" />
    </div><br><br>
    <div class="form-group">
        <label>Faculté</label>
        <select name="id_fac" class="form-control col-md-12">
            <option >Choisir...</option>
            <?php  
            $reqfac=$bdd->query("SELECT * FROM facullte");
            while ($a=$reqfac->fetch()) { ?>
                <option value="<?= $a['id_fac'] ?>" > <?= $a['nom_fac'] ?></option>
            <?php } ?>
            
        </select><br><br><br>
    </div>
    <button type="submit" class="btn btn-default" name="soumettre">S'inscrire</button>


</form>