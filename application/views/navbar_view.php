<div class="header_wrapper"> <!-- end div ini ada di masing-masing view of reqin, reqout, coll, dan wishlist-->
    <ul id="dropdown1" class="dropdown-content dropdown-content-custom">
      <li><a href="<?php 
      $username = $this->session->userdata('username');
      echo base_url()."index.php/Profile/profile/".$username?>"><span class="green-text">My Profile</span></a></li>
      <li class="divider"></li>
      <li><a href="<?php echo base_url('index.php/Edit_Profile/')?>"><span class="green-text">Settings</span></a></li>
      <li class="divider"></li>
      <li><a href="<?php echo base_url('index.php/auth/logout')?>"><span class="green-text">Logout</span></a></li>
    </ul>

    <nav class="green">
      <div class="nav-container nav-wrapper">
        <a href="<?php echo base_url('index.php/request_in/') ?>" class="brand-logo"><img class="img-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a>
        <ul class="right hide-on-med-and-down">
          <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Search books or user" href="<?php echo base_url('index.php/search/homeBuku') ?>"><i class="lime-text text-lighten-5 mdi-action-search"></i></a></li>
          <li><a href="#"><i class="lime-text text-lighten-5 mdi-social-notifications"></i></a></li>
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
              <div class="row">
                <div class="col m4 l4">
                  <img class="img-icon circle responsive-img" src="<?php $gambar = $this->session->userdata('foto'); echo $gambar;?>">
                </div>
                <div class="col m8 l8">
                  <?php echo $this->session->userdata('username');?>
                </div>
              </div>
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
