<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Osnovni stilovi za tablicu */
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: rgb(255,255,255);
            background-color: #343a40; /* Tamna pozadina */
            border-collapse: collapse;
        }
        
        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #454d55; /* Svjetlija granica */
            color: rgb(255,255,255);
        }
        
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #454d55;
            background-color: #212529; /* Tamnija pozadina za header */
        }
        
        .table tbody + tbody {
            border-top: 2px solid #454d55;
        }
        
        /* Stilovi za linkove */
        .details-link {
            color: white;
            text-decoration: none;
            transition: color 0.2s;
        }
        
        .details-link:hover {
            color:rgb(255, 255, 255); /* Svjetlija boja na hover */
            text-decoration: underline;
        }
        
        /* Stil za Font Awesome ikone */
        .fa-arrow-right {
            margin-left: 5px;
        }
        
        /* Dodatni stil za cijelu stranicu */
        body {
            background-color: #212529;
            color: white;
            padding: 20px;
        }
    </style>
</head>
<body>
<?php include("nav.php");?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Ime</th>
      <th scope="col">Prezime</th>
      <th scope="col">Broj golova</th>
      <th scope="col">Statistika</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Tim A vs Tim B</td>
      <td>3:2</td>
      <td>15.05.2023.</td>
      <td><a href="detalji_utakmice.php?id=1" class="details-link">Prikaži detalje <i class="fas fa-arrow-right"></i></a></td>
    </tr>
    <tr>
      <td>Tim C vs Tim D</td>
      <td>1:1</td>
      <td>22.05.2023.</td>
      <td><a href="detalji_utakmice.php?id=2" class="details-link">Prikaži detalje <i class="fas fa-arrow-right"></i></a></td>
    </tr>
    <tr>
      <td>Tim E vs Tim F</td>
      <td>2:0</td>
      <td>29.05.2023.</td>
      <td><a href="detalji_utakmice.php?id=3" class="details-link">Prikaži detalje <i class="fas fa-arrow-right"></i></a></td>
    </tr>
  </tbody>
</table>
<?php include("footer.php");?>
</body>
</html>