	<div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
           <li><a href="<?php echo base_url('index.php/request_in') ?>">Request In</a></li>
          <li><a href="<?php echo base_url('index.php/request_out') ?>">Request Out</a></li>
          <li><a class="active" href="<?php echo base_url('index.php/dashboard/collection') ?>">Collection</a></li>
          <li><a href="<?php echo base_url('index.php/dashboard/wishlist') ?>">Wishlist</a></li>
        </ul>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-content-add"></i>
        </a>
        <ul>
          <li><a class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
          <li><a class="btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add Wishlist"><i class="large mdi-action-favorite"></i></a></li>
        </ul>
      </div>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->

<!-- <div class="container custom-table"> -->
	<div class="container custom-table">
		<h4>Borrowed</h4>
		<div class="row">

		<?php foreach($resultBorrowed as $post){ ?>
			
			<div class="col s12 m12 l6">
		    	<div class="card card-book">
		        	<div class="row row-custom-a">
		        		<div class="col s4 m4 l4">
		            		<?php echo
		            			'<a href="'.base_url()."index.php/book/book_info/".$post->isbn.'"> <img src='.$post->sampul.' alt="book-cover" class="responsive-img"></a>'
		            		?>
		          		</div>
		          		<div class="col s8 m8 l8">
		              		<div class="col s11 m11 l11">
		                		<span class="card-title black-text"><?php echo $post->judul;?></span><br>
		                		<span><?php echo $post->pengarang;?></span><br>
		                		<span class="tag-property white-text green"><?php echo $post->genre;?></span>
		              		</div>
		              		<div class="col s1 m1 l1">
		                		<a align="right" class="modal-trigger" href="#modal-remove"><i class="red-text mdi-content-clear"></i></a>
		                		<?php echo 
								'<div id="modal-remove" class="modal">
									<div class="modal-content">
									<h4>Remove Collection</h4>
									<p>Are you sure to remove this book from collection?</p>
									</div>
									<div class="modal-footer">
										<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
										<a href="'.base_url()."index.php/koleksi/delete/".$post->isbn.'" class="black-text waves-effect waves-green btn-flat modal-action">remove</a>
									</div>
								</div>'
								?>
		              		</div>
		          		</div>
		        	</div>
		      	</div>
		    </div>
		<?php }?>  
  		</div>
		<!-- </div> -->
	</div>

	<p class="divider"></p>

	<div class="container custom-table2">
		<h4>Available</h4>
	  	<div class="row">
	  	<?php foreach($resultAvailable as $post){?>
			<div class="col s12 m12 l6">
		    	<div class="card">
		        	<div class="row row-custom-a">
		        		<div class="col s4 m4 l4">
		            		<?php echo
		            			'<a href="'.base_url()."index.php/book/book_info/".$post->isbn.'"> <img src='.$post->sampul.' alt="book-cover" class="responsive-img"></a>'
		            		?>
		          		</div>
		          		<div class="col s8 m8 l8">
		              		<div class="col s11 m11 l11">
		                		<span class="card-title black-text"><?php echo $post->judul;?></span><br>
		                		<span><?php echo $post->pengarang;?></span><br>
		                		<span class="tag-property white-text green"><?php echo $post->genre;?></span>
		              		</div>
		              		<div class="col s1 m1 l1">
		                		<a align="right" class="modal-trigger" href="#modal-remove2"><i class="red-text mdi-content-clear"></i></a>
		                		<?php echo 
								'<div id="modal-remove2" class="modal">
									<div class="modal-content">
										<h4>Remove Collection</h4>
										<p>Are you sure to remove this book from collection?</p>
									</div>
									<div class="modal-footer">
										<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
										<a href="'.base_url()."index.php/koleksi/delete/".$post->isbn.'" class="black-text waves-effect waves-green btn-flat modal-action">remove</a>
									</div>
								</div>'
								?>
		              		</div>
		          		</div>
		        	</div>
		      	</div>
		    </div>
		<?php }?>  
	  	</div>
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
		<a href="'.base_url()."index.php/koleksi/delete/".$post->isbn.' class="waves-effect waves-green btn-flat modal-action modal-close">remove</a>
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


 
