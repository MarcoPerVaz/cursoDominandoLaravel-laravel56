{{--Notas:
      *Esta vista será usada para no repetir código HTML en cada vista. 
      *Esta vista incluirá la estructura HTML.
      *La directiva @yield(nombre) permite ingresar contenido dinámico en esa parte en específico de la
       estructura del HTML.
        *En @yield(nombre), dónde 'nombre' es el nombre de la sección(se explica más adelante) para referenciarla
         dónde irá el contenido dinámico.
      *Se pueden usar cuántos directivas yield necesitemos
      *Se le puede asignar un valor por defecto a las directivas en caso de no asignarle uno:
        *Ejemplo: @yield('title', 'Curso Dominando Laravel')
 --}}

<!DOCTYPE html>
<html>
  <head>
    {{-- Directiva de Blade @yield('') --}}
    <title>@yield('title', 'Curso Dominando Laravel')</title>
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/portfolio">Portfolio</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </nav>

    {{-- Directiva de Blade @yield('') --}}
    @yield('content')

  </body>
</html>
