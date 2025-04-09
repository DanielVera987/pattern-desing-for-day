import { IStrategy } from "./IStrategy.js";

class CashPaymentStrategy extends IStrategy {
    execute() {
        console.log('Run cash strategy')
    }
}

class MercadoLibrePaymentStrategy extends IStrategy {
    execute() {
        console.log('Run mercado libre strategy')
    }
}

export {
    CashPaymentStrategy,
    MercadoLibrePaymentStrategy
}