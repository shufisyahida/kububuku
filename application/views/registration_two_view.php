<div class="container">
    <br><h5>Registration</h5>
    <div class="card-panel-custom-reg z-depth-1">
        <div class="row">
            <form class="col s6">
				<div class="row">
                    <div class="input-field col s10 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="facebook" type="text" class="validate">
                        <label for="facebook">Facebook Name</label>
                    </div>

                    <div class="input-field col s10 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="twitter" type="text" class="validate">
                        <label for="twitter">Twitter ID</label>
                    </div>

                    <div class="input-field col s10 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="hp" type="text" class="validate">
                        <label for="hp">Cellphone Number</label>
                    </div>

                    <div class="input-field col s10 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="bbm" type="text" class="validate">
                        <label for="bbm">BBM Pin</label>
                    </div>
                </div>
            </form>

            <form class="col s6">
                <div class="row">
                    <div class="input-field col s10 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="line" type="text" class="validate">
                        <label for="line">Line ID</label>
                    </div>

                    <div class="input-field col s10 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="whatsapp" type="text" class="validate">
                        <label for="whatsapp">Whatsapp Number</label>
                    </div>

                    <div class="col s12 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <button id="regbtn" class="btn waves-effect waves-light green right-align z-depth-1" type="submit" name="action">REGISTER</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <h6 class="custom-h6-login"><a class="green-text" href="<?php echo base_url('index.php/registration/step_one') ?>">Back</a> | Step 2 of 2</a></h6>
</div>

<script type="text/javascript">
     $('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 100 // Creates a dropdown of 15 years to control year
  	});
</script>