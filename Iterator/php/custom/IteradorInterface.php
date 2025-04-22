<?php

interface IteradorInterface 
{
    public function next();
    public function valid();
    public function current();
    public function index();
}