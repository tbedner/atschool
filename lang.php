<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

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

    // List supported languages
    $supported_languages = ['ar', 'bg', 'de', 'en', 'es', 'fr', 'hi', 'ja', 'ko', 'pt', 'ru', 'zh_cn', 'zh_tw']; 

    // Set default language
    if(str_contains($mostPreferredLanguage, "-")) {
        $filtered_lang = explode("-",$mostPreferredLanguage);
        $lang = in_array($filtered_lang[0], $supported_languages) ? $filtered_lang[0] : 'en';
    }
    elseif(!empty($mostPreferredLanguage)) {
        $lang = in_array($mostPreferredLanguage, $supported_languages) ? $mostPreferredLanguage : 'en';
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
    $lang = in_array($lang, $supported_languages) ? $lang : 'en';
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
    $lang = in_array($lang, $supported_languages) ? $lang : 'en';
}

// Load language file
$langFile = "assets/lang/$lang.php";
$translations = include("assets/lang/en.php");

if ($lang !== 'en' && file_exists($langFile)) {
    $languageTranslations = include($langFile);
    if (is_array($languageTranslations)) {
        $translations = array_replace($translations, $languageTranslations);
    }
}
?>