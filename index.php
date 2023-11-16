<!doctype html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&family=Space+Grotesk:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Portfolio - Lucas BLEAU</title>
</head>
<body>

<div id="menu">
    <div class="menu" id="menu" onclick="gererMenu()" >
        <i class="fa-solid fa-bars" style="color: steelblue"></i>
    </div>
    <div class="sous-menu" id="sousmenu" style="display: none;" ">
            <a href="#bloc1" onclick="gererMenu()">Acceuil</a>
            <a href="#bloc2" onclick="gererMenu()">Presentation</a>
            <a href="#bloc3" onclick="gererMenu()">Projets</a>
            <a href="#bloc4" onclick="gererMenu()">Passions</a>
            <a href="#bloc5" onclick="gererMenu()">Contact</a>
    </div>
</div>

    <div class="page">

        <div class="slide" id="bloc1">
            <h1>Lucas BLEAU</h1>
            <p style="margin-left: -10%">Etudiant - Develeppeur</p>
        </div>
        <div class="slide" id="bloc2">
            <h1>Présentation</h1>
            <div class="grid">

                <div class="photo">
                    <img src="BLEAU_Lucas.jpg" alt="photo">
                </div>

                <div  class="deux">
                    <h2>Parcours proffessionel</h2>
                    <p>aaaaaaaa</p>
                </div>

                <div class="trois">
                    <h2>Qualités</h2>
                    <p>aaaaaaa</p>
                </div>

                <div class="quatre">
                    <h2>Compétences</h2>
                    <p>aaaaaaaaaa</p>
                </div>

                <div class="cinq">
                    <h2>Centres d'interets</h2>
                    <p>aaaaaaaaa</p>
                </div>

                <div class="six">
                    <h2 >Expériences proffessionelles / job saisonier</h2>
                    <p>aaaaaaaaa</p>
                </div>

                <div class="sept">
                    <h2 >Expériences proffessionelles / job étudiant</h2>
                    <p>aaaaaaaaaaaa</p>
                </div>

            </div>
        </div>
        <div class="slide" id="bloc3">
            <h1>Projets</h1>
        </div>
        <div class="slide" id="bloc4">
            <h1>Passions</h1>
        </div>
        <div class="slide" id="bloc5">
            <h1>Contact</h1>
        </div>
    </div>

</body>
</html>