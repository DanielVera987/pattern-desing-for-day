<?php

class CollectionPlaylist implements CollectionInterface
{
    private $playlist = [];

    public function __construct($playlist = []) 
    {
        $this->playlist = $playlist;
    }

    public function addMusic($playlist) {
        $this->playlist[] = $playlist;
    }

    public function getIterador(): IteradorInterface {
        return new PlaylistIterador($this->playlist);
    }
}