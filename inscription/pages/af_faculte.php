<div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            GRILLE DES FACULTES
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nom Faculté</th>
                                            <th>Modifier</th>
                                            <th>Supprimer</th>
                                        </tr>
                                    </thead>
                                    <?php while ($af = $requette->fetch()) {?>
                                    <tbody>
                                        <tr>
                                            <td>
                                            <?php
                                            if(isset($_GET['editf'])){
                                                if($_GET['editf']==$af['id_fac']){ ?>
                                                    <form action="" method="post">
                                                        <input type="text" value="<?= $af['nom_fac'] ?>" name="nom_fac" id="">
                                                        <button type="submit" name="ok">Modifier</button>
                                                    </form>
                                            <?php }else {
                                               echo $af['nom_fac'];
                                            } ?>
                                             <?php }else {
                                                echo $af['nom_fac'];
                                            } ?>
                                             
                                            </td>
                                            <td><a href="?pages=af_faculte&editf=<?= $af['id_fac'] ?>"><i class="fa fa-edit"></i></a></td>
                                            <td><a href="?pages=af_faculte&id_sup=<?= $af['id_fac'] ?>"><i class="fa fa-pencil"></i></a></td>
                                        </tr>
                                        
                                    </tbody>
                                   <?php }
                                ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>