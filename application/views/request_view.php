</div>
<div class="container custom-table2">
	<div class="row">
		<div class="col l3">
			<ul class="collection with-header z-depth-1">
				<li class="collection-header"><span class="title-t">Admin System</span></li>
			    <li><a href="<?php echo base_url('index.php/Message');?>" class="collection-item">Message</a></li>
			    <li><a href="<?php echo base_url('index.php/Request');?>" class="collection-item active">Request</a></li>
			    <li><a href="<?php echo base_url('index.php/Manage');?>" class="collection-item">Manage</a></li>
		    </ul>
		</div>		   
			
	<div class="col l9">
		<div class="col l6">
			<ul class="collection z-depth-1">
				<li class="collection-item"><h5>Delete Request</h5></li>
					<?php 
				  	if(!empty($deleteRequest)){
				  	foreach($deleteRequest as $key => $post){?>
						<li class="collection-item avatar">
							<div>
								<?php echo
								'<img src='.$deleteSampul[$key].' alt="" class="cover">'
								?>
								<span class="title"><?php echo $deleteJudul[$key];?></span>
								<p>
									by <i><?php echo $post->username;?></i>
								</p>
								<a href="<?php echo base_url().'index.php/Request/acceptDeleteBook/'.$post->isbn?>" class="secondary-content"><i class="mdi-action-done green-text small"></i></a>
								<a href="<?php echo base_url().'index.php/Request/declineRequest/'.$post->id?>" class="secondary-content-2"><i class="mdi-content-clear red-text small"></i></a>
							</div>
						</li>
					<?php }}
					else
					{
						echo'
						<li class="collection-item">
							<p><i>No Delete Request</i></p>
						</li>';
					}?> 
			</ul>
		</div>
		<div class="col l6">
			<ul class="collection z-depth-1">
				<li class="collection-item"><h5>Update Request</h5></li>
				<?php 
			  	if(!empty($updateRequest)){
			  	foreach($updateRequest as $key => $post){?>
					<li class="collection-item avatar">
						<div>
							<?php echo
								'<img src='.$updateSampul[$key].' alt="" class="cover">'
							?>
							<span class="title"><?php echo $updateJudul[$key];?><a href="#modal" class="modal-trigger"><i class="mdi-action-open-in-new green-text"></i></a></span>
							<p>
								by <i><?php echo $post->username;?></i>
							</p>
							<a href="<?php echo base_url().'index.php/Request/acceptUpdateBook/'.$post->id.'/'.$post->isbn?>" class="secondary-content"><i class="mdi-action-done green-text small"></i></a>
							<a href="<?php echo base_url().'index.php/Request/declineRequest/'.$post->id?>" class="secondary-content-2"><i class="mdi-content-clear red-text small"></i></a>
							<div id="modal" class="modal">
							<div class="modal-content">
								<h4>Accept Update Book</h4>
								<table>
							        <thead>
							          	<tr>
							              	<th data-field="id">Field</th>
							              	<th data-field="name">Old</th>
							              	<th data-field="price">New</th>
							          	</tr>
							        </thead>
							        <tbody>
							        	<?php 
							        		list($isbn, $isbnNew, $judul, $judulNew, $pengarang, $pengarangNew, $deskripsi, $deskripsiNew, $genre, $genreNew, $penerbit, $penerbitNew, $tahun_terbit, $tahun_terbitNew, $jumlah_halaman, $jumlah_halamanNew, $sampul, $sampulNew) = explode(",", $post->perubahan);
							          	if($isbn != $isbnNew)
							          	{
							          		echo '
							          		<tr>
								            	<td><strong>ISBN</strong></td>
								            	<td>'.$isbn.'</td>
								            	<td>'.$isbnNew.'</td>
								          	</tr>';
							          	}
							          	if($judul != $judulNew)
							          	{
							          		echo '
							          		<tr>
								            	<td><strong>Title</strong></td>
								            	<td>'.$judul.'</td>
								            	<td>'.$judulNew.'</td>
								          	</tr>';
							          	}
							          	if($pengarang != $pengarangNew)
							          	{
							          		echo '
							          		<tr>
								            	<td><strong>Author</strong></td>
								            	<td>'.$pengarang.'</td>
								            	<td>'.$pengarangNew.'</td>
								          	</tr>';
							          	}
							          	if($deskripsi != $deskripsiNew)
							          	{
							          		echo '
							          		<tr>
								            	<td><strong>Description</strong></td>
								            	<td>'.$deskripsi.'</td>
								            	<td>'.$deskripsiNew.'</td>
								          	</tr>';
							          	}
							          	if($genre != $genreNew)
							          	{
							          		echo '
							          		<tr>
								            	<td><strong>Genre</strong></td>
								            	<td>'.$genre.'</td>
								            	<td>'.$genreNew.'</td>
								          	</tr>';
							          	}
							          	if($penerbit != $penerbitNew)
							          	{
							          		echo '
							          		<tr>
								            	<td><strong>Publisher</strong></td>
								            	<td>'.$penerbit.'</td>
								            	<td>'.$penerbitNew.'</td>
								          	</tr>';
							          	}
							          	if($tahun_terbit != $tahun_terbitNew)
							          	{
							          		echo '
							          		<tr>
								            	<td><strong>Tahun Terbit</strong></td>
								            	<td>'.$tahun_terbit.'</td>
								            	<td>'.$tahun_terbitNew.'</td>
								          	</tr>';
							          	}
							          	if($jumlah_halaman != $jumlah_halamanNew)
							          	{
							          		echo '
							          		<tr>
								            	<td><strong>Jumlah Halaman</strong></td>
								            	<td>'.$jumlah_halaman.'</td>
								            	<td>'.$jumlah_halamanNew.'</td>
								          	</tr>';
							          	}
							          	if($sampul != $sampulNew)
							          	{
							          		echo '
							          		<tr>
								            	<td><strong>Cover</strong></td>
								            	<td>'.$sampul.'</td>
								            	<td>'.$sampulNew.'</td>
								          	</tr>';
							          	}							          								          	
							          	
							          	?>
							        </tbody>
							    </table>
							</div>
							<div class="modal-footer">
								<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
								<a href="<?php echo base_url().'index.php/Request/declineRequest/'.$post->id?>" class="black-text waves-effect waves-green btn-flat modal-action">Decline</a>
								<a href="<?php echo base_url().'index.php/Request/acceptUpdateBook/'.$post->id.'/'.$post->isbn?>" class="black-text waves-effect waves-green btn-flat modal-action">Accept</a>
							</div>
						</div>
						</div>
					</li>
				<?php }}
				else
				{
					echo'
						<li class="collection-item">
							<p><i>No Update Request</i></p>
						</li>';
				}?>
			</ul>
		</div>
	</div>
	</div>
</div>