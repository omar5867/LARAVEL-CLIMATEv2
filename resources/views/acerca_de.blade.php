@extends('layouts.app')
@section('title', 'DISEÑO DE SISTEMAS SOFTWARE PARA MONITOREO DE TEMPERATURA Y HUMEDAD EN TIEMPO REAL CON IoT')

@section('contents')
  <div class="row">
    <h2>¿DE QUÉ TRATA NUESTRO PROYECTO?</h2>
    
    <p>Ambient Track fue creada para poder realizar el mapeo de la temperatura y humedad de distintos lugares haciendo que estos
      datos se registren  en  una base de datos desde la que se podría ir procesando para su análisis.</p>
  </div>
  <div class="row justify-content-center">
    <img src="{{ asset('admin_assets/img/LOGO1.png') }}" alt="Logo"style="width: 600px; height: auto;">
  </div>
<!-- -->

<hr  size=”5px” width= “50%” color="#2B3852"/>
<div class="row">
  <h2>¿CÓMO FUNCIONA NUESTRO PROYECTO?</h2>
  
  <p>El funcionamiento de nuestro sistema comienza con el sensor que fue sometido a la temperatura ambiente y 
    también fue conectado al microcontrolador (cerebro del sistema), para recopilar, procesar y enviar los datos del sensor 
    al servidor para su almacenamiento en una base de datos (mediante el método POST)  y así al fin poder 
    visualización en nuestra página web.</p>
</div>
<div class="row justify-content-center">
  <img src="{{ asset('admin_assets/img/conec.png') }}" alt="Logo"style="width: 600px; height: auto;">
</div>
<!-- -->

<hr  size=”5px” width= “50%” color="#2B3852"/>
<div class="row">
  <h2>¿QUÉ HERRAMIENTAS USAMOS?</h2>
</div>
<div class="row">
  <h3>Microcontrolador ESP32</h3>
  <p>El microcontrolador usado en este proyecto es el ESP32, este es un componente versátil que se utiliza en una variedad de 
    aplicaciones, desde proyectos sencillos de IoT hasta sistemas más complejos de control y automatización. Su combinación de 
    capacidades de conectividad, procesamiento y bajo costo lo convierte en una opción popular para muchos desarrolladores.</p>
</div>
<div class="row justify-content-center">
  <img src="{{ asset('admin_assets/img/ESP32.png') }}" alt="Logo"style="width: 300px; height: auto;">
</div>

<div class="row">
  <h3>Sensor DHT11</h3>
  <p>Ahora, respecto a nuestro sensor, el que usamos es el DHT11, nos proporcionó información crucial sobre el entorno. Su bajo 
    costo y facilidad de uso lo convierten en una opción popular para proyectos que involucran la medición de 
    temperatura y humedad. En nuestro caso, su integración con el ESP32 nos permitió recopilar estos datos y enviarlos 
    a una base de datos para su posterior visualización.</p>
</div>
<div class="row justify-content-center">
  <img src="{{ asset('admin_assets/img/DHT11.png') }}" alt="Logo"style="width: 500px; height: auto;">
</div>

<div class="row">
  <h3>Laravel</h3>
  <p>Laravel es un framework de desarrollo web en PHP que ofrece numerosas características y ventajas que fueron beneficiosas para nuestro proyecto de recopilación y visualización de datos de temperatura y humedad.
    Laravel nos proporcionó una estructura robusta, herramientas potentes y una sintaxis elegante que puede acelerar el desarrollo y mejorar la calidad de tu aplicación web. Además, su comunidad activa y su amplia adopción hacen que sea una elección sólida para proyectos de desarrollo web como este
    </p>
</div>
<div class="row justify-content-center">
  <img src="{{ asset('admin_assets/img/laravel_logo.png') }}" alt="Logo"style="width: 600px; height: auto;">
</div>


<div class="row">
  <h3>Bootstrap</h3>
  <p>La combinación de Laravel con Bootstrap nos ofreció beneficios significativos para el desarrollo de tu página web, 
    nos proporcionó un entorno de desarrollo eficiente y potente para crear aplicaciones web con una interfaz de usuario 
    atractiva y funcional. La integración de ambas tecnologías nos ayudó a acelerar el proceso de desarrollo y mejorar la 
    experiencia del usuario.
    </p>
</div>
<div class="row justify-content-center">
  <img src="{{ asset('admin_assets/img/bootstrap_logo.png') }}" alt="Logo"style="width: 500px; height: auto;">
</div>

<br> <br>
 
@endsection
