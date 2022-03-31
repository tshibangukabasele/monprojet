<div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            GRILLE DES DEPARTEMENTS
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nom faculté</th>
                                            <th>Nom departement</th>
                                            <th>Modifier</th>
                                            <th>Supprimer</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    while ($aff= $req->fetch()) {?> 
                                    <tbody>
                                        <tr>
                                            <td><?= $aff['nom_fac']?></td>
                                            <td>
                                                <?php  
                                                    if (isset($_GET['id_edit_D'])) {
                                                        $id_edit_D= $_GET['id_edit_D'];
                                                        if ($id_edit_D==$aff['id_dep']) {?>
                                                            <form method="POST">
                                                                <input type="text" name="nom_dep" value="<?=$infodep['nom_dep']?>" >
                                                                <button type="submit" name="envoyer"> Modifier</button>
                                                            </form>
                                                        <?php } else{
                                                            echo $aff['nom_dep'];
                                                        }
                                                    }else{
                                                        echo $aff['nom_dep'];
                                                    }
                                                ?>
                                            </td>
                                            <td><a href="?pages=af_departement&id_edit_D=<?=$aff['id_dep']?>"><i class="fa fa-edit"></i> </a></td>
                                            <td><a href="?pages=af_departement&id_sup=<?=$aff['id_dep']?>"><i class="fa fa-pencil"></a></td>
                                        </tr>

                                        <?php
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     </div>
                    </div>