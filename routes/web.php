<?php

/* Notas:
  *El 'echo' solo se está usando como ejemplo (no es la forma correcta en laravel).
  *Suponiendo que el cliente nos pide cambiar la url de contactos por contactanos,
   se debe cambiar manualmente cada ruta o usar search and replace del editor de código y es tedioso,
   en este ejemplo hay 5 rutas que se tienen que cambiar ¿y si fueran 100 o 1000?, para eso son las rutas con nombre ya que
   al llamar la ruta lo haces por el nombre de la ruta y no por la url.
*/

// Ejemplo de ruta '/contactos'
Route::get( 'contactos', function() {   
  return "Sección de contactos";
});

// Ejemplo de ruta '/'
Route::get( '/', function() {
  echo "<a href='/contactos'>Contactos 1</a><br>";
  echo "<a href='/contactos'>Contactos 2</a><br>";
  echo "<a href='/contactos'>Contactos 3</a><br>";
  echo "<a href='/contactos'>Contactos 4</a><br>";
  echo "<a href='/contactos'>Contactos 5</a><br>";
});

// Ejemplo de ruta '/contactanos'
Route::get( 'contactanos', function() {
  return "Sección de contactos";
});

// Ejemplo de ruta '/'
Route::get( '/', function() {
  echo "<a href='/contactanos'>Contactos 1</a><br>";
  echo "<a href='/contactanos'>Contactos 2</a><br>";
  echo "<a href='/contactanos'>Contactos 3</a><br>";
  echo "<a href='/contactanos'>Contactos 4</a><br>";
  echo "<a href='/contactanos'>Contactos 5</a><br>";
});

/* Notas:
  *Las rutas con nombre permiten solo tener que cambiar la url en las rutas '/' aunque se tengan muchas rutas.
    *Se usa el helper route('nombreRuta') y poder usar las rutas con nombre.
  *Para asignarle un nombre a la ruta: Route::get('/')->name('nombreRuta')
*/

// Ejemplo de ruta con nombre '/contactame'
Route::get( 'contactame', function() {    
  return "Sección de contactos";
})->name( 'contactos1' );

Route::get( '/', function() {
  echo "<a href='" . route('contactos1') . "'>Contactos 1</a><br>";
  echo "<a href='" . route('contactos1') . "'>Contactos 2</a><br>";
  echo "<a href='" . route('contactos1') . "'>Contactos 3</a><br>";
  echo "<a href='" . route('contactos1') . "'>Contactos 4</a><br>";
  echo "<a href='" . route('contactos1') . "'>Contactos 5</a><br>";
});

/* Notas:
  *Retornar cadena de caracteres (string) en las funciones de las rutas no es lo correcto,
   ya se verá más adelante en el curso como retornar vistas.
*/