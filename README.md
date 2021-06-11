# SistemaABCC

Sistema de altas bajas cambios y consultas para pymes, en el cual llevamos el control del inventario.

## Descripción 🚀

Para poder usar los archivos requerimos de xampp para crear un servidor local y una base de datos con las cuales podremos visualizar el proyecto.

### Instalación 🔧

Para comenzar debemos crear una carpeta en la ruta C:xampp/htdocs/* nombre de tu carpeta * . Aquí colocaremos todas las carpetas del repositorio.

Posteriormente en el archivo httpd-vhosts.conf de la ruta C:\xampp\apache\conf\extra, vamos a añadir un virtual host con las lineas de código siguientes:

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

Y despúes nos dirijimos a la ruta C:\Windows\System32\drivers\etc y agragamos la siguiente linea en el archivo "hosts":

```bash
127.0.0.1 *nombre de tu carpeta*
```

*_Creación de la base de datos_**

Ya que hicimos estos cambios podemos dar **Start** a Apache y a MySQL de xampp y procedemos a entrar en el navegador de nuestra preferencia a *localhost/phpmyadmin*

Aquí debemos crear una base de datos nueva, solo colocamos el nombre y damos en el boton **Crear**, posteriormente crearemos una tabla con el nombre requerido y colocaremos los detalles de cada campo que coloquemos.

**_Configuración de los archivos de INCLUDES_**

En el archivo constants debemos cambiar los datos que vienen por los propios, tales como el nombre de la base de datos etcétera.

En el archivo functions vamos a cambiar el link de la función de redirect, solo eliminamos el *example.com* y colocamos el nombre de la carpeta propia.

**_Configuración de los archivos de PUBLIC_**  
En estos archivos solo debemos cambiar las consultas debido a que al cambiar de base de datos las consultas a su vez lo hacen.

**_Configuración de los archivos de TEMPLATES_**  
Aquí en el archivo index y perfume debemos cambiar el codigo de php que muestra los productos en las cards. Se cambia solamente el texto dentro de los corchetes por el nombre de los campos de la nueva base de datos 

```bash
< ?=$per['imagen'] ?>   ->     < ?=$per['*nombre de tu campo*'] ?>
```

Posteriormente en los formularios cambiamos el atributo name por los campos que se tiene en la base de datos, además se debe cambiar el texto del **placeholder** por uno referente al nombre del campo que colocamos.

### Software 📋

-[XAMPP](https://www.apachefriends.org/es/download.html) - Servidor  

-[MySQL](https://www.apachefriends.org/es/download.html) - Base de datos  


### Datos de la institución 📄

Colegio de Estudios Científicos y Tecnológicos del Estado de México

Plantel Xonacatlán  Carretera Toluca-Naucalpan


## Autor ✒️

* **Joel Ignacio Camacho Camacho** - *Desarrollador* - [Joel-Camacho](https://github.com/Joel-Camacho)


## Licencia 📄


Licencia en desarrollo.




---
Elaborado por [Joel-Camacho](https://github.com/Joel-Camacho)
