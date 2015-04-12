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
        <h6>Search</h6>
       <form method="post" action="<?php echo base_url('index.php/search/cariPengguna') ?>">
          
          

          <div class="row">
            <div class="col s12 m12 l12">
                <select id="kategori" name="kategori" type="text" class="validate">
                    <option value="" disabled selected>Choose Category</option>
                    <option value="nama">Name</option>
                    <option value="domisili">Location</option>
                     <option value="status">Status</option>
                    <option value="fakultas">Faculty</option>
                </select>
            </div>
            <div class="input-field col s12 m12 l12">
              <input id="book-searchkey" type="text" class="validate" name="keyword">
              <label>Keyword</label>
            </div>
            <div class="col s12 m12 l12">
              <span class="error"><?php ?></span>
            </div>
            
            <div class="col s12 m12 l12">
                <button class="btn custom-btn waves-effect waves-light green right-align z-depth-1" type="submit" name="action" method="post">Search</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
    <div class="col s12 m8 l8">
      <div class="col s12 m12 l12">
        <span><?php ?></span>
      </div>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
    });
</script>