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
            <div id="carouselExampleIndicatorsPrésentation" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicatorsPrésentation" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicatorsPrésentation" data-bs-slide-to="1" aria-label="Slide 2"></button>
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
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsPrésentation" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorsPrésentation" data-bs-slide="next">
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
            <div id="carouselExampleIndicatorsPassions" class="carousel slide ">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicatorsPassions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicatorsPassions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner bx-sh">
                    <div class="carousel-item active">
                        <div class="grid3">
                            <div class="p1">
                                <img src="photo/locatelli3.jpg" alt="1">
                            </div>
                            <div class="p2">
                                <img src="photo/jason2.jpg" alt="2">
                            </div>
                            <div class="p3">
                                <img src="photo/porsche2.jpg" alt="3">
                            </div>
                            <div class="p4">
                                <img src="photo/Dodge.jpg" alt="4">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="grid3">
                            <div class="p1">
                                <img src="photo/ski1.jpg" alt="ski">
                            </div>
                            <div class="p2">
                                <img src="photo/skate1.jpg" alt="skate">
                            </div>
                            <div class="p3">
                                <img src="photo/ski2.jpg" alt="ski">
                            </div>
                            <div class="p4">
                                <img src="photo/tennis1.jpg" alt="tennis">
                            </div>

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsPassions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorsPassions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="slideeee" id="bloc6">
            <h1>Contact</h1>
            <div class="MeCo bx-sh">
                <a href="mailto:bleaulucas7@gmail.com">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                    </svg>
                    bleaulucas7@gmail.com
                </a>
                <a href="telto:0610360128">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg>
                    06 10 36 01 28
                </a>
                <a href="https://github.com/lucasbleau">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                    </svg>
                    lucasbleau
                </a>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous">
    </script>
</body>
</html>