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
    <link href="https://bootswatch.com/5/lux/bootstrap.min.css" rel="stylesheet" >
    <script src="script.js"></script>
    <title>Portfolio - Lucas BLEAU</title>
</head>
<body>
<div>

    <nav class="navbar fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler border border-black brd-rd" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#bloc1">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#bloc2">Présentation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#bloc3">Projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#bloc4">Veille Technologique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#bloc5">Passion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#bloc6">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>






    <div class="page">

        <div class="slideeee" id="bloc1">
            <h1>Lucas BLEAU</h1>
            <p>Etudiant - Développeur</p>
        </div>






        <div class="slideeee" id="bloc2">
            <h1>Présentation</h1>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner bx-sh ">
                    <div class="carousel-item active">
                        <div class="grid1">
                            <div class="photo-moi">
                                <img src="photo/BLEAU_Lucas.jpg" alt="photo">
                            </div>
                            <div  class="ParP">
                                <h2>Parcours proffessionel</h2>
                                <p>Je suis actuellement en 2ème année de BTS SIO à Besançon et je souhaite poursuivre mes études afin de devenir développeur web.</p>
                            </div>
                            <div class="Qua">
                                <h2>Qualités</h2>
                                    <ul>
                                        <li>- Esprit d'équipe</li>
                                        <li>- Autonomie</li>
                                        <li>- Discretion</li>
                                        <li>- Organisé</li>
                                    </ul>
                            </div>
                            <div class="Comp">
                                <h2>Compétences</h2>
                                <ul>
                                    <li>- Programmation (HTML/CSS, PHP, Python)</li>
                                    <li>- Bases de données, SQL</li>
                                    <li>- Des notions de cybersécurité</li>
                                    <li>- Des notions de réseaux (Adressages IP, équipements)</li>
                                    <li>- Pack Office</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="grid2">
                            <div class="CeDi">
                                <h2>Centres d'interets</h2>
                                <ul>
                                    <li>- Passionné d'automobile</li>
                                    <li>- Sportif</li>
                                </ul>
                            </div>
                            <div class="ExpSai">
                                <h2 >Expériences proffessionelles / job saisonier</h2>
                                <ul>
                                    <li>- Vendange : Arnoux / 2 semaines en Août 2020 / Arbois</li>
                                    <li>- Service et entretien dans un camping : Camping d'Arbois / du 1er juin au 20 juillet 2021 / Arbois</li>
                                    <li>- Fromagerie : Brun / Mai 2022 / Poligny</li>
                                    <li>- Usine : Diager / 1 juin - 22 juillet 2022 / Poligny</li>
                                </ul>

                            </div>
                            <div class="ExpEtu">
                                <h2 >Expériences proffessionelles / job étudiant</h2>
                                <ul>
                                    <li>Stage de 3ème : L'HOMME / 1 semaine en Décembre 2017 / Poligny</li>
                                    <li>Surveillant / Animateur : Aux Ateliers / 29 Janvier - 30 Mai 2022 / Besançon</li>
                                    <li>Plongeur : Taverne de la Finette / 3 Septembre 2022 - 24 juin 2023 / Arbois</li>
                                    <li>Cuisinier : Taverne de la Finette / 24 juillet 2023 - 20 août 2023 / Arbois</li>
                                </ul>
                            </div>
                            <div class="For">
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
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>






        <div class="slideeee" id="bloc3">
            <h1>Projets</h1>
            <div id="carouselExampleIndicators" class="carousel slide ">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
<!--                <div class="carousel-inner bx-sh">-->
<!--                    <div class="carousel-item active">-->
<!--                        <div class="grid3">-->
<!--                            <h1>Projet </h1>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="carousel-item">-->
<!--                        <div class="gri4">-->
<!--                            <h1>Projet 2</h1>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>






        <div class="slideeee" id="bloc4">
            <h1>Veille tehnologique</h1>
            <div class="contenu-VT">
                <p>Vous pouvez telecharger ce document pour comprendre ce qu'est une veille technologique : </p>
            </div>
        </div>







        <div class="slideeee" id="bloc5">
            <h1>Passion</h1>
            <div id="carouselExampleIndicators" class="carousel slide ">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner bx-sh">
                    <div class="carousel-item active">
                        <div class="grid3">
                            <div class="drift1">
                                <img src="photo/locatelli3.jpg" alt="1">
                            </div>
                            <div class="drift2">
                                <img src="photo/jason2.jpg" alt="2">
                            </div>
                            <div class="gt3rs">
                                <img src="photo/porsche2.jpg" alt="3">
                            </div>
                            <div class="dodge">
                                <img src="photo/Dodge.jpg" alt="4">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="gri4">
                            <h1>Projet 2</h1>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous">
    </script>
</body>
</html>