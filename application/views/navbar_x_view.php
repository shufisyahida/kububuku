<div class="header_wrapper"> <!-- end div ini ada di masing-masing view of reqin, reqout, coll, dan wishlist-->
   
    <nav class="green">
      <div class="nav-container nav-wrapper">
        <a href="<?php echo base_url() ?>" class="brand-logo"><img class="img-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a>
        <ul class="right hide-on-med-and-down">
          <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Cari buku atau pengguna" href="<?php echo base_url('pencarian/buku') ?>"><i class="lime-text text-lighten-5 mdi-action-search"></i></a></li>
          <!-- <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Notifications" href="#!"><i class="lime-text text-lighten-5 mdi-social-notifications"></i></a></li> -->
          <li><a href="<?php echo base_url('Login')?>">LOGIN</a></li>
          <li><a href="<?php echo base_url('Sso/login') ?>">DAFTAR</a></li>
        </ul>
      </div>
    </nav>
