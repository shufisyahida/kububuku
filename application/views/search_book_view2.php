  <div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a class="active" href="<?php echo base_url('pencarian/buku') ?>">Buku</a></li>
          <li><a  href="<?php echo base_url('pencarian/pengguna')?>">Pengguna</a></li>
      </div>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->

<div class="container custom-table">
  <div class="row">
    <div class="col s12 m4 l3">
      <div class="card-panel white z-depth-1">
        <h6 style="font-size:1.5em">Filter Pencarian</h6>
        <form method="post" action="<?php echo base_url('pencarian/hasil_buku') ?>">
          
          <div class="row">
             <div class="col s12 m12 l12">
                <select id="kategori" name="kategori" type="text" class="validate">
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="judul">Judul</option>
                    <option value="pengarang">Pengarang</option>
                     <option value="genre">Genre</option>
                </select>
            </div>
            <div class="input-field col s12">
              <keyword>
              <input id="book-searchkey" type="text" class="validate" name="keyword">
              <label>Kata Kunci</label>
            </keyword>
             <genre>
              <select id="genre" name="genre" type="text" class="validate">
                     <option value="">Pilih Genre Buku</option>
                      <option value="Biography" >Biography</option>  
                      <option value="Comic" >Comic</option>
                      <option value="Fantasy" >Fantasy</option>
                      <option value="Fiction" >Fiction</option>
                      <option value="Horror" >Horror</option>
                      <option value="Legend" >Legend</option>
                      <option value="Mystery" >Mystery</option>
                      <option value="Non Fiction" >Non Fiction</option>     
                      <option value="Philosophy" >Philosophy</option>     
                      <option value="Politics" >Politics</option> 
                      <option value="Reference Book" >Reference Book</option>
                      <option value="Religion" >Religion</option> 
                      <option value="Romance" >Romance</option> 
                      <option value="Suspense" >Suspense</option>     
                      <option value="Textbook" >Textbook</option>     
                      <option value="Thriller" >Thrillers</option>  
                      <option value="Miscellaneous" >Miscellaneous</option> 
                </select>
              </genre>
            </div>
            <div class="col s12 m12 l12">
              <?php if($notMatch!=null){?>
              <span class="error"><?php echo $notMatch ?></span>
                 <?php } ?>
            </div>
            <div class="col s12">
              <button class="btn custom-btn waves-effect waves-light green right-align z-depth-1" type="submit" name="action" method="post">Search</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
    <div class="col s12 m8 l9">
      <!-- <div class="col s12 m12 l6"> -->
        <?php if($notFound!=null){?>
        <span><?php echo $notFound ?>.</span>
        <!-- <button class="btn custom-btn waves-effect waves-light green right-align z-depth-1" href="<?php echo base_url('buku/tambah_baru')?>">addBook</button> -->
        <br>
        <?php if(!$isAdmin){
          echo'<a class="green-text" href="'.base_url().'buku/tambah_baru">Tambahkan buku baru ke koleksi?</a>';
        }?>
          <?php } ?>
      <!-- </div> -->
      <?php if($resultSearchBuku!=null){?>
      <?php foreach($resultSearchBuku as $key => $post){?>
        <div class="col s12 m6 l6">
          <div class="card card-book">
            <div class="row row-custom-a">
              <div class="col s4 m4 l4">
                <?php echo
                        '<a href="'.base_url()."buku/info/".$post->isbn.'"> <img src='.$post->sampul.' alt="book-cover" class="responsive-img"></a>'
                      ?>
              </div>
              <div class="col s8 m8 l8">
                <div class="col s11 m11 l11">
                  <?php echo
                  '<a data-position="bottom" data-delay="50" data-tooltip="'.$post->judul.'" class="tooltipped" href="'.base_url()."buku/info/".$post->isbn.'">';
                  ?>
                    <h6 class="truncate black-text"><?php echo $post->judul;?></h6>
                    <h6 class="truncate"><?php echo $post->pengarang;?></h6>
                  <?php echo
                  '</a>'
                  ;?>
                  <span class="tag-property white-text green"><?php echo $post->genre;?></span><br><br>
                      <?php
                      if($isLoggedIn&&$isAdmin)
                      {
                        echo 
                            '
                            <div id="modal-addcol'.$post->isbn.'" class="modal">
                              <div class="modal-content">
                                <h4>Delete Book</h4>
                                <p>Are you sure to delete this book?</p>
                              </div>
                              <div class="modal-footer">
                                <a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
                        
                                <a href="'.base_url().'kelola/hapusBukuFromSearch/'.$post->isbn.'"
                                  class="black-text waves-effect waves-green btn-flat modal-action">DELETE</a>
                              </div>
                            </div>
          
                            <div class="row row-custom-a">
                              <a href="#modal-addcol'.$post->isbn.'" class="modal-trigger waves-effect waves-light btn red white-text">Delete Book</a>
                            </div>';
                      }
                      if($isLoggedIn&&!$isAdmin){
                          if(!$adaDiKoleksi[$key])
                          {
                            echo 
                            '
                            <div id="modal-addcol'.$post->isbn.'" class="modal">
                              <div class="modal-content">
                                <h4>Tambah ke koleksi?</h4>
                                <p>Apakah anda yakin untuk menambah buku ini ke koleksi anda?</p>
                              </div>
                              <div class="modal-footer">
                                <a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
                        
                                <a href="'.base_url()."koleksi/tambah/".$post->isbn."/".$username.'"
                                  class="black-text waves-effect waves-green btn-flat modal-action">ADD</a>
                              </div>
                            </div>
          
                            
                            <a href="#modal-addcol'.$post->isbn.'" data-position="bottom" data-delay="50" data-tooltip="Tambah ke Koleksi" class="modal-trigger tooltipped" ><i class=" material-icons green-text ">add_circle</i></a>
                            ';
                          
                          if(!$adaDiWishlist[$key])
                          {
                            echo 
                            '
                            <div id="modal-addwis'.$post->isbn.'" class="modal">
                              <div class="modal-content">
                                <h4>Tambah ke wishlist?</h4>
                                <p>Apakah anda yakin untuk menambah buku ini ke wishlist anda?</p>
                              </div>
                              <div class="modal-footer">
                                <a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
                        
                                <a href="'.base_url()."Wishlist/tambah/".$post->isbn.'"
                                  class="black-text waves-effect waves-green btn-flat modal-action">ADD</a>
                              </div>
                            </div>
          
                            
                            <a href="#modal-addwis'.$post->isbn.'" data-position="bottom" data-delay="50" data-tooltip="Tambah ke Wishlist" class="modal-trigger tooltipped" href=""><i class="material-icons green-text">favorite</i></a>
                            ';
                          }
                        }
                      }
                      ?>
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
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
         $('keyword').show();
    $("genre").hide();
  $('#kategori').on('change',function() {

     if(this.value=='judul')
        {
            $('keyword').show();
            $("genre").hide();

        }
    else if (this.value=='pengarang') 
         {
           $('keyword').show();
            $("genre").hide();
        }
     else 
         {
             $('keyword').hide();
            $("genre").show();
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