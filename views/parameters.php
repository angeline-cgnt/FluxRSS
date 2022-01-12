<?php

require "../controllers/parameters-controller.php";

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
    <title>Paramètres</title>
</head>

<body class="<?= isset($_COOKIE['darkmode']) ? ' black' : 'white' ?>">


    <header class="header d-lg-block d-none m-auto">
        <a href="home.php" class="text-decoration-none">
            <h1 class="mainTitle fw-bold text-white text-center pt-5">Influx Sport</h1>
        </a>
    </header>

    <!-- début navbar -->

    <nav class="navbar navbar-expand-lg m-auto sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white pt-1 pe-5">Menu</span>
            </button>
            <a href="home.php" class="navbar-toggler text-white border border-dark d-flex d-lg-none text-decoration-none">Influx Sport</a>

            <div class="collapse navbar-collapse text-start" id="navbarNav">
                <ul class="navbar-nav container row">


                    <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end ">
                        <div class="text-start text-lg-center">
                            <a class="menu nav-link active" aria-current="page" href="pages.php?url=<?= $_COOKIE['url1'] ?? "basket/nba" ?>"><span class="text text-white"><?= $_COOKIE['flux1'] ?? "" ?></span></a>
                        </div>
                    </li>
                    <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end">
                        <div class="text-start text-lg-center">
                            <a class="menu nav-link active  text-white" aria-current="page" href="pages.php?url=<?= $_COOKIE['url2'] ?? "football/ligue-1" ?>"><span class="text text-white"><?= $_COOKIE['flux2'] ?? "" ?></span></a>
                        </div>
                    </li>
                    <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end">
                        <div class="text-start text-lg-center">
                            <a class="menu nav-link active  text-white" aria-current="page" href="pages.php?url=<?= $_COOKIE['url3'] ?? "paris-hippique" ?>"><span class="text text-white"><?= $_COOKIE['flux3'] ?? "" ?></span></a>
                        </div>
                    </li>
                    <li class="nav-item col-lg-3 d-lg-flex justify-content-lg-end">
                        <div class="text-start text-lg-center">
                            <a class="menu nav-link active  text-white" aria-current="page" href="#"><span class="text text-white">Paramètres</span></a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- fin navbar -->

    <h1 class="fw-bold text-center pt-lg-3 m-auto pb-4">Paramètres</h1>


    <div class="row justify-content-center m-auto">


        <!-- Début Formulaire -->

        <form action="" method="POST">

            <h2 class="fw-bold">Sélectionnez vos 3 sujets favoris</h2><span class="text-danger h1 fw-bold"><?= $errorQty ?? "" ?></span>
            <!-- Choix des sujets, condition php si + de 3 POST, message erreur? -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value=1 name="flux[]" id="basket">
                <label class="form-check-label" for="basket">
                    Basket-Ball
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value=2 name="flux[]" id="foot">
                <label class="form-check-label" for="foot">
                    Football Ligue 1
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value=3 name="flux[]" id="Cheval">
                <label class="form-check-label" for="Cheval">
                    Paris hippique
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value=4 name="flux[]" id="jeux">
                <label class="form-check-label" for="jeux">
                    Jeux Olympiques
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value=5 id="tennis" name="flux[]">
                <label class="form-check-label" for="tennis">
                    Tennis
                </label>
            </div>
            <div class="text-danger"><?= $error['msg'] ?? '' ?></div>

            <h2 class="fw-bold pt-5">Choix du Nombre d'articles par page</h2>

            <!-- Choix du nb d'articles, ne pas changer name id etc.. -->

            <div class="form-check">
                <input class="form-check-input" type="radio" name="radio" id="radio" value=6 checked>
                <label class="form-check-label" for="radio">
                    6
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="radio" id="radio" value=9>
                <label class="form-check-label" for="radio">
                    9
                </label>
            </div>

            <div class="form-check pb-2">
                <input class="form-check-input" type="radio" name="radio" id="radio" value=12>
                <label class="form-check-label" for="radio">
                    12
                </label>
            </div>
            <div class="text-center pt-3 pb-3">
                <input type="submit" value="Valider les paramètres" name="submit" class="btn btn-secondary">
            </div>
        </form>
    </div>

    <form action="parameters.php" method="POST" class="pt-5 pb-5">

        <div class="row m-auto pt-2">
            <div class="form-check form-switch col-4 text-end">
                <label for="submit3">Mode</label>
                <input name="submit3" type="submit" value="Dark" class="btn btn-secondary" />
            </div>
            <div class="form-check form-switch col-4 text-start">
                <label for="submit4">Mode</label>
                <input name="submit4" type="submit" value="Light" class="btn btn-secondary"/>
            </div>
        </div>

    </form>


    <footer class="footer row m-auto fixed-bottom">

        <div class="col-lg-6 text-start">©InfluxSport</div>
        <div class="col-lg-6 text-end">Mentions Légales</div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>