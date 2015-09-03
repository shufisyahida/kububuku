    <div class="secondary-header">
      <div class="secondary-header-inner">
        <div class="container custom-container-c">Informasi Buku</div>
      </div>
      <?php
      $username = $this->session->userdata('username');
  if(!$isAdmin){
  echo '
      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-content-add"></i>
        </a>
        <ul>';
          
          
            
            if(!$adaDiKoleksi)
            {
              echo '<li><a href="#modal-addcol" class="modal-trigger btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add this book to Collection"><i class="large mdi-action-book"></i></a></li>';
            }
          

          
            $username = $this->session->userdata('username');
            if(!$adaDiWishlist){
              echo '<li><a href="#modal-wishlist" class="modal-trigger btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add this book to Wishlist"><i class="large mdi-action-favorite"></i></a></li>';
             
             }
           }
            ?>


        </ul>
      </div>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->
<div class="container custom-table">
    <div id="modal-report" class="modal">
        <div class="modal-content">
            <h4>Laporkan Buku</h4>
            <p>Anda yakin untuk melaporkan buku ini kepada admin?</p>
        </div>
        <div class="modal-footer">
            <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Batal</a>
            <a href="<?php echo base_url()."Request/createDeleteRequest/".$resultBook[0]->isbn?>" class="waves-effect waves-green btn-flat modal-action">Laporkan</a>
        </div>
    </div>

<?php
echo '
      <div id="modal-addcol" class="modal">
        <div class="modal-content">
          <h4>Add Collection?</h4>
          <p>Are you sure to add this book to your collection?</p>
        </div>
        <div class="modal-footer">
          <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
  
          <a href="'.base_url()."koleksi/tambah/".$resultBook[0]->isbn."/".$username.'"
            class="waves-effect waves-green btn-flat modal-action">ADD</a>
        </div>
      </div>
      ';

  echo '
      <div id="modal-wishlist" class="modal">
        <div class="modal-content">
          <h4>Add Wishlist?</h4>
          <p>Are you sure to add this book to your Wishlist?</p>
        </div>
        <div class="modal-footer">
          <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
  
          <a href="'.base_url()."Wishlist/tambah/".$resultBook[0]->isbn.'"
            class="waves-effect waves-green btn-flat modal-action">ADD</a>
        </div>
      </div>
      ';
?>





  <div class="row">
    <div class="col s12 m4 l3">
      <div class="row">
        <div class="col s12 m12 l12">
          <?php foreach($resultBook as $post){?>
          <?php 
              // $username = $this->session->userdata('username');
          echo
          '<div class="card-panel white z-depth-1">
            <img class="responsive-img" img src='.$post->sampul.'>
            </div>' ?>


            <!-- <a href="<?php echo base_url()."Request/createDeleteRequest/".$resultBook[0]->isbn?>" class="waves-effect waves-light btn-floating green right-align z-depth-1 tooltipped" data-position="top" data-delay="10" data-tooltip="Report this book"><i class="mdi-content-report"></i></a> -->
            <!-- <a href="<?php echo base_url()."Request/showUpdateBook/".$resultBook[0]->isbn?>" class="waves-effect waves-light btn-floating green right-align z-depth-1 tooltipped" data-position="top" data-delay="10" data-tooltip="Modify this book"><i class="mdi-editor-mode-edit"></i></a> -->

            <!-- <div id="modal-report" class="modal">
                <div class="modal-content">
                    <h4>Report Book?</h4>
                    <p>Are you sure to report this book to admin?</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
                    <a href="<?php echo base_url()."Request/createDeleteRequest/".$resultBook[0]->isbn?>" class="waves-effect waves-green btn-flat modal-action">Reports</a>
                </div>
            </div> -->
<?php
  if(!$isAdmin){
  echo '
            <a href="#modal-report" class="modal-trigger waves-effect waves-light btn-floating green right-align z-depth-1 tooltipped" data-position="top" data-delay="10" data-tooltip="Laporkan buku ini"><i class="mdi-content-report"></i></a>

            <!-- <a href="<?php echo base_url()."Request/createDeleteRequest/".$resultBook[0]->isbn?>" class="modal-trigger waves-effect waves-light btn-floating green right-align z-depth-1 tooltipped" data-position="top" data-delay="10" data-tooltip="Report this book"><i class="mdi-content-report"></i></a> -->

            <a href="'.base_url().'Request/showUpdateBook/'.$resultBook[0]->isbn.'" class="waves-effect waves-light btn-floating green right-align z-depth-1 tooltipped" data-position="top" data-delay="10" data-tooltip="Perbarui buku ini"><i class="mdi-editor-mode-edit"></i></a>
        ';}?>
        </div>
      </div>
    </div>
    <div class="col s12 m8 l9">
    
      <div class="card-panel white z-depth-1">
        <span>
          <div class="row">
            <div class="col s12 m12 l12">
              <h5 class="black-text"><?php echo $post->judul;?></h5>
              <h6 class="black-text"><?php echo $post->pengarang;?></h6>
            </div>
            <div class="col s12 m12 l12">
              <span class="tag-property white-text green"><?php echo $post->genre;?></span>
            </div>
          </div>
          <div class="divider"></div>
          <div class="row">
            <div class="col s12 m7 l8">
              <p><?php echo $post->deskripsi;?></p>
            </div>
            <?php }?>
            <div class="col s12 m5 l4">
              <div align="right">
                <?php
                echo '
                <h6>Pemilik Buku</h6>';?>
                <div class="row">
                <?php foreach($resultOwner as $row){?>
                  <?php echo 
                  '<div class=" right col s4 m4 l4">
                    <a href = "'.base_url()."profil/lihatProfil/".$row->username.'" >
                      <img class="responsive-img circle" img src='.$row->foto.'>
                    </a>
                  </div>' ?>
                <?php } ?>
                </div>
                <div class="row">
                  <div class="right col">
                  <?php
                    $isbn = $this->uri->segment(3);
                    if(!empty($resultOwner)){
                    echo '<a class="waves-effect waves-green btn-flat" href="'.base_url()."buku/pemilik/".$isbn.'">Selengkapnya...</a>';
                  }
                  else
                  {
                    echo '<h5>No Owner</h5>'; 
                  }
                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="divider"></div>
          <div class="row">
             <?php foreach($resultBook as $row){?>
            <div class="detail-info-book col">
              <span><?php echo $post->jumlah_halaman;?> halaman </span><br>
              <span>Diterbitkan oleh <?php echo $post->penerbit;?></span><br>
              <br>
              <span>ISBN13 <?php echo $post->isbn;?></span>
              <?php } ?>
            </div>
          </div>
        </span>

      </div>
    </div>
  </div>
</div>

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