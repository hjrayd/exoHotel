<?php

class Reservation  {
    private dateTime $dateReservation; 
    private Chambre $chambre; 
    private Reservataire $reservataire; 

    //construct
    public function __construct(string $dateReservation, Chambre $chambre, Reservataire $reservataire)
    {
        $this->dateReservation=$dateReservation;
        $this->chambre=$chambre; 
        $this->reservataire=$reservataire;
    }

    //getters et setters
   public function getDateReservation(): dateTime
    {
        return $this->dateReservation;
    }

    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    public function getChambre(): Chambre
    {
        return $this->chambre;
    }

    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }

    public function getReservataire(): Reservataire
    {
        return $this->reservataire;
    }

    public function setReservataire($reservataire)
    {
        $this->reservataire = $reservataire;

        return $this;
    }

}

?>