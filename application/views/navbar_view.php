<div class="header_wrapper"> <!-- end div ini ada di masing-masing view of reqin, reqout, coll, dan wishlist-->
    <ul id="dropdown1" class="dropdown-content dropdown-content-custom">
      <li><a href="<?php echo base_url('index.php/Profile/')?>"><span class="green-text">My Profile</span></a></li>
      <li class="divider"></li>
      <li><a href="<?php echo base_url('index.php/Edit_Profile/')?>"><span class="green-text">Settings</span></a></li>
      <li class="divider"></li>
      <li><a href="<?php echo base_url('index.php/auth/logout')?>"><span class="green-text">Logout</span></a></li>
    </ul>

    <nav class="green">
      <div class="nav-container nav-wrapper">
        <a href="<?php echo base_url('index.php/dashboard/') ?>" class="brand-logo"><img class="img-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a>
        <ul class="right hide-on-med-and-down">
          <li><a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Search books or user" href="<?php echo base_url('index.php/search/homeBuku') ?>"><i class="lime-text text-lighten-5 mdi-action-search"></i></a></li>
          <li><a href="#"><i class="lime-text text-lighten-5 mdi-social-notifications"></i></a></li>
          <li><a class="custom-a dropdown-button" href="#!" data-activates="dropdown1"><img class="img-icon circle responsive-img" src="<?php echo base_url('assets/img/fallon.jpg') ?>"></a></li>
        </ul>
      </div>
    </nav>

    <!-- <div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a id="request-in" href="<?php echo base_url('index.php/dashboard/request_in') ?>">Request In</a></li>
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

  //  $(document).ready(function(){
  //   $('ul.tabs').tabs();
  // });

  //  $(document).ready(function(){
  //   $('ul.tabs').tabs('select_tab', 'request-in');
  // });
  

  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });        
</script>
