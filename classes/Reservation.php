<?php

class Reservation  {
    private dateTime $dateDebut; 
    private dateTime $dateFin; 
    private Chambre $chambre; 
    private Reservataire $reservataire; 

    //construct
    public function __construct(string $dateDebut, string $dateFin, Chambre $chambre, Reservataire $reservataire)
    {
        $this->dateDebut=$dateDebut;
        $this->dateFin=$dateFin;
        $this->chambre=$chambre; 
        $this->reservataire=$reservataire;
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
        return $this->getReservataire() . " - " . $this->getChambre() . " - " . " du " . $this->dateDebut->format('d.m.y') . " au " . $this->dateFin->format('d.m.y');
    }

}

?>