<?php
/**
 * Ejercicio: 
 * 
 */

include('CollectionInterface.php');
include('IteradorInterface.php');
include('CollectionPlaylist.php');
include('PlaylistIterador.php');
include('Music.php');

// Crear Playlist
$collectionPlaylist = new CollectionPlaylist();
$collectionPlaylist->addMusic(new Music("One more time", "Daft punk"));
$collectionPlaylist->addMusic(new Music("End of line", "Daft punk"));

// Listar Playlist
$iterador = $collectionPlaylist->getIterador();
while ($iterador->valid()) {
    $music = $iterador->current();
    echo $music->title . ' | ' . $music->author . "\n";

    $iterador->next();
}