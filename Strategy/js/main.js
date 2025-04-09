import { StrategyContext } from './StrategyContext.js'
import { CashPaymentStrategy, MercadoLibrePaymentStrategy } from './Strategies.js'

let paymentType = 'cash'
let strategyContext = new StrategyContext();

switch (paymentType) {
    case 'cash':
        strategyContext.setStrategy(new CashPaymentStrategy());
        break;
    case 'mercado-libre':
        strategyContext.setStrategy(new MercadoLibrePaymentStrategy());
        break;
    default:
        strategyContext.setStrategy(new CashPaymentStrategy())
}

strategyContext.execute();