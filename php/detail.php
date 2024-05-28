<?php

require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$b = query("SELECT * FROM barang WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
      <!-- Font -->
      <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
  
      <!-- My CSS -->
      <link rel="stylesheet" href="css/stylesheet.css">
      <style>
          .card {
             box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);"
          }

          body {
            background-image: url(assets/img/back1.jpg);
            background-repeat: no-repeat;
            background-size: 200%;

          }


      </style>
</head>

<body>

<div class="container">
  <div class="row">
    <div class="col s12 m12">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/<?= $b['gambar']; ?>">
        <span class="card-title black-text"> <?= $b['nama']; ?></span>
        </div>
        <div class="card-content">
          <p>Brand : <?= $b['merek']; ?></p><br>
          <p>Color: <?= $b['warna']; ?></p>
          <p>Description : <?= $b['deksripsi']; ?></p>
           <p>Price : <?= $b['harga']; ?></p>
        </div>
        <div class="card-action">
          <a href="ubah.php?id=<?= $b['id']; ?>">Change</a>  
          <a href="hapus.php?id=<?= $b['id']; ?>" onclick="return confirm('apakah anda yakin?');">Delete</a>

         <a href="index.php">Back</a>
        </div>
      </div>
    </div>
  </div>
  </div>
    

    <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-2.1.1.min.js"
      ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  
</body>

</html>

