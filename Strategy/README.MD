
# Resources (URL, VIDEOS, BLOGs)
<a href="https://refactoring.guru/es/design-patterns/strategy">Refactoring.guru</a>
[Strategy pattern: un patrón de diseño de software para estrategias variables de comportamiento](https://www.ionos.mx/digitalguide/paginas-web/desarrollo-web/strategy-pattern/)

## Explicación por ChatGPT
**El patrón Strategy** es un patrón de diseño que se usa para elegir el comportamiento de un objeto en tiempo de ejecución, sin tener que cambiar su código. Es como tener una caja con diferentes herramientas y poder cambiar de herramienta según lo que necesites hacer.

Ejemplo sencillo:
Imagina que tienes una aplicación para calcular descuentos. Según el tipo de cliente, aplicas un descuento distinto:

 * Cliente normal: 10% de descuento
 * Cliente VIP: 20% de descuento
 * Cliente nuevo: 5% de descuento

En vez de llenar tu código con if o switch, puedes usar el patrón Strategy:
1. Creas una interfaz llamada **EstrategiaDescuento** con un método calcular(monto).
	* Creas varias clases que implementan esa interfaz, una para cada tipo de cliente:
		* DescuentoNormal
		* DescuentoVIP
		* DescuentoNuevo

Tu clase principal no sabe cuál estrategia usar hasta que se la asignas. Así puedes cambiar de descuento fácilmente sin tocar el código principal.

## Estructura

![enter image description here](https://refactoring.guru/images/patterns/diagrams/strategy/structure.png?id=c6aa910c94960f35d100bfca02810ea1)
