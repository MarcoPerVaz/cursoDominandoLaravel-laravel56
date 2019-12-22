<?php

/* Notas:
  *Es buena práctica darle nombre a las rutas.
  *Para retornar una vista se usa la función view con el parámetro de la ruta de la vista.
    *Ejemplo: return view( 'welcome' );
  *Al retornar vistas desde la función view() de la ruta observa que no se debe poner la ruta completa ni la extensión,
   ya que la función view() asume que las vistas están en resources/views y que su extensión es blade.php
*/

// Ejemplo ruta '/'
Route::get( '/', function() {
    
  return view( 'home' );

})->name( 'home' );

/* Notas:
  *Cuando se usa la función view(), el parámetro debe ser el nombre del archivo de la vista sin extensión.
    *Ejemplo: Si tu ruta está en resources/views/hombe.blade.php, el llamado de la vista solo debe ser: return view( 'home' );
    *Nota:Asignar el nombre a la ruta '->name()' se usa en otras situaciones
*/
