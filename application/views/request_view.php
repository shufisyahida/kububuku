</div>
<div class="container custom-table2">
	<div class="row">
		<div class="col l3">
			<ul class="collection with-header z-depth-1">
				<li class="collection-header"><span class="title-t">Sistem Admin</span></li>
			    <li><a href="<?php echo base_url('pesan');?>" class="collection-item">Pesan</a></li>
			    <li><a href="<?php echo base_url('permintaan_admin');?>" class="collection-item active">Permintaan</a></li>
			    <li><a href="<?php echo base_url('kelola');?>" class="collection-item">Kelola</a></li>
		    </ul>
		</div>		   
			
	<div class="col l9">
		<div class="col l6">
			<ul class="collection z-depth-1" id="delete-collection">
				<li class="collection-item"><h5>Permintaan Penghapusan</h5></li>
					<?php 
				  	if(!empty($deleteRequest)){
				  	$index = 1;
				  	foreach($deleteRequest as $key => $post){?>
						<li <?php echo "id='delete-".$index++."'" ?> class="collection-item avatar">
							<div>
								<?php echo
								'<img src='.$deleteSampul[$key].' alt="" class="cover">'
								?>
								<span class="title"><?php echo $deleteJudul[$key];?></span>
								<p>
									by <i><?php echo $post->username;?></i>
								</p>
								<div id="modal-declineRemove<?php echo $post->id?>" class="modal">
								<div class="modal-content">
									<h4>Tolak Permintaan</h4>
									<p>Apakah anda yakin untuk menolak permintaan penghapusan ini?</p>
								</div>
								<div class="modal-footer">
									<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Batal</a>
									<a href="<?php echo base_url().'permintaan_admin/tolak/'.$post->id?>" class="black-text waves-effect waves-green btn-flat modal-action">Decline</a>
								</div>
							</div>
							<div id="modal-acceptRemove<?php echo $post->id?>" class="modal">
								<div class="modal-content">
									<h4>Terima Permintaan</h4>
									<p>Apakah anda yakin untuk menolak permintaan penghapusan ini?</p>
								</div>
								<div class="modal-footer">
									<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Batal</a>
									<a href="<?php echo base_url().'permintaan_admin/terimaPenghapusanBuku/'.$post->isbn?>" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a>
								</div>
							</div>
								<a href="#modal-acceptRemove<?php echo $post->id?>" class="secondary-content modal-trigger"><i class="mdi-action-done green-text small tooltipped" data-position="right" data-delay="10" data-tooltip="Terima"></i></a>
								<a href="#modal-declineRemove<?php echo $post->id?>" class="secondary-content-2 modal-trigger"><i class="mdi-content-clear red-text small tooltipped" data-position="right" data-delay="10" data-tooltip="Tolak"></i></a>
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
			<div class="col l12">
				<a id="more-delete" style="text-align: center" class="waves-effect waves-light btn-large green">Permintaan lainnya</a>
			</div>
		</div>
		<div class="col l6">
			<ul class="collection z-depth-1">
				<li class="collection-item"><h5>Permintaan Pengubahan</h5></li>
				<?php 
			  	if(!empty($updateRequest)){
			  	$index = 1;
			  	foreach($updateRequest as $key => $post){?>
					<li <?php echo "id='delete-".$index++."'" ?> class="collection-item avatar">
						<div>
							<?php echo
								'<img src='.$updateSampul[$key].' alt="" class="cover">'
							?>
							<span class="title"><?php echo $updateJudul[$key];?><a href="#modal<?php echo $post->id?>" class="modal-trigger tooltipped" data-position="right" data-delay="10" data-tooltip="View Update"><i class="mdi-action-open-in-new green-text"></i></a></span>
							<p>
								by <i><?php echo $post->username;?></i>
							</p>

							<div id="modal-declineUpdate<?php echo $post->id?>" class="modal">
								<div class="modal-content">
									<h4>Tolak Permintaan</h4>
									<p>Apakah anda yakin untuk menolak permintaan pengubahan ini?</p>
								</div>
								<div class="modal-footer">
									<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Batal</a>
									<a href="<?php echo base_url().'permintaan_admin/tolak/'.$post->id?>" class="black-text waves-effect waves-green btn-flat modal-action">Tolak</a>
								</div>
							</div>
							<div id="modal-acceptUpdate<?php echo $post->id?>" class="modal">
								<div class="modal-content">
									<h4>Terima Permintaan</h4>
									<p>Apakah anda yakin untuk menerima permintaan pembaruan ini?</p>
								</div>
								<div class="modal-footer">
									<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Batal</a>
									<a href="<?php echo base_url().'permintaan_admin/terimaPembaruanBuku/'.$post->id.'/'.$post->isbn?>" class="black-text waves-effect waves-green btn-flat modal-action">Perbarui</a>
								</div>
							</div>
							<a href="#modal-acceptUpdate<?php echo $post->id?>" class="secondary-content modal-trigger"><i class="mdi-action-done green-text small tooltipped" data-position="right" data-delay="10" data-tooltip="Terima"></i></a>
							<a href="#modal-declineUpdate<?php echo $post->id?>" class="secondary-content-2 modal-trigger"><i class="mdi-content-clear red-text small tooltipped" data-position="right" data-delay="10" data-tooltip="Tolak"></i></a>
							<div id="modal<?php echo $post->id?>" class="modal">
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
								<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Batal</a>
								<a href="<?php echo base_url().'permintaan_admin/tolak/'.$post->id?>" class="black-text waves-effect waves-green btn-flat modal-action">Tolak</a>
								<a href="<?php echo base_url().'permintaan_admin/terimaPembaruanBuku/'.$post->id.'/'.$post->isbn?>" class="black-text waves-effect waves-green btn-flat modal-action">Terima</a>
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
			<div class="col l12">
				<a id="more-update" style="text-align: center" class="waves-effect waves-light btn-large green">Permintaan lainnya</a>
			</div>
		</div>
	</div>
	</div>
</div>
<script>
$('document').ready(function() {
	var $page = 0;
	console.log("rede");

	//check jika ada <li> yang memiliki index bernilai 10 maka tombol MORE di-disable
	if($("#5").length == 0) {
		$('#more').addClass("disabled");
		$('#more').removeClass("waves-effect waves-light green");
	}	

	$('#more-delete').on('click', function(e){
		e.preventDefault(); //hrefnya di-disable

		$page = $page+1;
		var xmlhttp;
		if(window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		}
		else
		{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			console.log("yes");

			if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var response = xmlhttp.responseText;
				var data = JSON.parse(response);
				console.log(response);
				console.log(response.length);
				console.log(data['deleteRequest'].length);

				var deleteRequest = data['deleteRequest'];
				//console.log(pesan);
				if(deleteRequest==false) {
					$('#more').addClass("disabled");
					$('#more').removeClass("waves-effect waves-light green");
				}

				for(i in deleteRequest) {
					var $id = deleteRequest[i].id;
					var $username = deleteRequest[i].username;
					var $isbn = deleteRequest[i].isbn;
					var $waktu = deleteRequest[i].waktu;
					var $deleteSampul = deleteRequest[i].deleteJudul;

					$('#delete-collection').append(' \
					<li class="collection-item avatar">
							<div>
								<?php echo
								'<img src='.$deleteSampul[$key].' alt="" class="cover">'
								?>
								<span class="title"><?php echo $deleteJudul[$key];?></span>
								<p>
									by <i><?php echo $post->username;?></i>
								</p>
								<div id="modal-declineRemove<?php echo $post->id?>" class="modal">
								<div class="modal-content">
									<h4>Decline Request</h4>
									<p>Are you sure to decline this remove request?</p>
								</div>
								<div class="modal-footer">
									<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
									<a href="<?php echo base_url().'permintaan_admin/tolak/'.$post->id?>" class="black-text waves-effect waves-green btn-flat modal-action">Decline</a>
								</div>
							</div>
							<div id="modal-acceptRemove<?php echo $post->id?>" class="modal">
								<div class="modal-content">
									<h4>Accept Request</h4>
									<p>Are you sure to accept this remove request?</p>
								</div>
								<div class="modal-footer">
									<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
									<a href="<?php echo base_url().'permintaan_admin/terimaPenghapusanBuku/'.$post->isbn?>" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a>
								</div>
							</div>
								<a href="#modal-acceptRemove<?php echo $post->id?>" class="secondary-content modal-trigger"><i class="mdi-action-done green-text small tooltipped" data-position="right" data-delay="10" data-tooltip="Accept"></i></a>
								<a href="#modal-declineRemove<?php echo $post->id?>" class="secondary-content-2 modal-trigger"><i class="mdi-content-clear red-text small tooltipped" data-position="right" data-delay="10" data-tooltip="Decline"></i></a>
							</div>
						</li>');
					
					 
				}
			}

			$('.modal-trigger').leanModal();
		}
		xmlhttp.open("POST","http://localhost/kububuku/permintaan_admin/daftarPenghapusan?page="+ $page, true);
		xmlhttp.send();
	});
});
</script>