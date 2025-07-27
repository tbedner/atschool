<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();

$acceptLanguageHeader = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';

if (!empty($acceptLanguageHeader)) {
    // Split the string into individual language tags
    $languages = explode(',', $acceptLanguageHeader);

    $preferredLanguages = [];
    foreach ($languages as $lang) {
        // Remove any whitespace and split by semicolon to handle q-values
        $parts = explode(';', trim($lang));
        $locale = $parts[0];
        $qValue = 1.0; // Default q-value

        if (isset($parts[1]) && strpos($parts[1], 'q=') === 0) {
            $qValue = (float) substr($parts[1], 2);
        }
        $preferredLanguages[$locale] = $qValue;
    }

    // Sort languages by q-value in descending order
    arsort($preferredLanguages);

    // Get the most preferred language (e.g., 'en', 'fr-FR')
    $mostPreferredLanguage = key($preferredLanguages);
    // Set default language
    if(str_contains($mostPreferredLanguage, "-")) {
        $filtered_lang = explode("-",$mostPreferredLanguage);
        $lang = $filtered_lang[0];
    }
    elseif(!empty($mostPreferredLanguage)) {
        $lang = $mostPreferredLanguage;
    } 
    else {
        $lang = 'en';
    }

    // You can then use this to set your application's locale or display content in that language.
} else {
    $lang = 'en';
}

if (isset($_GET['lang'])) {
    $lang = stripslashes($_GET['lang']);
	$lang = trim(htmlentities($lang, ENT_QUOTES, 'UTF-8'));
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
}

// Load language file
$langFile = "assets/lang/$lang.php";
if (file_exists($langFile)) {
    $translations = include($langFile);
} else {
    $translations = include("assets/lang/en.php");
}
?>