    <div class="secondary-header">
      <div class="secondary-header-inner">
        <div class="container custom-container-c">Book Information</div>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-content-add"></i>
        </a>
        <ul>
          <li><a class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add this book to Collection"><i class="large mdi-action-book"></i></a></li>
          <li><a class="btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add this book to Wishlist"><i class="large mdi-action-favorite"></i></a></li>
        </ul>
      </div>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->

<div class="container custom-table">

  <div class="row">
    <div class="col s12 m4 l3">
      <div class="row">
        <div class="col s12 m12 l12">
          <?php foreach($resultBook as $post){?>
          <?php 
              $username = $this->session->userdata('username');
          echo
          '<div class="card-panel white z-depth-1">
            <img class="responsive-img" img src='.$post->sampul.'>
            <a href="'.base_url()."index.php/koleksi/add/".$post->isbn."/".$username.'" class="waves-effect waves-green black-text btn-flat">Add to Collection</a>
          </div>' ?>
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
                <h5>Book Owner</h5>
                <div class="row">
                <?php foreach($resultOwner as $row){?>
                  <?php echo 
                  '<div class=" right col s4 m4 l4">
                    <a href = "'.base_url()."index.php/Profile/profile/".$row->username.'" target="_blank">
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