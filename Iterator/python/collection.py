from iterador import Iterador

class Collection:
    def __init__(self):
        self.collection = []

    def add(self, data):
        self.collection.append(data)

    def getItems(self):
        return self.collection

    def getIterador(self):
        return Iterador(self)