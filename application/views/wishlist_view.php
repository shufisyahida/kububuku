  <div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
           <li><a href="<?php echo base_url('permintaan_masuk') ?>">Permintaan Masuk</a></li>
          <li><a href="<?php echo base_url('permintaan_keluar') ?>">Permintaan Keluar</a></li>
          <li><a  href="<?php echo base_url('koleksi') ?>">Koleksi</a></li>
          <li><a class="active" href="<?php echo base_url('wishlist') ?>">Wishlist</a></li>
        </ul>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-content-add"></i>
        </a>
        <ul>
          <li><a href="<?php echo base_url('pencarian/buku') ?>" class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
          <li><a href="<?php echo base_url('pencarian/buku') ?>" class="btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add Wishlist"><i class="large mdi-action-favorite"></i></a></li>
        </ul>
      </div>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->

<!-- <div class="container custom-table"> -->
  <div class="container custom-table">
    <h4>Wishlist</h4>
    <div class="row">
    <?php 
    if(!empty($resultWishlist))
    {
    foreach($resultWishlist as $post){ ?>
      <div class="col s12 m12 l6">
          <div class="card card-book">
              <div class="row row-custom-a">
                <div class="col s4 m4 l4">
                    <?php echo
                      '<a href="'.base_url()."buku/info/".$post->isbn.'"> <img src='.$post->sampul.' alt="book-cover" class="responsive-img"></a>';
                    ?>
                  </div>
                  <div class="col s8 m8 l8">
                      <div class="col s11 m11 l11">
                        <?php echo
                      '<a href="'.base_url()."buku/info/".$post->isbn.'">

                        <span class="card-title black-text">'.$post->judul.'</span><br>
                        </a>';?>
                        <span><?php echo $post->pengarang;?></span><br>
                        <span class="tag-property white-text green"><?php echo $post->genre;?></span>
                      </div>
                      <div class="col s1 m1 l1">
                        <?php
                        echo '<a data-position="bottom" data-delay="50" data-tooltip="Remove" align="right" class="tooltipped modal-trigger action-content" href="#modal-remove'.$post->isbn.'"><i class="red-text mdi-content-clear"></i></a>';
                         echo 
                '<div id="modal-remove'.$post->isbn.'" class="modal">
                  <div class="modal-content">
                    <h4>Remove Wishlist</h4>
                    <p>Are you sure to remove this book from your wishlist?</p>
                  </div>
                  <div class="modal-footer">
                    <a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
                    <a href="'.base_url()."Wishlist/hapus/".$post->isbn.'" class="black-text waves-effect waves-green btn-flat modal-action">remove</a>
                  </div>
                </div>'
                ?>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    <?php }
    }
    else
    {
      echo'<h5>Tidak Ada Wishlist</h5>';
    }
    ?>  
      </div>
    <!-- </div> -->
  </div>

  

<!-- </div> -->


<!-- Modal Structure -->
<!-- <div id="modal-remove" class="modal">
  <?php foreach($resultBorrowed as $post){?>
  <div class="modal-content">
    <h4>Remove Collection</h4>
    <p>Are you sure to remove this book from collection?</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
    <a href="'.base_url()."koleksi/hapus/".$post->isbn.' class="waves-effect waves-green btn-flat modal-action modal-close">remove</a>
  </div>
  <?php }?> 
</div> -->

<!-- <div id="modal-remove2" class="modal">
  <div class="modal-content">
    <h4>Remove Collection</h4>
    <p>Are you sure to remove this book from collection?</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
    <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">remove</a>
  </div>
</div> -->
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