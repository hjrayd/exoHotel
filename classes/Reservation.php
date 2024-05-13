<?php

class Reservation  {
    private DateTime $dateDebut; 
    private DateTime $dateFin; 
    private Chambre $chambre; 
    private Reservataire $reservataire; 
    private Hotel $hotel;

    //construct
    public function __construct(string $dateDebut, string $dateFin, Chambre $chambre, Reservataire $reservataire)
    {
        $this->dateDebut= new DateTime($dateDebut);
        $this->dateFin=new DateTime ($dateFin);
        $this->chambre=$chambre; 
        $this->reservataire=$reservataire;
        $chambre->addReservation($this);
        $hotel = $chambre->getHotel();
        $hotel->addReservation($this);
        $reservataire->addReservation($this);
    }

    //getters et setters
   public function getDateDebut(): dateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): dateTime
    {
        return $this->dateFin;
    }

    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

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

    public function __toString()
    {
        return $this->getReservataire() . " - " . $this->getChambre() . " - " . " du " . $this->dateDebut->format('d.m.y') . " au " . $this->dateFin->format('d.m.y') ."<br>";
    }


}

?>