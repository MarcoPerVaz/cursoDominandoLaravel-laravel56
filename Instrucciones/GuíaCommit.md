
<style>body{background-color:black;} strong{color:crimson;} pre{background-color:red;}</style>
<h1 align="center">Proyecto Curso Dominando Laravel con Laravel 5.6</h1>
<h3><b>Commit -</b> <strong>Estructura de carpetas en Laravel</strong></h3>
<hr>
<ol>
  <!-- Directorio app/ -->
  <li>Directorio app/
    <p>Contiene el código fuente de la aplicación y casi todas las clases que se crearán estarán dentro de
      éste directorio</p>
    <ul>
      <li>Directorio Console/
        <ul>
          <li>Contiene los comandos que creemos nosotros y se registran en el archivo kernel.php</li>
        </ul>
      </li>
      <li>Directorio Exceptions
        <ul>
          <li>Contiene el manejador de excepciones o errores de la aplicación o si la aplicación requiere de
          excepciones personalizadas</li>
        </ul>
      </li>
      <li>Directorio Http/
        <ul>
          <li>Contiene los controladores, middlewares y el kernel para registrarlos</li>
        </ul>
      </li>
      <li>Directorio Providers/
        <ul>
          <li>Contiene los services providers de la aplicación y se pueden almacenar los que creemos nosotros</li>
        </ul>
      </li>
    </ul>
  </li>
  <!-- Directorio bootstrap/ -->
  <li>Directorio bootstrap/
    <ul>
      <li>Contiene el archivo app.php que es el que arranca el framework de laravel</li>
    </ul>
  </li>
  <!-- Directorio config/ -->
  <li>Directorio config/
    <p>Contiene toda la configuración de la aplicación</p>
    <ul>
      <li>El archivo app.php
        <ul>
          <li>Contiene el nombre de la aplicación</li>
          <li>Se define si la aplicación está en modo de producción o desarrollo</li>
          <li>Que si muestre errores sensibles de la aplicación</li>
        </ul>
      </li>
      <li>El archivo database.php
        <ul>
          <li>Contiene la configuración de conexión a base de datos</li>
        </ul>
      </li>
    </ul>
  </li>
  <em>Nota: Los cambios es preferible no hacerlos desde esta configuración sino desde el archivo .env</em>
  <!-- Directorio database/ -->
  <li>Directorio database/
    <ul>
      <li>Contiene los factories o fábricas</li>
      <li>Contiene las migrations o migraciones</li>
      <li>Contiene los seeds o seeder o semillas o semilleros</li>
    </ul>
  </li>
  <!-- Directorio public/ -->
  <li>Directorio public/
    <ul>
      <li>
        <p>Contiene el archivo index.php</p>
      <ul>
        <li>Es el punto de entrada de todas las peticiones que se realicen a la aplicación</li>
        <li>Se configuran el autocargado de las clases</li>
      </ul>
      </li>
      <li>Es el único directorio accesible públicamente</li>
      <li>Contiene los directorios css, js, imágenes(svg) y el archivo .htaccess</li>
    </ul>
  </li>
  <!-- Directorio resources/ -->
  <li>Directorio resources/
    <ul>
      <li>Directorio views/
        <ul>
          <li>Contiene las vistas de la aplicación</li>
        </ul>
      </li>
      <li>Directorio assets/
        <ul>
          <li>Contiene los archivos no compilados de css, js e imágenes</li>
          <em>Nota: Estos archivos al ser compilados terminarán estando en la carpeta public/</em>
        </ul>
      </li>
      <li>Directorio lang/
        <ul>
          <li>Contiene los archivos de traducción de la aplicación</li>
        </ul>
      </li>
    </ul>
  </li>
  <!-- Directorio routes/ -->
  <li>Directorio routes/
    <ul>
      <li>Contiene el archivo web.php
        <ul>
          <li>Se definen las rutas de la aplicación</li>
        </ul>
      </li>
      <li>Contiene el archivo api.php
        <em>(No contiene sesiones, cookies que si continene las rutas web.php)</em>
      </li>
      <li>Contiene el archivo console.php
        <em>(Se pueden agregar comandos fácilmente)</em>
      </li>
      <li>Contiene el archivo channels.php
        <em>(Se definen los canales de broadcast o transmisión)</em>
      </li>
    </ul>
  </li>
  <!-- Directorio storage/ -->
  <li>Directorio storage/
    <p>Puede usarse para guardar imágenes para el usuario que deben ser accesibles 
       públicamente (crear un symbolic link o enlace simbólico hacía la carpeta public)
       <pre>php artisan storage:link</pre>
    </p>
    <ul>
      <li>Directorio app/
        <ul>
          <li>Contiene los archivos generados por la aplicación</li>
        </ul>
      </li>
      <li>Directorio framework/
        <ul>
          <p>Contiene archivos generados por laravel</p>
          <li>Directorio views/
            <ul>
              <li>Contiene las vistas compiladas</li>
            </ul>
          </li>
          <li>Directorio sessions/
            <ul>
              <li>Contiene las sesiones basadas en archivos</li>
              <li>Contiene las sesiones basadas en archivos en caché</li>
            </ul>
          </li>
          <li>Directorio logs/
            <ul>
              <li>Contiene información detallada sobre los errores</li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </li>
  <!-- Directorio tests/ -->
  <li>Directorio tests/
    <ul>
      <li>Contiene ejemplos de tests</li>
    </ul>
  </li>
  <!-- Directorio vendor/ -->
  <li>Directorio vendor/
    <ul>
      <li>Contiene todas las dependencias de composer 
          (sólo se usa para leer sobre las librerías incluídas en laravel y no se debe manipular)
      </li>
    </ul>
  </li>
  <!-- Archivo .env -->
  <li>Archivo .env
    <p>Contiene la configuración principal reunida en un solo archivo</p>
    <ul>
      <li>Nombre de la aplicación APP_NAME=</li>
      <li>Conexión a base de datos</li>
      <li>Llave de la aplicación</li>
      <li>Si está en modo desarrollo o producción</li>
    </ul>
  </li>
</ol>