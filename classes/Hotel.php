<?php

class Hotel {
    private string $nom; 
    private string $adresse;
    private int $nbChambre = 30;
    private int $chambreReservee;
    private int $chambreDispo;
   
    

    public function __construct(string $nom, string $adresse, int $nbChambre, int $chambreReservee, int $chambreDispo)
    {
        $this->nom=$nom;
        $this->adresse = $adresse;
        $this->nbChambre = $nbChambre;
        $this->chambreReservee=$chambreReservee; 
        $this->chambreDispo=$chambreDispo;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

  
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

   
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
   
    public function getNbChambre(): int
    {
        return $this->nbChambre;
    }

    public function setNbChambre($nbChambre)
    {
        $this->nbChambre = $nbChambre;

        return $this;
    } 
    public function getChambreDispo(): int
    {
        return $this->chambreDispo;
    }

  
    public function setChambreDispo($chambreDispo)
    {
        $this->chambreDispo = $chambreDispo;

        return $this;
    }

    public function getChambreReservee(): int
    {
        return $this->chambreReservee;
    }


    public function setChambreReservee($chambreReservee)
    {
        $this->chambreReservee = $chambreReservee;

        return $this;
    }
    

    public function reserver($chambreReservee) {
        $this->nbChambre -= $chambreReservee;
    }

    public function dispo($chambreDispo) {
        $this->nbChambre = $this->nbChambre -= $chambreReservee;
    }



    public function getInfos() {
        $result = $this->nom . "<br>" .
        $this->adresse. "<br>
        Nombres de chambres : " . $this->nbChambre . "<br>
        Nombres de chambre réservées :" . $this->chambreReservee . "<br>
        Nombres de chambres dispo:" ;
        return $result;
    }

 }
    

?>