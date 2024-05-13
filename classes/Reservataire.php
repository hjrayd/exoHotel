<?php

class Reservataire {
    private string $nom;
    private string $prenom;
    private array $reservations; 


    //Construct
    public function __construct(string $nom, string $prenom)
    {
        $this->nom=$nom;
        $this->prenom = $prenom;
        $this->reservations = [];
    }
  
    //getters et setters
    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getReservations()
    {
        return $this->reservations;
    }

    public function setReservations($reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }

    //Methodes


    public function addReservation(Reservation $reservation)
    {
        $this->reservations[] = $reservation;
    }

    public function calcReservation()
    {
        $nbReservation = 0;
        foreach ($this->reservation as $reservation) {
            $nbReservation += $reservation;
        }
        return $nbReservation;
    }

    public function calcFacture() {

    }

    public function __toString() 
    {
        return $this->getPrenom() ." ". $this->getNom();
    }
}

?>