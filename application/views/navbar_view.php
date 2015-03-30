<div class="header_wrapper"> <!-- end div ini ada di masing-masing view of reqin, reqout, coll, dan wishlist-->
    <ul id="dropdown1" class="dropdown-content dropdown-content-custom">
      <li><a href="#!"><span class="green-text">My Profile</span></a></li>
      <li class="divider"></li>
      <li><a href="#!"><span class="green-text">Settings</span></a></li>
      <li class="divider"></li>
      <li><a href="#!"><span class="green-text">Logout</span></a></li>
    </ul>

    <nav class="green">
      <div class="nav-container nav-wrapper">
        <a href="<?php echo base_url('index.php/dashboard/') ?>" class="brand-logo"><img class="img-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a>
        <ul class="right hide-on-med-and-down">
          <li>
            <form>
              <div class="input-field">
                <label for="search"><i class="lime-text text-lighten-5 mdi-action-search"></i></label>
                <input id="search" type="text" required>
              </div>
            </form>
          </li>
          <li><a href="#"><i class="lime-text text-lighten-5 mdi-social-notifications"></i></a></li>
          <li><a class="custom-a dropdown-button" href="#!" data-activates="dropdown1"><img class="img-icon circle responsive-img" src="<?php echo base_url('assets/img/elka.png') ?>"></a></li>
        </ul>
      </div>
    </nav>

    <!-- <div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a href="<?php echo base_url('index.php/dashboard/request_in#request-in') ?>">Request In</a></li>
          <li><a href="<?php echo base_url('index.php/dashboard/request_out#') ?>">Request Out</a></li>
          <li><a href="<?php echo base_url('index.php/dashboard/collection#') ?>">Collection</a></li>
          <li><a href="<?php echo base_url('index.php/dashboard/wishlist#') ?>">Wishlist</a></li>
        </ul>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-editor-mode-edit"></i>
        </a>
        <ul>
          <li><a class="btn-floating red"><i class="large mdi-editor-insert-chart"></i></a></li>
          <li><a class="btn-floating yellow darken-1"><i class="large mdi-editor-format-quote"></i></a></li>
          <li><a class="btn-floating green"><i class="large mdi-editor-publish"></i></a></li>
          <li><a class="btn-floating blue"><i class="large mdi-editor-attach-file"></i></a></li>
        </ul>
      </div>
    </div> -->

<script>
  $(document).ready(function(){
    $(".dropdown-button").dropdown({hover:false, constraint_width:true, gutter: -70})
  })
</script>
