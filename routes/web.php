<?php
/* Notas:
    *Los parámetros en las rutas deben recibirse a tráves de los parámetros de 
     la función (En este caso en específico).
*/

// Ejemplo ruta 'saludo/{parametro}'con parámetro obligatorio
Route::get( 'saludo/{nombre}', function( $nombre ) {
    return "saludos " . $nombre;
});
// En el navegador: https://cursodominandolaravel-laravel56.it/saludo/marco


/* Notas:
    *Los parámetros opcionales en las rutas llevan un '?' y los parámetros opcionales dentro de la función 
     deben ser incializados ejemplo: $nombre = "Invitado".
*/

// Ejemplo de ruta 'saludo1/{parametro?}' con parámetro opcional
Route::get( 'saludo1/{nombre?}', function( $nombre = "Invitado" ) {
    return "saludos " . $nombre;
});
// En el navegador: https://cursodominandolaravel-laravel56.it/saludo1/
// En el navegador: https://cursodominandolaravel-laravel56.it/saludo1/Marco