  <div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a href="<?php echo base_url('index.php/Edit_Profile/')?>" class="active" href="">Edit Profile</a></li>
          <li><a href="<?php echo base_url('index.php/Edit_Profile/editPicture')?>">Edit Profile Picture</a></li>
        </ul>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-content-add"></i>
        </a>
        <ul>
          <li><a href="<?php echo base_url('index.php/search/homeBuku') ?>" class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
          <li><a class="btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add Wishlist"><i class="large mdi-action-favorite"></i></a></li>
        </ul>
      </div>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->

<div class="container custom-table">
    <form method="post" action="<?php echo base_url('index.php/Edit_Profile/edit') ?>" >
      <div class="row">
        <h4>Basic Information</h4>
        <div class="card-panel z-depth-1">
          <div class="row">
            <div class="input-field col s12 m6 l8">
              <input name="name" value="<?php echo $nama;?>" id="" type="text" class="validate" maxlength="40">
              <label >Your Name</label>
            </div>
            <div class="col s12 m6 l4">
              <span class="error"><?php echo $nameErr;?></span>
            </div>
            <div class="col s12 m6 l8">
              <label>Gender</label>
              <select name="gender">
                <option value="" <?php if($jenis_kelamin == "") echo "selected"; ?>>Choose your gender</option>
                <option value="M" <?php if($jenis_kelamin == "M") echo "selected"; ?>>Male</option>
                <option value="F" <?php if($jenis_kelamin == "F") echo "selected"; ?>>Female</option>
              </select>
            </div>
            <div class="col s12 m6 l4">
              <span class="error"><?php echo $genderErr;?></span>
            </div>
            <div class="col s12 m6 l8">
                <label for="birth">Birthday</label>
                <input id="birth" name="birth" type="date" class="datepicker validate" value="<?php echo $tanggal_lahir;?>">
            </div>
            <div class="col s12 m6 l4">
              <span class="error"><?php echo $birthdayErr;?></span>
            </div>
            <div class="col s12 m6 l8">
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
            </div>
            <div class="col s12 m6 l4">
              <span class="error"><?php echo $facultyErr;?></span>
            </div>
            <div class="col s12 m6 l8">
              <label>Status</label>
              <select name="status">
                <option value="" <?php if($status == "") echo "selected"; ?>>Select your status</option>
                <option value="1" <?php if($status == "1") echo "selected"; ?>>Student</option>
                <option value="2" <?php if($status == "2") echo "selected"; ?>>Lecturer</option>
                <option value="3" <?php if($status == "3") echo "selected"; ?>>Staff</option>
              </select>
            </div>
            <div class="col s12 m6 l4">
              <span class="error"><?php echo $statusErr;?></span>
            </div>
            <div class="input-field col s12 m6 l8">
              <input name="domisili" value="<?php echo $domisili;?>" id="" type="text" class="validate" maxlength="100">
              <label>Location</label>
            </div>
            <div class="col s12 m6 l4">
              <span class="error"><?php echo $domisiliErr;?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <h4>Contacts</h4>
        <div class="card-panel">
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
            </div>
        </div>
        </div> 
      </div>
      <div class="row right">
        <button class="btn green waves-effect waves-light" type="submit" name="action" method="post">Submit</button>
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
