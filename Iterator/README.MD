# Resources (URL, VIDEOS, BLOGs)
<a href="https://refactoring.guru/es/design-patterns/iterator">Refactoring.guru</a>
<a href="https://www.makigas.es/series/patrones-de-diseno/patron-iterator">Makigas | El patrón Iterator</a>

## Explicación por ChatGPT
### 🔁 ¿Qué es el patrón Iterator?
Es un patrón de comportamiento que te permite recorrer una colección de elementos sin exponer su estructura interna (por ejemplo, una lista, un árbol, una base de datos, etc.).

Es como si tuvieras una caja con cosas adentro y una mano especial que te ayuda a sacar una por una, sin que tengas que abrir la caja y ver cómo están organizadas.

### 📦 Ejemplo real simple
Imagina que tienes una colección de canciones en una playlist.

Tú no necesitas saber cómo están almacenadas esas canciones dentro del reproductor (si es una lista, un array, una base de datos, etc.), solo necesitas una manera de ir canción por canción (por ejemplo, con "siguiente" y "anterior").

El iterador es esa funcionalidad que te permite recorrer la lista de canciones sin preocuparte por cómo está hecha por dentro.

### 🎯 ¿Para qué me sirve?
Para recorrer estructuras complejas (listas, árboles, gráficos) de forma sencilla.

Para ocultar detalles internos de la colección.

Para crear múltiples formas de recorrer la misma colección (por ejemplo, de atrás para adelante, solo pares, etc.).

### 📌 ¿Cuándo usarlo?
Cuando tienes una colección de objetos y necesitas recorrerla de forma ordenada.

Cuando no quieres que el usuario del código sepa cómo está organizada la colección.

Cuando quieres tener diferentes formas de iterar sobre una colección (normal, reversa, filtrando, etc.).

### 🧠 Resumen corto
El patrón Iterator te permite recorrer elementos de una colección sin saber cómo están organizados. Es útil cuando trabajas con estructuras de datos y quieres recorrerlas de forma sencilla y segura.

### Mi Resumen
El patrón Iterator se usa cuando quieres recorrer una colección de elementos de forma personalizada, pero sin que el cliente (quien usa tu clase) tenga que saber cómo funciona internamente ese recorrido.

El cliente solo necesita usar el iterador y llamar next() o hacer un for, sin preocuparse por índices, filtros, ni estructura interna.