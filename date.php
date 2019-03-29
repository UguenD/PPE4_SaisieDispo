<?php

$listeJours = [];
// Récupère la date du jour
$date = new DateTime();

// Modifie la variable $date pour lui affecter la date du lundi suivant
$lundi = $date->modify('next monday');
//Ajoute dans l'array $listeJours le jour $lundi
array_push($listeJours, $lundi);

$mardi = new DateTime($lundi->format('Y/m/d'));
$mardi->add(new DateInterval('P1D'));
array_push($listeJours, $mardi);

$mercredi = new DateTime($lundi->format('Y/m/d'));
$mercredi->add(new DateInterval('P2D'));
array_push($listeJours, $mercredi);

$jeudi = new DateTime($lundi->format('Y/m/d'));
$jeudi->add(new DateInterval('P3D'));
array_push($listeJours, $jeudi);

$vendredi = new DateTime($lundi->format('Y/m/d'));
$vendredi->add(new DateInterval('P4D'));
array_push($listeJours, $vendredi);

$samedi = new DateTime($lundi->format('Y/m/d'));
$samedi->add(new DateInterval('P5D'));
array_push($listeJours, $samedi);

$dimanche = new DateTime($lundi->format('Y/m/d'));
$dimanche->add(new DateInterval('P6D'));
array_push($listeJours, $dimanche);

?>