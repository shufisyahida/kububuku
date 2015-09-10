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
        if(!empty($notif))
        {
          foreach ($notif as $key => $value) 
          {
            $newDate = date("d-m-Y , H:i:s",strtotime($value->waktu));
            $day = date('l', strtotime($value->waktu));
            if(property_exists($value, 'user_inform'))
            {
              echo 
                  '<li class="collection-item avatar"><a href = "'.base_url()."notifikasi/lookInform/".$value->id."/".$value->user_inform.'" >
              
                    <img src='.$value->foto.' alt="" class="circle">';?>
                  
                    <span class="title"><?php echo $value->user_inform;?> merespon wishlist anda</span>
                    <p><?php echo $value->judul;?></p>
                  </a>  
                  <?php echo '<span class="email-address grey-text">'.$day." , ".$newDate.'</span>';?>
                </li>
              <?php
            }
            else if (property_exists($value, 'user_request')) 
            {
              echo 
              '<li class="collection-item avatar"><a href = "'.base_url()."notifikasi/lookRequest/".$value->user_request."/".$value->isbn.'" >
              
                    <img src='.$value->foto.' alt="" class="circle">'?>
                <span class="title"><?php echo $value->user_request;?> ingin meminjam buku anda</span>
                <p><?php echo $value->judul;?></p>
              </a>
               <?php echo '<span class="email-address grey-text">'.$day." , ".$newDate.'</span>';?>
            </li>
              <?php
            }
            else if (property_exists($value, 'user_accept')) 
            {
              echo 
              '<li class="collection-item avatar"><a href = "'.base_url()."notifikasi/lookAccept/".$value->user_accept."/".$value->isbn.'" >
              
                    <img src='.$value->foto.' alt="" class="circle">'?>
                      <span class="title"><?php echo $value->user_accept;?> menerima permintaan peminjaman anda</span>
                    <p><?php echo $value->judul;?></p>
                  </a>
                   <?php echo '<span class="email-address grey-text">'.$day." , ".$newDate.'</span>';?>
                </li>
                   <?php 
            }
            else if (property_exists($value, 'user_decline')) 
            {
              echo 
              '<li class="collection-item avatar"><a href = "'.base_url()."notifikasi/lookDecline/".$value->user_decline."/".$value->isbn.'" >
              
                    <img src='.$value->foto.' alt="" class="circle">'?>
                  <span class="title"><?php echo $value->user_decline;?> menolak permintaan peminjaman anda</span>
                <p><?php echo $value->judul;?></p>
              </a>
               <?php echo '<span class="email-address grey-text">'.$day." , ".$newDate.'</span>';?>
            </li>
            <?php
            }
            else if (property_exists($value, 'user_return'))
            {
              echo 
              '<li class="collection-item avatar"><a href = "'.base_url()."notifikasi/lookReturn/".$value->user_return."/".$value->isbn.'" >
              
                    <img src='.$value->foto.' alt="" class="circle">'?>
                  <span class="title"><?php echo $value->user_return;?> sudah mengembalikan buku anda</span>
                <p><?php echo $value->judul;?></p>
              </a>
               <?php echo '<span class="email-address grey-text">'.$day." , ".$newDate.'</span>';?>
            </li>
            <?php 
            }
          }     
        }?>
  </ul>

</div>

