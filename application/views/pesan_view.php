</div>
<div class="container custom-table2">
	<div class="row">
		<div class="col l3">
			<ul class="collection with-header z-depth-1">
				<li class="collection-header"><span class="title-t">Sistem Admin</span></li>
			    <li><a href="<?php echo base_url('pesan');?>" class="active collection-item">Pesan</a></li>
			    <li><a href="<?php echo base_url('permintaan_admin');?>" class="collection-item">Permintaan</a></li>
			    <li><a href="<?php echo base_url('kelola');?>" class="collection-item">Kelola</a></li>
		    </ul>
		</div>		   
			
		<div class="col l9">
			<div id="modal-report" class="modal">
		        <div class="modal-content">
		            <h4>Report Book</h4>
		            <p>Are you sure to report this book to admin?</p>
		        </div>
		        <div class="modal-footer">
		            <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
		            <a href="#" class="waves-effect waves-green btn-flat modal-action">Report</a>
		        </div>
		    </div>
			<ul class="collection z-depth-1" id="message-collection">
			<?php 
				$index = 0;

				foreach ($pesan as $key => $value) 
				{		
					$newDate = date("d-m-Y , H:i:s",strtotime($value->waktu));
					$day = date('l', strtotime($value->waktu));

					echo '
						<li class="collection-item" id="'. $index++ .'">
							<a href = "'.base_url()."".$value->username.'" >
								<span class="email-address">'.$value->username.'</span><br>
							</a>

							<div id="modal-message'.$value->id.'" class="modal">
								<div class="modal-content">
									<h4>From: '. $value->username .'</h4>
									<p>'. $value->isi .'</p>
								</div>
								<div class="modal-footer">
									<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">OK</a>
									<a href="'.base_url().'pesan/hapus/'.$value->id.'" class="black-text waves-effect waves-green btn-flat modal-action">Hapus</a>
								</div>
							</div>
							<a class="modal-trigger" href="#modal-message'.$value->id.'"><span class="title-t">'.$value->judul.'<span></a><br>
							<span class="email-address grey-text">'.$day." , ".$newDate.'</span>
								
								
							<div id="modal-remove'.$value->id.'" class="modal">
								<div class="modal-content">
									<h4>Hapus Pesan</h4>
									<p>Apakah anda yakin untuk menghapus pesan ini?</p>
								</div>
								<div class="modal-footer">
									<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Batal</a>
									<a href="'.base_url().'pesan/hapus/'.$value->id.'" class="black-text waves-effect waves-green btn-flat modal-action">Hapus</a>
								</div>
							</div>
							<a href="#modal-remove'.$value->id.'" class=" modal-trigger secondary-content "><i class="mdi-content-clear red-text small"></i></a>
						</li>';
				} ?>				
			</ul>

			<div class="col l12">
				<a id="more" style="text-align: center" class="waves-effect waves-light btn-large green">Pesan lainnya</a>
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

	$('#more').on('click', function(e){
		e.preventDefault(); //hrefnya di-disable

		$page = $page+5;
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
				console.log(data['pesan'].length);

				var pesan = data['pesan'];
				console.log(pesan);
				if(pesan==false) {
					$('#more').addClass("disabled");
					$('#more').removeClass("waves-effect waves-light green");
				}

				for(i in pesan) {
					var $id = pesan[i].id;
					var $username = pesan[i].username;
					var $waktu = pesan[i].waktu;
					var $kategori = pesan[i].kategori;
					var $judul = pesan[i].judul;
					var $isi = pesan[i].isi;



					$('#message-collection').append(' \
					<li class="collection-item"> \
						<a href = "localhost/kububuku/'+ $username +'> \
							<span class="email-address">'+ $username +'</span><br> \
						</a> \
						<div id="modal-message'+ $id +'" class="modal"> \
							<div class="modal-content"> \
								<h4>From: '+ $username +'</h4> \
								<p>'+ $isi +'</p> \
							</div> \
							<div class="modal-footer"> \
								<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">OK</a> \
								<a href="localhost/kububuku/pesan/hapus/'+ $id +'" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a> \
							</div> \
						</div> \
						<a class="modal-trigger" href="#modal-message'+ $id +'"><span class="title-t">'+ $judul +'<span></a><br> \
						<span class="email-address grey-text">'+ $waktu +'</span> \
						<div id="modal-remove'+ $id +'" class="modal"> \
							<div class = "modal-content"> \
								<h4>Remove Message</h4> \
								<p>Are you sure to remove this message?</p> \
							</div> \
							<div class="modal-footer"> \
								<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a> \
								<a href="Message/delete/'+ $id +'" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a> \
							</div> \
						</div> \
						<a href="#modal-remove'+ $id +'" class=" modal-trigger secondary-content "><i class="mdi-content-clear red-text small"></i></a> \
					</li>');
					
					 
				}
			}

			$('.modal-trigger').leanModal();
		}
		xmlhttp.open("POST","http://localhost/kububuku/pesan/lihatDaftar?page="+ $page, true);
		xmlhttp.send();
	});
});
</script>
