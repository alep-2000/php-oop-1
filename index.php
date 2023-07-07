<?php
// CLASS MOVIE
class Movie {
    public $title;
    public $yearOfRelease;
    public $type;
    public $duration;
    public $cast;
    public $language;
}

$senzaLimiti = new Movie();
$arteDellaTruffa = new Movie();

$senzaLimiti->title = "Senza Limiti";
$senzaLimiti->yearOfRelease = "2000";
$senzaLimiti->type = "Drammatic";
$senzaLimiti->duration = "100 minutes";
$senzaLimiti->cast = ["Sofiane Zermani", "Camille Rowe", "César Domboy", "Zacharie Chasseriaud", "Laurent Fernandez", "Jonas Dinal", "Natalie Mitson", "Belen Enguidanos", "Hassam Ghancy", "Alexandre Poole", "Antonin Schopfer", "Grégory Gaule"];
$senzaLimiti->language = "FR";

$arteDellaTruffa->title = "L'arte della truffa";
$arteDellaTruffa->yearOfRelease = "2019";
$arteDellaTruffa->type = "Poliziesco";
$arteDellaTruffa->duration = "100 minutes";
$arteDellaTruffa->cast = ["Theo James", "Emily Ratajkowski", "Aris Alvarado", "Fernanda Andrade", "Tim Bader", "Joe Bucaro III", "Frank Clem", "Taji Coleman", "Davie-Blue", "Frank Gallegos", "John Gatins", "Evan Handler", "Orion McCabe", "Fred Melamed", "Ebon Moss-Bachrach", "Ivo Nandi", "Dominic Pace", "Keith Powell", "Bob Stephenson", "Ray Stoney", "Phil Van Tee"];
$arteDellaTruffa->language = "US";


var_dump($senzaLimiti);
var_dump($arteDellaTruffa);
?>

