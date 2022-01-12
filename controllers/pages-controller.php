<?php

setlocale (LC_TIME, 'fr_FR.utf8','fra');

$theme = $_GET['url'];

if(!isset($_GET['url'])){
    header('Location: ../404.php');
}


$url = "https://rmcsport.bfmtv.com/rss/" . $theme;
$rss = simplexml_load_file($url);
$article = $rss -> channel -> item;

