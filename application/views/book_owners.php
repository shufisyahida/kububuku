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
      <div class="card-panel white z-depth-1 col s12 m12 l12">
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
        </span>
      </div>
      <div class="col s12 m4 l3">
        <div class="card">
          <div class="container custom-container-a">
            <img class="avatar-property circle" src="<?php echo $user->foto;?>">
          </div>

          <div class="green-text name-property"><?php echo $user->nama;?></div>
          <div class="divider"></div>       
          <div class="custom-container-b">
            <ul>
              <li><i class="green-text tiny mdi-maps-beenhere"></i> 
                <?php echo $user->fakultas; ?>                                    
              </li>
              <li><i class="green-text tiny mdi-social-person-outline"></i> 
              <?php
                echo $user->status;
              ?></li>
              <li><i class="green-text tiny mdi-social-person"></i>
               <?php  echo $user->jenis_kelamin;?>
              </li>
              <li><i class="green-text tiny mdi-action-event"></i> <?php echo $user->tanggal_lahir;?></li>
              <li><i class="green-text tiny mdi-maps-place"></i><?php echo $user->domisili;?></li>
            </ul>
          </div>
          <div class="divider"></div>
          <div class="custom-container-b" style="text-align: center;">
            <ul>
              <li>As Owner</li>
              <li class="ranking-star"><i class="fa fa-star fa-lg green-text"></i></li>
              <li class="ranking-star"><i class="fa fa-star fa-lg green-text"></i></li>
              <li class="ranking-star"><i class="fa fa-star-half fa-lg green-text"></i></li>
              <li class="ranking-star"><i class="fa fa-star-o fa-lg green-text"></i></li>
              <li class="ranking-star"><i class="fa fa-star-o fa-lg green-text"></i></li>
            </ul>
            <ul>
              <li>As Borrower</li>
              <li class="ranking-star"><i class="fa fa-star fa-lg green-text"></i></li>
              <li class="ranking-star"><i class="fa fa-star fa-lg green-text"></i></li>
              <li class="ranking-star"><i class="fa fa-star-half fa-lg green-text"></i></li>
              <li class="ranking-star"><i class="fa fa-star-o fa-lg green-text"></i></li>
              <li class="ranking-star"><i class="fa fa-star-o fa-lg green-text"></i></li>
            </ul>
          </div>
        </div>
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