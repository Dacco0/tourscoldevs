API RESTFUL para gestión de Booking Tours Coldevs

REQUISITOS
PHP >= 7.4
Laravel >= 10.46.0
MySQL >= mysql-8.0.3

INSTALACIÓN

1. Clona este repositorio en tu máquina local.
2. Descargar y configura Laragon para que apunte a la raiz del proyecto, luego actualiza la versión de PHP a la sugerida en requisitos. Asegurate que el servidor web y el servicio de base de datos este activo 
3. se sugiere utilizar PHPMyAdmin; allí se debe crear la base de datos. se sugiere utilizar la configuración de caracteres y ordenamiento especifico UTF8 para base de datos MySQL para poder almacenar caracteres especiales.
4. Configurar el archivo env. para conectar con la base de datos(tener presente nombre de la base de datos y el username)
5. Ejecutar las migraciones 
    tours con el comando "php artisan migrate --path=database/migrations/2024_03_05_144251_create_tours_table"
    Reservations con el comando "php artisan migrate --path=database/migrations/2024_03_06_132904_create_reservations_table".
6. Ejecutar el Seeder TourSeeder con el comando php artisan db:seed
7. Para ejecutar las pruebas se sugiere utilizar este comando "php artisan test --filter=RouteTest" ya que de este modo solo se ejecutan las pruebas sobre lo requerido en el documento de la prueba tecnica

Uso
1. Accede a al proyecto a través del navegador web utilizando las siguientes URL's "http://tourscoldevs2.test/api/tours" y "http://tourscoldevs2.test/api/reservations"
2. Utiliza Postman realizar solicitudes a los endpoints de la API.
(NOTA: cuando se requiera revisar todas las reservas de un solo usuario no olvidar que para dar un espacio entre nombre y apellido se realiza con "%20")
