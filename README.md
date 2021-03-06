# SistemaABCC

Sistema de altas bajas cambios y consultas para pymes, en el cual llevamos el control del inventario.

## Descripci贸n 馃殌

Para poder usar los archivos requerimos de xampp para crear un servidor local y una base de datos con las cuales podremos visualizar el proyecto.

### Instalaci贸n 馃敡

Para comenzar debemos crear una carpeta en la ruta C:xampp/htdocs/* nombre de tu carpeta * . Aqu铆 colocaremos todas las carpetas del repositorio.

Posteriormente en el archivo httpd-vhosts.conf de la ruta C:\xampp\apache\conf\extra, vamos a a帽adir un virtual host con las lineas de c贸digo siguientes:

```bash
<VirtualHost *:80>
        ServerAdmin *nombre de tu carpeta*  
        DocumentRoot "C:/xampp/htdocs/ *nombre de tu carpeta* /public"  
        ServerName *nombre de tu carpeta*  
        ErrorLog "logs/*nombre de tu carpeta*-error.log"  
        CustomLog "logs/*nombre de tu carpeta*-access.log" common  
        <Directory "C:/xampp/htdocs/*nombre de tu carpeta*/public">  
            Options All  
            AllowOverride All  
            Require all granted  
        </Directory>  
</VirtualHost>
```

Y desp煤es nos dirijimos a la ruta C:\Windows\System32\drivers\etc y agragamos la siguiente linea en el archivo "hosts":

```bash
127.0.0.1 *nombre de tu carpeta*
```

*_Creaci贸n de la base de datos_**

Ya que hicimos estos cambios podemos dar **Start** a Apache y a MySQL de xampp y procedemos a entrar en el navegador de nuestra preferencia a *localhost/phpmyadmin*

Aqu铆 debemos crear una base de datos nueva, solo colocamos el nombre y damos en el boton **Crear**, posteriormente crearemos una tabla con el nombre requerido y colocaremos los detalles de cada campo que coloquemos.

**_Configuraci贸n de los archivos de INCLUDES_**

En el archivo constants debemos cambiar los datos que vienen por los propios, tales como el nombre de la base de datos etc茅tera.

En el archivo functions vamos a cambiar el link de la funci贸n de redirect, solo eliminamos el *example.com* y colocamos el nombre de la carpeta propia.

**_Configuraci贸n de los archivos de PUBLIC_**  
En estos archivos solo debemos cambiar las consultas debido a que al cambiar de base de datos las consultas a su vez lo hacen.

**_Configuraci贸n de los archivos de TEMPLATES_**  
Aqu铆 en el archivo index y perfume debemos cambiar el codigo de php que muestra los productos en las cards. Se cambia solamente el texto dentro de los corchetes por el nombre de los campos de la nueva base de datos 

```bash
< ?=$per['imagen'] ?>   ->     < ?=$per['*nombre de tu campo*'] ?>
```

Posteriormente en los formularios cambiamos el atributo name por los campos que se tiene en la base de datos, adem谩s se debe cambiar el texto del **placeholder** por uno referente al nombre del campo que colocamos.

### Software 馃搵

-[XAMPP](https://www.apachefriends.org/es/download.html) - Servidor  

-[MySQL](https://www.apachefriends.org/es/download.html) - Base de datos  


### Datos de la instituci贸n 馃搫

Colegio de Estudios Cient铆ficos y Tecnol贸gicos del Estado de M茅xico

Plantel Xonacatl谩n  Carretera Toluca-Naucalpan


## Autor 鉁掞笍

* **Joel Ignacio Camacho Camacho** - *Desarrollador* - [Joel-Camacho](https://github.com/Joel-Camacho)


## Licencia 馃搫


Licencia en desarrollo.




---
Elaborado por [Joel-Camacho](https://github.com/Joel-Camacho)
