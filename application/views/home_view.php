<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KubuBuku</title>
        <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico');?>" type="image/ico">

        <!-- Materialize CSS -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css') ?>" media="screen,projection"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/materialize.css') ?>">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url('assets/css/main.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/star.css') ?>" rel="stylesheet">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <!-- Javascript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.js') ?>"></script>
        <script type="text/javascript" src="https://raw.githubusercontent.com/phstc/jquery-dateFormat/master/dist/jquery-dateFormat.js"></script>

        <!--<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>-->
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.imgareaselect.pack.js');?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/imgareaselect-default.css');?>" />
        <script type="text/javascript" scr="<?php echo base_url('assets/js/baseURL.js'); ?>"></script>


    </head>

    <body>
    <section>
        <div class="homeLatar green">

            <div class="header_wrapper"> <!-- end div ini ada di masing-masing view of reqin, reqout, coll, dan wishlist-->
    

    <nav class="green">
      <div class="nav-container nav-wrapper">
        <a href="<?php echo base_url('') ?>" class="brand-logo"><img class="img-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a>
        <ul class="right hide-on-med-and-down">
          <li><a class="" href="<?php echo base_url('Login') ?>">Login</a></li>
                  <li><a class="" href="<?php echo base_url('Sso/login') ?>">Daftar</a></li>
        </ul>
      </div>
    </nav>
</div>

<!--             <div class="homeNavbar">
                <ul class="right">
                  <li><a class="" href="<?php echo base_url('Login') ?>">Login</a></li>
                  <li><a class="" href="<?php echo base_url('Sso/login') ?>">Daftar</a></li>
                </ul>

            </div> -->

            <center><div class="logoBesar">
                <img class="responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>">
            </div></center>

            <div class="homeCari">
                <h5>Cari Buku di sini...</h5>
                <center>
                    <form method="post" action="<?php echo base_url('pencarian/hasil_buku') ?>">
                        <input type="text" id="book-searchkey" name="keyword" placeholder="Judul buku">

                        <input class="hide" id="kategori" name="kategori" value="judul" type="text">
                        <button class="hide" type="submit" name="action" method="post"></button>
                    </form>
                </center>
            </div>       
        </div>
    </section>

    <section>
        <div class="homeLatar lime lighten-5">
            <div class="makna">
                <p class="besar">KubuBuku</p><p> adalah portal pinjam meminjam buku antar sivitas akademika </p><p class="besar">Universitas Indonesia</p>    
            </div>    
        </div>
    </section>
    <section>
        <div class="homeLatar green">
            <div class="gabung">
                <p>
                    Ayo gabung bersama KubuBuku
                </p>                
                <a href="<?php echo base_url('Sso/login') ?>">Daftar</a>              
            </div>
            <center>
                <br>
                <p class="lime-text text-lighten-5">Sudah punya akun? Login <a href="<?php echo base_url('Login') ?>">di sini</a></p>
            </center>
        </div>
        
    </section>
    </body>
    <script>
  $(document).ready(function(){
    $(".dropdown-button").dropdown({hover:false, constraint_width:true, gutter: -30})
  })
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });        
</script>
</html>         
