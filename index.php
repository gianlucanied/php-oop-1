<?php

class Movie {
    public $titolo;
    public $regista;
    public $durata;
    public $genere;

    public function __construct($titolo, $regista, $durata, $genere) {

        $this -> titolo = $titolo;
        $this -> regista = $regista;
        $this -> durata = $durata;
        $this -> genere = $genere;
    }

    public function getRegista() {

        return $this -> regista;
    }

    public function getGenere() {

        return $this -> genere;
    }
}

$genereMovie1 = ["Famiglia", "Avventura"];
$genereMovie2 = ["Fantascienza"];

$movie1 = new Movie("La fabbrica di cioccolato", "Tim Burton", "1h 55m", $genereMovie1);
$movie2 = new Movie("Avatar", "James Cameron", "2h 41m", $genereMovie2);


var_dump($movie1 -> titolo);
echo "<br>";
var_dump($movie1 -> regista);
echo "<br>";
var_dump($movie1 -> durata);
echo "<br>";
var_dump($movie1 -> getGenere());

echo "<br><br>";

var_dump($movie2 -> titolo);
echo "<br>";
var_dump($movie2 -> regista);
echo "<br>";
var_dump($movie2 -> durata);
echo "<br>";
var_dump($movie2 -> getGenere());