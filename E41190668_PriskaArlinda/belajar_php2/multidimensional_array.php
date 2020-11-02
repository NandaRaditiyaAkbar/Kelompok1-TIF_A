<?php
$marks = array(
    "mohammad" => array(
        "physics"=> 35,
        "maths"=> 30,
        "chemistry"=> 39
    ),
    "qadir" => array(
        "physics"=> 30,
        "maths"=> 32,
        "chemistry"=> 29
    ),
    "zara" => array(
        "physics"=> 31,
        "maths"=> 22,
        "chemistry"=> 39
    )
    );

    echo "mark for mohammad in physics : ";
    echo $marks['mohammad']['physics']."<br/>";
    echo "mark for mohammad in maths : ";
    echo $marks['mohammad']['maths']."<br>";
    echo "mark for mohammad in chemistry : ";
    echo $marks['mohammad']['chemistry']."<br><br>";

    echo "mark for qadir in physics : ";
    echo $marks['qadir']['physics']."<br/>";
    echo "mark for qadir in maths : ";
    echo $marks['qadir']['maths']."<br/>";
    echo "mark for qadir in chemistry : ";
    echo $marks['qadir']['chemistry']."<br/><br>";

    echo "mark for zara in physics : ";
    echo $marks['zara']['physics']."<br/>";
    echo "mark for zara in maths : ";
    echo $marks['zara']['maths']."<br/>";
    echo "mark for zara in chemistry : ";
    echo $marks['zara']['chemistry']."<br/>";
?>
