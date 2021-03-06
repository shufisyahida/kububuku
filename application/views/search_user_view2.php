  <div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
        <li><a href="<?php echo base_url('pencarian/buku') ?>">Buku</a></li>
          <li><a class="active" href="<?php echo base_url('pencarian/pengguna')?>">Pengguna</a></li>
      </div>
      </div>

</div><!--end div buat head-wrapper di navbar_view-->

<div class="container custom-table">
  <div class="row">
    <div class="col s12 m4 l3">
      <div class="card-panel white z-depth-1 tabs-wrapper">
        <h6 style="font-size:1.5em">Filter Pencarian</h6>
       <form method="post" action="<?php echo base_url('pencarian/hasil_pengguna') ?>">
          
          

          <div class="row">
            <div class="col s12 m12 l12">
                <select id="kategori" name="kategori" type="text" class="validate">
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="nama">Nama</option>
                    <option value="domisili">Domisili</option>
                    <option value="status">Status</option>
                    <option value="fakultas">Fakultas</option>
                </select>
            </div>
            <div class="input-field col s12 m12 l12">
              <keyword>
              <input id="book-searchkey" type="text" class="validate" name="keyword">
              <label>Kata Kunci</label>
            </keyword>
               <location>
              <select id="location" name="location" type="text" class="validate">
                    <option value="" disabled selected>Pilih Domisili</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bogor">Bogor</option>
                     <option value="Depok">Depok</option>
                    <option value="Tangerang">Tangerang</option>
                    <option value="Bekasi">Bekasi</option>
                    <option value="Other">Other</option>                  
                </select>
              </location>
              <status>
                <select id="status" name="status" type="text" class="validate">
                    <option value="" disabled selected>Pilih Status Status</option>
                    <option value="1">Student</option>
                    <option value="2">Lecturer</option>
                     <option value="3">Staff</option>
                     <option value="4">Alumnus</option>
                </select>
              </status>
              <faculty>
                  <select id="faculty" name="faculty" type="text" class="validate">
                    <option value="" disabled selected>Pilih Fakultas</option>
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
                     <option value="52">Non Faculty</option>
                </select>
              </faculty>
            </div>
            <div class="col s12 m12 l12">
              <?php if($notMatch!=null){?>
              <span class="error"><?php echo $notMatch ?></span>
                 <?php } ?>
            </div>
            
            <div class="col s12 m12 l12">
                <button class="btn custom-btn waves-effect waves-light green right-align z-depth-1" type="submit" name="action" method="post">Cari</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
    <div class="col s12 m8 l8">
      <div class="col s12 m12 l12">

      <?php if($notFound!=null){?>
        <span><?php echo $notFound ?>.</span>
          <?php } ?>
      </div>
      <?php if($resultSearchPengguna!=null){?>
      <?php foreach($resultSearchPengguna as $post){?>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="container custom-container-a">
             <?php echo
             '<a href = "'.base_url()."".$post->username.'">
              <img class="avatar-property circle responsive-img" src="'.$post->foto.'">
            </a>'
            ?>
          
          </div>
          <div class="truncate green-text name-property"><?php echo '<a href="'.base_url().''.$post->username.'">'?><?php echo $post->nama;?></a></div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <ul>
              <li class = "truncate"><i class="green-text tiny mdi-maps-beenhere"></i> <?php echo $post->fakultas;?></li>
              <li class = "truncate"><i class="green-text tiny mdi-social-person-outline"></i> <?php echo $post->status;?></li>
              <li class = "truncate"><i class="green-text tiny mdi-social-person"></i> <?php echo $post->jenis_kelamin;?></li>
              <li class = "truncate"><i class="green-text tiny mdi-action-event"></i> <?php echo $post->tanggal_lahir;?></li>
              <li class = "truncate"><i class="green-text tiny mdi-maps-place"></i><?php echo $post->domisili;?></li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b">
            <div class="row">
              <div class="col s6 m6 l6 center">
               
                <h5 class="green-text"><?php echo $koleksi[$post->username] ?></h5>books
              </div>
              <div class="col s6 m6 l6 center">
                <h5 class="green-text"><?php echo $wishlist[$post->username] ?></h5>wishlist
              </div>
            </div>
          </div>
          <?php
          if($isLoggedIn&&$isAdmin)
          {
            echo '
            <div class="divider"></div>
            <div class="custom-container-b">
              <div class="row">
                <div class="col s12 m12 l12">
                  <div id="modal-addcol'.$post->username.'" class="modal">
                    <div class="modal-content">
                      <h4>Delete Book</h4>
                      <p>Are you sure to delete this book?</p>
                    </div>
                    <div class="modal-footer">
                      <a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
              
                      <a href="'.base_url().'kelola/hapusPenggunaFromSearch/'.$post->username.'"
                        class="black-text waves-effect waves-green btn-flat modal-action">DELETE</a>
                    </div>
                  </div>
                  <div class="row row-custom-a center">
                    <a style="margin-top:10px" href="#modal-addcol'.$post->username.'" class="modal-trigger waves-effect waves-light btn red white-text">Delete Book</a>
                  </div>
                </div>
              </div>
            </div>';
          }
          ?>
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
            $('keyword').show();
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
<script>
$('document').ready(function() {

  setInterval(function(){ 
    console.log("OK");
    var xmlhttp;
    if(window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
    }
    else
    {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {

      if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        console.log("200");
        var $response = xmlhttp.responseText;
        var $data = JSON.parse($response);

        if($data['tanggapan']==true || $data['request']==true || $data['accept']==true|| $data['decline']==true|| $data['return']==true){
          $('#notif-icon').addClass("red-text");
          $('#notif-icon').removeClass("lime-text text-lighten-5");
        }
      }
    }
    
    xmlhttp.open("POST","http://localhost/kububuku/notifikasi/cekNotif", true);
    xmlhttp.send();
  }, 3000);
 
});
</script>