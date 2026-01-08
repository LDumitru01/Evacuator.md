<?php
// Detect language from cookie or default to ro
$lang = isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], ['ro', 'ru']) ? $_COOKIE['lang'] : 'ro';

// Redirecționează către pagina principală pentru Chișinău cu limba în URL
$citySlug = urlencode('Chișinău');
header('Location: /' . $lang . '/oras/' . $citySlug);
exit;
?>

