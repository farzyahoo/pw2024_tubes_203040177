<?php
require 'functions.php';

if (isset($_POST['registrasi'])){
    if(registrasi($_POST) > 0) {
         echo "<script>
            alert('user baru berhasil ditambahkan silahkan login!');
            document.location.href = 'login.php';
          </script>";

    } else {
        echo 'user gagal ditambahkan!';
    }
}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
              
        <!-- Font -->
        <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
  
    <title>Registrasi</title>
    <style> 
        body {

    background-image: url( ../php/assets/img/loandreg.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%; 
    opacity: 0,3;

        }
        

    </style>
</head>
<body>
   
   <div class="container">
   <div class="input-field">
  <a href="login.php" class="btn-large waves-effect cyan btn transparent">Back</a>
  </div>
  </div>
        

         <div class="row">
        <div class="col s12 m4 offset-m4 ">
            <div class="card z-depth-5 transparent">
                <div class="card-action cyan white-text transparent">
                    <h3 align="center">Form Registrasi</h3>
                </div>
                <form action="" method="POST">
                <div class="card-content ">
                    <div class="input-field">
                        <label>
                       Username :
                        <input type="text" name="username" autofocus="" autocomplete="off" required>
                   </label>
        
                    </div><br><br><br>
                    <div class="input-field">
                               
                     <label>
                         Password :
                          <input type="password" name="password1" required>
                     </label>
                    </div><br><br><br>  
                    <div class="input-field">
                          <label>
                   Konfirmasi Password :
                    <input type="password" name="password2" required>
               </label>
                    </div><br><br><br><br><br>
                    <div class="input-field">
                        <button class="btn-large waves-effect cyan btn transparent" type="submit" name="registrasi" style="width: 100%">Registrasi</button>
                    </div><br>
                </div></form>
            </div>
        </div>
    </div>

        </ul>





    </form>
    

     <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-2.1.1.min.js"
      ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>