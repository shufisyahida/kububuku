
</div><!--end div buat head-wrapper di navbar_view-->

<div class="container custom-table2">
	<div class="row">
		<div class="col m3 l3">
			<ul class="collection z-depth-1">
			    <li class="collection-item">
			      	<center>
				      <a href="<?php echo base_url($this->session->userdata('username')); ?>"><img src="<?php $gambar = $this->session->userdata('foto'); echo $gambar;?>" alt="" class="circle avatar-property"></a>
				      	<h5 class="green-text"><a>Fallon Candra</a></h5>
				    </center>
			    </li>
		    </ul>
		    <ul class="collection with-header z-depth-1">
		    	<li><a href="<?php echo base_url('dashboard'); ?>" class="collection-item">Beranda</a></li>
		    	<li class="divider"></li>
			    <li><a href="<?php echo base_url('koleksi'); ?>" class="collection-item active">Koleksi</a></li>
			    <li class="divider"></li>
			    <li><a href="<?php echo base_url('permintaan_masuk'); ?>" class="collection-item">Peminjaman Masuk</a></li>
			    <li class="divider"></li>
			    <li><a href="<?php echo base_url('permintaan_keluar'); ?>" class="collection-item">Peminjaman Keluar</a></li>
		    </ul>
		</div>
		<div class="col m9 l9" id="content">
			<div class="col s12 m12 l12 green lime-text text-lighten-5 card">
				<h5>Koleksi Tersedia</h4>
			</div>
			<div class="row">
		  	<?php 
		  	if(!empty($resultAvailable))
		  	{
		  	foreach($resultAvailable as $post){?>
				<div class="col s12 m12 l6">
			    	<div class="card card-book">
	            		<div class="row row-custom-a">
							<div class="col s4 m4 l4">
							<?php echo
								'<a href="'.base_url()."buku/info/".$post->isbn.'"> <img class="responsive-img" src='.$post->sampul.' alt="book-cover" class="responsive-img"></a>'
							?>
							</div>
							<div class="col s8 m8 l8">
						  		<div class="col s11 m11 l11">
						  			<?php echo
									'<a data-position="bottom" data-delay="50" data-tooltip="'.$post->judul.'" class="tooltipped" href="'.base_url()."buku/info/".$post->isbn.'">';
									?>
										<h6 class="truncate black-text"><?php echo $post->judul;?></h6>
										<span><?php echo $post->pengarang;?></span><br>
						    		<?php echo
						    		'</a>'
						    		;?>
						    		<span class="tag-property white-text green"><?php echo $post->genre;?></span><br><br>
						  		</div>
						  		<div class="col s1 m1 l1">
						  			<?php
						    		echo '<a data-position="bottom" data-delay="50" data-tooltip="Remove" align="right" class="tooltipped modal-trigger action-content" href="#modal-remove2'.$post->isbn.'"><i class="red-text mdi-content-clear"></i></a>';
						    		 echo 
									'<div id="modal-remove2'.$post->isbn.'" class="modal">
										<div class="modal-content">
											<h4>Remove Collection</h4>
											<p>Are you sure to remove this book from collection?</p>
										</div>
										<div class="modal-footer">
											<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
											<a href="'.base_url()."koleksi/hapus/".$post->isbn.'" class="black-text waves-effect waves-green btn-flat modal-action">remove</a>
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
				echo'
				<div class="col s12 m12 l12 green-text text-darken-3">
					<h6>Tidak ada koleksi</h6>
				</div>
				';
			}

			?>  
		  	</div>
			
			<div class="col s12 m12 l12 green lime-text text-lighten-5 card">
				<h5>Koleksi Dipinjam</h5>
			</div>
			<div class="row">
			<?php 
			if(!empty($resultBorrowed))
			{
			foreach($resultBorrowed as $post){ ?>
				<div class="col s12 m12 l6">
			    	<div class="card card-book">
	            		<div class="row row-custom-a">
							<div class="col s4 m4 l4">
							<?php echo
								'<a href="'.base_url()."buku/info/".$post->isbn.'"> <img class="responsive-img" src='.$post->sampul.' alt="book-cover" class="responsive-img"></a>'
							?>
							</div>
							<div class="col s8 m8 l8">
						  		<div class="col s11 m11 l11">
						  			<?php echo
									'<a data-position="bottom" data-delay="50" data-tooltip="'.$post->judul.'" class="tooltipped" href="'.base_url()."buku/info/".$post->isbn.'">';?>
										<h6 class="truncate black-text"><?php echo $post->judul;?></h6>
										<span><?php echo $post->pengarang;?></span><br>
						    		<?php echo'</a>';?>
						    		<span class="tag-property white-text green"><?php echo $post->genre;?></span><br><br>
						  		</div>
						  		<div class="col s1 m1 l1">
						  			<?php
						    		echo '<a data-position="bottom" data-delay="50" data-tooltip="Remove" align="right" class="tooltipped modal-trigger action-content" href="#modal-remove2'.$post->isbn.'"><i class="red-text mdi-content-clear"></i></a>';
						    		 echo 
									'<div id="modal-remove2'.$post->isbn.'" class="modal">
										<div class="modal-content">
											<h4>Remove Collection</h4>
											<p>Are you sure to remove this book from collection?</p>
										</div>
										<div class="modal-footer">
											<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
											<a href="'.base_url()."koleksi/hapus/".$post->isbn.'" class="black-text waves-effect waves-green btn-flat modal-action">remove</a>
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
				echo'
				<div class="col s12 m12 l12 green-text text-darken-3">
					<h6>Tidak ada buku yang dipinjam</h6>
				</div>
				';
			}
			?>  
	  		</div>

	  		<div class="col s12 m12 l12 green lime-text text-lighten-5 card">
				<h5>Wishlist</h5>
			</div>
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
								'<a href="'.base_url()."buku/info/".$post->isbn.'"> <img class="responsive-img" src='.$post->sampul.' alt="book-cover" class="responsive-img"></a>'
							?>
							</div>
							<div class="col s8 m8 l8">
						  		<div class="col s11 m11 l11">
						  			<?php echo
									'<a data-position="bottom" data-delay="50" data-tooltip="'.$post->judul.'" class="tooltipped" href="'.base_url()."buku/info/".$post->isbn.'">';?>
										<h6 class="truncate black-text"><?php echo $post->judul;?></h6>
										<span><?php echo $post->pengarang;?></span><br>
						    		<?php echo'</a>';?>
						    		<span class="tag-property white-text green"><?php echo $post->genre;?></span><br><br>
						  		</div>
						  		<div class="col s1 m1 l1">
						  			<?php
						    		echo '<a data-position="bottom" data-delay="50" data-tooltip="Remove" align="right" class="tooltipped modal-trigger action-content" href="#modal-remove2'.$post->isbn.'"><i class="red-text mdi-content-clear"></i></a>';
						    		 echo 
									'<div id="modal-remove2'.$post->isbn.'" class="modal">
										<div class="modal-content">
											<h4>Remove Collection</h4>
											<p>Are you sure to remove this book from collection?</p>
										</div>
										<div class="modal-footer">
											<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
											<a href="'.base_url()."koleksi/hapus/".$post->isbn.'" class="black-text waves-effect waves-green btn-flat modal-action">remove</a>
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
      	echo'
		<div class="col s12 m12 l12 green-text text-darken-3">
			<h6>Tidak ada wishlist</h6>
		</div>
		';
    }
    ?>  
    </div>
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
    
    xmlhttp.open("POST","http://localhost/kububuku/index.php/Notifikasi/cekNotif", true);
    xmlhttp.send();
  }, 3000);
 
});
</script>