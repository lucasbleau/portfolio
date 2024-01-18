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

    <nav class="navbar fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler border border-black brd-rd" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-body"></span>
    <!--            <p class="text-dark my-0">Menu</p>-->
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

            <div id="carouselExampleIndicators" class="carousel slide ">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>

                <div class="carousel-inner bx-sh">
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
            <div class="contenu-passions bx-sh">
                <p class="sous-titre">L'automobile</p>
                <div class="gridV">
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

        <div class="slideeee" id="bloc6">
            <h1>Contact</h1>

            <div class="MeCo bx-sh">
                <h3 class="mb-5">Me contacter</h3>
                    <a href="mailto:bleaulucas45@gmail.com">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                            </svg>
                            Mail : bleaulucas45@gmail.com
                        </p>
                    </a>
                <a href="tel:0610360128">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                        </svg>
                        Numéro Téléphone : 06 10 36 01 28
                    </p>
                </a>
                <a href="https://github.com/lucasbleau">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                        </svg>
                        Github : lucasbleau
                    </p>
                </a>
                <a href="https://www.instagram.com/lucas_bleau_/">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        </svg>
                        Instagram : lucas_bleau_
                    </p>
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