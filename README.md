# marvel-php-challenge-quaxar

## Como usarlo?

Despues de clonar el proyecto en una carpeta, Yo utilice la aplicacion llamada XAMPP tanto para visualizar la base de datos, como para manejarla hasta cierto punto.

1. levatar MySQL para hacer la conecion con la base de datos.
2. Descargar todas las dependecias de desarrollo
3. Colocar este comando para generar 50 usuarios
```bash
php artisan db:seed --class=UserSeeder
```
4. Colocar este comando para generar 50 datos de informacion sobre el usuario NECESARIO
```bash
php artisan db:seed --class=InformationSeeder
```
5. ya podemos inicial el proyecto
```bash
php artisan serve
```
6. ingresamos con algunos de los usuarios generados o Creamos unos mediante Register
7. Todo listo! puedes editar y elimar el usuario completamente.