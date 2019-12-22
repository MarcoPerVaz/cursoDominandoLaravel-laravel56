 {{-- Notas:
        *Aquí se puede ver con claridad la ventaja de usar Blade ya que este mismo bloque de HTML se define 
         en las vistas donde se qioera evitar duplicar.
        *Lo que cambia es lo que está dentro de la directiva section.
        *Para evitar que en el HTML al inspeccionar el elemento en el nevagador se detecten espacios:
         *@section('title', 'Home')
          *Nota: se usa una sola línea en la directiva y se quita el @endsection 
  --}}
 @extends('layout')

  @section('title', 'About')

 @section('content')
     <h1>About</h1>
 @endsection