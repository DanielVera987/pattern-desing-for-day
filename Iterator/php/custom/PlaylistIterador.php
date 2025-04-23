<?php

class PlaylistIterador implements IteradorInterface
{
    private $pos = 0;
    private $collection;

    public function __construct(CollectionInterface $collection = null)
    {
        $this->collection = $collection;
    }
    public function next() {
        $this->pos++;
    }
    public function valid(): bool {
        if (isset($this->collection->getAll()[$this->pos])) {
            return true;
        }

        return false;
    }
    public function current() {
        return $this->collection->getAll()[$this->pos];
    }
    public function index() {
        return $this->pos;
    }
}