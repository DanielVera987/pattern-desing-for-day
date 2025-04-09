class StrategyContext:
    def __init__(self):
        self._strategy = None

    def set_strategy(self, strategy):
        self._strategy = strategy

    def execute(self):
        self._strategy.execute()