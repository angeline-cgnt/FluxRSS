<?php

$arrayChoice = [
    1 => ['url' => 'basket/nba', 'choice' => 'NBA'],
    2 => ['url' => 'football/ligue-1', 'choice' => 'Ligue 1'],
    3 => ['url' => 'paris-hippique', 'choice' => 'Paris hippique'],
    4 => ['url' => 'jeux-olympiques', 'choice' => 'JO'],
    5 => ['url' => 'tennis', 'choice' => 'Tennis']
];

$error = [];

if (isset($_POST['submit'])) {
    if (isset($_POST['flux']) && count($_POST['flux']) == 3) {
        $i = 1;
        foreach ($_POST['flux'] as $index) {
            setcookie("flux$i", $arrayChoice[$index]['choice'], time() + 60 * 60 * 24 * 30, '/');
            setcookie("url$i", $arrayChoice[$index]['url'], time() + 60 * 60 * 24 * 30, '/');
            $i++;
        }
        setcookie('numberArt', $_POST['radio'], time() + 60 * 60 * 24 * 30, '/');
        header('Location: accueil.html');
    } else {
        $error['msg'] = 'Veuillez sélectionner 3 thématiques';
    }
}


if (!empty($_POST['submit3'])) {
    setcookie('normal', 1, time() - 1, '/');
    setcookie('darkmode', 2, time() + 3600, '/');
    header("Refresh:0");
}

if (!empty($_POST['submit4'])) {
    setcookie('darkmode', 2, time() - 1, '/');
    setcookie('normal', 1, time() + 3600, '/');
    header("Refresh:0");
}

if (!empty($_COOKIE['url1'])) {
    $url1rewrite = explode('/', $_COOKIE['url1']);
    $rewrite1 = $url1rewrite[0];
    $url2rewrite = explode('/', $_COOKIE['url2']);
    $rewrite2 = $url2rewrite[0];
    $url3rewrite = explode('/', $_COOKIE['url3']);
    $rewrite3 = $url3rewrite[0];
}
