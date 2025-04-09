<?php

class StrategyContext
{
    public $strategy;
    
    public function __construct(IStrategy|null $strategy = null)
    {
        $this->strategy = $strategy;
    }

    public function execute(): void
    {
        $this->strategy->execute();
    }

    public function setStrategy(IStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}
