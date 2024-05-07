<?php

class Hotel {
    private string $nom; 
    private string $adresse;
    private int $nbChambre;
    private array $chambres;


    public function __construct(string $nom, string $adresse, int $nbChambre)
    {
        $this->nom=$nom;
        $this->adresse = $adresse;
        $this->nbChambre = $nbChambre;
        $this->chambres = [];
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

      public function getChambres()
    {
        return $this->chambres;
    }

    public function setChambres($chambres)
    {
        $this->chambres = $chambres;

        return $this;
    }

  
    /*public function reserver($chambreReservee) {
        $this->nbChambre -= $chambreReservee;
    }

    public function dispo($chambreDispo) {
        $this->nbChambre = $this->nbChambre -= $chambreReservee;
    }*/

    public function addChambre(Chambre $chambre) {
        $this->chambres[] = $chambre;
    }

    public function afficherChambres()
    {
        foreach ($this->chambres as $chambre) {
            echo $chambre . '<br>';
        }
    }
    
    
    public function getInfos() {
        $result = $this->nom . "<br>" .
        $this->adresse. "<br>
        Nombres de chambres : " . $this->nbChambre . "<br>
        Nombres de chambre réservées : <br>
        Nombres de chambres dispo:" ;
        return $result;
    }

  
 }
    

?>