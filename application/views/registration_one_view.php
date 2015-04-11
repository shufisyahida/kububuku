<div class="container">

    

    <br><h5>Registration</h5>
    <div class="card-panel-custom-reg z-depth-1">
        <div class="row">
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
                        <input id="pic" name="pic" type="url" value="<?php echo $foto;?>">
                        <label for="pic">Photo URL</label>
                    </div>

                    <div class="col s4 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <select id="gender" name="gender" type="text" class="validate" >
                            <option value="">Choose your gender</option>
                            <option value="M" <?php if($jenis_kelamin == "M") echo "selected"; ?>>Male</option>
                            <option value="F" <?php if($jenis_kelamin == "F") echo "selected"; ?>>Female</option>
                        </select>

                        <label for="gender">Gender</label>
                        <span class="error"><?php echo $genderErr;?></span>
                    </div>

                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-action-perm-contact-cal prefix"></i> -->
                        <input id="name" name="name" type="text" class="validate" value="<?php echo $nama;?>">
                        <label for="name">Name</label>
                        <span class="error"><?php echo $nameErr;?></span>
                    </div>

                    <div class="col s4 offset-s1">
                        <select id="faculty" name="faculty" type="text" class="validate" >
                              <option value="">Choose your faculty</option>
                              <option value="1" <?php if($fakultas == "1") echo "selected"; ?>>Faculty of Medicine</option>
                              <option value="2" <?php if($fakultas == "2") echo "selected"; ?>>Faculty of Dentistry</option>
                              <option value="3" <?php if($fakultas == "3") echo "selected"; ?>>Faculty of Mathematics and Natural Science</option>
                              <option value="4" <?php if($fakultas == "4") echo "selected"; ?>>Faculty of Engineering</option>
                              <option value="5" <?php if($fakultas == "5") echo "selected"; ?>>Faculty of Law</option>
                              <option value="6" <?php if($fakultas == "6") echo "selected"; ?>>Faculty of Economics and Business</option>
                              <option value="7" <?php if($fakultas == "7") echo "selected"; ?>>Faculty of Psychology</option>
                              <option value="8" <?php if($fakultas == "8") echo "selected"; ?>>Faculty of Humanities</option>
                              <option value="9" <?php if($fakultas == "9") echo "selected"; ?>>Faculty of Social and Political Science</option>
                              <option value="10" <?php if($fakultas == "10") echo "selected"; ?>>Faculty of Public Health</option>
                              <option value="11" <?php if($fakultas == "11") echo "selected"; ?>>Faculty of Computer Science</option>
                              <option value="12" <?php if($fakultas == "12") echo "selected"; ?>>Faculty of Nursing</option>
                              <option value="13" <?php if($fakultas == "13") echo "selected"; ?>>Faculty of Pharmacy</option>
                              <option value="14" <?php if($fakultas == "14") echo "selected"; ?>>Vocational Program</option>
                              <option value="15" <?php if($fakultas == "15") echo "selected"; ?>>Postgraduate Program</option>
                        </select>
                        <label for="faculty">Faculty</label>
                        <span class="error"><?php echo $facultyErr;?></span>
                    </div>

                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-communication-email prefix"></i> -->
                        <input id="email" name="email" type="email" class="validate" value="<?php echo $email;?>">
                        <label for="email">Email</label>
                        <span class="error"><?php echo $emailErr;?></span>
                    </div>


                    <div class="col s4 offset-s1">
                        <select id="status" name="status" type="text" class="validate" value="<?php echo $status;?>">
                            <option value="">Select your status</option>
                            <option value="1" <?php if($status == "1") echo "selected"; ?>>Student</option>
                            <option value="2" <?php if($status == "2") echo "selected"; ?>>Lecturer</option>
                            <option value="3" <?php if($status == "3") echo "selected"; ?>>Staff</option>
                        </select>
                        <label for="status">Status</label>
                        <span class="error"><?php echo $statusErr;?></span>
                    </div>

                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="username" name="username" type="text" class="validate" value="<?php echo $username;?>">
                        <label for="username">Username</label>
                        <span class="error"><?php echo $usernameErr;?></span>
                    </div>

                    <div class="col s4 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="birth" name="birth" type="date" class="datepicker validate" value="<?php echo $tanggal_lahir;?>">
                        <label for="birth">Birthday</label>
                        <span class="error"><?php echo $birthdayErr;?></span>
                    </div>

                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="password" name="password" type="password" class="validate" value="<?php echo $password;?>">
                        <label for="password">Password</label>
                        <span class="error"><?php echo $passwordErr;?></span>
                    </div>

                    <div class="input-field col s4 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="domisili" name="domisili" type="text" class="validate" value="<?php echo $domisili;?>">
                        <label for="domisili">Domisili</label>
                        <span class="error"><?php echo $domisiliErr;?></span>
                    </div>

                    <!-- <div class="col s1 offset-s1">
                        <a id="next" class="btn waves-effect waves-light green right-align z-depth-1" href="<?php echo base_url('index.php/registration/step_two') ?>" role="button">NEXT</a>
                    </div> -->
                </div>

                <div id="step-two" class="row">
                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="facebook" name="facebook" type="text" value="<?php echo $fb;?>">
                        <label for="facebook">Facebook Name</label>
                    </div>

                    <div class="input-field col s4 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="twitter" name="twitter" type="text" value="<?php echo $twitter;?>">
                        <label for="twitter">Twitter ID</label>
                    </div>

                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="hp" name="hp" type="text" value="<?php echo $hp;?>">
                        <label for="hp">Cellphone Number</label>
                    </div>

                    <div class="input-field col s4 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="bbm" name="bbm" type="text" value="<?php echo $bbm;?>">
                        <label for="bbm">BBM Pin</label>
                    </div>

                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="line" name="line" type="text" value="<?php echo $line_id;?>">
                        <label for="line">Line ID</label>
                    </div>

                    <div class="input-field col s4 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="whatsapp" name="whatsapp" type="text" value="<?php echo $wa;?>">
                        <label for="whatsapp">Whatsapp Number</label>
                    </div>

                    <div class="input-field col s5 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <input id="mail" name="mail" type="text" value="<?php echo $email_kontak;?>">
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