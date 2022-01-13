<?php

require_once "../controllers/parameters-controller.php";
require_once '../controllers/pages-controller.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>

<body class="<?= isset($_COOKIE['darkmode']) ? ' black' : 'white' ?>">

    <header class="header d-lg-block d-none">
        <a href="accueil.html" class="text-decoration-none">
            <h1 class="mainTitle fw-bold text-white text-center pt-5">Influx Sport</h1>
        </a>
    </header>

    <!-- début navbar -->

    <nav class="navbar navbar-expand-lg border border-white sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white pt-1 pe-5">Menu</span>
            </button>
            <a href="accueil.html" class="navbar-toggler text-white border border-dark d-flex d-lg-none text-decoration-none">Influx Sport</a>

            <div class="collapse navbar-collapse text-start" id="navbarNav">
                <ul class="navbar-nav container row">
                    <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end ">
                        <div class="text-start text-lg-center">
                            <a class="menu nav-link active" aria-current="page" href="<?= $arrayRewrite[0] ?? "basket" ?>.html"><span class="text text-white"><?= $_COOKIE['flux1'] ?? "NBA" ?></span></a>
                        </div>
                    </li>
                    <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end">
                        <div class="text-start text-lg-center">
                            <a class="menu nav-link active  text-white" aria-current="page" href="<?= $arrayRewrite[1] ?? "football" ?>.html"><span class="text text-white"><?= $_COOKIE['flux2'] ?? "Ligue 1" ?></span></a>
                        </div>
                    </li>
                    <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end">
                        <div class="text-start text-lg-center">
                            <a class="menu nav-link active  text-white" aria-current="page" href="<?= $arrayRewrite[2] ?? "paris-hippique" ?>.html"><span class="text text-white"><?= $_COOKIE['flux3'] ?? "Paris hippique" ?></span></a>
                        </div>
                    </li>
                    <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end">
                        <div class="text-start text-lg-center">
                            <a class="menu nav-link active  text-white" aria-current="page" href="parametres.html"><span class="text text-white">Paramètres</span></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- fin navbar -->

    <!-- cartes pour les sujets -->
    <?php
    $numId = 0;
    foreach ($article as $item) {
        $numId++;
    ?>

        <div class="pt-lg-5">
            <div class="card mb-3 border-0">
                <div class="row g-0 <?= isset($_COOKIE['darkmode']) ? ' black' : 'white' ?>">
                    <div class="col-md-4 d-flex align-items-center <?= isset($_COOKIE['darkmode']) ? ' black' : 'white' ?>">
                        <img src="<?= $item->enclosure['url'] ?>" class="img-fluid rounded" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body <?= isset($_COOKIE['darkmode']) ? ' black' : 'white' ?>">
                            <h5 class="card-title"><?= $item->title ?></h5>
                            <p class="card-text"><small class="text-muted"><?= utf8_encode(strftime("%A %d %B", strtotime($item->pubDate))) ?></small></p>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $numId ?>">
                                + d'infos
                            </button>
                            <a href="<?= $item->link ?>"><button type="button" class="btn btn-secondary">Lien vers l'article</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL -->

        <div class="modal fade" id="exampleModal<?= $numId ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header row text-center <?= isset($_COOKIE['darkmode']) ? ' black' : 'white' ?>">
                        <p class="modal-title col-lg-12" id="exampleModalLabel"><?= utf8_encode(strftime("%A %d %B", strtotime($item->pubDate))) ?></p>
                        </p>
                        <h5 class="modal-title col-lg-12" id="exampleModalLabel"><?= $item->title ?></h5>

                    </div>
                    <div class="modal-body <?= isset($_COOKIE['darkmode']) ? ' black' : 'white' ?>">
                        <div class="text-center">
                            <img src="<?= $item->enclosure['url'] ?>" alt="" class="imageModal">
                        </div>
                        <div class="text-center descModal"><?= $item->description ?></div>
                    </div>
                    <div class="modal-footer <?= isset($_COOKIE['darkmode']) ? ' black' : 'white' ?>">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <a href="<?= $item->link ?>"><button type="button" class="btn btn-secondary">Aller vers l'article</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    <?php } ?>
    <!-- FIN POUR cartes pour les sujets-->

    <footer class="footer row m-auto">

        <div class="col-lg-6 text-start">©InfluxSport</div>
        <div class="col-lg-6 text-end">Mentions Légales</div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>