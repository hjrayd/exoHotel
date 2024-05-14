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

   public function getChambres()
    {
        return $this->chambres;
    }


    public function setChambres($chambres)
    {
        $this->chambres = $chambres;

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
    public function addChambre(Chambre $chambre) {
        $this->chambres[] = $chambre;
    }

    public function addReservation(Reservation $reservation)
    {
        $this->reservations[] = $reservation;
    }

    public function nbChambreReservee()
    {
        return count($this->reservations);
    }

    public function nbChambre()
    { return count($this->chambres);
     }

    public function nbChambreDispo() {
         return count($this->chambres)-count($this->reservations);
    }

    public function statutChambres() {
        $result = "<br> <h2> Statut des chambres de ". $this->getNom() ."</h2> <br>";
        foreach($this->chambres as $chambre)
        {
            $result .= "Chambre " .$chambre->getNumero(). " " .$chambre->getPrix(). " € " .$chambre->optionWifi(). " " .$chambre->dispoChambre(). "<br>";
        }
        return $result;
    }

    public function afficherReservation() {
        if(count($this->reservations) > 0) {
            
        $result = "<h2> Reservations de l'hôtel ". $this->getNom(). "</h2>";
        $result .= count($this->reservations) ." reservations <br>";
        foreach ($this->reservations as $reservation) 
        $result .= $reservation; 
        } else {
        $result = "<h2> Reservations de l'hôtel ". $this->getNom(). "</h2> Aucune réservation !";
        }
        return $result;
    }
    
    //GetInfos

    public function getInfos() {
        $result = $this->nom . "<br>" .
        $this->adresse. "<br>
        Nombre de chambre:". $this->nbChambre() ."<br>
        Nombres de chambre réservées :" .$this->nbChambreReservee(). "<br>
        Nombres de chambres dispo:" .$this->nbChambreDispo(). "<br>" ;
        return $result;
    }
 }
    

?>