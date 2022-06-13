<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <!-- 
        esercizio di oggi:
        nome repo: php-oop-1
        Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
        metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
        - è definita una classe ‘Movie’
        => all'interno della classe sono dichiarate delle variabili d'istanza
        => all'interno della classe è definito un costruttore
        => all'interno della classe è definito almeno un metodo
        - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
    -->

    <?php 
    class Movie {

        public $title;
        public $language;
        public $year;
        public $genres;

        function __construct($_title, $_language, $_year, $_genres) {
            
            $this->title = $_title;
            $this->language = $_language;
            $this->year = $_year;
            $this->genres = $_genres;

        }

        public function insertGenre($_genre)
        {
            $this->genres[] = $_genre;
        }

        public function getInfo()
        {
            return "Lingua originale: " . $this->language . "<br>Anno: " . $this->year . "<br>Generi: " . $this->genres;
        }
    }

    $deadpool = new Movie("Deadpool", "Inglese", "2016", "Azione, Avventura, Commedia");
    // var_dump($deadpool);
    
    $deadpool2 = new Movie("Deadpool 2", "Inglese", "2018", "Azione, Commedia, Avventura");
    // var_dump($deadpool2);

    $maquia = new Movie("Maquia - Decoriamo la mattina dell'addio con i fiori promessi", "Giapponese", "2018", "Animazione, Fantasy, Romance, Dramma");
    // var_dump($maquia);

    $movies = [];
    $movies[] = $deadpool;
    $movies[] = $deadpool2;
    $movies[] = $maquia;
    ?>

    <ul>
    <?php foreach ($movies as $movie) { ?>
        <li>
            <h2>
                <?php echo $movie->title; ?>
            </h2>
            <h4>Info:</h4>
            <p><?php echo $movie->getInfo(); ?></p>
        </li>
    <?php } ?>
    </ul>

</body>
</html>