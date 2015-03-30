<div class="container">
    <br><h5 class="custom-h5">Koleksi View</h5>
    <div class="card-panel-custom-cp z-depth-1">
        <div class="row">
            <form method="post" action="<?php echo base_url('index.php/koleksi/add') ?>" class="col s12">
                <div class="row">
                    <div class="input-field col s10 m8 l8 offset-s1 offset-m2 offset-l2">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="username" type="text" name="username" class="validate">
                        <label for="username">username</label>
                    </div>

                    <div class="input-field col s10 m8 l8 offset-s1 offset-m2 offset-l2">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="isbn" type="text" name="isbn" class="validate">
                        <label for="isbn">isbn</label>
                    </div>

                    <div class="col s10 m8 l8 offset-s1 offset-m2 offset-l2">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <button class="btn custom-btn waves-effect waves-light green right-align z-depth-1" type="submit" name="action">LOG IN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <h6 class="custom-h6">Not a member? <a class="green-text" href="<?php echo base_url('index.php/Registration/step_one') ?>">Create an account</a></h6>
</div>