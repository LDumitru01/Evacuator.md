<?php
// Include configurația comună
require_once 'includes/config.php';

// Orașul este deja detectat în config.php din URL path sau GET parameter
// $cityName este deja setat în config.php

// Obține datele orașului
$cityData = getCityData($cityName);
$recenzii = $cityData['recenzii'];

include 'includes/header.php';
?>

<?php include 'includes/sections/hero.php'; ?>


<?php include 'includes/sections/servicii.php'; ?>

<?php include 'includes/sections/comanda.php'; ?>

<?php include 'includes/sections/despre.php'; ?>

<?php include 'includes/sections/recenzii.php'; ?>


<?php include 'includes/sections/alte-orase.php'; ?>

<?php include 'includes/sections/nevoie-acum.php'; ?>

<?php include 'includes/footer.php'; ?>