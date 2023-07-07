<?php
// CLASS MOVIE
class Movie {
    public $title;
    public $yearOfRelease;
    public $type;
    public $duration;
    public $cast;
    public $language;
    public $sconto;

    function __construct($title, $yearOfRelease, $type, $duration){
        $this->title = $title;
        $this->yearOfRelease = $yearOfRelease;
        $this->type = $type;
        $this->duration = $duration;
    }

    public function setDiscount($language){
        if($this->language === "FR"){
            $this->sconto = 12;
        }
        else{
            $this->sconto = 0;
        }
    }

    public function getDiscount(){
        return $this-> sconto;
    }
}

$senzaLimiti = new Movie("Senza Limiti", "2000", "Drammatic", "100 minutes");
$arteDellaTruffa = new Movie("L'arte della truffa", "2019", "Detective Story", "100 minutes");
$xxx = new Movie("XXX: Il ritorno di Xander Cage", "2017", "Action", "107 minutes");

$senzaLimiti->title = "Senza Limiti";
$senzaLimiti->yearOfRelease = "2000";
$senzaLimiti->type = "Drammatic";
$senzaLimiti->duration = "100 minutes";
$senzaLimiti->cast = ["Sofiane Zermani", "Camille Rowe", "César Domboy", "Zacharie Chasseriaud", "Laurent Fernandez", "Jonas Dinal", "Natalie Mitson", "Belen Enguidanos", "Hassam Ghancy", "Alexandre Poole", "Antonin Schopfer", "Grégory Gaule"];
$senzaLimiti->language = "FR";

$arteDellaTruffa->title = "L'arte della truffa";
$arteDellaTruffa->yearOfRelease = "2019";
$arteDellaTruffa->type = "Detective Story";
$arteDellaTruffa->duration = "100 minutes";
$arteDellaTruffa->cast = ["Theo James", "Emily Ratajkowski", "Aris Alvarado", "Fernanda Andrade", "Tim Bader", "Joe Bucaro III", "Frank Clem", "Taji Coleman", "Davie-Blue", "Frank Gallegos", "John Gatins", "Evan Handler", "Orion McCabe", "Fred Melamed", "Ebon Moss-Bachrach", "Ivo Nandi", "Dominic Pace", "Keith Powell", "Bob Stephenson", "Ray Stoney", "Phil Van Tee"];
$arteDellaTruffa->language = "US";

$xxx->title = "XXX: Il ritorno di Xander Cage";
$xxx->yearOfRelease = "2017";
$xxx->type = "Action";
$xxx->duration = "107 minutes";
$xxx->cast = ["Vin Diesel", "Donnie Yen", "Deepika Padukone", "Kris Wu", "Ruby Rose", "Tony Jaa"];
$xxx->language = "US";

$senzaLimiti->setDiscount(12);
$scontoFr = $senzaLimiti->getDiscount();

$arteDellaTruffa->setDiscount(0);
$sconto = $arteDellaTruffa->getDiscount();

echo "FILM 1:" ."<br/>" .$senzaLimiti->title ."<br/>" .$senzaLimiti->yearOfRelease ."<br/>" .$senzaLimiti->type ."<br/>" .$senzaLimiti->duration ."<br/>" .$senzaLimiti->sconto ."€" ."<br/> <br/>"; 
echo "FILM 2:" ."<br/>" .$arteDellaTruffa->title ."<br/>" .$arteDellaTruffa->yearOfRelease ."<br/>" .$arteDellaTruffa->type ."<br/>" .$arteDellaTruffa->duration ."<br/>" .$arteDellaTruffa->sconto ."€"; 
?>

