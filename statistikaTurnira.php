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

</div>
            </section>    
                <div class="container">
                    <h1 class="text-center">Statistika turnira</h1>
        
                    <div class="row">
            <!-- Kartica za ukupne golove -->
            <div class="col-md-4">
                <div class="card stat-card bg-primary text-white">
                    <div class="card-header">Ukupno golova</div>
                    <div class="card-body">
                        <h2 class="card-title text-center" id="total-goals">0</h2>
                    </div>
                </div>
            </div>
            
            <!-- Kartica za prosječne golove po utakmici -->
            <div class="col-md-4">
                <div class="card stat-card bg-success text-white">
                    <div class="card-header">Prosječno golova po utakmici</div>
                    <div class="card-body">
                        <h2 class="card-title text-center" id="avg-goals">0.00</h2>
                    </div>
                </div>
            </div>
            
            <!-- Kartica za ukupno kartona -->
            <div class="col-md-4">
                <div class="card stat-card bg-warning text-dark">
                    <div class="card-header">Ukupno kartona</div>
                    <div class="card-body">
                        <h2 class="card-title text-center" id="total-cards">0</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Tablica za najbolje strijelce -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h3>Najbolji strijelci</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="top-scorers" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Igrač</th>
                                        <th>Tim</th>
                                        <th>Golovi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Podaci će biti ubačeni preko JavaScripta -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Tablica za statistiku utakmica -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h3>Statistika utakmica</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="match-stats" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Utakmica</th>
                                        <th>Rezultat</th>
                                        <th>Golovi</th>
                                        <th>Žuti kartoni</th>
                                        <th>Crveni kartoni</th>
                                        <th>Faulovi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Podaci će biti ubačeni preko JavaScripta -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php");?>
    <!-- Footer -->
</body>
</html>