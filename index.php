<h1> Exercice "Hotel" </h1>

<p>A partir de ces captures d’écran, réaliser l’application en POO permettant la gestion de réservations 
de chambres par des clients dans différents hôtels : </p>

<h2> Afficher le résultat </h2>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});


$h1 = new Hotel ("Hilton STRASBOURG", "10 route de la gare 67000 STRASBOURG", 30);
$h2 = new Hotel ("Regent PARIS", "37 Boulevard Rochechouart 75009 PARIS", 40);

echo $h1->getInfos();
?>
