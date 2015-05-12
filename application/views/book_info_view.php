    <div class="secondary-header">
      <div class="secondary-header-inner">
        <div class="container custom-container-c">Book Information</div>
      </div>
      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-content-add"></i>
        </a>
        <ul>
          
          <?php
            $username = $this->session->userdata('username');
            if(!$adaDiKoleksi)
            {
              echo '<li><a href="#modal-addcol" class="modal-trigger btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add this book to Collection"><i class="large mdi-action-book"></i></a></li>';
            }
          ?>

          <?php
            $username = $this->session->userdata('username');
            if(!$adaDiWishlist){
              echo '<li><a href="#modal-wishlist" class="modal-trigger btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add this book to Wishlist"><i class="large mdi-action-favorite"></i></a></li>';
             
             }
            ?>


        </ul>
      </div>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->
<div class="container custom-table">
    <div id="modal-report" class="modal">
        <div class="modal-content">
            <h4>Report Book</h4>
            <p>Are you sure to report this book to admin?</p>
        </div>
        <div class="modal-footer">
            <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
            <a href="#" class="waves-effect waves-green btn-flat modal-action">Report</a>
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
  
          <a href="'.base_url()."index.php/Collection/add/".$resultBook[0]->isbn."/".$username.'"
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
  
          <a href="'.base_url()."index.php/Wishlist/add/".$resultBook[0]->isbn.'"
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


            <!-- <a href="<?php echo base_url()."index.php/Request/createDeleteRequest/".$resultBook[0]->isbn?>" class="waves-effect waves-light btn-floating green right-align z-depth-1 tooltipped" data-position="top" data-delay="10" data-tooltip="Report this book"><i class="mdi-content-report"></i></a> -->
            <!-- <a href="<?php echo base_url()."index.php/Request/showUpdateBook/".$resultBook[0]->isbn?>" class="waves-effect waves-light btn-floating green right-align z-depth-1 tooltipped" data-position="top" data-delay="10" data-tooltip="Modify this book"><i class="mdi-editor-mode-edit"></i></a> -->

            <!-- <div id="modal-report" class="modal">
                <div class="modal-content">
                    <h4>Report Book?</h4>
                    <p>Are you sure to report this book to admin?</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
                    <a href="'.base_url()."index.php/Collection/add/".$resultBook[0]->isbn."/".$username.'"
                class="waves-effect waves-green btn-flat modal-action">Report</a>
                </div>
            </div> -->

            <a href="<?php echo base_url()."index.php/Request/createDeleteRequest/".$resultBook[0]->isbn?>" class="modal-trigger waves-effect waves-light btn-floating green right-align z-depth-1 tooltipped" data-position="top" data-delay="10" data-tooltip="Report this book"><i class="mdi-content-report"></i></a>

            <a href="<?php echo base_url()."index.php/Request/showUpdateBook/".$resultBook[0]->isbn?>" class="waves-effect waves-light btn-floating green right-align z-depth-1 tooltipped" data-position="top" data-delay="10" data-tooltip="Modify this book"><i class="mdi-editor-mode-edit"></i></a>
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
                <h6>Book Owner</h6>
                <div class="row">
                <?php foreach($resultOwner as $row){?>
                  <?php echo 
                  '<div class=" right col s4 m4 l4">
                    <a href = "'.base_url()."index.php/Profile/showProfile/".$row->username.'" >
                      <img class="responsive-img circle" img src='.$row->foto.'>
                    </a>
                  </div>' ?>
                <?php } ?>
                </div>
                <div class="row">
                  <div class="right col">
                  <?php
                    $isbn = $this->uri->segment(3);
                    echo '<a class="waves-effect waves-green btn-flat" href="'.base_url()."index.php/Book/show_owner/".$isbn.'">More...</a>';
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
              <span><?php echo $post->jumlah_halaman;?> pages </span><br>
              <span>Published by <?php echo $post->penerbit;?></span><br>
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

 <!--    <?php foreach($result as $post){?>
    
         <?php echo $post->isbn;?>
         <?php echo $post->judul;?>
         <?php echo $post->pengarang;?>
         <?php echo $post->deskripsi;?>
         <?php echo $post->genre;?>
         <?php echo $post->penerbit;?>
         <?php echo $post->tahun_terbit;?>
         <?php echo $post->jumlah_halaman;?>
         <?php echo $post->sampul;?>
      
     <?php }?>  -->