<?php
$title = "Portfolio -";
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title . " Home"?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ecole-ipssi.com/wp-content/themes/IPSSI/style/fonts.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <img src="../medias/nav-img.jpg" id="image-header">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" id="logo" href="#">Abdelhadi MOUMOU</a>
            <div class="ms-auto" id="menu">
                <ul class="navbar-nav me-auto" >
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="../BTS/bts.php">BTS SIO</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="../projets/projects.php">Projets</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="../veille%20technologique/veille1/veille.php">Veille technologique</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="../contact/contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="header-text container">
        <div class="row justify-content-center">
            <div class="col-7 text-center" id="titre">
                <h1>Abdelhadi MOUMOU</h1>
                <h4>Bienvenue sur mon Portfolio !</h4>
            </div>
        </div>
    </div>
</div>
<div class="container ">
    <div class="text-center">
        <h2 class="section-heading text-uppercase à a-propos-title" id="à-propos">À Propos de moi</h2>
    </div><BR>
    <div class="école">
        <div>
            <div class="row">
                <div class="col-sm-12" style="margin-bottom: 20px;">
                    <div class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-5 my-info">
                                        <div class="about-img" id="card-container">
                                            <img src="../medias/my-img.jpg" class="img-fluid rounded b-shadow-a my-img" alt="" id="card">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-7">
                                        <div class="about-info my-info ">
                                            <p><span class="title-s">Nom/Prénom: </span> <span>Abdelhadi MOUMOU</span>
                                            </p>
                                            <p><span class="title-s">Profil: </span> <span>Développeur Full stack
                                                        </span>
                                            </p>
                                            <p><span class="title-s">Email: </span> <span><a href="mailto:Abdelhadi.mou@outlook.com">Abdelhadi.mou@outlook.com</a>
                                                        </span>
                                            </p>
                                            <p><span class="title-s">Téléphone: </span> <span>06 65 94 56 38</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="about-me pt-4 pt-md-0">
                                    <div class="title-box-2">
                                        <h4 class="title-left">
                                            Présentation
                                        </h4>
                                    </div>
                                    <p class="lead">
                                        Je suis Abdelhadi MOUMOU, étudiant en Premiére année de BTS SIO (Services Informatiques aux Organisations),
                                        Option SLAM (Solutions Logicielles et Application Métier) l'option spécialisée pour le développement, à l'IPSSI SQY.
                                    </p>
                                    <p class="lead">
                                        J'ai développé une passion pour l'informatique depuis que
                                        j'ai commencer mes etude en BTS SIO. C'est ainsi que
                                        j'ai decouvert le developpement web et j'ai décider d'en faire mon futur métier.

                                    </p>
                                    <p class="lead">
                                        En dehors de ma passion pour le developpement web,
                                        je pratique des jeux des echecs amateur depuis plus de 7 ans à niveau
                                    </p>
                                    <p class="lead">
                                        Si vous voulez plus d'infos vous pouvez télécharger mon CV ci-dessous.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<h1 class="text-center ">MES COMPÉTENCES</h1>
<h5 class="text-center compétence-title">Langages</h5>
<div class="container">
    <p>HTML</p>
    <div class="progressbar-wrapper">
        <div  class="progressbar html">
            <p class="pourcentage">90%</p>
        </div>
    </div>
    <p>CSS</p>
    <div class="progressbar-wrapper">
        <div  class="progressbar css">
            <p class="pourcentage">80%</p>
        </div>
    </div>
    <p>PHP</p>
    <div class="progressbar-wrapper">
        <div  class="progressbar PHP">
            <p class="pourcentage">70%</p>
        </div>
    </div>
    <p>JavaScript</p>
    <div class="progressbar-wrapper">
        <div  class="progressbar JS">
            <p class="pourcentage">60%</p>
        </div>
    </div>
    <h5 class="text-center compétence-title">Langues</h5>
    <p>Français </p>
    <div class="progressbar-wrapper">
        <div  class="progressbar Fr">
            <p class="pourcentage">100%</p>
        </div>
    </div>
    <p>Arabic</p>
    <div class="progressbar-wrapper">
        <div  class="progressbar Ar">
            <p class="pourcentage">100%</p>
        </div>
    </div>
    <p>Anglais</p>
    <div class="progressbar-wrapper">
        <div  class="progressbar Ag">
            <p class="pourcentage">65%</p>
        </div>
    </div>
</div>
<br><br>

<h1 class="text-center ">MES QUALITÉS</h1>
<div class="wrapper">
    <div class="curieux"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search search-icon text-center" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg>
        <h5 class="text-center"> CURIEUX</h5>
        <p class="text-center">
            J'ai découvert une forme de curiosité aux nouveaux langages et méthodes de programmations.
        </p>
    </div>
    <div class="perseverant"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512" class="bi bi-search cerveau-icon text-center"><path fill="#c23028" d="M184 0c30.9 0 56 25.1 56 56V456c0 30.9-25.1 56-56 56c-28.9 0-52.7-21.9-55.7-50.1c-5.2 1.4-10.7 2.1-16.3 2.1c-35.3 0-64-28.7-64-64c0-7.4 1.3-14.6 3.6-21.2C21.4 367.4 0 338.2 0 304c0-31.9 18.7-59.5 45.8-72.3C37.1 220.8 32 207 32 192c0-30.7 21.6-56.3 50.4-62.6C80.8 123.9 80 118 80 112c0-29.9 20.6-55.1 48.3-62.1C131.3 21.9 155.1 0 184 0zM328 0c28.9 0 52.6 21.9 55.7 49.9c27.8 7 48.3 32.1 48.3 62.1c0 6-.8 11.9-2.4 17.4c28.8 6.2 50.4 31.9 50.4 62.6c0 15-5.1 28.8-13.8 39.7C493.3 244.5 512 272.1 512 304c0 34.2-21.4 63.4-51.6 74.8c2.3 6.6 3.6 13.8 3.6 21.2c0 35.3-28.7 64-64 64c-5.6 0-11.1-.7-16.3-2.1c-3 28.2-26.8 50.1-55.7 50.1c-30.9 0-56-25.1-56-56V56c0-30.9 25.1-56 56-56z"/></svg>
        <h5 class="text-center"> PERSÉVÉRANT</h5>
        <p class="text-center">
            L'obstination est un fait fastidieux et long parfois, mais qui est souvent récompensée.
        </p>
    </div>
    <div class="dynamique"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightning-fill eclair-icon text-center" viewBox="0 0 16 16">
            <path d="M5.52.359A.5.5 0 0 1 6 0h4a.5.5 0 0 1 .474.658L8.694 6H12.5a.5.5 0 0 1 .395.807l-7 9a.5.5 0 0 1-.873-.454L6.823 9.5H3.5a.5.5 0 0 1-.48-.641z"/>
        </svg>
        <h5 class="text-center"> DYNAMIQUE</h5>
        <p class="text-center">
            Je suis une personne très énergique et active dans ce que j'entreprends.
        </p>
    </div>
</div>
<br><br>

<div class="download-button">
    <a class="btn" href="../medias/Moumou-Abdelhadi-CV-IPSSI.pdf" download="Abdelhadi-MOUMOU-CV" target=" _blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-arrow-down icon-download" viewBox="0 0 16 16">
            <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z"/>
            <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
        </svg>
        Télécharger Mon cv
    </a>
    <a class="btn" href="https://drive.google.com/file/d/1X6jbuWqtDzwBa2BqKicvVcK3_WOZyelV/view?usp=sharing"  target=" _blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
        </svg>
        consulter Mon Cv
    </a>
</div>
<br><br>
</body>
</html>



