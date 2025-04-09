from IStrategy import IStrategy

class CashPaymentStrategy(IStrategy):
    def execute(self):
        print('Run Cash Strategy')

class MercadoLibrePaymentStrategy(IStrategy):
    def execute(self):
        print('Run MercadoLibre Strategy')