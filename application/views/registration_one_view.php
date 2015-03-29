<div class="container">
    <br><h5>Registration</h5>
    <div class="card-panel-custom-reg z-depth-1">
        <div class="row">
            <form class="col s6">
				<div class="row">
					<div class="col s10 offset-s1 input-field file-field">
						<input class="file-path validate" type="text"/>
						<button class="btn green">
							<span class="mdi-image-tag-faces"></span>
							<input type="file" />
						</button>
					</div>

                    <div class="input-field col s10 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="name" type="text" class="validate">
                        <label for="name">Name</label>
                    </div>

                    <div class="input-field col s10 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="email" type="text" class="validate">
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field col s10 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="username" type="text" class="validate">
                        <label for="username">Username</label>
                    </div>

                    <div class="input-field col s10 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="password" type="text" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
            </form>
            <form class="col s6">
                <div class="row">
                    <div class="col s5 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <label for="gender"></label>
						<select id="gender" type="text" class="browser-default validate">
							<option value="" disabled selected>Gender</option>
							<option value="M">Male</option>
							<option value="F">Female</option>
						</select>
                    </div>

                    <div class="col s4 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="birth" type="date" class="datepicker validate">
                        <label for="birth">Birthday</label>
                    </div>

                    <div class="col s10 offset-s1">
                        <label for="status"></label>
						<select id="status" type="text" class="browser-default validate">
							<option value="" disabled selected>Status</option>
							<option value="1">Student</option>
							<option value="2">Lecturer</option>
							<option value="3">Staff</option>
						</select>
                    </div>

                    <div class="col s10 offset-s1">
                        <label for="faculty"></label>
						<select id="faculty" type="text" class="browser-default validate">
							<option value="" disabled selected>Faculty</option>
							<option value="1">Faculty of X</option>
							<option value="2">Faculty of Y</option>
							<option value="n">Faculty of Z</option>
						</select>
                    </div>

                    <div class="col s12 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <!-- <button id="regbtn" class="btn waves-effect waves-light green right-align z-depth-1" type="submit" name="action" href="<?php echo base_url('index.php/registration/step_two') ?>">NEXT</button> -->
                        <a id="next" class="btn waves-effect waves-light green right-align z-depth-1" href="<?php echo base_url('index.php/registration/step_two') ?>" role="button">NEXT</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <h6 class="custom-h6-login">Step 1 of 2</a></h6>
</div>

<script type="text/javascript">
     $('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 100 // Creates a dropdown of 15 years to control year
  	});
</script>