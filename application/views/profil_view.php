	<div class="secondary-header">
      <div class="secondary-header-inner">
        <div class="container custom-container-c">
        	<?php
        	if($user->username == $this->session->userdata('username'))
        		echo 'My Profile';
        	else
        		echo ''.$user->nama.'\'s Profile';
        	
        	?>
        </div>
      </div>
	<?php
	if(!$isAdmin){
	echo '

	      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
	        <a class="z-depth-4 btn-floating btn-large red">
	          <i class="large mdi-content-add"></i>
	        </a>
	        <ul>
	          <li><a href="'.base_url().'index.php/Search/homeBuku" class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
	          <li><a href="'.base_url().'index.php/Search/homeBuku" class="btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add Wishlist"><i class="large mdi-action-favorite"></i></a></li>
	        </ul>
	      </div>';
	  }
      ?>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->

<script type="text/javascript">
// 	function setDuration(val) {
// 	    // $duration = val;
// 	    document.getElementById('textInput').value=val;
// 	}
</script>

<div class="container custom-table">
	<div class="row">
		<div class="col s12 m6 l3">
			<div class="card">
				<div class="container custom-container-a">
					<img class="avatar-property circle" src="<?php echo $user->foto;?>">
				</div>

				<div class="green-text name-property"><?php echo $user->nama;?></div>
				<div class="divider"></div>				
				<div class="custom-container-b">
					<ul>
						<li><i class="green-text tiny mdi-maps-beenhere"></i> 
							<?php echo $user->fakultas;	?>				    		       				    	
						</li>
						<li><i class="green-text tiny mdi-social-person-outline"></i> 
						<?php
							echo $user->status;
						?></li>
						<li><i class="green-text tiny mdi-social-person"></i>
						 <?php	echo $user->jenis_kelamin;?>
						</li>
						<li><i class="green-text tiny mdi-action-event"></i> <?php echo $user->tanggal_lahir;?></li>
						<li><i class="green-text tiny mdi-maps-place"></i><?php echo $user->domisili;?></li>
					</ul>
				</div>
				<div class="divider"></div>
				<div class="custom-container-b" style="text-align: center;">
					<ul>
						<li>As Owner</li>
						<?php
							$hijau = round($user->rank_pemilik);
							$putih = 5-$hijau;

							for($i = 0; $i<$hijau;$i++)
							{
								echo '<li class="ranking-star"><i class="fa fa-star fa-lg green-text"></i></li>';
							}

							for($i = 0; $i<$putih;$i++)
							{
								echo '<li class="ranking-star"><i class="fa fa-star-o fa-lg green-text"></i></li>';
							}
						?>				
					</ul>
					<ul>
						<li>As Borrower</li>
						<?php
							$hijau = round($user->rank_peminjam);
							$putih = 5-$hijau;

							for($i = 0; $i<$hijau;$i++)
							{
								echo '<li class="ranking-star"><i class="fa fa-star fa-lg green-text"></i></li>';
							}

							for($i = 0; $i<$putih;$i++)
							{
								echo '<li class="ranking-star"><i class="fa fa-star-o fa-lg green-text"></i></li>';
							}
						?>
					</ul>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l9">
			<div class="row">
				<?php
        			if($user->username == $this->session->userdata('username'))
        				echo '<h5>My Collections</h5>';
        			else
        				echo '<h5>'.$user->nama.'\'s Collections</h5>';
        	
        			?>	
				<h6>Available</h6>	
			</div>
			<div class="row">
				<?php
					
					$index = 0;

					if(!empty($koleksiAvailable[0]))
					{
						foreach ($koleksiAvailable as $key => $value)
						{
							$duration = 0;
							// $duration=$_POST["duration"];
							echo '<div class="col s12 m12 l6">
							        <div class="card card-book">
							          	<div class="row row-custom-a">
								            <div class="col s4 m4 l4">
								              	<a href="'.base_url('index.php/Book/book_info/'.$value->isbn).'"><img src="'.$value->sampul.'" alt="book-cover" class="responsive-img"></a>
								            </div>
								            <div class="col s8 m8 l8">
								            	 <a href = "'.base_url()."index.php/Book/book_info/".$value->isbn.'">
								            	<span class="card-book-title black-text">'.$value->judul.'</span><br>
								            	</a>
								            	<span>'.$value->pengarang.'</span><br>
								            	<span class="tag-property white-text green">'.$value->genre.'</span><br><br>';
								            	if($user->username != $this->session->userdata('username'))
								            	{
								     //        		$requested = false;
								     //        		$this->db->select('*');
													// $this->db->from('pinjaman');
													// $this->db->where('username_peminjam',$this->session->userdata('username'))->where('username_pemilik',$user->username)->where('isbn',$value->isbn);		
													// $query= $this->db->get()->result();

													// if(sizeof($query)!=0) {				
													// 	$requested = true;
													// }

								     //        		if(!$requested)
								            		if(!$isAdmin){
									            		if(!$requested[$key])
									            		{
										            		echo '<form method="post" action="'.base_url().'index.php/Collection/borrow/">
										            			<div id="modal-duration'.$index.'" class="modal">
																	<div class="modal-content">
																		<h4>Set Duration (Days)</h4>
																		
																			<p class="range-field">
																				<input type="range" name="duration" id="duration" min="1" max="100" />
																				<input type="hidden" name="username" value="'.$user->username.'" />
																				<input type="hidden" name="isbn" value="'.$value->isbn.'" />
																			</p>
																		
																	</div>
																	<div class="modal-footer">
																		<a href="#" class="waves-effect waves-red btn-flat black-text modal-action modal-close">Cancel</a>

																		<!--<a href="'.base_url()."index.php/Collection/borrow/".$user->username."/".$value->isbn."/".$duration.'" class="waves-effect waves-green btn-flat black-text modal-action" type="submit">SET</a> -->

																		<a href="#modal-message"><button type="submit" name="action" method="post" class="waves-effect waves-green btn-flat black-text modal-action">SET</button></a>
																	</div>
																</div>
															</form>';

															echo '<div class="row row-custom-a">
										            	    	<a class="modal-trigger waves-effect waves-green black-text btn-flat" href="#modal-duration'.$index.'">Borrow</a>
										            		</div>';	
									            		}
									            		else
									            		{
									            			echo'
									            			<div class="row row-custom-a">
											            	    <a class="btn-flat disabled">Requested</a>
											            	</div>';
									            		}
								            		}

								            		// echo '<div class="row row-custom-a">
								            	 //    	<a class="waves-effect waves-green black-text btn-flat" href="'.base_url()."index.php/Collection/borrow/".$user->username."/".$value->isbn.'">Borrow</a>
								            		// </div>';	
								            	}
								           echo'
								            </div>
							          	</div>
							        </div>
							    </div>';

							    $index=$index+1;
						}
					}
					else
					{
						echo '<div class="col s12 m12 l12">
									<p>No Collections Available</p>
							</div>';
					}
				?>
			</div>
			<div class="row">
				<h6>Borrowed</h6>
			</div>
			<div class="row">
				<?php
					if(!empty($koleksiBorrowed))
					{
						foreach($koleksiBorrowed as $key => $value)
						{
							echo '<div class="col s12 m12 l6">
							        <div class="card card-book">
							          	<div class="row row-custom-a">
								            <div class="col s4 m4 l4">
								              	<a href="'.base_url('index.php/Book/book_info/'.$value->isbn).'"><img src="'.$value->sampul.'" alt="book-cover" class="responsive-img"></a>
								            </div>
								            <div class="col s8 m8 l8">
								            	<span class="card-book-title black-text">'.$value->judul.'</span><br>
								            	<span>'.$value->pengarang.'</span><br>
								            	<span class="tag-property white-text green">'.$value->genre.'</span><br><br>';
								            	if(!$isAdmin){
								            		echo'
								            	<div class="row row-custom-a">
								            	    <a class="btn-flat disabled">Borrowed</a>
								            	</div>
								            	';}
								            	echo'
								            </div>
							          	</div>
							        </div>
							    </div>';
						}
					} else {
						echo '<div class="col s12 m12 l12">
								<p>No Collections Borrowed</p>
							</div>';
					}
				?>
			</div>
			<div class="divider"></div>
			<div class="row">
				<?php
        			if($user->username == $this->session->userdata('username'))
        				echo '<h5>My Wishlist</h5>';
        			else
        				echo '<h5>'.$user->nama.'\'s Wishlist</h5>';
        	
        			?>	
			</div>

			<!-- <div class="row">
				<?php
				if(empty($OtherWishlist)) {
					if(!empty($MyWishlist))
					{
						foreach($MyWishlist as $key => $value)
						{
							echo '<div class="col s12 m12 l6">
							        <div class="card card-book">
							          	<div class="row row-custom-a">
								            <div class="col s4 m4 l4">
								              	<a href="'.base_url('index.php/Book/book_info/'.$value->isbn).'"><img src="'.$value->sampul.'" alt="book-cover" class="responsive-img"></a>
								            </div>
								            <div class="col s8 m8 l8">
								            	<span class="card-book-title black-text">'.$value->judul.'</span><br>
								            	<span>'.$value->pengarang.'</span><br>
								            	<span class="tag-property white-text green">'.$value->genre.'</span><br><br>
								   
								            </div>
							          	</div>
							        </div>
							    </div>';
						}
					} 

					else {
						echo '<div class="col s12 m12 l12">
								<p>No Entry Wishlist</p>
							</div>';
					}
				}
			
				?>
			</div> -->

			<div class="row">
				<?php
					if(!empty($wishlist))
					{
						foreach($wishlist as $key => $value)
						{
							echo '<div class="col s12 m12 l6">
							        <div class="card card-book">
							          	<div class="row row-custom-a">
								            <div class="col s4 m4 l4">
								              	<a href="'.base_url('index.php/Book/book_info/'.$value->isbn).'"><img src="'.$value->sampul.'" alt="book-cover" class="responsive-img"></a>
								            </div>
								            <div class="col s8 m8 l8">
								            	<span class="card-book-title black-text">'.$value->judul.'</span><br>
								            	<span>'.$value->pengarang.'</span><br>

								            	<span class="tag-property white-text green">'.$value->genre.'</span><br><br>
								            
								            	<div class="row row-custom-a">
								            	   	<a class="modal-trigger waves-effect waves-green black-text btn-flat" href="#modal-inform'.$value->isbn.'">Inform Me</a>
									            </div>

								            	<span class="tag-property white-text green">'.$value->genre.'</span><br><br>';
								            	if($user->username != $this->session->userdata('username'))
								            	{	
								            		if(!$isAdmin){	
								            		if($isInCollection[$key])	
								            		{					    
									            		if(!$informed[$key])
									            		{
									            			echo'
									            			<div id="modal-inform'.$value->isbn.'" class="modal">
														        <div class="modal-content">
														          <h4>Inform This Book?</h4>
														          <p>Are you sure to inform that you have this book?</p>
														        </div>
														        <div class="modal-footer">
														          <a href="#" class="waves-effect waves-red btn-flat black-text modal-action modal-close">Cancel</a>
														  
														          <a href="'.base_url()."index.php/Tanggapan/add/".$value->isbn."/".$user->username.'" class="waves-effect waves-green btn-flat black-text modal-action">INFORM</a>
														         
														        </div>
														    </div>
											            	<div class="row row-custom-a">
											            	   	<a class="modal-trigger waves-effect waves-green black-text btn-flat" href="#modal-inform'.$value->isbn.'">Inform Me</a>
												            </div>';
												        }
									            		else
									            		{
									            			echo'
									            			<div class="row row-custom-a">
											            	    <a class="btn-flat disabled">Informed</a>
											            	</div>';
									            		}
									            	}
									            	}
								            	}
								           echo'

								            </div>
							          	</div>
							        </div>
							    </div>';							  
						}
					} 
					else {
						echo '<div class="col s12 m12 l12">
								<p>No Entry Wishlist</p>
							</div>';
					}
				

				?>
			</div>
			<!-- <div>
				<?php if(!empty($OtherWishlist)) {
					foreach($OtherWishlist as $key => $value)
						{
			 			 
							   }
						}
				?>
	        </div> -->
		</div>
	</div>
</div>



