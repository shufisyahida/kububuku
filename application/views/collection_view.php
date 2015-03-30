	<div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a href="<?php echo base_url('index.php/dashboard/request_in') ?>">Request In</a></li>
          <li><a href="<?php echo base_url('index.php/dashboard/request_out') ?>">Request Out</a></li>
          <li><a class="active" href="<?php echo base_url('index.php/dashboard/collection') ?>">Collection</a></li>
          <li><a href="<?php echo base_url('index.php/dashboard/wishlist') ?>">Wishlist</a></li>
        </ul>
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
	<div class="col s12 m8 offset-m2 l6 offset-l3">
		<h4>Borrowed</h4>
		<div class="row valign-wrapper">
	        <div class="col s12 m3 l3">
				<div class="card small">
					<div class="card-image">
						<a href="<?php echo base_url('index.php/book/book_info') ?>"><img src="<?php echo base_url('assets/img/cover1.jpg') ?>" alt="book-cover" class="responsive-img"></a>
					</div>
					<div class="card-content">
						<h6 class="truncate">J.R.R. Tolkien</h6>
						<p class="divider"></p>
						<h5 class="truncate">The Lord of The Rings</h5>
					</div>
				</div>
	        </div>

	        <div class="col s12 m3 l3">
				<div class="card small">
					<div class="card-image">
						<a href="<?php echo base_url('index.php/book/book_info') ?>"><img src="<?php echo base_url('assets/img/cover2.jpg') ?>" alt="book-cover" class="responsive-img"></a>
					</div>
					<div class="card-content">
						<h6 class="truncate">J.R.R. Tolkien</h6>
						<p class="divider"></p>
						<h5 class="truncate">The Hobbit</h5>
					</div>
				</div>
	        </div>
		</div>
  	</div>

  	<div class="col s12 m8 offset-m2 l6 offset-l3">
		<h4>Available</h4>
		<div class="row valign-wrapper">
	        <div class="col s12 m3 l3">
				<div class="card small">
					<div class="card-image">
						<a href="<?php echo base_url('index.php/book/book_info') ?>"><img src="<?php echo base_url('assets/img/cover1.jpg') ?>" alt="book-cover" class="responsive-img"></a>
					</div>
					<div class="card-content">
						<h6 class="truncate">J.R.R. Tolkien</h6>
						<p class="divider"></p>
						<h5 class="truncate">The Lord of The Rings</h5>
						<a class="modal-trigger red-text mdi-content-clear" href="#modal-remove"></a>
					</div>
				</div>
	        </div>

	        <div class="col s12 m3 l3">
				<div class="card small">
					<div class="card-image">
						<a href="<?php echo base_url('index.php/book/book_info') ?>"><img src="<?php echo base_url('assets/img/cover2.jpg') ?>" alt="book-cover" class="responsive-img"></a>
					</div>
					<div class="card-content">
						<h6 class="truncate">J.R.R. Tolkien</h6>
						<p class="divider"></p>
						<h5 class="truncate">The Hobbit</h5>
						<a class="modal-trigger red-text mdi-content-clear" href="#modal-remove"></a>
					</div>
				</div>
	        </div>

	        <div class="col s12 m3 l3">
				<div class="card small">
					<div class="card-image">
						<a href="<?php echo base_url('index.php/book/book_info') ?>"><img src="<?php echo base_url('assets/img/cover3.jpg') ?>" alt="book-cover" class="responsive-img"></a>
					</div>
					<div class="card-content">
						<h6 class="truncate">J.R.R. Tolkien</h6>
						<p class="divider"></p>
						<h5 class="truncate">Unknown</h5>
						<a class="modal-trigger red-text mdi-content-clear" href="#modal-remove"></a>
					</div>
				</div>
	        </div>

	        <div class="col s12 m3 l3">
				<div class="card small">
					<div class="card-image">
						<a href="<?php echo base_url('index.php/book/book_info') ?>"><img src="<?php echo base_url('assets/img/cover1.jpg') ?>" alt="book-cover" class="responsive-img"></a>
					</div>
					<div class="card-content">
						<h6 class="truncate">J.R.R. Tolkien</h6>
						<p class="divider"></p>
						<h5 class="truncate">ksjflsakdjflksdajflksdj lksdjflksdaj flksjdf klsaj flkjsdklfj</h5>
						<a class="modal-trigger red-text mdi-content-clear" href="#modal-remove"></a>
					</div>
				</div>
	        </div>

		</div>
  	</div>
</div>

<!-- Modal Structure -->
<div id="modal-remove" class="modal">
	<div class="modal-content">
		<h4>Remove Collection</h4>
		<p>Are you sure to remove this book from collection?</p>
	</div>
	<div class="modal-footer">
		<a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
		<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">remove</a>
	</div>
</div>