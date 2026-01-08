<?php
// Include configurația comună pentru a avea acces la funcția getLangUrl
require_once 'includes/config.php';

// Redirecționează către pagina principală pentru Chișinău cu limba în URL
$citySlug = urlencode('Chișinău');
header('Location: ' . getLangUrl('oras.php', ['city' => 'Chișinău']));
exit;
?>

