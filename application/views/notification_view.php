<div class="secondary-header">
      <div class="secondary-header-inner">
        <div class="container custom-container-c">Notifikasi</div>
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

  
    <ul class="collection">
        <?php 
        if(!empty($resultTanggapan))
        {
        foreach($resultTanggapan as $post){ ?>
            <?php echo 
            '<li class="collection-item avatar"><a href = "'.base_url()."notifikasi/lookInform/".$post->id."/".$post->user.'" >
        
              <img src='.$post->foto.' alt="" class="circle">'?>
            
              <span class="title"><?php echo $post->user;?> has informed your wishlist</span>
              <p><?php echo $post->judul;?></p>
            </a></li>
        <?php } 

      }?>
      
      <?php 

        if(!empty($resultRequest))
        {
        foreach($resultRequest as $post){ ?>
        <?php echo 
        '<li class="collection-item avatar"><a href = "'.base_url()."notifikasi/lookRequest/".$post->user."/".$post->isbn.'" >
        
              <img src='.$post->foto.' alt="" class="circle">'?>
          <span class="title"><?php echo $post->user;?> has requested your book</span>
          <p><?php echo $post->judul;?></p>
        </a></li>
        <?php } 

      }?>

        <?php 
            if(!empty($resultAccept))
            {
            foreach($resultAccept as $post){ ?>

            <?php echo 
        '<li class="collection-item avatar"><a href = "'.base_url()."notifikasi/lookAccept/".$post->user."/".$post->isbn.'" >
        
              <img src='.$post->foto.' alt="" class="circle">'?>
                <span class="title"><?php echo $post->user;?> has accepted your request</span>
              <p><?php echo $post->judul;?></p>
            </a></li>
             <?php } 

          }?>

      <?php 
        if(!empty($resultDecline))
        {
        foreach($resultDecline as $post){ ?>

        <?php echo 
        '<li class="collection-item avatar"><a href = "'.base_url()."notifikasi/lookDecline/".$post->user."/".$post->isbn.'" >
        
              <img src='.$post->foto.' alt="" class="circle">'?>
            <span class="title"><?php echo $post->user;?> has declined your request</span>
          <p><?php echo $post->judul;?></p>
        </a></li>
      <?php } 

      }?>

      <?php 
        if(!empty($resultReturn))
        {
        foreach($resultReturn as $post){ ?>

        <?php echo 
        '<li class="collection-item avatar"><a href = "'.base_url()."notifikasi/lookReturn/".$post->user."/".$post->isbn.'" >
        
              <img src='.$post->foto.' alt="" class="circle">'?>
            <span class="title"><?php echo $post->user;?> has returned your book</span>
          <p><?php echo $post->judul;?></p>
        </a></li>
      <?php } 

      }?>

  </ul>

</div>

