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
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <label>Faculty</label>
                    <select name="faculty">
                      <option value="" disabled selected>Choose your faculty</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <label>Status</label>
                    <select name="status">
                      <option value="" disabled selected>Choose your status</option>
                      <option value="1">Student</option>
                      <option value="2">Lecturer</option>
                      <option value="3">Staff</option>
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
                      <option value="" disabled selected>Choose your gender</option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <input id="birth" name="birth" type="date" class="datepicker validate">
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