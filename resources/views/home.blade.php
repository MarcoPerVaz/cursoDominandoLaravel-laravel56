{{-- Aquí se agrega el contenido HTML --}}
{{-- Notas:
        *Se utiliza php plano para este ejemplo
        *Se recomienda que en las vistas se mantenga la lógica mínima posible, que se dediquen a imprimir 
         variables, hacer estructuras de control (if-else), hacer loops(ciclo for, foreach, etc.).
        *Dónde '??' significa que si la variable $nombre no tiene ningún valor se le asigne un valor por defecto
--}}

<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
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
    <h1>Home</h1>
    Binvenida <?php echo $nombre ?? "Invitado" ?>
  </body>
</html>