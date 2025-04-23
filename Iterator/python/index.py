from collection import Collection

collection = Collection()
collection.add('perro')
collection.add('gato')
collection.add('gallo')

for item in collection.getIterador():
    print(item)
