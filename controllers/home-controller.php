<?php

setlocale (LC_TIME, 'fr_FR.utf8','fra');

$nbArt = 2;

if (!empty($_COOKIE['url1'])) {
    $url1 = "https://rmcsport.bfmtv.com/rss/". $_COOKIE['url1'];
    $rss1 = simplexml_load_file($url1);
    $article1 = $rss1->channel->item;

    $url2 = "https://rmcsport.bfmtv.com/rss/". $_COOKIE['url2'];
    $rss2 = simplexml_load_file($url2);
    $article2 = $rss2->channel->item;

    $url3 = "https://rmcsport.bfmtv.com/rss/". $_COOKIE['url3'];
    $rss3 = simplexml_load_file($url3);
    $article3 = $rss3->channel->item;
    
    $nbArt = $_COOKIE['numberArt'] / 3;
} else {
    $url1 = "https://rmcsport.bfmtv.com/rss/basket/nba/";
    $rss1 = simplexml_load_file($url1);
    $article1 = $rss1->channel->item;

    $url2 = "https://rmcsport.bfmtv.com/rss/football/ligue-1/";
    $rss2 = simplexml_load_file($url2);
    $article2 = $rss2->channel->item;

    $url3 = "https://rmcsport.bfmtv.com/rss/paris-hippique/";
    $rss3 = simplexml_load_file($url3);
    $article3 = $rss3->channel->item;
}


$arrayArt = [];

for ($i = 0; $i < $nbArt; $i++) {
    $dateArray = strtotime($article1[$i]->pubDate);
    $arrayArt[$dateArray] = $article1[$i];
}

for ($i = 0; $i < $nbArt; $i++) {
    $dateArray = strtotime($article2[$i]->pubDate);
    $arrayArt[$dateArray] = $article2[$i];
}

for ($i = 0; $i < $nbArt; $i++) {
    $dateArray = strtotime($article3[$i]->pubDate);
    $arrayArt[$dateArray] = $article3[$i];
}

krsort($arrayArt);

$k = 0;
