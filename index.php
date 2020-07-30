<?php
session_start();
var_dump($_SESSION);

$_SESSION['user'] = [
    'prenom' => 'Abderr',
    'nom' => 'Boulhdir'
];
$_SESSION['panier'] = [
    'produit' => 'Brouette',
    'quantite' => 3
];
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";