</div>
<div class="container custom-table2">
	<div class="row">
		<div class="col l3">
			<ul class="collection with-header z-depth-1">
				<li class="collection-header"><span class="title-t">Admin System</span></li>
			    <li><a href="<?php echo base_url('index.php/Message');?>" class="active collection-item">Message</a></li>
			    <li><a href="<?php echo base_url('index.php/Request_admin');?>" class="collection-item">Request</a></li>
			    <li><a href="<?php echo base_url('index.php/Manage');?>" class="collection-item">Manage</a></li>
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
							<a href = "'.base_url()."index.php/Profile/showProfile/".$value->username.'" >
								<span class="email-address">'.$value->username.'</span><br>
							</a>

							<div id="modal-message'.$value->id.'" class="modal">
								<div class="modal-content">
									<h4>From: '. $value->username .'</h4>
									<p>'. $value->isi .'</p>
								</div>
								<div class="modal-footer">
									<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">OK</a>
									<a href="'.base_url().'index.php/Message/delete/'.$value->id.'" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a>
								</div>
							</div>
							<a class="modal-trigger" href="#modal-message'.$value->id.'"><span class="title-t">'.$value->judul.'<span></a><br>
							<span class="email-address grey-text">'.$day." , ".$newDate.'</span>
								
								
							<div id="modal-remove'.$value->id.'" class="modal">
								<div class="modal-content">
									<h4>Remove Message</h4>
									<p>Are you sure to remove this message?</p>
								</div>
								<div class="modal-footer">
									<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
									<a href="'.base_url().'index.php/Message/delete/'.$value->id.'" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a>
								</div>
							</div>
							<a href="#modal-remove'.$value->id.'" class=" modal-trigger secondary-content "><i class="mdi-content-clear red-text small"></i></a>
						</li>';
				} ?>				
			</ul>

			<div class="col l12">
				<a id="more" style="text-align: center" class="waves-effect waves-light btn-large green">MORE</a>
			</div>
		</div>
	</div>
</div>
<script>
$('document').ready(function() {
	var $page = 0;
	console.log("rede");

	//check jika ada <li> yang memiliki index bernilai 10 maka tombol MORE di-disable
	if($("#10").length == 0) {
		$('#more').addClass("disabled");
		$('#more').removeClass("waves-effect waves-light green");
	}	

	$('#more').on('click', function(e){
		e.preventDefault(); //hrefnya di-disable

		$page = $page+10;
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
				for(i in pesan) {
					var $id = pesan[i].id;
					var $username = pesan[i].username;
					var $waktu = pesan[i].waktu;
					var $kategori = pesan[i].kategori;
					var $judul = pesan[i].judul;
					var $isi = pesan[i].isi;

					if(response) {
						$('#more').addClass("disabled");
						$('#more').removeClass("waves-effect waves-light green");
					} 

					$('#message-collection').append(' \
					<li class="collection-item"> \
						<a href = "localhost/kububuku/index.php/Profile/showProfile/'+ $username +'> \
							<span class="email-address">'+ $username +'</span><br> \
						</a> \
						<div id="modal-message'+ $id +'" class="modal"> \
							<div class="modal-content"> \
								<h4>From: '+ $username +'</h4> \
								<p>'+ $isi +'</p> \
							</div> \
							<div class="modal-footer"> \
								<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">OK</a> \
								<a href="localhost/kububuku/index.php/Message/delete/'+ $id +'" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a> \
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
								<a href="localhost/kububuku/index.php/Message/delete/'+ $id +'" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a> \
							</div> \
						</div> \
						<a href="#modal-remove'+ $id +'" class=" modal-trigger secondary-content "><i class="mdi-content-clear red-text small"></i></a> \
					</li>');
					

				}
			}
		}
		xmlhttp.open("POST","http://localhost/kububuku/index.php/Message/getList?page="+ $page, true);
		xmlhttp.send();
	});
});
</script>
