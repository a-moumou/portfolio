<?php
$title = "Portfolio -";
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title . " Contact"?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ecole-ipssi.com/wp-content/themes/IPSSI/style/fonts.css">
    <link rel="stylesheet" href="contact-style.css">
</head>
<body>
<div class="header">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" id="logo" href="../home/index.php">Abdelhadi MOUMOU</a>
            <div class="ms-auto" id="menu">
                <ul class="navbar-nav me-auto" >
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../home/index.php">Accueil</a>
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
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row justify-content-center">
        <div id="contactez-nous">
            <div class="container-fluid px-5 my-5">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-sm-6 d-none d-sm-block bg-image"></div>
                                    <div class="col-sm-6 p-4">
                                        <div class="text-center">
                                            <div class="h3 fw-light" >
                                                <h4 id="contact-title">Contactez-moi</h4>
                                            </div>
                                        </div>
                                        <form id="contactForm" action="process_form.php" method="post" class="needs-validation" novalidate>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="name" name="name" type="text" placeholder="Name" required />
                                                <label for="name">Nom et Prénom </label>
                                                <div class="invalid-feedback">Veuillez entrer votre nom et prénom.</div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="emailAddress" name="emailAddress" type="email" placeholder="Email Address" required />
                                                <label for="emailAddress">Adresse Email</label>
                                                <div class="invalid-feedback">Veuillez fournir une adresse e-mail valide.</div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" id="message" name="message" placeholder="Message" required></textarea>
                                                <label for="message">Message</label>
                                                <div class="invalid-feedback">Veuillez entrer votre message.</div>
                                            </div>
                                            <div class="d-grid">
                                                <button type="submit" class="nav-button">Envoyer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>
