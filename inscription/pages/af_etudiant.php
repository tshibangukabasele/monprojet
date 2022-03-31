<div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <?php  while ($affs=$reqs->fetch()) {
                        $reqetu = $bdd->prepare('SELECT * FROM etudiant where id_dep=?'); 
                        $reqetu->execute(array($affs['id_dep']));
                        ?>
                        <div class="panel-heading" style="color:red;font-size:30px">
                        <?= $affs['nom_dep'] ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nom étudiant</th>
                                            <th>Prenom étudiant</th>
                                        
                                            <th>Modifier</th>
                                            <th>Supprimer</th>
                                        </tr>
                                    </thead>
                                    <?php  while ($aff=$reqetu->fetch()) {?>
                                    <tbody>
                                        <tr>
                                            <td>

                                                    <?php  
                                                    if (isset($_GET['id_edit_etud'])) {
                                                        $id_edit_etud= $_GET['id_edit_etud'];
                                                        if ($id_edit_etud==$aff['id_etud']) {?>
                                                            <form method="POST">
                                                                <input type="text" name="nom_etud" 
                                                                value="<?=$aff['nom_etud']?>" >
                                                                <button type="submit" name="envoi"> Modifier</button>
                                                            </form>
                                                        <?php } else{
                                                            echo $aff['nom_etud'];
                                                        }
                                                    }else{ ?>
                                                       <a href="?pages=profil&id_prof=<?= $aff['id_etud']?>"><?= $aff['nom_etud'] ?></a>
                                                <?php }  
                                                ?>
                                                    
                                            </td>
                                            <td>
                                                <?php  
                                                    if (isset($_GET['id_edit_etud'])) {
                                                        $id_edit_etud= $_GET['id_edit_etud'];
                                                        if ($id_edit_etud==$aff['id_etud']) {?>
                                                            <form method="POST">
                                                                <input type="text" name="prenom_etud" value="<?=$aff['prenom_etud']?>">
                                                                <button type="submit" name="envoi2"> Modifier</button>
                                                            </form>
                                                        <?php } else{
                                                            echo $aff['prenom_etud'];
                                                        }
                                                    }else{
                                                        echo $aff['prenom_etud'];
                                                    }
                                                ?>
                                            </td>

                                            <td><a href="?pages=af_etudiant&id_edit_etud=<?= $aff['id_etud']?>">
                                                <i class="fa fa-edit"></i></a></td>
                                            <td><a href="?pages=af_etudiant&id_sup=<?= $aff['id_etud'] ?>"><i class="fa fa-pencil"></i></a></td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <?php } ?>   
                    </div>
                </div>
            </div>
</div>
