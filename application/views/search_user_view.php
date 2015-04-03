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
    $('.tabs-wrapper .row').pushpin({ top: $('.tabs-wrapper').offset().top });
  });
</script>

<div class="container custom-table">
  <div class="row">
    <div class="col s12 m4 l3">
      <div class="card-panel white z-depth-1 tabs-wrapper">
        <h6>Search Filter</h6>
        <form action="#">
            <p>
              <input class="with-gap" name="title" type="radio" id="ti"  />
              <label for="ti">Name</label>
            </p>
            <p>
              <input class="with-gap" name="author" type="radio" id="au"  />
              <label for="au">Location</label>
            </p>
            <p>
              <input class="with-gap" name="genre" type="radio" id="ge"  />
              <label for="ge">Status</label>
            </p>
            <p>
              <input class="with-gap" name="faculty" type="radio" id="fa"  />
              <label for="fa">Faculty</label>
            </p>
            <div class="input-field col s12">
<<<<<<< HEAD
              <input id="nama" type="text" class="validate">
              <label>Name</label>
            </div>
            <div class="input-field col s12">
              <input id="domisili" type="text" class="validate">
              <label>Domisili</label>
            </div>
            <div class="input-field col s12">
              <label id="status" >Status</label>
              <select>
                <option value="" disabled selected>Search by</option>
                <option id="student" value="1">Student</option>
                <option id="lecturer" value="2">Lecturer</option>
                <option id="staff" value="3">Staff</option>
              </select>
            </div>
            <div class="input-field col s12">
              <label id="fakultas">Faculty</label>
              <select>
                <option value="" disabled selected>Search by</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
=======
              <input id="#" type="text" class="validate">
              <label>Keyword</label>
>>>>>>> 52d8168d9749a1d854547b5f0daf57920aafe9a5
            </div>
            <a class="waves-effect waves-light green btn">Search</a>
        </form>
      </div>
    </div>
    <div class="col s12 m8 l9">
      <?php foreach($resultSearchPengguna as $post){?>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="container custom-container-a">
            <img class="avatar-property circle" src="<?php echo $post->foto;?>">
          </div>
          <div class="green-text name-property"><?php echo $post->nama;?></div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <ul>
              <li><i class="green-text tiny mdi-maps-beenhere"></i> <?php echo $post->fakultas;?></li>
              <li><i class="green-text tiny mdi-social-person-outline"></i> <?php echo $post->status;?></li>
              <li><i class="green-text tiny mdi-social-person"></i> <?php echo $post->jenis_kelamin;?></li>
              <li><i class="green-text tiny mdi-action-event"></i> <?php echo $post->tanggal_lahir;?></li>
              <li><i class="green-text tiny mdi-maps-place"></i><?php echo $post->domisili;?></li>
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
      <?php } ?>
      
    </div>
  </div>
</div>