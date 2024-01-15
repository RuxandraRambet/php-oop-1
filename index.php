<?php

/**
 * Movie: definisco classe Movie dove dichiaro delle variabli d'istanza
 */
class Movie
{
    public $title;
    public $year;
    public $language;
    public $genre;
    
    /**
     * __construct: definisco costruttore 
     *
     * @param  mixed $_title
     * @param  mixed $_year
     * @param  mixed $_language
     * @param  mixed $_genre
     * @return void
     */
    function __construct($_title, $_year, $_language, $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->language = $_language;
        $this->genre = $_genre;
    }
    
    /**
     * getMovie: funzione per stampare il movie con le rispettive informazioni
     *
     * @return void
     */
    public function getMovie()
    {
        return "Titolo: $this->title Anno: $this->year Lingua Originale: $this->language Genere: $this->genre";
    }
};

// istanzio oggetti movie con le rispettive proprietà
$murder_mystery = new Movie('Murder Mystery', '2019', 'inglese', 'commedia/azione');
$blue_beetle = new Movie('Blue Beetle', '2023', 'inglese', 'azione/Sci-fi');
$black_panther = new Movie('Black Panther', '2018', 'inglese', 'azione/Sci-fi');
$red_notice = new Movie('Red Notice', '2021', 'inglese', 'azione/commedia');

// creo array utilizzando la funzione php array() per poter ciclare i film attraverso un ciclo foreach
$movies = array($murder_mystery, $blue_beetle, $black_panther, $red_notice);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP - Movies</title>
</head>

<body>
    <h1>Film</h1>

    <?php
    foreach ($movies as $movie) {
        echo $movie->getMovie();
        echo "<hr>";
    };
    ?>
</body>

</html>