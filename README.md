#Tecnologico de Costa Rica

## CRUD_APP - INVESTIGACIÓN II

Autores: Jose Ocampo 
         Rodrigo Espinach
         Eric Alpizar

Para esta investigación se nos asignó hacer una aplicación CRUD haciendo uso de MongoDB, un gestor de bases de datos NOSQL. Esta aplicación debía ser capaz de hacer un buen manejo de los datos, permitir una interacción fluida con el usuario y mantener la consistencia de la base de datos. 
Las bases de datos NOSQL como MongoDB actualmente son muy utilizadas para realizar aplicaciones web debido a que no requieren un diseño complejo, los objetos son fáciles de manipular, las consultas no son complejas de realizar, entre otras ventajas; sin embargo, también carecen de muchas ventajas que las bases de datos relacionales poseen.  Estas mismas bases de datos NOSQL se utilizan mucho para desarollar aplicaciones CRUD como la que se realiza en esta investigación, las cuales deben ser capaces de crear, leer, actualizar y borrar datos. 
En esta pequeña investigación podremos mostrar el uso de las bases de datos NOSQL, en conjunto con el desarrollo de una aplicación web CRUD que sea capaz de hacer diferentes tipos de request como GET, POST, PUT y DELETE a la base de datos, asimismo, se detallaran algunos aspectos de la solución técnica en cuanto al desarrollo de la aplicación web y mediante que lenguajes de programación lo realizamos. 

## Detalles de la solución 

### Métodos utilizados 

Para el desarrollo de esta aplicación decidimos utilizar en una primera instancia React con Node JS, MongoDB y Express una metodología de desarrollo de aplicaciones Full Stack conocida como MERN. Para esto investigamos y vimos múltiples videos complementarios en internet para lograr entender bien todo y lograr comenzar con la aplicación, sin embargo, después de dos días de estar investigando y desarrollando la aplicación nos dimos cuenta que este era una metodología muy buena con muchas capacidades pero se nos iba extender mucho aprender bien todas las dependencias que debíamos utilizar y tener un buen manejo del tema, no queríamos simplemente apegarnos a hacer el código sin entender algunos factores complementarios, es por esto que decidimos cambiarnos a PHP ya que habíamos adquirido bastante conocimiento con el proyecto pasado. Una vez que estábamos utilizando PHP se nos facilitó desarrollar la aplicación y conectarla con la base de datos, sin embargo, la falta de información no obligo a hacer una investigación exhaustiva sobre el tema, esto lo mencionamos con más detalle adelante en este documento.

### MongoDB


Al trabajar con MongoDB nos encontramos que es una base de datos muy flexible, puesto que no posee una estructura de tablas lo cual permite ingresar los datos libremente donde si uno hace un insert y faltan datos, igualmente se insertarían en la colección sin dar un error.
Además, no es necesario tener una colección creada al insertar datos, ya que, con solo poner un nombre a la colección e insertar datos, la colección se crea automáticamente.
Nos pareció muy interesante la interacción con la base de datos mediante el Shell de MongoDB que permite hacer operaciones de una manera más ágil y eficiente, también nos gustó bastante la aplicación grafica (Compass) para gestionar la base ya que es bastante intuitiva y fácil de utilizar. 
Otro elemento importante que se encontró es la abundante información en relación con este tipo de bases de datos en internet y como realizar su conexión con NodeJS, sin embargo, la mayoría de las documentaciones en línea se enfocaban en el desarrollo de una aplicación CRUD haciendo uso de una base de MongoDB mediante React, Express, Redux, entre otras dependencias que aún no manejábamos muy bien. 

### Desarrollo de la App 

Al realizar la aplicación quisimos trabajar inicialmente con Node JS y React , ya que, consideramos que era el lenguaje que ha tenido más auge con mongo y el más fácil de trabajar en conjunto con la base de datos usando mongoose, no obstante,  al iniciar el trabajo notamos que utilizar este lenguaje requiere conocimiento múltiples dependencias adicionales para lograr hacer una buena implementación . Además, no encontramos con numerosos errores, uno de ellos ocurría al querer mostrar los datos por medio de archivos .hbs donde nos daba un error de permisos. Por esto decidimos utilizar PHP, ya que, es un lenguaje que conocemos por trabajos anteriores y nos logramos adaptar de una mejor forma con este lenguaje.
El desarrollo por medio de PHP en una primera instancia fue muy fluido y directo, sin embargo, a la hora de hacer las peticiones con la base de datos tuvimos problemas debido a que la biblioteca que estábamos utilizando no era tan popularmente utilizada como Mongoose, entonces mucha información sobre los requests nos costó encontrarla. Al realizar una búsqueda e investigación exhaustiva acerca de la conexión de la base de datos y el manejo de los request utilizando Ajax logramos completar con éxito la aplicación. 

## Conclusiones

Para esta investigación estamos muy felices de poder haber completado la aplicación en su totalidad. Aprendimos mucho acerca de las bases de datos NOSQL y cómo funcionan, lo cual fue algo que nos pareció sumamente interesante. MongoDB es una herramienta bastante poderosa para realizar proyectos personales a un costo relativamente bajo ya que ofrece numerosos beneficios como hosting de la base de datos en un servidor de Amazon o Google. 
A pesar de que tuvimos muchos obstáculos al realizar la aplicación, logramos aprender bastante sobre el desarrollo de aplicaciones CRUD, el manejo de los request por medio de peticiones en Ajax y la comunicación optima con la base de datos. 
Finalmente podemos decir que logramos aprender más acerca del desarrollo web en conjunto con el uso de bases de datos NOSQL. Sentimos que esta investigación fue un gran aporte para nuestro aprendizaje en este aspecto. 
