	<div class="secondary-header">
      <div class="secondary-header-inner">
        <div class="container custom-container-c">Edit Profile</div>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-content-add"></i>
        </a>
        <ul>
          <li><a class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
          <li><a class="btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add Wishlist"><i class="large mdi-action-favorite"></i></a></li>
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
                    <input name="name" value="<?php echo $user->nama;?>" id="" type="text" class="validate">
                    <label >Your Name</label>
                    <span class="error"><?php echo $nameErr;?></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <label>Faculty</label>
                    <select id="faculty" name="faculty" type="text" class="validate">
                      <option value="">Choose your faculty</option>
                          <option value="1" <?php if($user->fakultas == "1") echo "selected"; ?>>Faculty of Medicine</option>
                          <option value="2" <?php if($user->fakultas == "2") echo "selected"; ?>>Faculty of Dentistry</option>
                          <option value="3" <?php if($user->fakultas == "3") echo "selected"; ?>>Faculty of Mathematics and Natural Science</option>
                          <option value="4" <?php if($user->fakultas == "4") echo "selected"; ?>>Faculty of Engineering</option>
                          <option value="5" <?php if($user->fakultas == "5") echo "selected"; ?>>Faculty of Law</option>
                          <option value="6" <?php if($user->fakultas == "6") echo "selected"; ?>>Faculty of Economics and Business</option>
                          <option value="7" <?php if($user->fakultas == "7") echo "selected"; ?>>Faculty of Psychology</option>
                          <option value="8" <?php if($user->fakultas == "8") echo "selected"; ?>>Faculty of Humanities</option>
                          <option value="9" <?php if($user->fakultas == "9") echo "selected"; ?>>Faculty of Social and Political Science</option>
                          <option value="10" <?php if($user->fakultas == "10") echo "selected"; ?>>Faculty of Public Health</option>
                          <option value="11" <?php if($user->fakultas == "11") echo "selected"; ?>>Faculty of Computer Science</option>
                          <option value="12" <?php if($user->fakultas == "12") echo "selected"; ?>>Faculty of Nursing</option>
                          <option value="13" <?php if($user->fakultas == "13") echo "selected"; ?>>Faculty of Pharmacy</option>
                          <option value="14" <?php if($user->fakultas == "14") echo "selected"; ?>>Vocational Program</option>
                          <option value="15" <?php if($user->fakultas == "15") echo "selected"; ?>>Postgraduate Program</option>
                    </select>
                    <span class="error"><?php echo $facultyErr;?></span>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <label>Status</label>
                    <select name="status">
                      <option value="">Select your status</option>
                      <option value="1" <?php if($user->status == "1") echo "selected"; ?>>Student</option>
                      <option value="2" <?php if($user->status == "2") echo "selected"; ?>>Lecturer</option>
                      <option value="3" <?php if($user->status == "3") echo "selected"; ?>>Staff</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="domisili" value="<?php echo $user->domisili;?>" id="" type="text" class="validate">
                    <label>Location</label>
                  </div>
                </div>
              </div>
              <div class="col s12 m6 l6">
                <div class="row">
                  <div class="input-field col s12">
                    <input name="pic" value="<?php echo $user->foto;?>" id="" type="text" class="validate">
                    <label>Photo URL</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <label>Gender</label>
                    <select name="gender">
                      <option value="">Choose your gender</option>
                      <option value="M" <?php if($user->jenis_kelamin == "M") echo "selected"; ?>>Male</option>
                      <option value="F" <?php if($user->jenis_kelamin == "F") echo "selected"; ?>>Female</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <input id="birth" name="birth" type="date" class="datepicker validate" value="<?php echo $user->tanggal_lahir;?>">
                    <label for="birth">Birthday</label>
                    </select>
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
                    <input name="facebook" value="<?php echo $user->fb;?>" id="" type="text" class="validate">
                    <label>Facebook Link</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="twitter" value="<?php echo $user->twitter;?>" id="" type="text" class="validate">
                    <label>Twitter Username</label>
                  </div>
                </div>
                <div class="row">
                  <div name="line" class="input-field col s12">
                    <input value="<?php echo $user->line_id;?>" id="" type="text" class="validate">
                    <label>Line ID</label>
                  </div>
                </div>
              </div>
              <div class="col s12 m6 l6">
                <div class="row">
                  <div class="input-field col s12">
                    <input name="hp" value="<?php echo $user->hp;?>" id="" type="text" class="validate">
                    <label>Mobile Phone Number</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="bbm" value="<?php echo $user->bbm;?>" id="" type="text" class="validate">
                    <label>BBM Pin</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="whatsapp" value="<?php echo $user->wa;?>" id="" type="text" class="validate">
                    <label>Whatsapp Number</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="mail" value="<?php echo $user->email_kontak;?>" id="" type="text" class="validate">
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

