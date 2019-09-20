<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Wasabi Coffee </title>
    <link href="navfooter.css" type="text/css" rel="stylesheet">
    <link href="style.css" type="text/css" rel="stylesheet">
    <link href="burger.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Reem+Kufi&display=swap" rel="stylesheet">
</head>

<body>
    <!-- ----- menu burger ----- -->
    <header id="test">
        <ul id="foo">
            <li id="titre">
                <h1><a href="index.php">WASABI</a></h1>
            </li>
            <li class="linker"><a href="index.php">A la carte </a></li>
            <li class="linker"><a href="../Pages_restaurant/page_restaurant.php">Le restaurant</a> </li>
        </ul>
        <label class="switch">
                <input type="checkbox" onclick="return toggle();">
                <span class="slider round"></span> 
            </label>
    </header>

    <section>
        <h1>WASABI Café</h1>
        <h2>A LA CARTE :</h2>
        <div class="container">
            <div class="block-container">
                <section class="block un">
                    <div class="block-image un">
                        <p class="my-text"><a href="../commande:validation/index.php">Menu nagoya</p></a>
                    </div>
                    <div class="block-text">Le Wasabi Café, vous propose ses menu nagoya.</div>
                </section>
                <section class="block deux">
                    <div class="block-image deux">
                        <p class="my-text"><a href="../commande:validation/index.php">Menu sushi et sashimi</a></p>
                    </div>
                    <div class="block-text">Le Wasabi Café, vous propose ses menu sushi et sashimi.</div>
                </section>
            </div>
            <div class="block-container">

                <section class="block trois">
                    <div class="block-image trois">
                        <p class="my-text"><a href="../commande:validation/index.php">Menu chirashi</p></a>
                    </div>
                    <div class="block-text">Le Wasabi Café, vous propose ses menu chirashi.</div>
                </section>
                <section class="block quatre">
                    <div class="block-image quatre">
                        <p class="my-text"><a href="../commande:validation/index.php">Les sushis</p></a>
                    </div>
                    <div class="block-text">Le Wasabi Café, vous propose ses sushi.</div>
                </section>
            </div>
            <div class="block-container">
                <section class="block cinq">
                    <div class="block-image cinq">
                        <p class="my-text"><a href="../commande:validation/index.php">Les makis</p></a>
                    </div>
                    <div class="block-text">Le Wasabi Café, vous propose ses makis.</div>
                </section>
                <section class="block six">
                    <div class="block-image six">
                        <p class="my-text"><a href="../commande:validation/index.php">Les yakitoris</p></a>
                    </div>
                    <div class="block-text">Le Wasabi Café, vous propose ses yakitoris.</div>
                </section>
            </div>
    </div>

    </section>
    <footer>
        <ul>
            <li><a href="#">Contact@wasabicafe.fr</a></li>
            <li><a href="#">36 30 36 30</a></li>
            <li><a href="#">Voir plan d'accès</a></li>
            <li><a href="#">Mentions légales</a></li>
            <li><a href="index.php">A la carte</a></li>
            <li><a href="../Pages_restaurant/page_restaurant.php">Le restaurant</a></li>
        </ul>
    </footer>

    <script src="burger.js"></script>
</body>

</html>
