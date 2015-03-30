<div class="container">
    <br><h5 class="custom-h5">Log in to continue to KubuBuku</h5>
    <div class="card-panel-custom-cp z-depth-1">
        <div class="row">
            <form method="post" action="<?php echo base_url('index.php/auth/login') ?>" class="col s12">
                <div class="row">
                    <div class="input-field col s10 m8 l8 offset-s1 offset-m2 offset-l2">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="email" type="text" name="email" class="validate">
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field col s10 m8 l8 offset-s1 offset-m2 offset-l2">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="password" type="text" name="password" class="validate">
                        <label for="password">Password</label>
                    </div>

                    <div class="col s10 m8 l8 offset-s1 offset-m2 offset-l2">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <button class="btn custom-btn waves-effect waves-light green right-align z-depth-1" type="submit" name="action">LOG IN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <h6 class="custom-h6">Not a member? <a class="green-text" href="<?php echo base_url('index.php/registration/step_one') ?>">Create an account</a></h6>
</div>