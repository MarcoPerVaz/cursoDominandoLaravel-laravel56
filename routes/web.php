<?php
/* Notas:
    Ejemplos de rutas:
        url: youtube.com = Route::get('/', function())
        url: youtube.com/contacto = Route::get('contacto', function())
    La ruta contiene 2 porámetros: la url y la función o closure y lo que se retorne dentro de
    la función es lo que verá el usuario.
*/

// Ejemplo ruta '/'
Route::get( '/', function() {
    return "Hola desde la página de inicio";
});

// Ejemplo ruta 'contacto'
Route::get( 'contacto', function() {
    return "Hola desde la página de contacto";
});

// Ejemplo de Métodos de petición HTTP
Route::get();
Route::post(); // form action='POST'
Route::put(); 
Route::patch(); 
Route::delete(); 

/* Notas: 
    Los navegadores actuales no soportan put, patch y delete (más adelante en el curso se profundiza sobre el tema)
*/