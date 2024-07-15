<?php
session_start();

function loadLanguage($lang) {
    $jsonString = file_get_contents('lang.json');
    $data = json_decode($jsonString, true);
    
    if (isset($data[$lang])) {
        return $data[$lang];
    } else {
        // Varsayılan dil (İngilizce) döndür
        return $data['tr'];
    }
}

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}

$userLanguage = $_SESSION['lang'];
$lang = loadLanguage($userLanguage);
?>