<?php

include('IStrategy.php');
include('StrategyContext.php');

include('Strategies.php');

$paymentType = 'cash';

$strategyContext = new StrategyContext();

switch ($paymentType) {
    case 'cash':
        $strategyContext->setStrategy(new CashPaymentStrategy());
        break;
    case 'mercado-libre':
        $strategyContext->setStrategy(new CashPaymentStrategy());
        break;
    default:
        $strategyContext->setStrategy(new CashPaymentStrategy());
        break;
}

$strategyContext->execute();
