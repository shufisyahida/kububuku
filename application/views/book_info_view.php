    <div class="secondary-header">
      <div class="secondary-header-inner">
        <div class="container custom-container-c">Book Information</div>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-editor-mode-edit"></i>
        </a>
        <ul>
          <li><a class="btn-floating red"><i class="large mdi-editor-insert-chart"></i></a></li>
          <li><a class="btn-floating yellow darken-1"><i class="large mdi-editor-format-quote"></i></a></li>
          <li><a class="btn-floating green"><i class="large mdi-editor-publish"></i></a></li>
          <li><a class="btn-floating blue"><i class="large mdi-editor-attach-file"></i></a></li>
        </ul>
      </div>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->

<div class="container custom-table">
  <div class="row">
    <div class="col s12 m4 l3">
      <div class="row">
        <div class="col s12 m12 l12">
          <div class="card-panel white z-depth-1">
            <img class="responsive-img" src="<?php echo base_url('assets/img/cover1.jpg')?>"/>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12 m8 l9">
      <?php foreach($resultBook as $post){?>
      <div class="card-panel white z-depth-1">
        <span>
          <div class="row">
            <div class="col s12 m12 l12">
              <h5 class="black-text"><?php echo $post->judul;?></h5>
              <h6 class="black-text"><?php echo $post->pengarang;?></h6>
            </div>
            <div class="col s12 m12 l12">
              <span class="new badge tag-property white-text green"><?php echo $post->genre;?></span>
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
                  <div class=" right col s4 m4 l4">
                    <img class="responsive-img circle" src="<?php echo base_url('assets/img/fallon.jpg') ?>">
                  </div>
                  <div class=" right col s4 m4 l4">
                    <img class="responsive-img circle" src="<?php echo base_url('assets/img/mumus.jpg') ?>">
                  </div>
                  <div class=" right col s4 m4 l4">
                    <img class="responsive-img circle" src="<?php echo base_url('assets/img/koes.jpg') ?>">
                  </div>
                  <div class=" right col s4 m4 l4">
                    <img class="responsive-img circle" src="<?php echo base_url('assets/img/shufi.jpg') ?>">
                  </div>
                  <div class=" right col s4 m4 l4">
                    <img class="responsive-img circle" src="<?php echo base_url('assets/img/elka.jpg') ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="right col">
                  <a class="waves-effect waves-green btn-flat">More...</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="divider"></div>
          <div class="row">
            <div class="detail-info-book col">
              <span>1216 pages</span><br>
              <span>Published by Houghton Mifflin Harcourt</span><br>
              <br>
              <span>ISBN13 9780618640157</span>
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