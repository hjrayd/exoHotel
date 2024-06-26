<h1> Exercice "Hotel" </h1>

<p>A partir de ces captures d’écran, réaliser l’application en POO permettant la gestion de réservations 
de chambres par des clients dans différents hôtels : </p>

<h2> Afficher le résultat </h2>

<?php

spl_autoload_register(function ($class_name) {
    require 'classes/'. $class_name . '.php';
});


$h1 = new Hotel ("Hilton**** STRASBOURG", "10 route de la gare 67000 STRASBOURG");
$h2 = new Hotel ("Regent**** PARIS", "37 Boulevard Rochechouart 75009 PARIS");


$chambre1 = new Chambre (1, 120, 1, False, True, $h1);
$chambre2 = new Chambre (2, 120, 2, False, True, $h1);
$chambre3 = new Chambre (3, 120, 2, False, False, $h1);
$chambre4 = new Chambre (4, 120, 2, False, False, $h1);
$chambre5 = new Chambre (16, 300, 2, True, True, $h1);
$chambre6 = new Chambre (17, 300, 2, True, False, $h1);
$chambre7 = new Chambre (18, 300, 2, True, True, $h1);
$chambre8 = new Chambre (19, 300, 2, True, True, $h1);


$chambre9 = new Chambre (9, 120, 2, False, True, $h2);
$chambre10 = new Chambre (10, 120, 2, False, True, $h2);
$chambre11 = new Chambre (11, 120, 2, False, True, $h2);

$reservataire1 = new Reservataire ("MURMANN", "Micka");
$reservataire2 = new Reservataire ("GIBELLO", "Virgile");


$reservation = new Reservation("01-01-2021", "01-02-2022", $chambre6, $reservataire2);
$reservation2 = new Reservation("11-03-2021", "11-03-2022", $chambre3, $reservataire1);
$reservation3 = new Reservation("01-04-2021","03-04-2021", $chambre4, $reservataire1 );


echo $h1->getInfos();

echo $h1->afficherReservation();
echo $h2->afficherReservation();

echo $reservataire1->clientReservations();
echo $h1->statutChambres();

?>
