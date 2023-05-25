# Portafolio_PHP
Desarrollo de un portafolio basico con PHP, y Mysql

Este portafolio cuenta con diferenctes secciones, de las cuales se puede evidenciar un login que restringe el acceso a la demas pestañas:

![image](https://github.com/jhonrengi/Portafolio_PHP/assets/122764419/90efc1be-4cd0-4b25-9fd7-64a1de95e68a)

Para poder acceder al resto del contenido, es necesario ubicar el usuario y la contraseña que se plasmo como condicional para el acceso,

Una vez dentro, se ilustra el index.php, el cual contiene todo el contenido de la pagina. 

El header, o la parte superior de la pagina, podemos encontrar el menu de acceso para las diferentes pestañas:

![image](https://github.com/jhonrengi/Portafolio_PHP/assets/122764419/2b4ff898-6971-4002-ab7e-cbe6aa52da53)

Inicio, pestaña que muestra el contenido registrado.
portafolio, para registrar contenido. Este apartado esta conectado directamente con MySql.
Cerrar, para cerrar la sesion. (Se redirige e login.php)

![image](https://github.com/jhonrengi/Portafolio_PHP/assets/122764419/0d2fb367-ebef-46d0-add4-95b52a14b605)

En el apartado del portafolio, podemos insertar, modificar y elimar datos que seran registrados en la base de datos.

Se diseña una seccion para ubicar el nombre del archivo, la imagen correspondiente y ademas, una breve descripcion.

Adicional a esto, la informacion registra se evidencia dentro de una tabla HTML5, la cues visualiza el nombre registrado, 
Con su correspondiente imagen y la descripcion.

![image](https://github.com/jhonrengi/Portafolio_PHP/assets/122764419/552de57e-1ee6-4608-90e7-59dca52b9394)

Para la creacion de la abse de datos, se le asigna el nombre de proyectos, y se diseña apartir de los requerimientos del proyecto.

![image](https://github.com/jhonrengi/Portafolio_PHP/assets/122764419/d1212541-156b-4a70-b3d6-551c242b7f4e)

Cabe aclarar, que la opcion de insertar imagen, funciona en su totalidad, por lo que al subir una imagen al servidor, 
este accede a la imagen y la guarda en una carpeta especifica para las imagenes, por lo que, al elimiar el dato , la iamgen tambien se elimina de la carpeta.

