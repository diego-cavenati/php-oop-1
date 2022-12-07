<?php
require __DIR__ . '/Models/Movie.php';

$interstellar = new Movie('Interstellar', 'The adventures of a group of explorers who make use of a newly discovered wormhole to surpass the limitations on human space travel and conquer the vast distances involved in an interstellar voyage.', 2014, 4, 'https://download', 'https://thmb');

var_dump($interstellar->howOld(2014));
var_dump($interstellar);
