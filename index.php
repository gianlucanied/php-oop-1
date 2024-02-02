<?php

class Movie {
    public $titolo;
    public $regista;
    public $durata;

    public function __construct($titolo, $regista, $durata) {

        $this -> titolo = $titolo;
        $this -> regista = $regista;
        $this -> durata = $durata;
    }

    public function getRegista() {

        return $this -> regista;
    }
}

$movie1 = new Movie("La fabbrica di cioccolato", "Tim Burton", "1h 55m");
$movie2 = new Movie("Avatar", "James Cameron", "2h 41m");


var_dump($movie1 -> titolo);
echo "<br>";
var_dump($movie1 -> regista);
echo "<br>";
var_dump($movie1 -> durata);

echo "<br><br>";

var_dump($movie2 -> titolo);
echo "<br>";
var_dump($movie2 -> regista);
echo "<br>";
var_dump($movie2 -> durata);