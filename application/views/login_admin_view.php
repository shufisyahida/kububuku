<div class="header_wrapper"> <!-- end div ini ada di masing-masing view of reqin, reqout, coll, dan wishlist-->
    <nav class="green">
      <div class="nav-container nav-wrapper">
        <a href="<?php echo base_url() ?>" class="brand-logo"><img class="img-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a>
      </div>
    </nav>
</div>
<div class="container" style="margin-top:100px;">
    <div class="card-panel card-panel-custom-cp z-depth-1">
        <div class="row">
            <form method="post" action="<?php echo base_url('index.php/Auth/loginAdmin') ?>" class="col s12">
                <div class="row">
                    <div class="input-field col s12 m12 l12">
                        <i class="green-text mdi-social-person prefix"></i>
                        <input id="username" type="text" name="username" class="validate">
                        <label for="email">Username</label>
                    </div>
                    <div class="input-field col s12 m12 l12">
                        <i class="green-text mdi-action-lock prefix"></i>
                        <input id="password" type="password" name="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                    <div class="col s12 m12 l12">
                        <?php 
                            if(!empty($notif))
                            {
                                echo $notif;
                            }
                         ?>
                    </div>
                    <div class="col s12 m12 l12">
                        <button class="btn custom-btn waves-effect waves-light green right-align z-depth-1" type="submit" name="action" method="post">LOG IN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--<?php 
        $email=$this->session->userdata("email");
        if ($this->session->userdata('error_login'.$email)==true) {
            echo "gagal";
        }
    ?>-->
 <!--   <h6 class="custom-h6">Not a member? <a class="green-text" href="<?php echo base_url('index.php/Sso/login') ?>">Create an account</a></h6>    -->
</div>