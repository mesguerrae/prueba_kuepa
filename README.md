# prueba_kuepa

1. Copiar el proyecto en la ruta del servidor seleccionada
2. ingresar a la raiz del proyecto
3. actualizar el archivo .env con la informaciuon de la base de datos
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=mesguerra
        DB_USERNAME=mauricio
        DB_PASSWORD=control123A

4. ejecutar el comando "php artisan migrate" para instalar las tablas en la base de datos
5. ejecutar para "php artisan serve" para iniciar la aplicacion , ingresar a en navegador en la ruta http://127.0.0.1:8000, se presentaran los links de registro y acceso
6. Para ingresar a la landing publica usar la ruta http://127.0.0.1:8000/landing/index