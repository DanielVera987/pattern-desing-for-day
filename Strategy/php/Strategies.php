<?php

class CashPaymentStrategy implements IStrategy
{
    public function execute(): void
    {
        echo "Run Strategy Cash";
    }
}

class MercadoLibrePaymenteStrategy implements IStrategy
{
    public function execute(): void
    {
        echo "Run Strategy Mercado Libre";
    }
}