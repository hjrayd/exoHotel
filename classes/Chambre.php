<?php

class Chambre {
    private int $numero;
    private float $prix;
    private int $nbLit;
    private bool $wifi;
    private bool $dispo;
    private Hotel $hotel;

    //construct
    public function __construct (int $numero, float $prix, int $nbLit, bool $wifi, bool $dispo, Hotel $hotel)
    {
        $this->numero=$numero;
        $this->prix=$prix;
        $this->nbLit=$nbLit;
        $this->wifi=$wifi;
        $this->dispo=$dispo;
        $this->hotel=$hotel; 
        $this->hotel->addChambre($this);
       
}
    //getters et setters
    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

   
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNbLit(): int
    {
        return $this->nbLit;
    }

    public function setNbLit($nbLit)
    {
        $this->nbLit = $nbLit;

        return $this;
    }

  
    public function getWifi(): bool
    {
        return $this->wifi;
    }

    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

   
    public function getDispo(): bool
    {
        return $this->dispo;
    }

    public function setDispo($dispo)
    {
        $this->dispo = $dispo;

        return $this;
    }

  
    public function getHotel(): Hotel 
    {
        return $this->hotel;
    }

    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }

}

?>