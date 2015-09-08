	<div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
	    <a class="z-depth-1 btn-floating btn-large red">
	      	<i class="large mdi-content-add"></i>
	    </a>
	    <ul>
	      	<li><a href="<?php echo base_url('pencarian/buku') ?>" class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
	      	<li><a href="<?php echo base_url('pencarian/buku') ?>" class="btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add Wishlist"><i class="large mdi-action-favorite"></i></a></li>
	    </ul>
	</div>
</div><!--end div buat head-wrapper di navbar_view-->

<div class="container custom-table2">
	<div class="row">
		<div class="col m3 l3">
			<ul class="collection z-depth-1">
			    <li class="collection-item avatar">
			      	<img src="<?php $gambar = $this->session->userdata('foto'); echo $gambar;?>" alt="" class="circle avatar-property">
			      	<h6>Fallon Candra</h6>
			      	<span class="title"><?php echo $this->session->userdata('username');?></span>
			      	<p><a>Edit Profile</a></p>
			    </li>
		    </ul>
		    <ul class="collection with-header z-depth-1">
		    	<li><a class="collection-item">Beranda</a></li>
		    	<li class="divider"></li>
			    <li><a class="collection-item">Koleksi</a></li>
			    <li class="divider"></li>
			    <li><a class="collection-item">Peminjaman Masuk</a></li>
			    <li class="divider"></li>
			    <li><a class="collection-item">Peminjaman Keluar</a></li>
		    </ul>
		</div>
		<div class="col m9 l9" id="content">
			<h4>Dipinjam</h4>
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
				echo'<h5>Tidak ada</h5>';
			}
			?>  
	  		</div>
			
			<p class="divider"></p>

			<h4>Tersedia</h4>
		  	<div class="row">
		  	<?php 
		  	if(!empty($resultAvailable))
		  	{
		  	foreach($resultAvailable as $post){?>
				<div class="col s12 m12 l6">
			    	<div class="card  card-book">
			        	<div class="row row-custom-a">
			        		<div class="col s4 m4 l4">
			            		<?php echo
			            			'<a href="'.base_url()."buku/info/".$post->isbn.'"> <img class="responsive-img" src='.$post->sampul.' alt="book-cover" class="responsive-img"></a>'
			            		?>
			          		</div>
			          		<div class="col s8 m8 l8">
			              		<div class="col s11 m11 l11">
			              			<?php echo
			            			'<a href="'.base_url()."buku/info/".$post->isbn.'">';?>
			                		<span class="card-title black-text"><?php echo $post->judul;?></span><br>
			                		<?php echo'</a>';?>
			                		<span><?php echo $post->pengarang;?></span><br>
			                		<span class="tag-property white-text green"><?php echo $post->genre;?></span>
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
				echo'<h5>Tidak ada</h5>';
			}

			?>  
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