<div id="#wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="font-size: x-large" href="?pages=index"><i class="fa fa-pencil"></i> Appli de Bureau</a>
        </div>
        <?php if(isset($_SESSION['id_admini'])==1){ ?>
        <div style="color: white;
        padding: 15px 50px 5px 50px;
        float: right;
        font-size: 16px;">
            &nbsp;
            <a href="?pages=deconnexion" class="btn btn-danger square-btn-adjust">Deconnexion</a>
        </div>
        <?php
        }else{ ?>
            <div style="color: white;
        padding: 15px 50px 5px 50px;
        float: right;
        font-size: 16px;">
                &nbsp;
                <a href="?pages=login" class="btn btn-danger square-btn-adjust">Connexion</a>
            </div>
       <?php } ?>
    </nav>

    <!-- /. NAV TOP
     <style>
        .active-menu{
            background: #0088cc!important;
        }
    </style>
     -->
    <?php if(isset($_SESSION['id_admini'])==1){ ?>
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="a text-center" style="background: #ffffff">
                    <img style="width: 70%; border-radius: 100%" src="./media/imgUser/<?= $_SESSION['photo_admini'] ?>" class="user-image img-responsive"/>
                    <?= $_SESSION['pseudo_admini'] ?> 
                </li>
                <li>
                    <a style="font-size: 20px;font-weight: 600" class="a <?php echo ($page=='tableau') ? 'active-menu':''; ?>"  href="?pages=inscription"><i class="fa fa-dashboard fa-3x"></i> INSCRIPTION</a>
                </li>
                <li>
                    <a style="font-size: 20px;font-weight: 600" class="a <?php echo ($page=='tableau') ? 'active-menu':''; ?>"  href="?pages=faculte"><i class="fa fa-bar-chart-o fa-3x"></i> FACULTE</a>
                </li>
                 <li>
                    <a style="font-size: 20px;font-weight: 600" class="a <?php echo ($page=='tableau') ? 'active-menu':''; ?>"  href="?pages=departement"><i class="fa fa-table fa-3x"></i> DEPARTEMENT</a>
                </li>
                <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Affichage<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?pages=af_faculte">Faculté</a>
                            </li>
                            <li>
                                <a href="?pages=af_departement">Departement</a>
                            </li>

                             <li>
                                <a href="?pages=af_etudiant">Etudiant</a>
                            </li>                            
                        </ul>
                      </li>
            </ul>

        </div>

    </nav>
    <?php
    } ?>
</div>
</div>
</div>
