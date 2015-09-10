
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
			    <li><a href="<?php echo base_url('koleksi'); ?>" class="collection-item">Koleksi</a></li>
			    <li class="divider"></li>
			    <li><a href="<?php echo base_url('permintaan_masuk'); ?>" class="collection-item active">Peminjaman Masuk</a></li>
			    <li class="divider"></li>
			    <li><a href="<?php echo base_url('permintaan_keluar'); ?>" class="collection-item">Peminjaman Keluar</a></li>
		    </ul>
		</div>
		<div id="modal-terkirim" class="modal">
		    <div class="modal-content">
		        <h4>Contact Us</h4>
		        <p>Are you sure to sent this message?</p>
		    </div>
		    <div class="modal-footer">
		        <button  href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</button>
		        <button class="black-text waves-effect waves-green btn-flat modal-action"  type="submit" name="action" method="post">Sent</button>
		    </div>
		</div>
		<div class="col s12 m9 l9" id="content">
			<div class="card-panel z-depth-1">
				<table class="bordered hoverable responsive-table">
			        <thead>
						<tr>
							<th data-field="id">No.</th>
							<th data-field="name">Peminjam</th>
							<th data-field="book">Buku</th>
							<th data-field="duration">Durasi (Hari)</th>
							<th data-field="action">Tindakan</th>
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
								<a href = "'.base_url()."".$value->username.'" >
									<img class="img-icon-borrower circle responsive-img" src="'.$value->foto.'">
								</a>
									<div class="custom-borrower">
									<a href = "'.base_url()."".$value->username.'" >
										<span>'.$value->nama.'</span><br>
									</a>
										<span>'.$value->username.'</span>
									</div>
								</div>
								</td>

								<td>

								<div class="borrower">
								<a href = "'.base_url()."buku/info/".$buku[0]->isbn.'" >
									<img class="img-icon-borrower circle responsive-img" src="'.$buku[0]->sampul.'">
								</a>
									<div class="custom-borrower">
								<a href = "'.base_url()."buku/info/".$buku[0]->isbn.'" >
										<span>'.$buku[0]->judul.'</span><br>
								</a>
										<span>'.$buku[0]->pengarang.'</span>
									</div>
								</div>

								</td>

								<td>'.$durasi[$index].'</td>
								<td>';

								
								//var_dump($status);
								if($status[$index]==1)
								{
									echo '<div id="modal-accept'.$index.'" class="modal">
										<div class="modal-content">
											<h4>Terima Peminjaman?</h4>
											<p></p>
										</div>
										<div class="modal-footer">
											<a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Batal</a>
							
											<a href="'.base_url()."permintaan_masuk/terima/".$idPinjaman[$index]."/".$buku[0]->isbn.'"
				 								class="waves-effect waves-green btn-flat modal-action">Terima</a>
										</div>
									</div>';
							

									echo '<div id="modal-decline'.$index.'" class="modal">
										<div class="modal-content">
											<h4>Tolak Peminjaman?</h4>
											<p></p>
										</div>
										<div class="modal-footer">
											<a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Batal</a>
											<a href="'.base_url()."permintaan_masuk/tolak/".$idPinjaman[$index].'" class="waves-effect waves-green btn-flat modal-action">Tolak</a>
										</div>
									</div>';


									echo '<a data-position="bottom" data-delay="50" data-tooltip="Terima" class="tooltipped modal-trigger green-text mdi-action-done" href="#modal-accept'.$index.'"></a>
									<a data-position="bottom" data-delay="50" data-tooltip="Tolak" class="tooltipped modal-trigger red-text mdi-content-clear" href="#modal-decline'.$index.'"></a>';
								}
								elseif ($status[$index]==2) 
								{
									echo '<a data-position="bottom" data-delay="50" data-tooltip="Buku Terpinjam"class="tooltipped green-text mdi-file-file-upload"></a>';
								}
								elseif ($status[$index]==3) 
								{
									/*echo '<div id="modal-ranking'.$index.'" class="modal">
										<div class="modal-content">
											<h4>Give Rank</h4>
											<p class="range-field">
												<input type="range" name="borrower-rank" id="borrower-rank" min="1" max="5" />
											</p>
										</div>
										<div class="modal-footer">';
											echo '<a href="'.base_url()."permintaan_masuk/konfirmasi_pengembalian/".$idPinjaman[$index]."/".$buku[0]->isbn.'" class="waves-effect waves-green btn-flat modal-action">OK</a>
										</div>
									</div>';*/

									echo '<form method="post" action="'.base_url().'permintaan_masuk/konfirmasi_pengembalian/">
					            			<div id="modal-ranking'.$index.'" class="modal">
												<div class="modal-content">
													<h4>Konfirmasi Pengembalian</h4>
													<p>Buku telah dikembalikan, beri nilai untuk peminjam.</p>
													
														<p class="range-field">

															<div class="star">
																<div class="backstar">
																		<div class="tombol t1"></div>
																		<div class="tombol t2"></div>
																		<div class="tombol t3"></div>
																		<div class="tombol t4"></div>
																		<div class="tombol t5"></div>
																</div>
															</div>			
															<input class="hide" type="text" name="borrower-rank" id="borrower-rank" value="1">

															<input type="hidden" name="idPinjaman" value="'.$idPinjaman[$index].'" />
															<input type="hidden" name="borrower" value="'.$value->username.'" />
															<input type="hidden" name="isbn" value="'.$buku[0]->isbn.'" />
														</p>
													
												</div>
												<div class="modal-footer">
													<a href="#" class="waves-effect waves-red btn-flat black-text modal-action modal-close">Batal</a>
													<a href="#modal-message"><button type="submit" name="action" method="post" class="waves-effect waves-green btn-flat black-text modal-action">OK</button></a>
												</div>
											</div>
										</form>';






									echo '<a data-position="bottom" data-delay="50" data-tooltip="Konfirmasi Pengembalian" class="tooltipped modal-trigger blue-text mdi-content-archive" href="#modal-ranking'.$index.'"></a>';
								}
									
								
								echo '
									<div id="modal-contact'.$index.'" class="modal">
										<div class="modal-content">
											<h4>Kontak</h4><br>';
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
										<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Keluar</a>
										</div>
									</div>';

								echo '<a data-position="bottom" data-delay="50" data-tooltip="Lihat Kontak" class="tooltipped modal-trigger purple-text mdi-action-perm-contact-cal" href="#modal-contact'.$index.'"></a>
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