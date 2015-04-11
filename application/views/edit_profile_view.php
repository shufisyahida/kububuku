	<div class="secondary-header">
      <div class="secondary-header-inner">
        <div class="container custom-container-c">Edit Profile</div>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-editor-mode-edit"></i>
        </a>
        <ul>
          <li><a class="btn-floating red"><i class="large mdi-editor-insert-chart"></i></a></li>
          <li><a class="btn-floating yellow darken-1"><i class="large mdi-editor-format-quote"></i></a></li>
          <li><a class="btn-floating green"><i class="large mdi-editor-publish"></i></a></li>
          <li><a class="btn-floating blue"><i class="large mdi-editor-attach-file"></i></a></li>
        </ul>
      </div>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->

<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>

<div class="container custom-table">
    <form method="post" action="<?php echo base_url('index.php/Edit_Profile/edit') ?>" >
      <div class="row">
        <h4>Basic Information</h4>
        <div class="card-panel-custom-reg z-depth-1">
          <div class="custom-container-d">
            <div class="row">
              <div class="col s12 m6 l6">
                <div class="row">
                  <div class="input-field col s12">
                    <input name="name" value="<?php echo $nama;?>" id="" type="text" class="validate" maxlength="40">
                    <label >Your Name</label>
                    <span class="error"><?php echo $nameErr;?></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <label>Faculty</label>
                    <select id="faculty" name="faculty" type="text" class="validate">
                      <option value="" <?php if($fakultas == "") echo "selected"; ?>>Choose your faculty</option>
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
                    <span class="error"><?php echo $facultyErr;?></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <label>Status</label>
                    <select name="status">
                      <option value="" <?php if($status == "") echo "selected"; ?>>Select your status</option>
                      <option value="1" <?php if($status == "1") echo "selected"; ?>>Student</option>
                      <option value="2" <?php if($status == "2") echo "selected"; ?>>Lecturer</option>
                      <option value="3" <?php if($status == "3") echo "selected"; ?>>Staff</option>
                    </select>
                    <span class="error"><?php echo $statusErr;?></span>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="domisili" value="<?php echo $domisili;?>" id="" type="text" class="validate" maxlength="100">
                    <label>Location</label>
                    <span class="error"><?php echo $domisiliErr;?></span>
                  </div>
                </div>
              </div>
              <div class="col s12 m6 l6">
                <div class="row">
                  <div class="input-field col s12">
                    <input name="pic" value="<?php echo $foto;?>" id="" type="text" class="validate">
                    <label>Photo URL</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <label>Gender</label>
                    <select name="gender">
                      <option value="" <?php if($jenis_kelamin == "") echo "selected"; ?>>Choose your gender</option>
                      <option value="M" <?php if($jenis_kelamin == "M") echo "selected"; ?>>Male</option>
                      <option value="F" <?php if($jenis_kelamin == "F") echo "selected"; ?>>Female</option>
                    </select>
                    <span class="error"><?php echo $genderErr;?></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <input id="birth" name="birth" type="date" class="datepicker validate" value="<?php echo $tanggal_lahir;?>">
                    <label for="birth">Birthday</label>
                    </select>
                    <span class="error"><?php echo $birthdayErr;?></span>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
      <div class="row">
        <h4>Contacts</h4>
        <div class="card-panel-custom-reg z-depth-1">
          <div class="custom-container-d">
            <div class="row">
              <div class="col s12 m6 l6">
                <div class="row">
                  <div class="input-field col s12">
                    <input name="facebook" value="<?php echo $fb;?>" id="" type="text" class="validate" maxlength="40">
                    <label>Facebook Link</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="twitter" value="<?php echo $twitter;?>" id="" type="text" class="validate" maxlength="30">
                    <label>Twitter Username</label>
                  </div>
                </div>
                <div class="row">
                  <div name="line" class="input-field col s12">
                    <input value="<?php echo $line_id;?>" id="" type="text" class="validate" maxlength="30">
                    <label>Line ID</label>
                  </div>
                </div>
              </div>
              <div class="col s12 m6 l6">
                <div class="row">
                  <div class="input-field col s12">
                    <input name="hp" value="<?php echo $hp;?>" id="" type="text" class="validate" maxlength="20">
                    <label>Mobile Phone Number</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="bbm" value="<?php echo $bbm;?>" id="" type="text" class="validate" maxlength="10">
                    <label>BBM Pin</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="whatsapp" value="<?php echo $wa;?>" id="" type="text" class="validate" maxlength="20">
                    <label>Whatsapp Number</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="mail" value="<?php echo $email_kontak;?>" id="" type="email" class="validate" maxlength="30">
                    <label>Email</label>
                  </div>
                </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
        <div class="row">
        <button class="btn green waves-effect waves-light" type="submit" name="action" method="post">Submit</button>
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
