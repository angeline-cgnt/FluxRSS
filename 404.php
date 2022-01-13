<?
require 'controllers/parameters-controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur 404</title>
</head>

<body class="<?= isset($_COOKIE['darkmode']) ? ' black' : 'white' ?>">
    <header class="header d-lg-block d-none">
        <a href="home.php" class="text-decoration-none">
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
                            <a class="menu nav-link active" aria-current="page" href="<?= $rewrite1 ?? "basket" ?>.html"><span class="text text-white"><?= $_COOKIE['flux1'] ?? "NBA" ?></span></a>
                        </div>
                    </li>
                    <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end">
                        <div class="text-start text-lg-center">
                            <a class="menu nav-link active  text-white" aria-current="page" href="<?= $rewrite2 ?? "football" ?>.html"><span class="text text-white"><?= $_COOKIE['flux2'] ?? "Ligue 1" ?></span></a>
                        </div>
                    </li>
                    <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end">
                        <div class="text-start text-lg-center">
                            <a class="menu nav-link active  text-white" aria-current="page" href="<?= $rewrite3 ?? "paris-hippique" ?>.html"><span class="text text-white"><?= $_COOKIE['flux3'] ?? "Paris hippique" ?></span></a>
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

    <div class="row justify-content-center pt-5">
        <img src="assets/img/pulpFiction3.gif" alt="Pulp Fiction" class="col-lg-6 gif">
    </div>
    <p class="text-center m-5 fw-bold h1">Oups ! Cette page n'existe pas</p>
    <div class="text-center m-2"><a href="../index.php">Retour à l'accueil</a></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>