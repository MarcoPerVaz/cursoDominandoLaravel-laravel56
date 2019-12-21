
<style>body{background-color:black;} strong{color:crimson;} pre{background-color:red;}</style>
<h1 align="center">Proyecto Curso Dominando Laravel con Laravel 5.6</h1>
<h3><b>Commit -</b> <strong>Instalando lo necesario para Windows</strong></h3>
<hr>
<ol>
  <!-- Laragon -->
  <li>
    <p>Instalar Laragon (solo si no lo tiene instalado)</p>
    <ul>
      <li>https://laragon.org/</li>
      <li>Versión Laragon Full 4.0.14</li>
    </ul>
  </li>
  <!-- Composer -->
  <li>
    <p>Instalar Composer (solo si no lo tiene instalado)</p>
    <ul>
      <li>https://getcomposer.org/download/</li>
      <li>Muestra todos los comandos disponibles para composer (debe usarse desde consola después de instalarse)
        <pre>composer</pre>
      </li>
    </ul>
  </li>
  <!-- NodeJs -->
  <li>
    <p>Instalar NodeJs (solo si no lo tiene instalado)</p>
    <ul>
      <li>https://nodejs.org/es/</li>
    </ul>
  </li>
  <!-- Laravel -->
  <li>
    <p>Instalar Laravel de forma global (solo si no lo tiene instalado)</p>
    <pre>composer global require laravel/installer</pre>
    <ul>
      <li>Crear un nuevo proyecto de laravel usando la forma global
        <pre>laravel new nombreProyecto</pre>
      </li>
      <li>Muestra todos los comandos disponibles para laravel de forma global
        (debe usarse desde consola después de instalarse)
        <pre>laravel</pre>
      </li>
    </ul>
  </li>
  <li>
    <p>Para crear un proyecto sin la forma global</p>
    <pre>composer create-project --prefer-dist laravel/laravel nombreProyecto "5.6.*"</pre>
  </li>
  <li>Muestra todos los comandos disponibles de laravel sea de forma global o no
    <pre>php artisan</pre>
    <ul>
      <li>Para poder usar el comando php artisan se debe estar en consola y dentro de la carpeta del proyecto
        <pre>cd c:/laragon/www/nombreProyecto</pre>
      </li>
    </ul>
  </li>
</ol>

<hr>

<!-- Notas -->
<h3><b>Notas:</b></h3>

<!-- Tips para consola -->
<p><b>TIPS para consola</b></p>
<ul>
  <li>Para saber que versión de php se tiene instalada
    <pre>php -v</pre>
  </li>
  <li>Para saber que versión de laravel se tiene instalada
    <pre>php artisan --version</pre>
  </li>
  <li>Para saber que versión de composer se tiene instalada
    <pre>composer --version</pre>
  </li>
  <li>Para saber que versión de nodejs se tiene instalada
    <pre>node -v</pre>
  </li>
  <li>Para saber que versión de npm se tiene instalada
    <pre>npm -v</pre>
  </li>
  <li>Para salir de una carpeta e ir a un directorio superior
    <pre>cd ..</pre>
  </li>
  <li>Para limpiar la pantalla de consola
    <pre>cls</pre> ó <pre>ctrl+L</pre>
  </li>
</ul>

<!-- Tips para Laragon -->
<h3><b>Acceder desde el navegador con los virtual hosts de laragon</b></h3>
<ul>
  <p>Nota: la extensión de dominio dependerá de la configuración de laragon</p>
  <li>http://cursodominandolaravel-laravel56.it/ (Si no usa el certificado SSL)</li>
  <li>https://cursodominandolaravel-laravel56.it/ (Si se usa el certificado SSL)</li>
</ul>

