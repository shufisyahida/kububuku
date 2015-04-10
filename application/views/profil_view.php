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
				<div class="custom-container-b">
					<ul>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col s12 m6 l9">
			<div class="row">
				<h5>My Collection</h5>
				<h6>Available</h6>	
			</div>
			<div class="row">
				<?php
					if(!empty($koleksiAvailable[0]))
					{
						foreach ($koleksiAvailable as $key => $value)
						{
							echo '<div class="col s12 m12 l6">
							        <div class="card card-book">
							          	<div class="row row-custom-a">
								            <div class="col s4 m4 l4">
								              	<a href="'.base_url('index.php/book/book_info/'.$value->isbn).'"><img src="'.$value->sampul.'" alt="book-cover" class="responsive-img"></a>
								            </div>
								            <div class="col s8 m8 l8">
								            	<span class="card-book-title black-text">'.$value->judul.'</span><br>
								            	<span>'.$value->pengarang.'</span><br>
								            	<span class="tag-property white-text green">'.$value->genre.'</span><br><br>';
								            	if($user->username != $this->session->userdata('username'))
								            	{
								            		echo '<div class="row row-custom-a">
								            	    	<a class="waves-effect waves-green black-text btn-flat" href="'.base_url()."index.php/koleksi/pinjam/".$user->username."/".$value->isbn.'">Borrow</a>
								            		</div>';	
								            	}
								           echo' 	
								            </div>
							          	</div>
							        </div>
							    </div>';
						}
					}
					else
					{
						echo '<div class="col s12 m12 l12">
									<p>No Collection Available</p>
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
								              	<a href="'.base_url('index.php/book/book_info/'.$value->isbn).'"><img src="'.$value->sampul.'" alt="book-cover" class="responsive-img"></a>
								            </div>
								            <div class="col s8 m8 l8">
								            	<span class="card-book-title black-text">'.$value->judul.'</span><br>
								            	<span>'.$value->pengarang.'</span><br>
								            	<span class="tag-property white-text green">'.$value->genre.'</span><br><br>
								            	<div class="row row-custom-a">
								            	    <a class="btn-flat disabled">Borrowed</a>
								            	</div>
								            </div>
							          	</div>
							        </div>
							    </div>';
						}
					} else {
						echo '<div class="col s12 m3 l3">
								<p>No Collection Borrowed</p>
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
			<div class="row">
				Coming soon
			</div>
		</div>
	</div>
</div>