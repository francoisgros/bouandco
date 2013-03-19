<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>BouAndCo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">Vous utilisez un navigateur <strong>obsolète</strong>. Veuillez <a href="http://browsehappy.com/">mettre à jour votre navigateur</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">activer Google Chrome Frame</a> pour améliorer votre expérience.</p>
<![endif]-->

<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.html">BouAndCo</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="about.html">A propos</a></li>
                    <li class="active"><a href="missions.php">Guerre</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Conseils <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="nav-header">Développement</li>
                            <li><a href="conseils.html#ts">Les terres sauvages</a></li>
                            <li><a href="conseils.html#heros">Les héros</a></li>
                            <li><a href="conseils.html#ressources">Les ressources</a></li>
                            <li><a href="conseils.html#banquiers">Les banquiers</a></li>
                            <li><a href="conseils.html#armees">Les armées</a></li>
                            <li><a href="conseils.html#casernes">Les casernes</a></li>
                            <li><a href="conseils.html#2villes">Gestion de 2 villes</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Combat</li>
                             <li><a href="conseils.html#attaques">Les attaques</a></li>
                            <li><a href="conseils.html#troupes">Les troupes</a></li>
                            <li><a href="conseils.html#rapports">Les rapports</a></li>
                            <li><a href="conseils.html#frigos">Les frigos</a></li>
                            <li><a href="conseils.html#attaquer">L'art de l'attaque</a></li>
                            <li><a href="conseils.html#sabliers">Les sabliers</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Fonctionnement</li>
                            <li><a href="conseils.html#demandes">Les demandes</a></li>
                            <li><a href="conseils.html#quitter">Quitter l'alliance</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form pull-right" method="post" action="#">
                    <input class="span2" type="text" placeholder="Nom">
                    <input class="span2" type="text" placeholder="Mot de passe">
                    <button type="submit" class="btn">Se connecter</button>
                </form>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">

    <div class="page-header">
        <h1>Ordres de mission</h1>
    </div>

    <ul>
        <?php

        $db = new SQLite3('../bouandco.db');

        $results = $db->query('SELECT DISTINCT membre FROM bataille3 ORDER BY UPPER(membre)');
        while ($row = $results->fetchArray()) {
            echo '<li><a href="mission.php?membre=' . urlencode($row['membre']) . '">' . htmlentities($row['membre']) . '</a></li>';
        }

        ?>
    </ul>

</div> <!-- /container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/main.js"></script>
</body>
</html>
