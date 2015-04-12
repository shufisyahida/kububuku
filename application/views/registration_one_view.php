
<div class="container">

    

    <br><h5>Registration</h5>
    <form method="post" action="<?php echo base_url('index.php/Registration/register') ?>">
        <div>
            <div class="card-panel z-depth-1">
                <div class="row" style="margin: 0px auto;">
                    <div class="input-field col m6 l8">
                        <input id="username" name="username" type="text" class="validate" value="<?php echo $username;?>">
                        <label for="username">Username</label>
                    </div>
                    <div class="col m6 l4">
                        <span class="error"><?php echo $usernameErr;?></span>
                    </div>
                    <div class="input-field col m6 l8">
                        <input id="email" name="email" type="email" class="validate" value="<?php echo $email;?>">
                        <label for="email">Email</label>
                    </div>
                    <div class="col s12 m6 l4">
                        <span class="error "><?php echo $emailErr;?></span>
                    </div>
                    <div class="input-field col m6 l8">
                        <input id="password" name="password" type="password" class="validate" value="<?php echo $password;?>">
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
                        <input id="name" name="name" type="text" class="validate" value="<?php echo $nama;?>">
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
                              <option value="14" <?php if($fakultas == "14") echo "selected"; ?>>Vocational Program</option>
                              <option value="15" <?php if($fakultas == "15") echo "selected"; ?>>Postgraduate Program</option>
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
                        <label for="domisili">Domisile</label>
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
                    <div class="col s12 m5 l5">
                        <div class="col s12 m12 l12">
                            <h5>Upload Your Profile Picture</h5>
                            <input type="file" name="userfile" name="userfile"><br><br>
                            <input type="submit" value="Submit" class="action-button shadow animate red"/>
                        </div>
                        <div class="col s12 m12 l12">

                        </div>
                    </div>
                    <div class="col s12 m7 l7">

                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="card-panel z-depth-1">
                <div class="row">
                    <div class="col s12 m6 l6">
                        <div class="input-field">

                            <input id="facebook" name="facebook" type="text" value="<?php echo $fb;?>">
                            <label for="facebook"><i class="fa fa-facebook-official fa-lg green-text"></i>   Facebook Name</label>
                        </div>

                        <div class="input-field">
                            <input id="twitter" name="twitter" type="text" value="<?php echo $twitter;?>">
                            <label for="twitter"><i class="fa fa-twitter fa-lg green-text"></i>   Twitter ID</label>
                        </div>

                        <div class="input-field">
                            <input id="hp" name="hp" type="text" value="<?php echo $hp;?>">
                            <label for="hp"><i class="fa fa-phone fa-lg green-text"></i>   Cellphone Number</label>
                        </div>

                        <div class="input-field">
                            <input id="bbm" name="bbm" type="text" value="<?php echo $bbm;?>">
                            <label for="bbm"><i class="fa fa-mobile fa-lg green-text"></i>   BBM Pin</label>
                        </div>
                    </div>
                    <div class="col s12 m6 l6">
                        <div class="input-field">
                            <input id="line" name="line" type="text" value="<?php echo $line_id;?>">
                            <label for="line"><i class="fa fa-mobile fa-lg green-text"></i>   Line ID</label>
                        </div>

                        <div class="input-field">
                            <input id="whatsapp" name="whatsapp" type="text" value="<?php echo $wa;?>">
                            <label for="whatsapp"><i class="fa fa-whatsapp fa-lg green-text"></i>   Whatsapp Number</label>
                        </div>

                        <div class="input-field">
                            <input id="mail" name="mail" type="text" value="<?php echo $email_kontak;?>">
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
</script>

<script type="text/javascript">
     $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100 // Creates a dropdown of 15 years to control year
    });
</script>
<script type="text/javascript">
function getSizes(im,obj)
    {
        var x_axis = obj.x1;
        var x2_axis = obj.x2;
        var y_axis = obj.y1;
        var y2_axis = obj.y2;
        var thumb_width = obj.width;
        var thumb_height = obj.height;
                var img =$("#image_name").val();
        if(thumb_width > 0)
            {
                if(confirm("Do you want to save image..!"))
                    {
                        $.post('<?php echo base_url();?>welcome/updatecropimage/',
                                                  {
                                                   x_axis : x_axis,
                                                   y_axis : y_axis,
                                                   thumb_width:thumb_width,
                                                   thumb_height:thumb_height,
                                                   img :img
                                                  },
                                                  function(data)
                          {
                                                     // alert(data);
                            $("#cropimage").show();
                            //$("#thumbs").html("");
                            $("#thumbs").html("<img src='<?php echo base_url();?>uploads/"+data+"' />");
                          });

                                   }
                         }
                         }

$(document).ready(function () {
    $('img#photo').imgAreaSelect({
        aspectRatio: '1:1',
        onSelectEnd: getSizes
    });
});
</script>
