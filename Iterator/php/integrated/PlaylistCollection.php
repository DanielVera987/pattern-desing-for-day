<?php

class PlaylistCollection implements \IteratorAggregate
{
    public $collection = [];

    public function __construct($collection = []) 
    {
        $this->collection = $collection;
    }

    public function getAll() 
    {
        return $this->collection;
    }

    public function add($item)
    {
        return $this->collection[] = $item;
    }

    function getIterator(): \Iterator
    {
        return new PlaylistIterador($this);
    }
}