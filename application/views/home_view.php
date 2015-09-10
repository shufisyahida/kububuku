<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KubuBuku</title>
        <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico');?>" type="image/ico">

        <!-- <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"> -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css') ?>" media="screen,projection"/>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url('assets/css/main.css') ?>" rel="stylesheet">


    </head>

    <body>
    <section>
        <div class="homeLatar green">

            <div class="homeNavbar">
                <!-- <a href="<?php echo base_url('permintaan_masuk/') ?>" class="logoKububuku"><img class="home-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a> -->
                <ul class="right">
                  <li><a class="" href="<?php echo base_url('Login') ?>">Login</a></li>
                  <li><a class="" href="<?php echo base_url('Sso/login') ?>">Daftar</a></li>
                </ul>

            </div>

            <center><div class="logoBesar">
                <img class="responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>">
            </div></center>

            <div class="homeCari">
                <h5>Cari Buku di sini...</h5>
                <center>
                    <form method="post" action="<?php echo base_url('pencarian/hasil_buku') ?>">
                        <input type="text" id="book-searchkey" name="keyword">
                        <input class="hide" id="kategori" name="kategori" value="judul" type="text">
                    </form>
                </center>
            </div>       
        </div>
    </section>

    <section>
        <div class="homeLatar lime lighten-5">
            <div class="makna">
                <p class="besar">KubuBuku</p><p> adalah portal pinjam meminjam buku antar sivitas akademika </p><p class="besar">Universitas indonesia</p>    
            </div>    
        </div>
    </section>
    <section>
        <div class="homeLatar green">
            <div class="gabung">
                <p>
                    Ayo gabung bersama KubuBuku
                </p>                
                <a href="<?php echo base_url('Sso/login') ?>">Login via SSO</a>              
            </div>
            <center>
                <br>
                <p class="lime-text text-lighten-5">Sudah punya akun? Login <a href="<?php echo base_url('Login') ?>">di sini</a></p>
            </center>
        </div>
        
    </section>
    </body>
</html>         
