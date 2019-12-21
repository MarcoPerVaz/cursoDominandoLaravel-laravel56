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
    
  return view( 'welcome' );

})->name( 'home' );
