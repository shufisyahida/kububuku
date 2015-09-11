	<div class="secondary-header">
      <div class="secondary-header-inner">
        <div class="container custom-container-c">
        	<?php
        	if($user->username == $this->session->userdata('username'))
        		echo 'Profil Saya';
        	else
        		echo 'Profil '.$user->nama.'';
        	
        	?>
        </div>
      </div>
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
						<li>Sebagai Pemilik</li>
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
						<li>Sebagai Peminjam</li>
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
        				echo 
	        			'<div class="col s12 m12 l12 green lime-text text-lighten-5 card">
							<h5>Koleksi Saya</h5>
						</div>';
        			else
        				echo 
	        			'<div class="col s12 m12 l12 green lime-text text-lighten-5 card">
							<h5>Koleksi '.$user->nama.'</h5>
						</div>';
        	
        			?>	
				<div class="col s12 m12 l12 green lighten-1 lime-text text-lighten-5">
					<h6>Tersedia</h6>
				</div>
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
							          	<div class="col col s11 m11 l11">
								            <div class="col s4 m4 l4">
								              	<a href="'.base_url('buku/info/'.$value->isbn).'"><img src="'.$value->sampul.'" alt="book-cover" class="responsive-img"></a>
								            </div>
								            <div class="col s8 m8 l8">
								            	<a data-position="bottom" data-delay="50" data-tooltip="'.$value->judul.'" class="tooltipped" href="'.base_url()."buku/info/".$value->isbn.'">
													<h6 class="truncate black-text">'.$value->judul.'</h6>
													<h6 class="truncate">'.$value->pengarang.'</h6>
									    		</a>
								            	<span class="tag-property white-text green">'.$value->genre.'</span><br><br>';
								            	if($user->username != $this->session->userdata('username'))
								            	{
								            		if(!$isAdmin){
									            		if(!$requested[$key])
									            		{
										            		echo '<form method="post" action="'.base_url().'koleksi/pinjam/">
										            			<div id="modal-duration'.$index.'" class="modal">
																	<div class="modal-content">
																		<h4>Durasi Peminjaman (Hari)</h4>
																		
																			<p class="range-field">
																				<input type="range" name="duration" id="duration" min="1" max="100" />
																				<input type="hidden" name="username" value="'.$user->username.'" />
																				<input type="hidden" name="isbn" value="'.$value->isbn.'" />
																			</p>
																		
																	</div>
																	<div class="modal-footer">
																		<a href="#" class="waves-effect waves-red btn-flat black-text modal-action modal-close">BATAL</a>

																		<!--<a href="'.base_url()."koleksi/pinjam/".$user->username."/".$value->isbn."/".$duration.'" class="waves-effect waves-green btn-flat black-text modal-action" type="submit">PINJAM</a> -->

																		<a href="#modal-message"><button type="submit" name="action" method="post" class="waves-effect waves-green btn-flat black-text modal-action">PINJAM</button></a>

																	</div>
																</div>
															</form>';

															echo '<div class="row row-custom-a">
										            	    	<a class="modal-trigger waves-effect waves-green black-text btn-flat" href="#modal-duration'.$index.'">Pinjam</a>
										            		</div>';	
									            		}
									            		else
									            		{
									            			echo'
									            			<div class="row row-custom-a">
											            	    <a class="btn-flat disabled">Tunggu Konfirmasi</a>
											            	</div>';
									            		}
								            		}
								            	}
								           echo'
								        
								            </div>
								        </div>
							          	</div>
							        </div>
							    </div>';

							    $index=$index+1;
						}
					}
					else
					{
						echo'
						<br><br>
						<div class="col s12 m12 l12 green-text text-darken-3">
							<h6>Tidak ada koleksi</h6>
						</div>
						';
					}
				?>
			</div>
			<div class="col s12 m12 l12 green lighten-1 lime-text text-lighten-5">
				<h6>Dipinjam</h6>
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
								              	<a href="'.base_url('buku/info/'.$value->isbn).'"><img src="'.$value->sampul.'" alt="book-cover" class="responsive-img"></a>
								            </div>
								            <div class="col s8 m8 l8">
								            	<a href="'.base_url('buku/info/'.$value->isbn).'"><span class="card-book-title black-text">'.$value->judul.'</span><br></a>
								            	<span>'.$value->pengarang.'</span><br>
								            	<span class="tag-property white-text green">'.$value->genre.'</span><br><br>';
								            	if(!$isAdmin){
								            		echo'
								            	<div class="row row-custom-a">
								            	    <a class="btn-flat disabled">Terpinjam</a>
								            	</div>
								            	';}
								            	echo'
								            </div>
							          	</div>
							        </div>
							    </div>';
						}
					} else {
						echo'
						<br><br>
						<div class="col s12 m12 l12 green-text text-darken-3">
							<h6>Tidak ada yang dipinjam</h6>
						</div>
						';
					}
				?>
			</div>
			<div class="divider"></div>
			<div class="row">
				<?php
        			if($user->username == $this->session->userdata('username'))
        				echo 
	        			'<div class="col s12 m12 l12 green lime-text text-lighten-5 card">
							<h5>Wishlist Saya</h5>
						</div>';
        			else
        				echo 
	        			'<div class="col s12 m12 l12 green lime-text text-lighten-5 card">
							<h5>Wishlist '.$user->nama.'</h5>
						</div>';
        	
        			?>	
			</div>
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
								              	<a href="'.base_url('buku/info/'.$value->isbn).'"><img src="'.$value->sampul.'" alt="book-cover" class="responsive-img"></a>
								            </div>
								            <div class="col s8 m8 l8">
								            	<a href="'.base_url('buku/info/'.$value->isbn).'"><span class="card-book-title black-text">'.$value->judul.'</span><br></a>
								            	<span>'.$value->pengarang.'</span><br>

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
														          <h4>Beri respon?</h4>
														          <p>Apakah anda yakin untuk memberitahunya bahwa anda punya buku ini?</p>
														        </div>
														        <div class="modal-footer">
														          <a href="#" class="waves-effect waves-red btn-flat black-text modal-action modal-close">Batal</a>
														  
														          <a href="'.base_url()."Tanggapan/add/".$value->isbn."/".$user->username.'" class="waves-effect waves-green btn-flat black-text modal-action">Ya</a>
														         
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
						echo'
						<div class="col s12 m12 l12 green-text text-darken-3">
							<h6>Tidak ada daftar wishlist</h6>
						</div>
						';
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


