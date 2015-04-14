<div class="header_wrapper"> <!-- end div ini ada di masing-masing view of reqin, reqout, coll, dan wishlist-->
    <nav class="green">
      <div class="nav-container nav-wrapper">
        <a href="#" class="brand-logo"><img class="img-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a>
      </div>
    </nav>
</div>
<div class="container" style="margin-top:100px;">
    <div class="card-panel card-panel-custom-cp z-depth-1">
        <div class="row">
            <form method="post" action="<?php echo base_url('index.php/auth/login') ?>" class="col s12">
                <div class="row">
                    <div class="input-field col s12 m12 l12">
                        <i class="green-text mdi-communication-email prefix"></i>
                        <input id="email" type="text" name="email" class="validate">
                        <label for="email">Email</label>
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
    <h6 class="custom-h6">Not a member? <a class="green-text" href="<?php echo base_url('index.php/sso/login') ?>">Create an account</a></h6>    
</div>