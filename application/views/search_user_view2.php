  <div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
        <li><a href="<?php echo base_url('index.php/search/homeBuku') ?>">Books</a></li>
          <li><a class="active" href="<?php echo base_url('index.php/search/homeUser')?>">Users</a></li>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-content-add"></i>
        </a>
        <ul>
<<<<<<< HEAD
          <li><a class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
=======
          <li><a href="<?php echo base_url('index.php/search/homeBuku') ?>" class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
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
<<<<<<< HEAD
                    <option value="domisili">Location</option>
=======
                    <option value="domisili">Domicile</option>
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
                     <option value="status">Status</option>
                    <option value="fakultas">Faculty</option>
                </select>
            </div>
            <div class="input-field col s12 m12 l12">
              <keyword>
              <input id="book-searchkey" type="text" class="validate" name="keyword">
              <label>Keyword</label>
            </keyword>
               <location>
              <select id="location" name="location" type="text" class="validate">
<<<<<<< HEAD
                    <option value="" disabled selected>Choose Location</option>
                    <option value="jakarta">Jakarta</option>
                    <option value="bogor">Bogor</option>
                     <option value="depok">Depok</option>
                    <option value="tangerang">Tangerang</option>
                    <option value="bekasi">Bekasi</option>
=======
                    <option value="" disabled selected>Choose Domicile</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bogor">Bogor</option>
                     <option value="Depok">Depok</option>
                    <option value="Tangerang">Tangerang</option>
                    <option value="Bekasi">Bekasi</option>
                    <option value="Other">Other</option>                  
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
                </select>
              </location>
              <status>
                <select id="status" name="status" type="text" class="validate">
                    <option value="" disabled selected>Choose Status</option>
<<<<<<< HEAD
                    <option value="1">Mahasiswa</option>
                    <option value="2">Dosen</option>
                     <option value="3">Staff</option>
=======
                    <option value="1">Student</option>
                    <option value="2">Lecturer</option>
                     <option value="3">Staff</option>
                     <option value="4">Alumnus</option>
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
                </select>
              </status>
              <faculty>
                  <select id="faculty" name="faculty" type="text" class="validate">
                    <option value="" disabled selected>Choose Faculty</option>
                    <option value="1">Faculty of Medicine</option>
                    <option value="2">Faculty of Dentistry</option>
                     <option value="3">Faculty of Mathematics and Natural Science</option>
                      <option value="4">Faculty of Engineering</option>
                    <option value="5">Faculty of Law</option>
                     <option value="6">Faculty of Economics and Business</option>
                      <option value="7">Faculty of Psychology</option>
                    <option value="8">Faculty of Humanities</option>
                     <option value="9">Faculty of Social and Politics Science</option>
                      <option value="10">Faculty of Public Health</option>
                    <option value="11">Faculty of Computer Science</option>
                     <option value="12">Faculty of Nursing</option>
                     <option value="13">Faculty of Pharmacy</option>
                    <option value="50">Vocational Program</option>
                     <option value="51">Postgraduate Program</option>
<<<<<<< HEAD
=======
                     <option value="52">Non Faculty</option>
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
                </select>
              </faculty>
            </div>
            <div class="col s12 m12 l12">
              <?php if($notMatch!=null){?>
              <span class="error"><?php echo $notMatch ?></span>
                 <?php } ?>
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

      <?php if($notFound!=null){?>
<<<<<<< HEAD
        <span><?php echo $notFound ?></span>
=======
        <span><?php echo $notFound ?>.</span>
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
          <?php } ?>
      </div>
      <?php if($resultSearchPengguna!=null){?>
      <?php foreach($resultSearchPengguna as $post){?>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="container custom-container-a">
             <?php echo
<<<<<<< HEAD
             '<a href = "'.base_url()."index.php/Profile/profile".$post->username.'" target="_blank">
=======
             '<a href = "'.base_url()."index.php/Profile/profile/".$post->username.'">
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
              <img class="avatar-property circle responsive-img" src="'.$post->foto.'">
            </a>'
            ?>
          
          </div>
          <div class="green-text name-property"><?php echo $post->nama;?></div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <ul>
<<<<<<< HEAD
              <li><i class="green-text tiny mdi-maps-beenhere"></i> <?php echo $post->fakultas;?></li>
              <li><i class="green-text tiny mdi-social-person-outline"></i> <?php echo $post->status;?></li>
              <li><i class="green-text tiny mdi-social-person"></i> <?php echo $post->jenis_kelamin;?></li>
              <li><i class="green-text tiny mdi-action-event"></i> <?php echo $post->tanggal_lahir;?></li>
              <li><i class="green-text tiny mdi-maps-place"></i><?php echo $post->domisili;?></li>
=======
              <li class = "truncate"><i class="green-text tiny mdi-maps-beenhere"></i> <?php echo $post->fakultas;?></li>
              <li class = "truncate"><i class="green-text tiny mdi-social-person-outline truncate"></i> <?php echo $post->status;?></li>
              <li class = "truncate"><i class="green-text tiny mdi-social-person"></i> <?php echo $post->jenis_kelamin;?></li>
              <li class = "truncate"><i class="green-text tiny mdi-action-event"></i> <?php echo $post->tanggal_lahir;?></li>
              <li class = "truncate"><i class="green-text tiny mdi-maps-place"></i><?php echo $post->domisili;?></li>
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <div class="row">
              <div class="col s6 m6 l6 center">
<<<<<<< HEAD
                <h5 class="green-text">16</h5>books
=======
               
                <h5 class="green-text"><?php echo $koleksi[$post->username] ?></h5>books
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
              </div>
              <div class="col s6 m6 l6 center">
                <h5 class="green-text">29</h5>wishlist
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    <?php } ?>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
         $('keyword').show();
    $("location").hide();
    $("status").hide();
    $("faculty").hide();
  $('#kategori').on('change',function() {

     if(this.value=='nama')
        {
            $('.keyword').show();
            $("location").hide();
            $("status").hide();
            $("faculty").hide();

        }
    else if (this.value=='domisili') 
         {
            $('keyword').hide();
            $("location").show();
            $("status").hide();
            $("faculty").hide();
        }
    else if (this.value=='status') 
         {
             $('keyword').hide();
            $("location").hide();
            $("status").show();
            $("faculty").hide();
         }
     else 
         {
             $('keyword').hide();
            $("location").hide();
            $("status").hide();
            $("faculty").show();
         }
  }); 

    });
</script>