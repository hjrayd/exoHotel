<h1> Exercice "Hotel" </h1>

<p>A partir de ces captures d’écran, réaliser l’application en POO permettant la gestion de réservations 
de chambres par des clients dans différents hôtels : </p>

<h2> Afficher le résultat </h2>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});


$h1 = new Hotel ("Hilton STRASBOURG", "10 route de la gare 67000 STRASBOURG", 30);
$h2 = new Hotel ("Regent PARIS", "37 Boulevard Rochechouart 75009 PARIS", 20);


$chambre1 = new Chambre (1, 120, 1, "False", "True", $h1);
$chambre2 = new Chambre (2, 120, 2, "False", "True", $h1);
$chambre3 = new Chambre (3, 120, 2, "False", "False", $h1);
$chambre4 = new Chambre (4, 120, 2, "False", "False", $h1);
$chambre5 = new Chambre (16, 300, 2, "True", "True", $h1);
$chambre6 = new Chambre (17, 300, 2, "True", "False", $h1);
$chambre7 = new Chambre (18, 300, 2, "True", "True", $h1);
$chambre8 = new Chambre (19, 300, 2, "True", "True", $h1);


$chambre9 = new Chambre (9, 120, 2, "False", "True", $h2);
$chambre10 = new Chambre (10, 120, 2, "False", "True", $h2);
$chambre11 = new Chambre (11, 120, 2, "False", "True", $h2);


echo $h1->getInfos();
echo $h2->getInfos();
?>
