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
    <form action="#">
      <div class="row">
        <h4>Basic Information</h4>
        <div class="card-panel-custom-reg z-depth-1">
          <div class="custom-container-d">
            <div class="row">
              <div class="col s12 m6 l6">
                <div class="row">
                  <div class="input-field col s12">
                    <input id="" type="text" class="validate">
                    <label>Your Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <label>Faculty</label>
                    <select>
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
                    <select>
                      <option value="" disabled selected>Choose your status</option>
                      <option value="1">Student</option>
                      <option value="2">Lecturer</option>
                      <option value="3">Staff</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="" type="text" class="validate">
                    <label>Location</label>
                  </div>
                </div>
              </div>
              <div class="col s12 m6 l6">
                <div class="row">
                  <div class="input-field col s12">
                    <input id="" type="text" class="validate">
                    <label>Photo URL</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <label>Gender</label>
                    <select>
                      <option value="" disabled selected>Choose your gender</option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
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
                    <input id="" type="text" class="validate">
                    <label>Facebook Link</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="" type="text" class="validate">
                    <label>Twitter Username</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="" type="text" class="validate">
                    <label>Line ID</label>
                  </div>
                </div>
              </div>
              <div class="col s12 m6 l6">
                <div class="row">
                  <div class="input-field col s12">
                    <input id="" type="text" class="validate">
                    <label>Mobile Phone Number</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="" type="text" class="validate">
                    <label>BBM Pin</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="" type="text" class="validate">
                    <label>Whatsapp Number</label>
                  </div>
                </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
        <div class="row">
        <button class="btn green waves-effect waves-light" type="submit" name="action">Submit</button>
        </div>
      </div>
    </form>
</div>