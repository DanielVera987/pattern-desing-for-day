export class StrategyContext {
    strategy = null;

    constructor(strategy = null) {
        this.strategy = strategy;
    }

    setStrategy(strategy = null) {
        this.strategy = strategy;
    }

    execute() {
        if (this.strategy) {
            this.strategy.execute()
        } else {
            throw Exception('Not strategy defined')
        }
    }
}