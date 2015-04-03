<div class="container">
    <br><h5>Registration</h5>
    <div class="card-panel-custom-reg z-depth-1">
        <div class="row">
            <!-- <form action="#" class="col s12" method="post"> -->
            <form method="post" action="<?php echo base_url('index.php/Registration/register') ?>" class="col s12">
                <div id="step-one" class="row">
                    <!-- <form action="#">
                        <div class="col s10 offset-s1 input-field file-field">
                            <input class="file-path validate" type="text"/>
                            <div class="btn green">
                                <span class="mdi-image-tag-faces"></span>
                                <input type="file" />
                            </div>
                        </div>
                    </form> -->
                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-action-face-unlock prefix"></i> -->
                        <input id="pic" name="pic" type="url">
                        <label for="pic">Photo URL</label>
                    </div>

                    <div class="col s4 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <select id="gender" name="gender" type="text" class="validate">
                            <option value="" disabled selected>Choose your gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                        <label for="gender">Gender</label>
                    </div>

                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-action-perm-contact-cal prefix"></i> -->
                        <input id="name" name="name" type="text" class="validate">
                        <label for="name">Name</label>
                    </div>

                    <div class="col s4 offset-s1">
                        <select id="faculty" name="faculty" type="text" class="validate">
                            <option value="" disabled selected>Pick your faculty</option>
                            <option value="1">Faculty of X</option>
                            <option value="2">Faculty of Y</option>
                            <option value="n">Faculty of Z</option>
                        </select>
                        <label for="faculty">Faculty</label>
                    </div>

                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-communication-email prefix"></i> -->
                        <input id="email" name="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>


                    <div class="col s4 offset-s1">
                        <select id="status" name="status" type="text" class="validate">
                            <option value="" disabled selected>Select your status</option>
                            <option value="1">Student</option>
                            <option value="2">Lecturer</option>
                            <option value="3">Staff</option>
                        </select>
                        <label for="status">Status</label>
                    </div>

                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="username" name="username" type="text" class="validate">
                        <label for="username">Username</label>
                    </div>

                    <div class="col s4 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="birth" name="birth" type="date" class="datepicker validate">
                        <label for="birth">Birthday</label>
                    </div>

                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="password" name="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>

                    <div class="input-field col s4 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="domisili" name="domisili" type="text" class="validate">
                        <label for="domisili">Domisili</label>
                    </div>

                    <!-- <div class="col s1 offset-s1">
                        <a id="next" class="btn waves-effect waves-light green right-align z-depth-1" href="<?php echo base_url('index.php/registration/step_two') ?>" role="button">NEXT</a>
                    </div> -->
                </div>

                <div id="step-two" class="row">
                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="facebook" name="facebook" type="text">
                        <label for="facebook">Facebook Name</label>
                    </div>

                    <div class="input-field col s4 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="twitter" name="twitter" type="text">
                        <label for="twitter">Twitter ID</label>
                    </div>

                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="hp" name="hp" type="text">
                        <label for="hp">Cellphone Number</label>
                    </div>

                    <div class="input-field col s4 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="bbm" name="bbm" type="text">
                        <label for="bbm">BBM Pin</label>
                    </div>

                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="line" name="line" type="text">
                        <label for="line">Line ID</label>
                    </div>

                    <div class="input-field col s4 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="whatsapp" name="whatsapp" type="text">
                        <label for="whatsapp">Whatsapp Number</label>
                    </div>

                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="mail" name="mail" type="text">
                        <label for="mail">Mail</label>
                    </div>

                    <div class="col s1 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <button id="regbtn" class="btn waves-effect waves-light green right-align z-depth-1" type="submit" name="action" method="post">REGISTER</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- <h6 class="custom-h6-login">Step 1 of 2</a></h6> -->
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
    });
</script>

<script type="text/javascript">
     $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100 // Creates a dropdown of 15 years to control year
    });
</script>