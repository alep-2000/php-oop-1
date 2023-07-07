<?php
// CLASS MOVIE
class Movie {
    public $title;
    public $yearOfRelease;
    public $type;
    public $duration;
    public $cast;
    public $language;

    function __construct($title, $yearOfRelease, $type, $duration){
        $this->title = $title;
        $this->yearOfRelease = $yearOfRelease;
        $this->type = $type;
        $this->duration = $duration;
    }
}

$senzaLimiti = new Movie("Senza Limiti", "2000", "Drammatic", "100 minutes");
$arteDellaTruffa = new Movie("L'arte della truffa", "2019", "Detective Story", "100 minutes");

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


// echo $senzaLimiti->title ."<br/>";
// echo $senzaLimiti->yearOfRelease;
?>

