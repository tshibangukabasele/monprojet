<div class="row">
    <div class="col-md-12">
        <h2>Connexion administrateur</h2>
        <hr/>
    </div>
</div>
<?php if(isset($erreur)) { ?>
    <div style="width: 100%;background-color: #f2dede;padding: 20px; text-align: left">
        <b style="color:red"> <?= $erreur ?> </b>
    </div>
<?php } ?>
<form role="form" class="col-md-6" method="post">
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="mail" class="form-control col-md-12" />
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control col-md-12" placeholder="Password" />
    </div>
    <br/><br/>
    <button type="submit" name="login" class="btn btn-default">Se connecter</button>
    <a href="?pages=register" style="float: right">Créer un compte administrateur</a>
</form>