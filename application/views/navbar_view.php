<div class="header_wrapper"> <!-- end div ini ada di masing-masing view of reqin, reqout, coll, dan wishlist-->
    <ul id="dropdown1" class="dropdown-content dropdown-content-custom">
      <li><a href="<?php 
      $username = $this->session->userdata('username');
      echo base_url()."index.php/profil/lihatProfil/".$username?>"><span class="green-text">Profil</span></a></li>
      <li class="divider"></li>
      <li><a href="<?php echo base_url('index.php/profil/ubahProfile/')?>"><span class="green-text">Ubah Profil</span></a></li>
      <li class="divider"></li>
      <li><a href="<?php echo base_url('index.php/Auth/logout')?>"><span class="green-text">Logout</span></a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content dropdown-content-custom">
      <li><a href="<?php echo base_url('index.php/Kontak_Kami')?>"><span class="green-text">Kontak Kami</span></a></li>
    </ul>

    <nav class="green">
      <div class="nav-container nav-wrapper">
        <a href="<?php echo base_url('index.php/permintaan_masuk/') ?>" class="brand-logo"><img class="img-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a>
        <ul class="right hide-on-med-and-down">
          <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Cari Buku atau Pengguna" href="<?php echo base_url('index.php/pencarian/buku') ?>"><i class="lime-text text-lighten-5 mdi-action-search"></i></a></li>
          <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Notifikasi" href="<?php echo base_url('index.php/notifikasi/') ?>"><i class="lime-text text-lighten-5 mdi-social-notifications" id="notif-icon"></i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
              <div class="row">
                <div class="col s5 offset-s1 m4 l4 center">
                  <img class="img-icon circle responsive-img" src="<?php $gambar = $this->session->userdata('foto'); echo $gambar;?>">
                </div>
                <div class="col s5 offset-s1 m8 l8 center">
                  <?php echo $this->session->userdata('username');?>
                </div>
              </div>
          </a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown2">
              <i class="lime-text text-lighten-5 mdi-action-settings"></i>
          </a></li>
        </ul>
      </div>
    </nav>
<script>
  $(document).ready(function(){
    $(".dropdown-button").dropdown({hover:false, constraint_width:true, gutter: -30})
  })
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });        
</script>
