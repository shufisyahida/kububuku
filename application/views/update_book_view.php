<div class="secondary-header">
      <div class="secondary-header-inner">
        <div class="container custom-container-c">
            Perbarui Buku
        </div>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-content-add"></i>
        </a>
        <ul>
          <li><a href="<?php echo base_url('pencarian/buku') ?>" class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
          <li><a class="btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add Wishlist"><i class="large mdi-action-favorite"></i></a></li>
        </ul>
      </div>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->


<div class="container custom-table">
    <!-- <br><h5>Add Book</h5> -->
    <div class="card-panel-custom-reg z-depth-1">
        <div class="row">
            <form method="post" action="<?php echo base_url().'Request/createUpdateRequest/'.$isbn?>" class="col s12">
              <!-- <a href="<?php echo base_url()."buku/deleteBook/".$resultBook[0]->isbn?>">DELETE</a> -->

                <div id="step-one" class="row">
                                        
                    <div class="input-field col s4 offset-s1">
                        <!-- <i class="mdi-action-perm-contact-cal prefix"></i> -->
                        <input id="isbn" name="isbn" type="text" class="validate" value="<?php echo $isbn;?>">
                        <label for="isbn">ISBN*</label>
                        <span class="error"><?php echo $isbnErr;?></span>
                    </div>

                    <div class="input-field col s4 offset-s2">
                        <!-- <i class="mdi-action-perm-contact-cal prefix"></i> -->
                        <input id="judul" name="judul" type="text" class="validate" value="<?php echo $judul;?>">
                        <label for="judul">Judul*</label>
                        <span class="error"><?php echo $judulErr;?></span>
                    </div>

                    <!-- <div class="col s4 offset-s1">
                        <span class="error"><?php echo $isbnErr;?></span>
                    </div>

                    <div class="col s4 offset-s2">
                        <span class="error"><?php echo $judulErr;?></span>
                    </div> -->

                    <div class="input-field col s4 offset-s1">
                        <!-- <i class="mdi-action-perm-contact-cal prefix"></i> -->
                        <input id="pengarang" name="pengarang" type="text" class="validate" value="<?php echo $pengarang;?>">
                        <label for="pengarang">Pengarang*</label>
                        <span class="error"><?php echo $pengarangErr;?></span>
                    </div>

                    <div class="col s4 offset-s2">
                        <select id="genre" name="genre" type="text" class="validate" >
                              <option value="">Pilih Genre Buku*</option>
                              <option value="Biography" <?php if($genre == "Biography") echo "selected"; ?>>Biography</option>  
                              <option value="Comic" <?php if($genre == "Comic") echo "selected"; ?>>Comic</option>
                              <option value="Fantasy" <?php if($genre == "Fantasy") echo "selected"; ?>>Fantasy</option>
                              <option value="Fiction" <?php if($genre == "Fiction") echo "selected"; ?>>Fiction</option>
                              <option value="Horror" <?php if($genre == "Horror") echo "selected"; ?>>Horror</option>
                              <option value="Legend" <?php if($genre == "Legend") echo "selected"; ?>>Legend</option>
                              <option value="Mystery" <?php if($genre == "Mystery") echo "selected"; ?>>Mystery</option>
                              <option value="Non Fiction" <?php if($genre == "Non Fiction") echo "selected"; ?>>Non Fiction</option>     
                              <option value="Philosophy" <?php if($genre == "Philosophy") echo "selected"; ?>>Philosophy</option>     
                              <option value="Politics" <?php if($genre == "Politics") echo "selected"; ?>>Politics</option> 
                              <option value="Reference Book" <?php if($genre == "Reference Book") echo "selected"; ?>>Reference Book</option>
                              <option value="Religion" <?php if($genre == "Religion") echo "selected"; ?>>Religion</option> 
                              <option value="Romance" <?php if($genre == "Romance") echo "selected"; ?>>Romance</option> 
                              <option value="Suspense" <?php if($genre == "Suspense") echo "selected"; ?>>Suspense</option>     
                              <option value="Textbook" <?php if($genre == "Textbook") echo "selected"; ?>>Textbook</option>     
                              <option value="Thriller" <?php if($genre == "Thriller") echo "selected"; ?>>Thrillers</option>  
                              <option value="Miscellaneous" <?php if($genre == "Miscellaneous") echo "selected"; ?>>Miscellaneous</option>     
                        </select>
                        <label for="genre">Genre</label>
                        <span class="error"><?php echo $genreErr;?></span>
                    </div>

                    <div class="input-field col s4 offset-s1">
                        <!-- <i class="mdi-action-perm-contact-cal prefix"></i> -->
                        <input id="penerbit" name="penerbit" type="text" class="validate" value="<?php echo $penerbit;?>">
                        <label for="penerbit">Penerbit</label>
                    </div>

                    <div class="input-field col s4 offset-s2">
                        <!-- <i class="mdi-action-perm-contact-cal prefix"></i> -->
                        <input id="tahun_terbit" name="tahun_terbit" type="text" class="validate" value="<?php echo $tahun_terbit;?>">
                        <label for="tahun_terbit">Tahun Terbit</label>
                        <span class="error"><?php echo $tahun_terbitErr;?></span>
                    </div>

                    <div class="input-field col s4 offset-s1">
                        <!-- <i class="mdi-action-perm-contact-cal prefix"></i> -->
                        <input id="jumlah_halaman" name="jumlah_halaman" type="text" class="validate" value="<?php echo $jumlah_halaman;?>">
                        <label for="jumlah_halaman">Jumlah Halaman</label>
                        <span class="error"><?php echo $jumlah_halamanErr;?></span>
                    </div>

                    <div class="input-field col s4 offset-s2">
                        <!-- <i class="mdi-action-face-unlock prefix"></i> -->
                        <input id="sampul" name="sampul" type="url" value="<?php echo $sampul;?>">
                        <label for="sampul">URL Sampul</label>
                    </div>

                    <div class="input-field col s10 offset-s1">
                        <!-- <i class="mdi-action-perm-contact-cal prefix"></i> -->
                        <textarea id="deskripsi" name="deskripsi" type="text" class="validate materialize-textarea" value="<?php echo $deskripsi;?>"><?php echo $deskripsi;?></textarea>
                        <label for="deskripsi">Deskripsi</label>
                    </div>

                    <div class="col s12 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <button id="regbtn" class="btn waves-effect waves-light green right-align z-depth-1" type="submit" name="action" method="post">PERBARUI</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- <h6 class="custom-h6-login">Step 1 of 2</a></h6> -->
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