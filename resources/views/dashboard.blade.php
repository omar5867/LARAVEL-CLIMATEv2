@extends('layouts.app')

@section('title', 'Vista Principal')



@section('contents')
  <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-500">Últimos datos tomados</h1>
                    
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                             
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Temperatura</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">15°C</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-temperature-low fa-3x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Humedad</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">46 %RH</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-cloud-rain fa-3x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Ubicación
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Miraflores</div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-wifi fa-3x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Fecha y hora</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">2024-01-13 01:43</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-3x text-gray-400"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Gráfico de Temperatura</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">

                                    <?php
                                        $con = new mysqli('localhost','root','',env('DB_DATABASE'));
                                        $query = $con->query("
                                            SELECT * FROM `datos`
                                        
                                        ");

                                        foreach($query as $data)
                                        {
                                            $ubicacion[] = $data['punto'];
                                            $temperatura[] = $data['temperatura'];
            
                                        }


                                    
                                    ?>

                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                    <a class="nav-link" href="{{ route('puntos') }}">
                                    <script>
                                        // === include 'setup' then 'config' above ===
                                        const labels = <?php echo json_encode($ubicacion) ?>;
                                        const data = {
                                            labels: labels,
                                            
                                            datasets: [{
                                                
                                            label: 'Temperatura °C',
                                            data: <?php echo json_encode($temperatura) ?>,
                                            
                                            
                                            
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(255, 159, 64, 0.2)',
                                                'rgba(255, 205, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(201, 203, 207, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgb(255, 99, 132)',
                                                'rgb(255, 159, 64)',
                                                'rgb(255, 205, 86)',
                                                'rgb(75, 192, 192)',
                                                'rgb(54, 162, 235)',
                                                'rgb(153, 102, 255)',
                                                'rgb(201, 203, 207)'
                                            ],
                                            borderWidth: 3
                                            }]
                                        };

                                        const config = {
                                            type: 'bar',
                                            data: data,
                                            options: {
                                            scales: {
                                                y: {
                                                beginAtZero: true
                                                }
                                            }
                                            },
                                        };

                                        var myChart = new Chart(
                                            document.getElementById('myAreaChart'),
                                            config
                                        );
                                        </script>


                                    </div>
                                </div>
                            </div>
                                    <div class="col-xl-8 col-lg-7">
                                        <div class="card border-left-secondary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-3">
                                                        <div class="badge text-wrap" style="width: 7rem;">
                                                        <img src="http://127.0.0.1:8000/admin_assets/img/LOGO1.png" class="card-img-top" alt="3">

                                                            En Arequipa estos últimos dias se encuentra con el cielo mayormente nublado disperso  en el día y la noche. Tiempo fresco y seco al mediodía. Noches frías.
                                                        </div>
                                                        <div class="badge text-wrap" style="width: 6rem;">
                                                        <img src="https://www.senamhi.gob.pe/public/images/icono/icon008.png" class="card-img-top" alt="...">
                                                            La humedad relativa promedio en dicha estación se encuentra alrededor de 41.83 %.
                                          
                                                        </div>
                                                        
                                                        
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                        





                        <!-- Pie Chart -->

                        <div class="col-xl-5 col-lg-4">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Gráfico de la humedad registrada </h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                            
                                            <canvas id="myPieChart"></canvas>
                                        
                                    </div>
                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                    <a class="nav-link" href="{{ route('puntos') }}">

                                    <?php
                                        $con = new mysqli('localhost','root','',env('DB_DATABASE'));
                                        $query = $con->query("
                                            SELECT * FROM `datos`
                                        
                                        ");

                                        foreach($query as $data)
                                        {
                                            $ubicacion[] = $data['punto'];
                                            $temperatura[] = $data['temperatura'];
                                            $humedad[] = $data['humedad'];
            
                                        }


                                    
                                    ?>
                                    
                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                                    <script>
                                        const ctp = document.getElementById('myPieChart');
                                        new Chart(ctp, {
                                            type: 'doughnut',
                                        // === include 'setup' then 'config' above ===
                                            
                                            data : {
                                                labels: labels,
                                            
                                            datasets: [{
                                                label: 'Humedad RH %',
                                                data: <?php echo json_encode($humedad)?>,
                                            
                                            
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)',
                                                    'rgba(255, 205, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(201, 203, 207, 0.2)'
                                                ],
                                                borderColor: [
                                                'rgb(255, 99, 132)',
                                                'rgb(255, 159, 64)',
                                                'rgb(255, 205, 86)',
                                                'rgb(75, 192, 192)',
                                                'rgb(54, 162, 235)',
                                                'rgb(153, 102, 255)',
                                                'rgb(201, 203, 207)'
                                                ],
                                                
                                                hoverOffset: 4
                                            }],
                                            },
                                        });
                                    </script>
 
                                    </div>
                                    </div>
                                </div>
                            </div>
                            


                            
                        </div>
                        <div class="col-xl-6 col-lg-7">
                                <div class="card shadow mb-4">
                                    <div class="card-body">
                                      <div class="col-area"; width="", height="">
                                            <div
                                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                                <h6 class="m-0 font-weight-bold text-primary">Ubicación actual del sensor. </h6>
                                                
                                                
                                            
                                            </div>
                                            <!--<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=SENAMHI+lima+peru" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.3642048903766!2d-71.52694332598205!3d-16.406319238318297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424b9073028ec5%3A0xc59607f45ece2b1f!2sEscuela%20profesional%20de%20ingenier%C3%ADa%20en%20telecomunicaciones!5e0!3m2!1ses-419!2spe!4v1705216634732!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    
                                        </div>
                                        
                                    </div>
                                </div>
                        </div>
                    </div>

@endsection
