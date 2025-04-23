<?php

include("./PlaylistCollection.php");
include("./PlaylistIterador.php");

$collection = new PlaylistCollection();
$collection->add("Perro");
$collection->add("Gato");
$collection->add("Gallo");

foreach ($collection->getIterator() as $item) {    
    echo $item . "\n";
}
