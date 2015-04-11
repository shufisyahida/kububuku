	<div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a href="<?php echo base_url('index.php/search/homeBuku') ?>">Books</a></li>
          <li><a class="active" href="#">Users</a></li>
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

<div class="container custom-table">
  <div class="row">
    <div class="col s12 m4 l4">
      <div class="card-panel white z-depth-1 tabs-wrapper">
        <h6>Search Filter</h6>
        <form action="#">
          <p>
            <input class="with-gap" name="group2" type="radio" id="name-radio" />
            <label for="name-radio">Name</label>
          </p>

          <p>
            <input class="with-gap" name="group2" type="radio" id="location-radio" />
            <label for="location-radio">Location</label>
          </p>

          <p>
            <input class="with-gap" name="group2" type="radio" id="status-radio"  />
            <label for="status-radio">Status</label>
          </p>

          <p>
            <input class="with-gap" name="group2" type="radio" id="faculty-radio"  />
            <label for="faculty-radio">Faculty</label>
          </p>

          <div class="row">
            <div class="input-field col s12">
              <input id="book-searchkey" type="text" class="validate">
              <label>Keyword</label>
            </div>
            
            <div class="col s12">
                <a class="waves-effect waves-light green btn">Search</a>
            </div>
          </div>
          
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