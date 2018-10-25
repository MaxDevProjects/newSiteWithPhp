<?php



$lang = 'fr';

//si notre url ressemble à index.php?lang='en'
if (isset($_GET['lang'])){
    $lang = $_GET['lang'];
}

if ($lang == 'fr') {
    $file_lang = 'lang.fr.php';
}
if ($lang == 'en') {
    $file_lang = 'lang.en.php';
}

include_once 'languages/'.$file_lang;


?>