<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TŠD Football | Mlade kategorije</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color:#d81c34;
            --secondary-color: #f8f9fa;
            --accent-color:rgb(255, 255, 255);
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color:#181414;
        }
        
        .navbar-custom {
            background-color: var(--primary-color) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--accent-color) !important;
        }
        
        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
        }
        
        .dropdown-item {
            padding: 0.5rem 1.5rem;
            transition: all 0.2s ease;
        }
        
        .dropdown-item:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateX(5px);
        }
        
        .btn-outline-custom {
            color: white;
            border-color: white;
        }
        
        .btn-outline-custom:hover {
            background-color: white;
            color: var(--primary-color);
        }
        
        .active {
            color: var(--accent-color) !important;
            font-weight: 600;
        }
        
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://via.placeholder.com/1920x600') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <!-- Navigacija -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand" >
                <i class="fas fa-futbol me-2"></i>TŠD Football
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Početna</a>

                    </li>
                   

                    
                    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="statsDropdown" 
             role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-chart-bar me-1"></i> Statistika
          </a>
          <ul class="dropdown-menu" aria-labelledby="statsDropdown">
            <li><a class="dropdown-item" href="listaStrijelaca.php">
              <i class="fas fa-futbol me-2"></i>Lista strijelaca</a></li>
            <li><a class="dropdown-item" href="statistikaIgraca.php">
              <i class="fas fa-running me-2"></i>Statistika igrača</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="statistikaTurnira.php">
              <i class="fas fa-trophy me-2"></i>Statistika turnira</a></li>
            <li><a class="dropdown-item" href="statistikaTimova.php">
              <i class="fas fa-tshirt me-2"></i>Statistika timova</a></li>
          </ul>
        </li>


                    
                    <li class="nav-item">
                        <a class="nav-link" href="raspored.php"><i class="far fa-calendar-alt me-1"></i> Raspored</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="rezultati.php"><i class="fas fa-list-ol me-1"></i> Rezultati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="utakmice.php"><i class="fas fa-futbol"></i> Utakmice</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="galerija.php"><i class="far fa-images me-1"></i> Galerija</a>
                    </li>
                </ul>
                
                <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

            </div>
        </div>
    </nav>

    
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>