
<?php $adm=$bdd->query('SELECT * FROM utilisateur ORDER BY id_util DESC '); ?>
<div class="row">
    <div class="col-md-12">
        <h2>Les accès aux adms</h2>
        <hr/>
    </div>
</div>
<div class="row">
    <div class="col-md-10">
        <!--   Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Les administrateurs du site!
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Numéro</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Niveau</th>
                            <th>Confirmation</th>
                            <th>Accès</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while ($a = $administrateur->fetch()){
                            if($a['mail'] != $_SESSION['mail']){
                                ?>
                                <tr>
                                    <td>2</td>
                                    <td><?= $a['nom']?></td>
                                    <td><?= $a['mail']?></td>
                                    <td>
                                        <?php
                                        if($a['niveau']==7){
                                            ?>
                                            <a href="">Super adm</a>
                                        <?php
                                        }
                                        if($a['niveau']==5){
                                            ?>
                                            <a style="color: #ff0000" href="">Webmaster</a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php
                                        if($a['confirmer']==0){
                                            ?>
                                            <a href="?pages=valider_adm&confirmer=<?= $a['id_util']?>">Valider</a>
                                        <?php
                                        }
                                        if($a['confirmer']==1){
                                            ?>
                                            <a style="color: #ff0000" href="?pages=valider_adm&deconfirmer=<?= $a['id_util'] ?>">Invalider</a>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <?php
                                        if($a['niveau']==5){
                                            ?>
                                            <a href="?pages=valider_adm&acces1=<?= $a['id_util']?>">Devenir super adm ?</a>
                                        <?php
                                        }
                                        if($a['niveau']==7){
                                            ?>
                                            <a style="color: #ff0000" href="?pages=valider_adm&acces2=<?= $a['id_util']?>">Devenir webmaster ?</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End  Kitchen Sink -->
    </div>