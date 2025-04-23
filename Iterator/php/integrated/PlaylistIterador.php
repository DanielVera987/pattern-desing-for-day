<?php 

class PlaylistIterador implements \Iterator
{
    private $index = 0;
    private $collection;

    public function __construct(\IteratorAggregate $collection)
    {
        $this->collection = $collection;
    }

    function current() {
        return $this->collection->getAll()[$this->index];
    }

    function key(): mixed {
        return $this->index;
    }

    function next(): void {
        $this->index++;
    }

    function rewind(): void {
        $this->index = 0;
    }

    function valid(): bool {
        if (isset($this->collection->getAll()[$this->index])) {
            return true;
        }

        return false;
    }
}