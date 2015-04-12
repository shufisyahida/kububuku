<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KubuBuku</title>

        <!-- <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet"> -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.min.css') ?>" media="screen,projection"/>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

        <!--<style type="text/css">
            body{
                /*font-family: 'Open Sans', sans-serif;*/
                font-family: 'Roboto', sans-serif;
            }

            .carousel-fit{
                max-height: 100vh;
            }

            .carousel-inner > .item{
                max-height: 100vh;
            }

            .img-responsive{
                width: 100% \9;
            }

            p a:hover{
                text-decoration: none;
                color: white;
            }
        </style>-->
    </head>

    <body>
        <!--<div>
            <div id="myCarousel" class="carousel slide carousel-fit" data-interval="3000" data-ride="carousel">
            	<!-- Carousel indicators --
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                </ol> 
                
                <!-- Carousel items --
                <div class="carousel-inner">
                    <div class="active item">
                        <img src="<?php echo base_url('assets/img/slide6.jpg') ?>" class="img-responsive center-block" alt="first slide">
                        <div class="container-fluid">
                            <div class="carousel-caption">
                              <h3>First slide label</h3>
                              <p>Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                              <p><a class="waves-effect waves-light btn-large z-depth-3 grey lighten-1" href="<?php echo base_url('index.php/login') ?>" role="button">Go to KubuBuku</a></p>
                            </div>
                        </div>
                       
                    </div>

                    <div class="item">
                        <img src="<?php echo base_url('assets/img/slide5.jpg') ?>" class="img-responsive center-block" alt="second slide">
                        <div class="container-fluid">
                            <div class="carousel-caption">
                              <h3>Second slide label</h3>
                              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                              <p><a class="waves-effect waves-light btn-large z-depth-3 grey lighten-1" href="<?php echo base_url('index.php/login') ?>" role="button">Go to KubuBuku</a></p>
                            </div>
                        </div>
                    </div>  
                </div>

                <!-- Carousel nav --
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div> -->


        <div class="slider fullscreen">
            <ul class="slides">
                <li>
                    <img src="<?php echo base_url('assets/img/slide1.jpg') ?>">
                    <div class="caption right-align">
                        <h3>Welcome to KubuBuku!</h3>
                        <h5 class="light white-text text-lighten-3">Borrowing a book has never been this easy.</h5>
                        <div><p><a class="waves-effect waves-light btn-large z-depth-1 grey lighten-1" href="<?php echo base_url('index.php/login') ?>" role="button">Go to KubuBuku</a></p></div>
                    </div>
                </li>
                <li>
                    <img src="<?php echo base_url('assets/img/slide6.jpg') ?>">
                    <div class="caption left-align">
                        <h3>KubuBuku</h3>
                        <h5 class="light white-text text-lighten-3">Here's our bookville.</h5>
                        <div><p><a class="waves-effect waves-light btn-large z-depth-1 grey lighten-1" href="<?php echo base_url('index.php/login') ?>" role="button">Go to KubuBuku</a></p></div>
                    </div>
                </li>
            </ul>
        </div>
      

        <!--<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/materialize.js') ?>"></script>
        <script type="text/javascript">
            // $(document).ready(function(){
            //     $('#myCarousel').on('slide.bs.carousel', function(){
            //         console.log("Sliding instruction received!");
            //     });
            //     $('#myCarousel').on('slid.bs.carousel', function(){
            //         console.log("Sliding over!");
            //     });
            // })
            $(document).ready(function(){
                $('.slider').slider({full_width: true});
            });
        </script>
    </body>
</html>         
