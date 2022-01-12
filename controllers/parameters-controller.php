<?php

$arrayChoice = [
    1 => ['url' => 'basket/nba', 'choice' => 'NBA'],
    2 => ['url' => 'football/ligue-1', 'choice' => 'Ligue 1'],
    3 => ['url' => 'paris-hippique', 'choice' => 'Paris hippique'],
    4 => ['url' => 'jeux-olympiques', 'choice' => 'JO'],
    5 => ['url' => 'tennis', 'choice' => 'Tennis']
];

$error= [];

if(isset($_POST['submit'])){
    if(isset($_POST['flux']) && count($_POST['flux']) == 3){
    $i = 1;
    foreach($_POST['flux'] as $index){
        setcookie("flux$i", $arrayChoice[$index]['choice'], time()+60*60*24*30);
        setcookie("url$i", $arrayChoice[$index]['url'], time()+60*60*24*30);
        $i++;
    }
    setcookie('numberArt', $_POST['radio'], time()+60*60*24*30);
    header('Location: home.php');
    } else {
        $error['msg'] = 'Veuillez sélectionner 3 thématiques';
    }
}


if(!empty($_POST['submit3'])){
    setcookie('normal', 1, time() -1);
    setcookie('darkmode', 2, time() +3600);
    header("Refresh:0");
  }

  if(!empty($_POST['submit4'])){
    setcookie('darkmode', 2, time() -1);
    setcookie('normal', 1, time() +3600);
    header("Refresh:0");
  }






























// if (session_status() == PHP_SESSION_NONE) session_start();

// var_dump($_POST);

// if (!empty($_COOKIE['basket'])) {
//     setcookie('basket', $_POST['basket'], time() - 1);
//     // setcookie('foot', $_POST['foot'], time() - 1);
//     // setcookie('cheval', $_POST['cheval'], time() - 1);
//     // setcookie('jeux', $_POST['jeux'], time() - 1);
//     // setcookie('tennis', $_POST['tennis'], time() - 1);
// }

// $arrayChoice = [];

// if (isset($_POST['submit'])) {

//     if (!empty($_POST['basket'])) {

//         setcookie('basket', $_POST['basket'], time() + 60 * 60 * 24 * 30);
//         array_push($arrayChoice, $_POST['basket']);
//     }

//     if (!empty($_POST['foot'])) {

//         setcookie('foot', $_POST['foot'], time() + 60 * 60 * 24 * 30);
//         array_push($arrayChoice, $_POST['foot']);
//     }

//     if (!empty($_POST['cheval'])) {

//         setcookie('cheval', $_POST['cheval'], time() + 60 * 60 * 24 * 30);
//         array_push($arrayChoice, $_POST['cheval']);
//     }

//     if (!empty($_POST['jeux'])) {

//         setcookie('jeux', $_POST['jeux'], time() + 60 * 60 * 24 * 30);
//         array_push($arrayChoice, $_POST['jeux']);
//     }

//     if (!empty($_POST['tennis'])) {

//         setcookie('tennis', $_POST['tennis'], time() + 60 * 60 * 24 * 30);
//         array_push($arrayChoice, $_POST['tennis']);
//     }
    

//     // if (count($arrayChoice) >= 3) {
//     //     empty($_POST);
//     //     empty($arrayChoice);
//     //     $errorQty = " Veuillez Sélectionner 3 thèmes maximum";
//     // } else if(count($arrayChoice) == 0) {
//     //     header('Location: ../views/parameters.php');
//     // }

// }

// var_dump($arrayChoice);
// var_dump($_COOKIE);
