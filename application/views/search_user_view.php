	<div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a href="#">Books</a></li>
          <li><a class="active" href="#">Users</a></li>
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
  <div class="row">
    <div class="col s12 m4 l3">
      <div class="card-panel white z-depth-1">
        <h6>Search Filter</h6>
        <form>
          <div class="row">
            <div class="input-field col s12">
              <input id="#" type="text" class="validate">
              <label>Name</label>
            </div>
            <div class="input-field col s12">
              <input id="#" type="text" class="validate">
              <label>Domisili</label>
            </div>
            <div class="input-field col s12">
              <label>Status</label>
              <select>
                <option value="" disabled selected>Search by</option>
                <option value="1">Student</option>
                <option value="2">Lecturer</option>
                <option value="3">Staff</option>
              </select>
            </div>
            <div class="input-field col s12">
              <label>Faculty</label>
              <select>
                <option value="" disabled selected>Search by</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div>
            <a class="waves-effect waves-light green btn">Search</a>
          </div>
        </form>
      </div>
    </div>
    <div class="col s12 m8 l9">
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="container custom-container-a">
            <img class="avatar-property circle" src="<?php echo base_url('assets/img/fallon.jpg') ?>">
          </div>
          <div class="green-text name-property">Fallon Candra</div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <ul>
              <li><i class="green-text tiny mdi-maps-beenhere"></i> Computer Science</li>
              <li><i class="green-text tiny mdi-social-person-outline"></i> Student</li>
              <li><i class="green-text tiny mdi-social-person"></i> Male</li>
              <li><i class="green-text tiny mdi-action-event"></i> May 3rd, 1994</li>
              <li><i class="green-text tiny mdi-maps-place"></i> Depok</li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b">
            rating stars here
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <div class="row">
              <div class="col s6 m6 l6 center">
                <h5 class="green-text">16</h5>books
              </div>
              <div class="col s6 m6 l6 center">
                <h5 class="green-text">29</h5>wishlist
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="container custom-container-a">
            <img class="avatar-property circle" src="<?php echo base_url('assets/img/fallon.jpg') ?>">
          </div>
          <div class="green-text name-property">Fallon Candra</div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <ul>
              <li><i class="green-text tiny mdi-maps-beenhere"></i> Computer Science</li>
              <li><i class="green-text tiny mdi-social-person-outline"></i> Student</li>
              <li><i class="green-text tiny mdi-social-person"></i> Male</li>
              <li><i class="green-text tiny mdi-action-event"></i> May 3rd, 1994</li>
              <li><i class="green-text tiny mdi-maps-place"></i> Depok</li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b">
            rating stars here
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <div class="row">
              <div class="col s6 m6 l6 center">
                <h5 class="green-text">16</h5>books
              </div>
              <div class="col s6 m6 l6 center">
                <h5 class="green-text">29</h5>wishlist
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="container custom-container-a">
            <img class="avatar-property circle" src="<?php echo base_url('assets/img/fallon.jpg') ?>">
          </div>
          <div class="green-text name-property">Fallon Candra</div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <ul>
              <li><i class="green-text tiny mdi-maps-beenhere"></i> Computer Science</li>
              <li><i class="green-text tiny mdi-social-person-outline"></i> Student</li>
              <li><i class="green-text tiny mdi-social-person"></i> Male</li>
              <li><i class="green-text tiny mdi-action-event"></i> May 3rd, 1994</li>
              <li><i class="green-text tiny mdi-maps-place"></i> Depok</li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b">
            rating stars here
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <div class="row">
              <div class="col s6 m6 l6 center">
                <h5 class="green-text">16</h5>books
              </div>
              <div class="col s6 m6 l6 center">
                <h5 class="green-text">29</h5>wishlist
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="container custom-container-a">
            <img class="avatar-property circle" src="<?php echo base_url('assets/img/fallon.jpg') ?>">
          </div>
          <div class="green-text name-property">Fallon Candra</div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <ul>
              <li><i class="green-text tiny mdi-maps-beenhere"></i> Computer Science</li>
              <li><i class="green-text tiny mdi-social-person-outline"></i> Student</li>
              <li><i class="green-text tiny mdi-social-person"></i> Male</li>
              <li><i class="green-text tiny mdi-action-event"></i> May 3rd, 1994</li>
              <li><i class="green-text tiny mdi-maps-place"></i> Depok</li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b">
            rating stars here
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <div class="row">
              <div class="col s6 m6 l6 center">
                <h5 class="green-text">16</h5>books
              </div>
              <div class="col s6 m6 l6 center">
                <h5 class="green-text">29</h5>wishlist
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="container custom-container-a">
            <img class="avatar-property circle" src="<?php echo base_url('assets/img/fallon.jpg') ?>">
          </div>
          <div class="green-text name-property">Fallon Candra</div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <ul>
              <li><i class="green-text tiny mdi-maps-beenhere"></i> Computer Science</li>
              <li><i class="green-text tiny mdi-social-person-outline"></i> Student</li>
              <li><i class="green-text tiny mdi-social-person"></i> Male</li>
              <li><i class="green-text tiny mdi-action-event"></i> May 3rd, 1994</li>
              <li><i class="green-text tiny mdi-maps-place"></i> Depok</li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b">
            rating stars here
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <div class="row">
              <div class="col s6 m6 l6 center">
                <h5 class="green-text">16</h5>books
              </div>
              <div class="col s6 m6 l6 center">
                <h5 class="green-text">29</h5>wishlist
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="container custom-container-a">
            <img class="avatar-property circle" src="<?php echo base_url('assets/img/fallon.jpg') ?>">
          </div>
          <div class="green-text name-property">Fallon Candra</div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <ul>
              <li><i class="green-text tiny mdi-maps-beenhere"></i> Computer Science</li>
              <li><i class="green-text tiny mdi-social-person-outline"></i> Student</li>
              <li><i class="green-text tiny mdi-social-person"></i> Male</li>
              <li><i class="green-text tiny mdi-action-event"></i> May 3rd, 1994</li>
              <li><i class="green-text tiny mdi-maps-place"></i> Depok</li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b">
            rating stars here
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <div class="row">
              <div class="col s6 m6 l6 center">
                <h5 class="green-text">16</h5>books
              </div>
              <div class="col s6 m6 l6 center">
                <h5 class="green-text">29</h5>wishlist
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="container custom-container-a">
            <img class="avatar-property circle" src="<?php echo base_url('assets/img/fallon.jpg') ?>">
          </div>
          <div class="green-text name-property">Fallon Candra</div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <ul>
              <li><i class="green-text tiny mdi-maps-beenhere"></i> Computer Science</li>
              <li><i class="green-text tiny mdi-social-person-outline"></i> Student</li>
              <li><i class="green-text tiny mdi-social-person"></i> Male</li>
              <li><i class="green-text tiny mdi-action-event"></i> May 3rd, 1994</li>
              <li><i class="green-text tiny mdi-maps-place"></i> Depok</li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b">
            rating stars here
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <div class="row">
              <div class="col s6 m6 l6 center">
                <h5 class="green-text">16</h5>books
              </div>
              <div class="col s6 m6 l6 center">
                <h5 class="green-text">29</h5>wishlist
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>