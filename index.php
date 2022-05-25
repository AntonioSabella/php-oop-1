<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
 vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie {
    public $title;
    public $release_date;
    public $poster_path;
    public $language;
    public $vote;
    public $director;

    function __construct(String $title, Int $release_date, String $poster_path, String $language, Int $vote, String $director)
    {
        $this->title = $title;
        $this->release_date = $release_date;
        $this->poster_path = $poster_path;
        $this->language = $language;
        $this->vote = $vote;
        $this->director = $director;
    }
    
    public function getVote()
    {
        return $this->vote;
    }
    public function setVote($vote)
    {
        $this->vote = $vote;
    }


}


$matrix = new Movie('Matrix', 1999,'https://image.tmdb.org/t/p/w342/tiXqnZSlLpgsY38N3k4eaHiPbWu.jpg','English', 6.5, 'Lana Wachowski');
$dune = new Movie('Dune: Part One', 2021,'https://image.tmdb.org/t/p/w342/a4DiBbHqXg91YQ8SLGL8otVqeOa.jpg', 'English', 7.8, 'Denis Villeneuve');
$blade_runner = new Movie('Blade Runner 2049', 2017,'https://image.tmdb.org/t/p/w342/sPMX3MNTB0DqC6iCveIGKZN5AyN.jpg', 'English', 8.2, 'Denis Villeneuve',);

$matrix-> setVote(4.5);
$dune-> setVote(9.2);
$blade_runner-> setVote(5.6);

$movies = [
    $matrix,
    $dune,
    $blade_runner,
    new Movie('Matrix', 1999,'https://image.tmdb.org/t/p/w342/tiXqnZSlLpgsY38N3k4eaHiPbWu.jpg','English', 6.5, 'Lana Wachowski'),
    new Movie('Dune: Part One', 2021,'https://image.tmdb.org/t/p/w342/a4DiBbHqXg91YQ8SLGL8otVqeOa.jpg', 'English', 7.8, 'Denis Villeneuve'),
    new Movie('Blade Runner 2049', 2017,'https://image.tmdb.org/t/p/w342/sPMX3MNTB0DqC6iCveIGKZN5AyN.jpg', 'English', 8.2, 'Denis Villeneuve',),
    new Movie('Dune: Part One', 2021,'https://image.tmdb.org/t/p/w342/a4DiBbHqXg91YQ8SLGL8otVqeOa.jpg', 'English', 7.8, 'Denis Villeneuve'),
    new Movie('Blade Runner 2049', 2017,'https://image.tmdb.org/t/p/w342/sPMX3MNTB0DqC6iCveIGKZN5AyN.jpg', 'English', 8.2, 'Denis Villeneuve',),
];

var_dump($matrix);
var_dump($dune);
var_dump($blade_runner);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Movies</title>
    <style>
        main {
            height: 100%;
        }
        img {
            max-width: 100%;
            height: 500px;
        }
    </style>
</head>
<body>
 <main>

    <div class="container-fluid bg-dark h-100">
        <div class="row row-cols-4 g-3 align-items-center h-100">
            <?php foreach ($movies as $movie) : ?>
                <div class="col bg-primary">
                    <div class="card text-center">
                        <img class="card-img-top" src="<?php echo $movie->poster_path; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-text"><?php echo $movie->title; ?></h4>
                            <p><strong><?php echo $movie->vote; ?></strong></p>
                            <small><?php echo $movie->language; ?></small>
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

 </main>

    
</body>
</html>