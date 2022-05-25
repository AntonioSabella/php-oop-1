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
$pianeta_scimmie = new Movie('The War', 2017,'https://image.tmdb.org/t/p/w342/m94YXXn5asqiw6vjvcauFmeahdg.jpg','English', 7.1, 'Matt Reeves');
$the_witch = new Movie('The Witch', 2015,'https://image.tmdb.org/t/p/w342/cJpvTuOl4OV8TgDib4ilYqPVAfe.jpg', 'English', 6.9, 'Robert Eggers');
$the_lighthouse = new Movie('The Lighthouse', 2019,'https://image.tmdb.org/t/p/w342/w8lnWLKBAEOT0o3GL1rpu9kZ6Q3.jpg', 'English', 7.5, 'Robert Eggers',);
$the_nortman =  new Movie('The Northman', 2022,'https://image.tmdb.org/t/p/w342/et7Rkt23u2K98Jlf7o5jmIxdjqN.jpg', 'English', 7.5, 'Robert Eggers');
$the_void = new Movie('The Void', 2016,'https://image.tmdb.org/t/p/w342/ovsoQ0OuUFlJKdCpPCug8GHpuUu.jpg', 'English', 5.9, 'Steven Kostanski',);

$matrix-> setVote(4.5);
$dune-> setVote(9.2);
$blade_runner-> setVote(5.6);
$pianeta_scimmie-> setVote(6.1);
$the_witch-> setVote(7.5);
$the_lighthouse-> setVote(8.4);
$the_nortman-> setVote(8.7);
$the_void-> setVote(7.5);


$movies = [
    $matrix,
    $dune,
    $blade_runner,
    $pianeta_scimmie,
    $the_witch,
    $the_lighthouse,
    $the_nortman,
    $the_void,
];

//var_dump($matrix);
//var_dump($dune);
//var_dump($blade_runner);

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
            background-image: url('https://cdn.pixabay.com/photo/2019/11/07/20/48/cinema-4609877_1280.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        img {
            max-width: 100%;
            height: 400px;
        }

        .card {
            position: relative;
            transition: 700ms;
        }

        .text_disappear {
            display: none;
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(203, 7, 7, 0.6);
        }

        .card:hover .text_disappear {
            display: block;
        }

        .fix_height {
            height: 50px;
        }
        
        .shadow_card {
            box-shadow: 0 0 30px 15px red;
        }
        .card:hover {
            box-shadow: none;
        }


    </style>
</head>
<body>
 <main>

    <div class="container py-5 h-100">
        <div class="row row-cols-4 g-5 align-items-center h-100">
            <?php foreach ($movies as $movie) : ?>
                <div class="col">
                    <div class="card shadow_card text-center text-dark bg-dark">
                        <img class="card-img-top" src="<?php echo $movie->poster_path; ?>" alt="Card image cap">
                        <div class="card-body text_disappear">
                            <h2 class="card-text py-5 mb-5fix_height"><?php echo $movie->title; ?></h2>
                            <div>
                            <p class='text_bottom font-weight-bold'><?php echo $movie->release_date; ?></p>
                            <p><strong><?php echo $movie->vote; ?></strong></p>
                            <small><?php echo $movie->language; ?></small>
                            <p><?php echo $movie->director; ?></p>
                            </div>

                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

 </main>

    
</body>
</html>