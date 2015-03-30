	<div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a class="active" href="<?php echo base_url('index.php/dashboard/request_in') ?>">Request In</a></li>
          <li><a href="<?php echo base_url('index.php/dashboard/request_out') ?>">Request Out</a></li>
          <li><a href="<?php echo base_url('index.php/dashboard/collection') ?>">Collection</a></li>
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
	<h2>request in here</h2>
	<div class="card-panel z-depth-1">
		<table class="bordered hoverable responsive-table">
	        <thead>
				<tr>
					<th data-field="id">No.</th>
					<th data-field="name">Borrower</th>
					<th data-field="book">Book</th>
					<th data-field="action">Action</th>
				</tr>
	        </thead>

	        <tbody>
				<tr>
					<td>1.</td>
					<td>
						<div class="borrower">
							<img class="img-icon-borrower circle responsive-img" src="<?php echo base_url('assets/img/elka.png') ?>">
							<div class="custom-borrower">
								<span>Eclair</span><br>
								<span>Faculty of X</span>
							</div>
						</div>
					</td>
					<td>$0.87</td>
					<td>
						<a class="modal-trigger green-text mdi-action-done" href="#modal-accept"></a>
						<a class="modal-trigger red-text mdi-content-clear" href="#modal-decline"></a>
						<a class="modal-trigger blue-text mdi-action-perm-contact-cal" href="#modal-contact"></a>
					</td>
				</tr>
				<tr>
					<td>2.</td>
					<td>
						<div class="borrower">
							<img class="img-icon-borrower circle responsive-img" src="<?php echo base_url('assets/img/elka.png') ?>">
							<div class="custom-borrower">
								<span>Jellybean</span><br>
								<span>Faculty of X</span>
							</div>
						</div>
					</td>
					<td>$3.76</td>
					<td>
						<a class="modal-trigger green-text mdi-action-done" href="#modal-accept"></a>
						<a class="modal-trigger red-text mdi-content-clear" href="#modal-decline"></a>
						<a class="modal-trigger blue-text mdi-action-perm-contact-cal" href="#modal-contact"></a>
					</td>
				</tr>
				<tr>
					<td>3.</td>
					<td>
						<div class="borrower">
							<img class="img-icon-borrower circle responsive-img" src="<?php echo base_url('assets/img/elka.png') ?>">
							<div class="custom-borrower">
								<span>Lolipop</span><br>
								<span>Faculty of Y</span>
							</div>
						</div>
					</td>
					<td>$7.00</td>
					<td>
						<a class="modal-trigger green-text mdi-action-done-all" href="#modal-ranking"></a>
					</td>
				</tr>
	        </tbody>
  		</table>
  	</div>
</div>

<!-- Modal Structure -->
<div id="modal-accept" class="modal">
	<div class="modal-content">
		<h4>Accept Borrower?</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	</div>
	<div class="modal-footer">
		<a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
		<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Accept</a>
	</div>
</div>

<!-- Modal Structure -->
<div id="modal-decline" class="modal">
	<div class="modal-content">
		<h4>Decline Borrower?</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	</div>
	<div class="modal-footer">
		<a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
		<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Decline</a>
	</div>
</div>

<!-- Modal Structure -->
<div id="modal-contact" class="modal">
	<div class="modal-content">
		<h4>Contact</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	</div>
	<div class="modal-footer">
		<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">CLOSE</a>
	</div>
</div>

<!-- Modal Structure -->
<div id="modal-ranking" class="modal">
	<div class="modal-content">
		<h4>Give Rank</h4>
		<p>Si X has return your book, give some rank.</p>
	</div>
	<div class="modal-footer">
		<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">OK</a>
	</div>
</div>

<script type="text/javascript">
	// $(document).ready(function(){
	// 	$('#modal-accept').openModal();
	// 	$('#modal-decline').openModal();
	// 	$('#modal-contact').openModal();
	// });

	// $(document).ready(function(){
	// 	$('#modal-accept').closeModal();
	// 	$('#modal-decline').closeModal();
	// 	$('#modal-contact').closeModal();
	// });
</script>