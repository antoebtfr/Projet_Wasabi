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
            <li class="linker"><a href="../Pages_restaurant/page_restaurant.php">Le restaurant</a> </li>
        </ul>
        <label class="switch">
            <input type="checkbox" onclick="return toggle();">
            <span class="slider round"></span>
        </label>
    </header>

    <!-- banniere -->
    <section id="banniere">
        <h1> WASABI </h1>
    </section>

    <!-- formulaire -->
    <section id="content">
        <form  action="page_validation2.php">
            <p>
                <label for="name"> Nom et Prénom :</label> <input name="name" id="name" type="text" placeholder="Ex : Pierre Beson">
                <label for="tel"> Votre téléphone :</label> <input name="tel" id="tel" type="tel" placeholder="06 01 02 03 04">
                <button id="submit">Valider votre commande</button>
               <!-- <input id="submit" type="submit" value="Valider la commande"> -->
            </p>
        </form>
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
                        <li><a href="../Pages_restaurant/page_restaurant.php">Le restaurant</a></li>
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
