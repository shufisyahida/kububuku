<div class="header_wrapper"> <!-- end div ini ada di masing-masing view of reqin, reqout, coll, dan wishlist-->
    <ul id="dropdown1" class="dropdown-content dropdown-content-custom">
      <li><a href="<?php echo base_url('index.php/Auth/logoutAdmin')?>"><span class="green-text">Logout</span></a></li>
    </ul>

    <nav class="green">
      <div class="nav-container nav-wrapper">
        <a href="<?php echo base_url('index.php/Admin/') ?>" class="brand-logo"><img class="img-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a>
        <ul class="right hide-on-med-and-down">
          <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Search books or user" href="<?php echo base_url('index.php/Search/homeBuku') ?>"><i class="lime-text text-lighten-5 mdi-action-search"></i></a></li>
          <!-- <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Notifications" href="#!"><i class="lime-text text-lighten-5 mdi-social-notifications"></i></a></li> -->
          <li><a class="dropdown-button" href="#!" data-activates="dropdown1">
              <div class="row">
                <div class="col s5 offset-s1 m4 l4 center">
                  <!-- <img class="img-icon circle responsive-img" src="<?php $gambar = $this->session->userdata('foto'); echo $gambar;?>"> -->
                  <i class="mdi-action-settings"></i>
                </div>
                <div class="col s5 offset-s1 m8 l8 center">
                  Admin
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
