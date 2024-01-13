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
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                                    <script>
                                    const ctx = document.getElementById('myAreaChart');
                                    new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: ['Cono Norte', 'JLByR', 'Socabaya', 'Mariano Melgar', 'Hunter', 'Miraflores'],
                                            datasets: [{
                                            label: 'Temperatura °C',
                                            data: [9, 33, 22, 13, 18, 15],
                                            backgroundColor: [
                                                'rgba(255, 105, 135, 0.5)',
                                                'rgba(54, 162, 133, 0.5)',
                                                'rgba(255, 192, 85, 0.5)',
                                                'rgba(75, 152, 112, 0.5)',
                                                'rgba(153, 162, 64, 0.5)',
                                                'rgba(255, 212, 255, 0.5)',    
                                            ],
                                            borderColor:[
                                                'rgba(255, 105, 135, 1)',
                                                'rgba(54, 162, 133, 1)',
                                                'rgba(255, 192, 85, 1)',
                                                'rgba(75, 152, 112, 1)',
                                                'rgba(153, 162, 64, 1)',
                                                'rgba(255, 212, 255, 1)',    
                                            ],
                                            borderWidth: 3
                                            }]
                                        },
                                            options: {
                                            scales: {
                                                y: {
                                                beginAtZero: true
                                                }
                                            }
                                            }
                                    });
                                    </script>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Gráfico de la humedad registrada</h6>
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
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>

                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                                    <script>
                                    const ctp = document.getElementById('myPieChart');
                                    new Chart(ctp, {
                                        type: 'doughnut',
                                        data: {
                                            labels: [
                                                'Cono Norte',
                                                'JLByR',
                                                'Socabaya',
                                                'Mariano Melgar',
                                                'Hunter',
                                                'Miraflores'
                                            ],
                                        datasets: [{
                                            label: 'Humedad RH %',
                                            data: [11, 55, 88,44,37,46],
                                            backgroundColor: [
                                                'rgba(255, 105, 135, 0.5)',
                                                'rgba(54, 162, 133, 0.5)',
                                                'rgba(255, 192, 85, 0.5)',
                                                'rgba(75, 152, 112, 0.5)',
                                                'rgba(153, 162, 64, 0.5)',
                                                'rgba(255, 212, 255, 0.5)', 
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
                    </div>

@endsection
