
# KidRus

## Tabla de contenido

- [Introducción](#introducción)
- [Ejecutar](#ejecutar)
- [Modelos de la Base de Datos](#bd)
## Introducción
Una API Rest que provee las funcionalidades básicas de un ecommerce usando Laravel y php.

NOTA: Lea la sección EJECUTAR para iniciar el servicio correctamente.
## Ejecutar
### 1. Clonar repositorio

```
$ git clone https://github.com/aeperez1996/kidRus
$ cd kidRus
$ composer install
$ composer global require laravel/installer          
```

### 2. Setup xampp mysql
Para el desarrollo de la solución se utilizó phpMyAdmin como cliente base de dato.
### 3. Cree las migraciones
cree la base de datos articulos_infantiles en mysql 
Ejecute:
php artisan migrate
php artisan db:seed
### 4. Run commands
La solución contiene dos commands. Puede ejecutar uno u otro según prefiera.


- Ejecuta y levantar el servico por default en el puerto 80.
```
Todos los modelos se pueden encontra en la carpeta /app/models
