# VideoClub

## Acerca del proyecto

Se desarrolla proyecto de un Video Club usando PHP con el framework Laravel y por parte de la base de datos se usa MySql

<br>

## Contenido

- El proyecto se encuentra en la raíz del respositorio
- La base de datos se puede encontrar en el siguiente directorio
- El modelo entidad relación se puede encontrar en el siguiente directorio 

<br>

## Tecnologías usadas

- PHP 8.1.10 
- Laravel Framework 10.9.0
- MySql
- Visual studio code
- Bootstrap
- JQuery

<br>

## Instalación de las tecnologías

Para ejecutar el proyecto en su entorno de desarrollo local, debe instalar las siguientes tecnologías y herramientas.

- Laragon | https://laragon.org/download/index.html
- Git | https://git-scm.com/downloads
- Composer | https://getcomposer.org/download/
- Visual studio code | https://code.visualstudio.com/download

<br>

## Ejecución

1. Clonar el repositorio del proyecto en su computadora. Para hacer esto, puede usar Git, con el comando: 

```sh
$ git clone https://github.com/dannamayac/VideoClub.git
```

2. Abra Laragon y haga clic en el botón "Start All" o "Iniciar todo" para iniciar los servicios de Apache y MySQL.

3. Crea una nueva base de datos en MySQL para el proyecto. Puede hacerlo abriendo el navegador de MySQL en Laragon, ingresando sus credenciales y creando una nueva base de datos con el comando:

```sh
$ CREATE DATABASE videoclub
```

4. Exportar la base de datos ejecutando el siguiente comando. La ruta o path es donde esta alojado el proyecto.

```sh
$ SOURCE <path>/videoclub/bd/videoclub.sql
```

5. Abra el archivo de configuración del proyecto (se llama .env) y asegúrese de que la configuración de la base de datos sea correcta. Debe proporcionar la información de la base de datos que ha creado en el paso anterior (nombre de la base de datos, usuario y contraseña).

6. Abra una ventana de línea de comandos y navegue hasta la carpeta del proyecto clonado.

```sh
$ cd videoclub
```
7. Ejecute el siguiente comando para instalar todas las dependencias del proyecto:

```sh
$ composer install
```

8. Ejecute el siguiente comando para migrar la base de datos y crear las tablas necesarias:

```sh
$ php artisan migrate
```

9. Ejecute el siguiente comando para iniciar el servidor de desarrollo:

```sh
php artisan serve
```

10. Por último abra su navegador web y vaya a la dirección que aparece en la línea de comandos después de ejecutar el comando anterior. Por lo general, es algo como http://localhost:8000 ó puede entrar a la ventana de Laragon, dar clic derecho, luego clic en www y abrir el proyeco videoclub.

