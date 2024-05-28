<?php 

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';


// $row = mysqli_fecth_row($result); array numerik
// $row = mysqli_fecth_assoc($result); array associative
// $row = mysqli_fecth_array($result); array keduanya
// tampung ke variabel mahasiswa
$barang = query("SELECT * FROM barang");

// ketika tombol cari dikembalikan
if(isset($_POST['cari'])) {
    $barang = cari($_POST['keyword']);
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
      
      body {
        background-image: url(assets/img/back1.jpg);

      }

      

    </style>

    <title>List Items</title>
   
</head>
<body>


<div class="row">
    <div class="col s12 m12">
      <div class="card transparent">
        <div class="card-image tr">

          <br>
          
         
        </div>
        <div class="card-content white-text " style="text-align: center;">
          <h3>
            List Of Items
          </h3>
        </div>
      </div>
    </div>

  <div class="tombol">   
      <div class="tombol2">
            <a href="logout.php" class="waves-effect waves-light btn transparent"><i class="material-icons left">close</i>logout</a>
            </div>

          <br><br>
     

          <div class="container" style="float: right;">
          <a href="tambah.php" class="waves-effect waves-light btn transparent"><i class="material-icons left">add</i>Add</a>
          </div>  
  </div>  
          
    <br><br><br>

    <div class="container">
  <form action="" method="POST">
    <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">search</i>
               <input type="text" name="keyword" size="40" placeholder="Masukan keyword pencarian" autocomplete="off" autofocus class="keyword">
              <label for="autocomplete-input">Search</label>
              <a><button type="submit" name="cari" class="tombol-cari waves-effect waves-teal btn-flat">Search</button></a>
              
            </div>
          </div>
        </div>
      </div>
  </form>
</div>


    
  <div class="container">


    <?php if (empty($barang)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">data barang tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>

     <table class="highlight white-text" style="box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);">
        <thead>
          <tr>
               <th></th>
              <th>Picture</th>
              <th>Brand</th>
              <th>Name</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
           <?php $i = 1;
           foreach ($barang as $b) : ?>
          <tr>
            <td><?= $i++; ?></td>
            <td><img src="assets/img/<?= $b['gambar']; ?>" width='250'></td>
            <td><?= $b['merek']; ?></td>
            <td><?= $b['nama']; ?></td>
            <td>
              <a href="detail.php?id=<?= $b['id']; ?>"><i class="material-icons left">info</i>See Details</a>
            </td>
          </tr>
           <?php endforeach; ?>
         
        </tbody>
      </table>
        

   
    
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