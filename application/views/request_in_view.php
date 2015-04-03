<div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a class="active" href="<?php echo base_url('index.php/request_in') ?>">Request In</a></li>
          <li><a href="<?php echo base_url('index.php/request_out') ?>">Request Out</a></li>
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
	<h4>request in here</h4>
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

	        	<?php


	           	$index=0;
            	$count=1;

            	foreach($user as $kunci=>$nilai)
            	{
            		foreach ($nilai as $key => $value)
            		{
            			$buku=$book[$index];
            		
            			echo'<tr>
						<td>'.$count.'</td>
						<td>
						<div class="borrower">
							<img class="img-icon-borrower circle responsive-img" src="'.$value->foto.'">
							<div class="custom-borrower">
								<span>'.$value->nama.'</span><br>
								<span>'.$value->username.'</span>
							</div>
						</div>
						</td>
						<td>'.$buku[0]->judul.'</td>
						<td>';

						
						//var_dump($status);
						if($status[$index]==1)
						{
							echo '<div id="modal-accept'.$index.'" class="modal">
								<div class="modal-content">
									<h4>Accept Borrower?</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
								</div>
								<div class="modal-footer">
									<a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
					
									<a href="'.base_url()."index.php/request_in/accept/".$index.'"
		 								class="waves-effect waves-green btn-flat modal-action modal-close">Accept</a>
								</div>
							</div>';
					

							echo '<div id="modal-decline'.$index.'" class="modal">
								<div class="modal-content">
									<h4>Decline Borrower?</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
								</div>
								<div class="modal-footer">
									<a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
								<a href="'.base_url()."index.php/request_in/decline/".$index.'" class="waves-effect waves-green btn-flat modal-action modal-close">Decline</a>
								</div>
							</div>';


							echo '<a class="modal-trigger green-text mdi-action-done" href="#modal-accept'.$index.'"></a>
							<a class="modal-trigger red-text mdi-content-clear" href="#modal-decline'.$index.'"></a>';
						}
						elseif ($status[$index]==2) 
						{
							# gambar jam pasir
						}
						elseif ($status[$index]==3) 
						{
							echo '<a class="modal-trigger green-text mdi-action-done-all" href="#modal-ranking"></a>';
						}
							
						
						echo '
							<div id="modal-contact'.$index.'" class="modal">
								<div class="modal-content">
									<h4>Contact</h4><br>';
									$res = $kontak[$index];
						           	foreach ($res as $key => $value) 
           							{
						               	$email = $value->email_kontak;
						                $fb = $value->fb; 
						                $twitter = $value->twitter;
						                $line = $value->line_id;
						                $hp = $value->hp;
						                $bbm = $value->bbm;
						                $wa = $value->wa;
	    		       				    
	    		       				    if(!is_null($email))
	    		       				    	echo'<p>Email: '.$email.'</p>';
	    		       				    if(!is_null($fb))
	    		       				    	echo'<p>FB: '.$fb.'</p>';
	    		       				    if(!is_null($twitter))
	    		       				    	echo'<p>Twitter: '.$twitter.'</p>';
	    		       				    if(!is_null($line))
	    		       				    	echo'<p>Line: '.$line.'</p>';
	    		       				    if(!is_null($hp))
	    		       				    	echo'<p>HP: '.$hp.'</p>';
	    		       				    if(!is_null($bbm))
	    		       				    	echo'<p>BBM: '.$bbm.'</p>';
	    		       				    if(!is_null($wa))
	    		       				    	echo'<p>WA: '.$wa.'</p>';
           							}
									
						 echo'</div>
							<div class="modal-footer">
								<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">CLOSE</a>
								</div>
							</div>';

						echo '<a class="modal-trigger blue-text mdi-action-perm-contact-cal" href="#modal-contact'.$index.'"></a>
						</td>
						</tr>';

						$count=$count+1;
						$index=$index+1;
            		}

            	}

				?>

	        </tbody>
  		</table>
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