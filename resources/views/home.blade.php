{{-- Notas:
      *Para poder usar resources/views/layout.blade.php como plantilla en todas las vistas se usa:
        *La directiva @extends('nombreVista') de Blade
      *Para ingresar contenido dinámico en la plantilla resources/views/layout.blade.php se usa:
        *La directiva @section('nombre') de Blade
          *En @section('nombre'), dónde 'nombre' será el mismo que se le dió en la directiva @yield('nombre') en
           resources/views/layout.blade.php (En éste caso fue 'content')
      *Para evitar que en el HTML al inspeccionar el elemento en el nevagador se detecten espacios:
        *@section('title', 'Home')
         *Nota: se usa una sola línea en la directiva y se quita el @endsection
 --}}

 @extends('layout')

 @section('title', 'Home')

 @section('content')
     <h1>Home</h1>
 @endsection