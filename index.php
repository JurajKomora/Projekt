<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php include("nav.php");?>
<section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Turnir u malom nogometu</h1>
            <p class="lead">Nogomet u malom, ali s velikim duhom!</p>
        </div>
    </section>

    <!-- Glavni sadržaj -->
    <main class="container mb-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0"><i class="fas fa-newspaper me-2"></i>Najnovije vijesti</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <h4>Turnir mlađih pionira - rezultati</h4>
                            <p class="text-muted"><small><i class="far fa-clock me-1"></i>Objavljeno: 15. svibnja 2023.</small></p>
                            <p>Naš tim mlađih pionira ostvario je izvrsne rezultate na regionalnom turniru, osiguravši drugo mjesto...</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Pročitaj više</a>
                        </div>
                        
                        <div class="mb-4">
                            <h4>Nova sezona kadetske lige</h4>
                            <p class="text-muted"><small><i class="far fa-clock me-1"></i>Objavljeno: 10. svibnja 2023.</small></p>
                            <p>Počinje nova sezona kadetske lige s mnogo novih izazova i prilika za naše mlade igrače...</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Pročitaj više</a>
                        </div>
                        
                        <div class="mb-4">
                            <h4>Radionica za mlade trenere</h4>
                            <p class="text-muted"><small><i class="far fa-clock me-1"></i>Objavljeno: 5. svibnja 2023.</small></p>
                            <p>Organiziramo radionicu za mlade trenere specijalizirane za rad s djecom i adolescentima...</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Pročitaj više</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h3 class="mb-0"><i class="fas fa-calendar-check me-2"></i>Nadolazeći događaji</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">Turnir mlađih pionira</h6>
                                    <small class="text-muted">20. svibnja 2023.</small>
                                </div>
                                <span class="badge bg-primary rounded-pill">10:00</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">Trening kadeta</h6>
                                    <small class="text-muted">22. svibnja 2023.</small>
                                </div>
                                <span class="badge bg-primary rounded-pill">17:30</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-1">Radionica za roditelje</h6>
                                    <small class="text-muted">25. svibnja 2023.</small>
                                </div>
                                <span class="badge bg-primary rounded-pill">18:00</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="card shadow-sm">
                    <div class="card-header bg-info text-white">
                        <h3 class="mb-0"><i class="fas fa-trophy me-2"></i>Najbolji strijelci</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Igrač</th>
                                    <th>Tim</th>
                                    <th>Golovi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Marko Petrović</td>
                                    <td>Kadeti</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>Ivan Horvat</td>
                                    <td>St. pioniri</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Luka Kovač</td>
                                    <td>Ml. pioniri</td>
                                    <td>8</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include("footer.php");?>
    <!-- Footer -->


    
</body>
</html>