<?php 



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

     
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>WiseBrand</title>
    <style>
        
         body {

    background-image: url();
    font-family: arial;

  }

   .carousel-item {

    width: 250%;

    }

    .brand-logo {
     font-size: 70px;
    color: #8ce0d1;
    font-family: "Arial Black", Gadget, sans-serif;
    text-shadow: 0px 0px 0 rgb(135,219,204),
                 1px 1px 0 rgb(130,214,199),
                 2px 2px 0 rgb(125,209,194),
                 3px 3px 0 rgb(120,204,189),
                 4px 4px 0 rgb(115,199,184),
                 5px 5px 0 rgb(110,194,179),
                 6px 6px 0 rgb(105,189,174),
                 7px 7px 0 rgb(100,184,169),
                 8px 8px 0 rgb(95,179,164),
                 9px 9px 0 rgb(90,174,159),
                 10px 10px  0 rgb(85,169,154),
                 11px 11px 10px rgba(0,0,0,0.6),
                 11px 11px 1px rgba(0,0,0,0.5),
                 0px 0px 10px rgba(0,0,0,.2);
    }

    .parallax-container {
    height: 20%;
    border-style: groove    ;
    border-color: #3e2723;
}

.parallax img {
   
   
}


  .parallax-container h4{
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
    </head>

    <body id="home" class="scrollspy">
        
        <!-- Navbar -->
        <div class="navbar-fixed">
            <nav class="black">
              <div class="container">
                <div class="nav-wrapper">
                    <a href="#home" class="brand-logo">WB</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#about">About us</a></li>
                      
                        <li><a href="#carousel">Best Seller</a></li>
                      
                        <li><a href="login.php">Login</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                    
                </div>
              </div>
            </nav>
          </div>
                
       
       

        <!-- Slider -->
        <div class="slider">
            <ul class="slides">
              <li>
                <img src=" ../php/assets/img/slider/ni.jpg"> <!-- random image -->
                <div class="caption centert-align">
                  <h3>WiseBrand</h3>
                  <h5 class="light grey-text text-lighten-3">This Shoes is Suitable for Those of You Who Like Sports</h5>
                </div>
              </li>
              <li>
                <img src="  ../php/assets/img/slider/sli.jpg"> <!-- random image -->
                <div class="caption right-align">
                  <h3>WiseBrand</h3>
                  <h5 class="light grey-text text-lighten-3">Displays Several Kinds of Shoes That Have Different Styles</h5>
                </div>
              </li> 
              <li>
                <img src=" ../php/assets/img/slider/s4.jpg "> <!-- random image -->
                <div class="caption center-align">
                  <h3>WiseBrand</h3>
                  <h5 class="light grey-text text-lighten-3"> Gives a Comfortable Sensation to Your Shoes</h5>
                 
                </div>
              </li>
               <li>
                <img src=" ../php/assets/img/slider/add.jpg "> <!-- random image -->
                <div class="caption left-align">
                  <h3>WiseBrand</h3>
                  <h5 class="light grey-text text-lighten-3"> Strong and Durable in All Conditions</h5>
                 
                </div>
              </li>
            </ul>  
        </div>

        <!-- About -->

        <section id="about" class="about scrollspy">
         <div class="container">
             <div class="row">
                 <h3 class="center light grey-text text-darken-3">About Us</h3>
                 <div class="col m6 light">
                     <h5>About WiseBrand</h5>

                    <div class="valign-wrapper">
                        <p>We provide several high quality sports shoes that are very different from many styles and comfortable to wear on any terrain.</p>
                    </div>

                 </div>


                <div class="col m6 light">
                    <div class="image">
                        <img class="responsive-img" src=" ../php/assets/img/spatu.png">
            
                    </div>
                </div>
            </div>
         </div>   
        </section>


        

     

       

        <!-- Portfolio -->
       
        <section id="carousel" class="carousel scrollspy">
            <div class="container">
                <h3 class="light center gray-text text draken-3">Best Seller</h3>
           
                <div class="carousel-fixed-item">
                  <a class="carousel-item" href="#one!"
                    ><img src=" ../php/assets/img/1.jpg"
                  /></a>
                  <a class="carousel-item" href="#two!"
                    ><img src=" ../php/assets/img/2.jpg"
                  /></a>
                  <a class="carousel-item" href="#three!"
                    ><img src=" ../php/assets/img/3.png"
                  /></a>
                  <a class="carousel-item" href="#four!"
                    ><img src=" ../php/assets/img/4.jpg"
                  /></a>
                  <a class="carousel-item" href="#five!"
                    ><img src=" ../php/assets/img/5.jpg"
                  /></a>
                  <a class="carousel-item" href="#six!"
                    ><img src=" ../php/assets/img/6.jpg"
                  /></a>
                  <a class="carousel-item" href="#seven!"
                    ><img src=" ../php/assets/img/7.jpg"
                  /></a>
                  <a class="carousel-item" href="#eight!"
                    ><img src=" ../php/assets/img/8.jpg"
                  /></a>
                  <a class="carousel-item" href="#nine!"
                    ><img src=" ../php/assets/img/9.jpg"
                  /></a>
                  <a class="carousel-item" href="#ten!"
                    ><img src=" ../php/assets/img/10.jpg"
                  /></a>

        
                </div>
            </div>
        </section>




    <div class="parallax-container" style="height: 150px; border: groove;">
      <div class="parallax"><img src=" ../php/assets/img/parallax/p1.jpg"></div>

       <div  class="container clients">
                <h3 class="center grey-ext"></h3>
                    <div class="row">
                        <div class="col m4 s12 center">
                            <img src=" ../php/assets/img/adidas.png" style="width: 150px;">
                        </div>
                        <div class="col m4 s12 center">
                            <img src=" ../php/assets/img/nike.png" style="width: 200px;">
                        </div>
                        <div class="col m4 s12 center">
                            <img src=" ../php/assets/img/mizo.png" style="width: 200px;">
                        </div>
                        
                    </div>  
            </div>
    </div>



       
    <br><br>

<div class="container">
  <form action="" method="POST">
    <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">search</i>
               <input type="text" name="keyword" size="40" placeholder="Search" autocomplete="off" autofocus class="keyword">
              <label for="autocomplete-input">Search</label>
              <a><button type="submit" name="cari" class="tombol-cari waves-effect waves-teal btn-flat">Search</button></a>
              
            </div>
          </div>
        </div>
      </div>
  </form>
</div>





    


   



        <?php if (empty($barang)) : ?>
        
          <tr>
           <td colspan="4">
              <p style="color: red; font-style: italic;">data barang tidak ditemukan!</p>
            </td>
          </tr>

          <?php endif; ?>


            
         
          
            <?php $i = 1;
            foreach ($barang as $b) : ?>
<div class="container">
  <div class="col s12 m4"> 
    <div class="card horizontal">
      <div class="card-image small">
         <img src="assets/img/<?= $b['gambar']; ?>">
        <span class="card-title black-text"> <?= $b['nama']; ?></span>
      </div>
      <div class="card-stacked">
        <div class="card-content">
           <p>Brand : <?= $b['merek']; ?></p>
           <p>Color : <?= $b['warna']; ?></p>
           <p>Description : <?= $b['deksripsi']; ?></p>
           <p>Price : <?= $b['harga']; ?></p>
        </div>
      </div>
    </div>
  </div>
  </div>

   <?php endforeach; ?>  


   <div class="parallax-container" style="height: 150px; border: groove;">
      <div class="parallax"><img src=" ../php/assets/img/parallax/p2.jpg"></div>


       <div  class="container clients">
                <h4 class="center grey-ext white-text">Don't Let Small Obstacles Get In The Way Of Your Dreams</h4>
                   
            </div>

    </div>


    <section id="contact" class="contact black darken-4 scrollspy">
             <div class="container" style="border: solid;">
                 <h3 class="white-text text center">Contact Us</h3>
                 <div class="row">
                     <div class="col m5 s12">
                         <div class="card-panel teal lighten-2 center white-text">
                             <i class="material-icons">email</i>
                             <h5>Contact</h5>
                             <p>farzyahoo@gmail.com</p>

                         </div>
                         <ul class="collection with-header">
                             <li class="collection-header"><h4>Our Office</h4></li>
                             <li class="collection-item">WiseBrand</li>
                             <li class="collection-item">JL.Pasundan no.24 JawaBarat</li>
                             <li class="collection-item">West Java, Indonesia</li>
                         </ul>
                     </div>

                     <div class="col m7 s12">
                         <form>
                            <div class="card-panel">
                                <h5>Please Fill out this form</h5>
                                <div class="input-field">
                                    <input type="text" name="name" id="name" required class="validate">
                                    <label for="name">Name</label>
                                </div>
                                <div class="input-field">
                                    <input type="email" name="email" id="email" class="validate">
                                    <label for="email">Email</label>
                                </div>

                                <div class="input-field">
                                    <input type="text" name="phone" id="phone">
                                    <label for="phone">Phone Number</label>
                                </div>
                                <div class="input-field">
                                    <textarea name="message" id="message" class="materialize-textarea"></textarea>
                                    <label for="message">Message</label>
                                </div>
                                <button type="submit" class="btn teal lighten-2">Send</button>
                            </div>
                         </form>
                     </div>
                 </div>

          <footer class="white-text center">
            <p class="flow-text">Farruz Brilliant Wichaksana. Copyright 2024.</p>
        </footer>
             </div>
         </section>

          <!-- Footer -->




               


    

      

        
         




    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script
    type="text/javascript"
    src="https://code.jquery.com/jquery-2.1.1.min.js"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
    $(document).ready(function() {
        $('.carousel').carousel({
        dist :-100,
        OnCycleTo:null,
        padding:8,
        indicators:true,
        numVisible:5,
        


        });
    });
    </script>

    <script>
        const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

        const slider = document.querySelectorAll('.slider')
        M.Slider.init(slider, {
            indicators :false,
            height:600,
            transition:600, 
            interval:3000
        });

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);


        const materialbox = document.querySelectorAll('.materialboxed')
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
            scrollOffset: 50
        }) ;





    </script>

    <script>
      
       $(document).ready(function(){
    $('input.autocomplete').autocomplete({
      data: {
        "Apple": null,
        "Microsoft": null,
        "Google": 'https://placehold.it/250x250'
      },
    });
  });


    </script>

<script>
  
  $(document).ready(function(){
    $('.parallax').parallax();
  });


</script>
  
     



    </body>
  </html>