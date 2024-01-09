@extends('layouts.app')
@section('title', 'DISEÑO DE SISTEMAS SOFTWARE PARA MONITOREO DE TEMPERATURA Y HUMEDAD EN TIEMPO REAL CON IoT')

@section('contents')
  <div class="row">
    <h2>CRÉDITOS</h2>
    <p>Este proyecto fue desarrollado como parte del diseño de sistemas software para monitoreo de
      temperatura y humedad en tiempo real con IoT. Agradecemos a las siguientes personas por su contribución:</p>

<ul>
  <li><strong>Arotaipe Suni, Nayeli Virginia:</strong> Desarrollador de software y Diseñador gráfico <a href="mailto:narotaipe@unsa.edu.pe">narotaipe@unsa.edu.pe</a></li>
  <li><strong>Gonzales Rodriguez, Ciolymar Johanna:</strong> Desarrollador de software y Diseñador gráfico <a href="mailto:cgonzalesro@unsa.edu.pe">cgonzalesro@unsa.edu.pe</a></li>
  <li><strong>Humpire Cari, Juan José:</strong> Desarrollador de software y Diseñador gráfico <a href="mailto:jhumpire@unsa.edu.pe">jhumpire@unsa.edu.pe</a></li>
  <li><strong>Idme Cutipa, Ronaldiño Junior:</strong> Desarrollador de software y Diseñador gráfico <a href="mailto:ridmecu@unsa.edu.pe">ridmecu@unsa.edu.pe</a></li>
  <li><strong>Mamani Ccopa, Bryan Omar:</strong> Desarrollador de software y Diseñador gráfico <a href="mailto:bmamanicc@unsa.edu.pe">bmamanicc@unsa.edu.pe</a></li>
  <!-- Agrega más nombres según sea necesario -->
</ul>
</div> <!-- Cierre de la primera fila -->

<hr size=”5px” width= “50%” color="#2B3852"/>
<div class="row">
    <h2>AGRADECIMIENTOS</h2>

    <p>En esta sección, agradecemos a todas las personas que han contribuido al proyecto de diversas maneras. Su apoyo y dedicación han sido fundamentales para el éxito del proyecto.</p>
    
    <p>También queremos expresar nuestro agradecimiento especial al profesor:</p>
    <ul>
      <li><strong>Profesor EFRAIN TITO MAYHUA LOPEZ:</strong> Por su orientación, apoyo y valiosas sugerencias que contribuyeron significativamente al desarrollo y la calidad de este proyecto.</li>
    </ul>

    <p>Si tienes alguna pregunta o comentario sobre este proyecto, no dudes en ponerte en contacto con nosotros.</p>
    </div>
     <!-- Agregar el enlace de correo electrónico -->
     <p>Correo electrónico: <a href="mailto:TemyHum@unsa.edu.pe">TemyHum@unsa.edu.pe</a></p>
    
<!-- Agregar la imagen debajo del correo electrónico -->
<div class="row justify-content-center">
  <img src="{{ asset('admin_assets/img/logunsa.png') }}" alt="Logo"style="width: 400px; height: auto;">
</div>
  
@endsection
