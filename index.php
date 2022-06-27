<?php
class Movie
{
    private $title;
    private $originLanguage;
    public $actors = [];
    public $genres = [];


    function __construct($_title, $_originLanguage)
    {
        $this->titleSetter($_title);
        $this->originLanguageSetter($_originLanguage);
    }

    public function titleSetter($_title)
    {
        $this->title = $_title;
    }
    public function originLanguageSetter($_originLanguage)
    {
        $this->originLanguage = $_originLanguage;
    }
}

$movies = [];

$movies[] = new Movie("Harry Potter", "English");
$movies[] = new Movie("La Vita e' Bella", "Italiano");


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
    var_dump($movies); ?>
</pre>
</body>

</html>