<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Wasabi Coffee </title>
    <link href="navfooter.css" type="text/css" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Reem+Kufi&display=swap" rel="stylesheet">
    <link href="burger.css" type="text/css" rel="stylesheet">

</head>

<body>
    <header id="test">
        <ul id="foo">
            <li id="titre">
                <h1><a href="../master-design/index.php">WASABI</a></h1>
            </li>
            <li class="linker"><a href="../master-design/index.php">A la carte </a></li>
            <li class="linker"><a href="page_restaurant.php">Le restaurant</a> </li>
        </ul>
        <label class="switch">
            <input type="checkbox" onclick="return toggle();">
            <span class="slider round"></span>
        </label>
    </header>

    <!-- banniere à remplir -->
    <section id="banniere">
        <h1> WASABI </h1>
    </section>

    <!-- content -->
    <section id="content">
        <article id="art">
            <h2><strong>• LE RESTAURANT •</strong></h2>
            <a id="btn-1" href="#ancre1" title="Restaurant a proximité du cinéma Le Mégarama Bordeaux Bastide ">
                <div id="megarama_bordeaux" class="div_img">
                    UN RESTAURANT A PROXIMITE DU CINEMA LE MEGARAMA BORDEAUX BASTIDE
                </div>
            </a>
            <div id="ajust"></div>
            <a id="btn-2" href="#megarama_bordeaux_div2" title="Restaurant à Bordeaux centre">
                <div id="bordeaux_centre" class="div_img">
                    UN RESTAURANT AVEC TERRASSE À BORDEAUX CENTRE
                </div>
            </a>
        </article>
        <!-- Article - Texte -->
        <article id="art_texte">
            <img id="devanture" src="https://s3-media3.fl.yelpcdn.com/bphoto/VwC9ppYil7AH8R6mBMMvpQ/o.jpg" alt="#">
            <div class="bordeaux_texte">
                <div id="ancre1"></div>
                <figure>
                    <img id="cap1" src="trajet_mega_wasa.png" alt="#">
                    <!-- <figcaption for="cap1"> Capture d'écran prise sur google.maps.com </figcaption> -->
                </figure>

                <div id="megarama_bordeaux_div">
                    <h3>- UN RESTAURANT A PROXIMITE DU CINEMA LE MEGARAMA BORDEAUX BASTIDE -</h3>

                    <br>
                    <p>Après une bonne seance de cinéma au Mégarama de Bordeaux Rive Droite, venez prolonger et terminer
                        votre
                        soirée en degustant des plats typiquement japonais.</p>
                    <br>
                    <p>Après une bonne bière Japonaise en Apéritif avec vos amis, découvrez toutes les spécialités du
                        Wasabi
                        Café,
                        avec nos poissons crus (Sushis, Makis, Sashimis...) ou nos plats cuisinés (Yakitoris et Udon).
                    </p>
                    <br>
                    <p>- Bonne appétit !!! - </p>
                    <br>
                </div>
            </div>
            <div style="background:white;width:80%;height: 2px;margin-left:100px;margin-top:40px;"></div>
            <div class="bordeaux_centre_texte">
                <div id="megarama_bordeaux_div2">
                    <h3>- UN RESTAURANT AVEC TERRASSE À BORDEAUX CENTRE -</h3>
                    <br>
                    <p>Le restaurant Wasabi café vous propose un choix de grillades Yakitori.</p>
                    <br>
                    <p>Notre Restaurant est equipé d'une terrasse proche du Pont de Pierre , au bord de la Garonne,
                        n'hésitez
                        pas à venir déguster des bons plats typiquement Japonais sur Bordeaux. </p>
                    <br>
                    <p>Consulter notre carte des Yakitoris, Sushis et Makis... Et n'hésitez pas à nous Contacter pour
                        une
                        Réservation.</p>
                </div>
                <figure>
                    <img id="cap2" src="pdp_bdx.jpg" alt="">
                </figure>
            </div>
        </article>
        <footer>
            <ul>
                <li>
                    <ul>
                        <li><a href="#">Contact@wasabicafe.fr</a></li>
                        <li><a href="#">36 30 36 30</a></li>
                        <li><a href="#">Voir plan d'accès</a></li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li><a href="#">Mentions légales</a></li>
                        <li><a href="../master-design/index.php">A la carte</a></li>
                        <li><a href="page_restaurant.php">Le restaurant</a></li>
                    </ul>
                </li>
            </ul>
        </footer>

    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="burger.js"></script>
</body>

</html>