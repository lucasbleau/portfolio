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
            <a href="#bloc1" onclick="gererMenu()">Accueil</a>
            <a href="#bloc2" onclick="gererMenu()">Présentation</a>
            <a href="#bloc3" onclick="gererMenu()">Projets</a>
            <a href="#bloc4" onclick="gererMenu()">Veille technologique</a>
            <a href="#bloc5" onclick="gererMenu()">Passions</a>
            <a href="#bloc6" onclick="gererMenu()">Contact</a>
    </div>
</div>

<div class="page">

    <div class="slide" id="bloc1">
        <h1>Lucas BLEAU</h1>
        <p>Etudiant - Développeur</p>
    </div>

    <div class="slide" id="bloc2">
        <h1>Présentation</h1>
        <div class="grid">

            <div class="photo">
                <img src="BLEAU_Lucas.jpg" alt="photo">
            </div>

            <div  class="deux">
                <h2>Parcours proffessionel</h2>
                <p>Je suis actuellement en 2ème année de BTS SIO à Besançon et je souhaite poursuivre mes études afin de devenir développeur web.</p>
            </div>

            <div class="trois">
                <h2>Qualités</h2>
                    <ul>
                        <li>- Esprit d'équipe</li>
                        <li>- Autonomie</li>
                        <li>- Discretion</li>
                        <li>- Organisé</li>
                    </ul>
            </div>

            <div class="quatre">
                <h2>Compétences</h2>
                <ul>
                    <li>- Programmation (HTML/CSS, PHP, Python)</li>
                    <li>- Bases de données, SQL</li>
                    <li>- Des notions de cybersécurité</li>
                    <li>- Des notions de réseaux (Adressages IP, équipements)</li>
                    <li>- Pack Office</li>
                </ul>
            </div>

            <div class="cinq">
                <h2>Centres d'interets</h2>
                <ul>
                    <li>- Passionné d'automobile</li>
                    <li>- Sportif</li>
                </ul>
            </div>

            <div class="six">
                <h2 >Expériences proffessionelles / job saisonier</h2>
                <ul>
                    <li>- Vendange : Arnoux / 2 semaines en Août 2020 / Arbois</li>
                    <li>- Service et entretien dans un camping : Camping d'Arbois / du 1er juin au 20 juillet 2021 / Arbois</li>
                    <li>- Fromagerie : Brun / Mai 2022 / Poligny</li>
                    <li>- Usine : Diager / 1 juin - 22 juillet 2022 / Poligny</li>
                </ul>
            </div>

            <div class="sept">
                <h2 >Expériences proffessionelles / job étudiant</h2>
                <ul>
                    <li>Stage de 3ème : L'HOMME / 1 semaine en Décembre 2017 / Poligny</li>
                    <li>Surveillant / Animateur : Aux Ateliers / 29 Janvier - 30 Mai 2022 / Besançon</li>
                    <li>Plongeur : Taverne de la Finette / 3 Septembre 2022 - 24 juin 2023 / Arbois</li>
                    <li>Cuisinier : Taverne de la Finette / 24 juillet 2023 - 20 août 2023 / Arbois</li>
                </ul>
            </div>

            <div class="huit">
                <h2>Formation</h2>
                <ul>
                    <li>- Obtention d'un Baccalauréat générale avec pour spécialités Mathématiques et Sciences de la Vie et de la Terre en 2021 à Salins-les-bains</li>
                    <li>- Une année de licence en STAPS à Besançon en 2022</li>
                    <li>- 1ère année de BTS SIO (Services informatiques aux organisations) au lycée Louis PERGAUD à Besançon</li>
                    <li>- Permis B</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="slide" id="bloc3">
        <h1>Projets</h1>
    </div>

    <div class="slide" id="bloc4">
        <h1>Veille tehnologique</h1>
        <div class="contenu-VT">
            <p>Vous pouvez telecharger ce document pour comprendre ce qu'est une veille technologique : </p>
        </div>
    </div>

    <div class="slide" id="bloc5">
        <h1>Passions</h1>
        <div class="contenu-passions">
            <p class="sous-titre">L'automobile</p>
            <div class="gridV">
                <div class="drift1">
                    <img src="locatelli1.jpg" alt="1">
                </div>
                <div class="drift2">
                    <img src="jason.jpg" alt="2">
                </div>
                <div class="gt3rs">
                    <img src="porsche2.jpg" alt="3">
                </div>
                <div class="dodge">
                    <img src="Dodge.jpg" alt="4">
                </div>
            </div>
        </div>
    </div>

    <div class="slide" id="bloc6">
        <h1>Contact</h1>
    </div>
</div>

</body>
</html>