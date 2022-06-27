<?php
class Movie
{
    private $title;
    private $originLanguage;
    public $actors = [];
    public $genres = [];

    //costruttore
    function __construct($_title, $_originLanguage)
    {
        $this->titleSetter($_title);
        $this->originLanguageSetter($_originLanguage);
    }
    //setter-getter titolo
    public function titleSetter($_title)
    {
        $this->title = $_title;
    }
    public function titleGetter()
    {
        return $this->title;
    }
    //setter-getter lingua originale
    public function originLanguageSetter($_originLanguage)
    {
        $this->originLanguage = $_originLanguage;
    }
    public function originLanguageGetter()
    {
        return $this->originLanguage;
    }
}

$movies = [];
//creazione oggetti movie
$movies[] = new Movie("Harry Potter", "English");
$movies[] = new Movie("La Vita e' Bella", "Italiano");
//set sulle proprieta' pubbliche
$movies[0]->genres = ['Avventura', 'Famiglia', 'Fiction'];
$movies[1]->genres = ['Drammatica', 'Guerra', 'Romantico'];

$movies[0]->authors = ['Daniel Radcliffe', 'Emma Watson', 'Rupert Grint'];
$movies[1]->authors = ['Sergio Bini', 'Giorgio Cantarini', 'Roberto Benigni'];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <pre>
    <?php
    var_dump($movies);
    ?>
</pre>
</body>

</html>