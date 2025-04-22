<?php

class PlaylistCollection implements \IteratorAggregate
{
    private $collection = [];

    public function __construct($collection) 
    {
        $this->collection = $collection;
    }
    function getIterator(): Traversable
    {
        return new PlaylistIterador();
    }
}