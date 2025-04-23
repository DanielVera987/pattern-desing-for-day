class Iterador:
    def __init__(self, collection):
        self._collection = collection
        self._index = 0

    def _has_index(self, index):
        return self._collection.getItems()[index]

    def __next__(self):
        try:
            if self._has_index(self._index) is IndexError:
                raise StopIteration
        
            itemTmp = self._collection.getItems()[self._index]
            self._index += 1
            return itemTmp
        except Exception:
            raise StopIteration

    def __iter__(self):
        return self