<?php

class Hotel {
    private string $nom; 
    private string $adresse;
    private array $chambres;
    private array $reservations; 



    //Construct
    public function __construct(string $nom, string $adresse)
    {
        $this->nom=$nom;
        $this->adresse = $adresse;
        $this->chambres = [];
        $this->reservations = [];
    }


    //Getters et Setters
    public function getNom(): string
    {
        return $this->nom;
    }

  
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): string
    {
        return $this->adresse;
    }

   
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

      public function getChambres(): int
    {
        return $this->chambres;
    }

    public function setChambres($chambres)
    {
        $this->chambres = $chambres;

        return $this;
    }

    public function getReservations(): int
    {
        return $this->reservations;
    }

    public function setReservations($reservations)
    {
        $this->reservations = $reservations;

        return $this;
    }

     //Methodes
    public function addChambre(Chambre $chambre) {
        $this->chambres[] = $chambre;
    }

    public function addReservation(Reservation $reservation)
    {
        $this->_reservations[] = $reservations;
    }

    public function nbChambreReservee()
    {
        return count($this->reservation);
    }

    public function nbChambre()
    {
        return count($this->chambre);
    }

    
    //GetInfos
    public function getInfos() {
        $result = $this->nom . "<br>" .
        $this->adresse. "<br>
        Nombres de chambres: <br>
        Nombres de chambre réservées : <br>
        Nombres de chambres dispo: <br>" ;
        return $result;
    }

 }
    

?>