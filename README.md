# marvel-php-challenge-quaxar

## Como usarlo?

Despues de clonar el proyecto en una carpeta, Yo utilice la aplicacion llamada XAMPP tanto para visualizar la base de datos, como para manejarla hasta cierto punto.

1. Crear una base de datos llamada 'marvel'

2. levatar MySQL para hacer la conecion con la base de datos.

3. Ejecutamos
```bash
composer install
```

4. Ejecutamos
```bash
npm install
```

5. creamos el archivo .env, utilizar el archivo .env.example como referencia (copiar y pegar)

6. Usar este comando para crear todas las tablas
```bash
php artisan migrate
```

7. Ejecutamos
```bash
npm run dev
```

8. Ejecutamos
```bash
php artisan key:generate
```

9. Colocar este comando para generar 50 usuarios
```bash
php artisan db:seed --class=UserSeeder
```
    >Puede que te aparesca un error que no pude manerjar, pero los datos si se agregan

10. Colocar este comando para generar 50 datos de informacion sobre el usuario NECESARIO
```bash
php artisan db:seed --class=InformationSeeder
```
    >Puede que te aparesca un error que no pude manerjar, pero los datos si se agregan


11. ya podemos inicial el proyecto
```bash
php artisan serve
```

12. ingresamos con algunos de los usuarios generados (la contraseña de todo los usuarios es: 123456789) o creamos un usuario nuevo con Register

13. Todo listo! puedes editar y elimar el usuario completamente.