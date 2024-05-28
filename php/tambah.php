<?php 
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}



require 'functions.php';

// cek apakah tomboh tambah sudah ditekan 
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
      echo "<script>
              alert('data berhasil ditambahkan');
              document.location.href = 'index.php';
           </script>";
    } else {
      echo "data gagal ditambahkan!";
    }
  }
  



?>      


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
              
        <!-- Font -->
        <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
    <title>Form Adding items</title>
    <style> 

      body {
      background-image: url(assets/img/back1.jpg);
    
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%; 
  

        }


    </style>
</head>
<body>
    



<div class="container">


  <div class="row" style="text-align: center; ">
    <div class="col s12 m12">
      <div class="card-panel transparent" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
        <h3 class="white-text">
          Form Adding Items
        </h3>
      </div>
    </div>
  </div>

 <div class="row" style="box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
    <form class="col s12" action="" method="POST" enctype="multipart/form-data">
      <div class="row" >
        <div class="input-field col s6">
          <input type="text" name="nama" autofocus required>
          <label for="nama">Name:</label>
        </div>
        <div class="input-field col s6">
          <input  type="text" name="merek" required>
          <label>Brand :</label>
        </div>
      </div>

      <div class="row ">
        <div class="input-field col s6">
          <input type="text" name="warna" autofocus required>
          <label for="warna">Color:</label>
        </div>
        <div class="input-field col s6">
          <input  type="text" name="deksripsi" required>
          <label> Description  :</label>
        </div>
      </div>

       <div class="row ">
        <div class="input-field col s6">
          <input type="text" name="harga" autofocus required>
          <label for="harga">Price:</label>
        </div>

      <div class="container">
       <div class="row" style="float: left;" >
          <div class="col s12 m7">
            <div class="card">
              <div class="card-image large">
                 <img src="assets/img/nonsp.png" width="120" style="display: block;" class="img-preview">
              </div>
              <div class="card-content">
            <li>

            <label>
            Picture :
            <input type="file" name="gambar" class="gambar" onchange="previewImage()">
            </label>

            </li>
    
              </div>
              <div class="card-action">
                  <button class="waves-effect waves-light btn" type="submit" name="tambah">Add Items</button>
                 
              </div>
            </div>


           <div class="input-field">
          <a href="index.php" class="btn-large waves-effect cyan btn transparent" style="float: left;">Back</a>
          

          </div>
          </div>
        </div>
    </form>
  </div>
  </div>







     <script src=" ../js/script.js"></script>

      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-2.1.1.min.js"
      ></script>
   



</body>
</html>