<div class="row">
    <div class="col-md-12">
        <h2>Creation d'un compte administrateur</h2>
        <hr/>
    </div>
</div>
<?php if(isset($errprs)) { ?>
    <div style="width: 100%;background-color: #f2dede;padding: 20px; text-align: left">
        <b style="color:red"> <?= $errprs ?> </b>
    </div>
<?php } ?>
<?php if(isset($errpr)) { ?>
    <div style="width: 100%;background-color: #f2dede;padding: 20px; text-align: left">
        <b style="color:#34ce57"> <?= $errpr ?> </b>
    </div>
<?php } ?>
<form role="form" class="col-md-6" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Pseudo</label>
        <input type="text" name="pseudo" placeholder="Votre nom" class="form-control col-md-12" />
    </div>
    <div class="form-group">
        <label>Mail</label>
        <input type="email" name="mail" placeholder="Votre mail" class="form-control col-md-12" />
    </div>
    
    <div class="form-group">
        <label>Mot de passe</label>
        <input type="password" name="password"  class="form-control col-md-12" placeholder="Votre password" />
    </div>
    <div class="form-group">
        <label>Confirmation mot de passe</label>
        <input type="password" name="password2" class="form-control col-md-12" placeholder="Confirmer password" />
    </div>
    <div class="form-group">
        <label>Photo</label>
        <input type="file" name="photo" class="form-control col-md-12" placeholder="Confirmer password" />
    </div>
    <br/><br/>
   
    <button type="submit" class="btn btn-default" name="envoyer">S'inscrire</button>

</form>
