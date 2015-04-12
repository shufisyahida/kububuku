<div class="header_wrapper"> <!-- end div ini ada di masing-masing view of reqin, reqout, coll, dan wishlist-->
    <nav class="green">
      <div class="nav-container nav-wrapper">
        <a href="#" class="brand-logo"><img class="img-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a>
      </div>
    </nav>
</div>
<div class="container" style="margin-top:50px;">
    <br><h5>Registration - step 1/2</h5>
    <form method="post" action="<?php echo base_url('index.php/Registration/register') ?>">
        <div>
            <div class="card-panel z-depth-1">
                <div class="row" style="margin: 0px auto;">
                    <div class="input-field col m6 l8">
                        <input id="username" name="username" type="text" class="validate" value="<?php echo $username;?>" maxlength="20">
                        <label for="username">Username</label>
                    </div>
                    <div class="col m6 l4">
                        <span class="error"><?php echo $usernameErr;?></span>
                    </div>
                    <div class="input-field col m6 l8">
                        <input id="email" name="email" type="email" class="validate" value="<?php echo $email;?>" maxlength="30">
                        <label for="email">Email</label>
                    </div>
                    <div class="col s12 m6 l4">
                        <span class="error "><?php echo $emailErr;?></span>
                    </div>
                    <div class="input-field col m6 l8">
                        <input id="password" name="password" type="password" class="validate" value="<?php echo $password;?>" maxlength="20">
                        <label for="password">Password</label>
                    </div>
                    <div class="col s12 m6 l4">
                        <span class="error "><?php echo $passwordErr;?></span>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card-panel z-depth-1">
                <div class="row">
                    <div class="input-field col s12 m6 l8">
                        <input id="name" name="name" type="text" class="validate" value="<?php echo $nama;?>" maxlength="40">
                        <label for="name">Name</label>
                    </div>
                    <div class="col m6 l4">
                        <span class="error"><?php echo $nameErr;?></span>
                    </div>
                    <div class="col s12 m6 l8">
                        <label for="birth">Birthday</label>
                        <input id="birth" name="birth" type="date" class="datepicker validate" value="<?php echo $tanggal_lahir;?>">
                    </div>
                    <div class="col s12 m6 l4">
                        <span class="error"><?php echo $birthdayErr;?></span>
                    </div>
                    <div class="col s12 m6 l8">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" type="text" class="validate" >
                            <option value="">Choose your gender</option>
                            <option value="M" <?php if($jenis_kelamin == "M") echo "selected"; ?>>Male</option>
                            <option value="F" <?php if($jenis_kelamin == "F") echo "selected"; ?>>Female</option>
                        </select>
                    </div>
                    <div class="col m6 l4">
                        <span class="error"><?php echo $genderErr;?></span>
                    </div>
                    <div class="col s12 m6 l8">
                        <label for="faculty">Faculty</label>
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
                              <option value="50" <?php if($fakultas == "50") echo "selected"; ?>>Vocational Program</option>
                              <option value="51" <?php if($fakultas == "51") echo "selected"; ?>>Postgraduate Program</option>
                        </select>
                    </div>
                    <div class="col m6 l4">
                        <span class="error"><?php echo $facultyErr;?></span>
                    </div>
                    <div class="col s12 m6 l8">
                        <label for="status">Status</label>
                        <select id="status" name="status" type="text" class="validate" value="<?php echo $status;?>">
                            <option value="">Select your status</option>
                            <option value="1" <?php if($status == "1") echo "selected"; ?>>Student</option>
                            <option value="2" <?php if($status == "2") echo "selected"; ?>>Lecturer</option>
                            <option value="3" <?php if($status == "3") echo "selected"; ?>>Staff</option>
                        </select>
                    </div>
                    <div class="col m6 l4">
                        <span class="error"><?php echo $statusErr;?></span>
                    </div>
                    <div class="input-field col s12 m6 l8">
                        <input id="domisili" name="domisili" type="text" class="validate" value="<?php echo $domisili;?>">
                        <label for="domisili">Location</label>
                    </div>
                    <div class="col m6 l4">
                        <span class="error"><?php echo $domisiliErr;?></span>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card-panel z-depth-1">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <div class="input-field">

                            <input id="facebook" name="facebook" type="text" value="<?php echo $fb;?>" maxlength="40"> 
                            <label for="facebook"><i class="fa fa-facebook-official fa-lg green-text"></i>   Facebook Name</label>
                        </div>

                        <div class="input-field">
                            <input id="twitter" name="twitter" type="text" value="<?php echo $twitter;?>" maxlength="30">
                            <label for="twitter"><i class="fa fa-twitter fa-lg green-text"></i>   Twitter ID</label>
                        </div>

                        <div class="input-field">
                            <input id="hp" name="hp" type="text" value="<?php echo $hp;?>" maxlength="20">
                            <label for="hp"><i class="fa fa-phone fa-lg green-text"></i>   Cellphone Number</label>
                        </div>

                        <div class="input-field">
                            <input id="bbm" name="bbm" type="text" value="<?php echo $bbm;?>" maxlength="10">
                            <label for="bbm"><i class="fa fa-mobile fa-lg green-text"></i>   BBM Pin</label>
                        </div>
                    </div>
                    <div class="col s12 m6 l6">
                        <div class="input-field">
                            <input id="line" name="line" type="text" value="<?php echo $line_id;?>" maxlength="30">
                            <label for="line"><i class="fa fa-mobile fa-lg green-text"></i>   Line ID</label>
                        </div>

                        <div class="input-field">
                            <input id="whatsapp" name="whatsapp" type="text" value="<?php echo $wa;?>" maxlength="20">
                            <label for="whatsapp"><i class="fa fa-whatsapp fa-lg green-text"></i>   Whatsapp Number</label>
                        </div>

                        <div class="input-field">
                            <input id="mail" name="mail" type="text" value="<?php echo $email_kontak;?>" maxlength="30">
                            <label for="mail"><i class="fa fa-envelope fa-lg green-text"></i>   Mail</label>
                        </div> 
                        
                        <div class="col right">
                            <button id="regbtn" class="btn waves-effect waves-light green right-align z-depth-1" type="submit" name="action" method="post">REGISTER</button>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
    });

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100 // Creates a dropdown of 15 years to control year
    });
</script>

