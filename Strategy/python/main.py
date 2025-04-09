from StrategyContext import StrategyContext
from Strategies import CashPaymentStrategy, MercadoLibrePaymentStrategy

paymentType = 'mercado-libre'

strategyContext = StrategyContext()

match paymentType:
    case 'cash':
        strategyContext.set_strategy(CashPaymentStrategy())
    case 'mercado-libre':
        strategyContext.set_strategy(MercadoLibrePaymentStrategy())
    case _:
        strategyContext.set_strategy(CashPaymentStrategy())

strategyContext.execute()
