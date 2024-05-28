<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$b = query("SELECT * FROM barang WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
    
    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>

    <!-- My CSS -->
    <link rel="stylesheet" href="css/stylesheet.css">

    <style>
      
      body{
        background-image: url( assets/img/back1.jpg);
      }

      .container h3 {
         text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
      }


    </style>

</head>

<body>
  <div class="container">

      <div class="row" style="text-align: center;">
    <div class="col s12 m12">
      <div class="card-panel transparent" style=" box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);">
        <h3 class="white-text">
          Change Items Form
        </h3>
      </div>
    </div>
  </div>


  <div class="row" style=" box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);"">
    <form class="col s12" action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $b['id']; ?>">
      <div class="row ">
        <div class="input-field col s6">
           <input type="text" name="nama" autofocus required value="<?= $b['nama']; ?>">
          <label for="nama">Name:</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="merek" required value="<?= $b['merek']; ?>">
          <label>Brand :</label>
        </div>
      </div>

      <div class="row ">
        <div class="input-field col s6">
          <input type="text" name="warna" required value="<?= $b['warna']; ?>">
          <label for="warna">Color:</label>
        </div>
        <div class="input-field col s6">
         <input type="text" name="deksripsi" required value="<?= $b['deksripsi']; ?>">
          <label> Description  :</label>
        </div>
      </div>

       <div class="row ">
        <div class="input-field col s6">
         <input type="text" name="harga" required value="<?= $b['harga']; ?>">
          <label for="harga">Price:</label>
        </div>

       <div class="row" style="float: left; ">
          <div class="col s12 m5">
            <div class="card" style=" box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);">
              <div class="card-image medium">
                 <img src="assets/img/<?= $b['gambar']; ?>" width="120" style="display: block;" class="img-preview">
              </div>
              <div class="card-content">
            <li>
               <input type="hidden" name="gambar_lama" value="<?= $b['gambar']; ?>">

            <label>
            Gambar :
            <input type="file" name="gambar" class="gambar" onchange="previewImage()">
            </label>

            </li>
    
              </div>
              <div class="card-action">
                  <button class="waves-effect waves-light btn transparent teal-text text-accent-4" type="submit" name="ubah">Change</button>
              </div>
            </div>
          </div>
        </div>
    </form>
    <div class="container">
   <div class="input-field">
  <a href="index.php" class="btn-large waves-effect cyan btn transparent" style="float: right;">Back</a>
  </div>
  </div>

  </div>
  </div>
  </div>
  

<script src=" ../js/script.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script
    type="text/javascript"
    src="https://code.jquery.com/jquery-2.1.1.min.js"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>