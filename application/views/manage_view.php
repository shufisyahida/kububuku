</div>
<div class="container custom-table2">
	<div class="row">
		<div class="col l3">
			<ul class="collection with-header z-depth-1">
				<li class="collection-header"><span class="title-t">Admin System</span></li>
<<<<<<< HEAD
			    <li><a href="<?php echo base_url('pesan');?>" class="collection-item">Message</a></li>
			    <li><a href="<?php echo base_url('permintaan_admin');?>" class="collection-item">Request</a></li>
			    <li><a href="<?php echo base_url('kelola');?>" class="active collection-item">Manage</a></li>
=======
			    <li><a href="<?php echo base_url('Message');?>" class="collection-item">Message</a></li>
			    <li><a href="<?php echo base_url('Request_admin');?>" class="collection-item">Request</a></li>
			    <li><a href="<?php echo base_url('Manage');?>" class="active collection-item">Manage</a></li>
>>>>>>> aa7fe68d208827e9a7a4a04466d9fb86915065ea
		    </ul>
		</div>		   
			
	<div class="col l9">
		<div class="col l6">
			<ul class="collection z-depth-1" id="user-content">
				<li class="collection-item"><h5>Users</h5></li>
				<?php 
				$index = 1;
				foreach ($user as $key => $value) 
				{
					
					$newDate = date("d-m-Y , H:i:s",strtotime($value->tanggal_buat));
					$day = date('l', strtotime($value->tanggal_buat));
				echo '
				<li class="collection-item avatar" id="user-'.$index++.'">
					<div>
					<a href = "'.base_url()."".$value->username.'" >
						<img src="'.$value->foto.'" alt="" class="circle">
					</a>
					<a href = "'.base_url()."".$value->username.'" >
						<span class="title">'.$value->nama.'</span>
					</a>
						<p>
							<span class="grey-text" style="font-size: 0.9em;">'.$day.' , '.$newDate.'</span>
						</p>

						<div id="modal-remove'.$value->username.'" class="modal">
							<div class="modal-content">
								<h4>Remove User</h4>
								<p>Are you sure to remove this user?</p>
							</div>
							<div class="modal-footer">
								<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
<<<<<<< HEAD
								<a href="'.base_url().'kelola/deleteUser/'.$value->username.'" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a>
=======
								<a href="'.base_url().'Manage/deleteUser/'.$value->username.'" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a>
>>>>>>> aa7fe68d208827e9a7a4a04466d9fb86915065ea
							</div>
						</div>
						<a href="#modal-remove'.$value->username.'" class="modal-trigger secondary-content"><i class="mdi-content-clear red-text small"></i></a>
					</div>
				</li>';
				}
				?>
			</ul>
			<div class="col l12">
				<a id="more1" style="text-align: center" class="waves-effect waves-light btn-large green">MORE USERS</a>
			</div>
		</div>


		<div class="col l6">
			<ul class="collection z-depth-1" id="book-content">
				<li class="collection-item"><h5>Books</h5></li>
				<?php 
				$index = 1;
				foreach ($buku as $key => $value) 
				{
					
					$newDate = date("d-m-Y , H:i:s",strtotime($value->tanggal_buat));
					$day = date('l', strtotime($value->tanggal_buat));

					echo'
				<li class="collection-item avatar" id="book-'.$index++.'">
					<div>
					<a href = "'.base_url()."buku/info/".$value->isbn.'" >
						<img src="'.$value->sampul.'" alt="" class="cover">
					</a>
					<a href = "'.base_url()."buku/info/".$value->isbn.'" >
						<span class="title">'.$value->judul.'</span>
					</a>
						<p>
							<span class="grey-text" style="font-size: 0.9em;">'.$day.' , '.$newDate.'</span>
						</p>

						<div id="modal-remove'.$value->isbn.'" class="modal">
							<div class="modal-content">
								<h4>Remove Book</h4>
								<p>Are you sure to remove this book?</p>
							</div>
							<div class="modal-footer">
								<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
<<<<<<< HEAD
								<a href="'.base_url().'kelola/deleteBook/'.$value->isbn.'" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a>
=======
								<a href="'.base_url().'Manage/deleteBook/'.$value->isbn.'" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a>
>>>>>>> aa7fe68d208827e9a7a4a04466d9fb86915065ea
							</div>
						</div>
						<a href="#modal-remove'.$value->isbn.'" class="secondary-content modal-trigger"><i class="mdi-content-clear red-text small"></i></a>
					</div>
				</li>';
				}?>
			</ul>

			<div class="col l12">
				<a id="more2" style="text-align: center" class="waves-effect waves-light btn-large green">MORE BOOKS</a>
			</div>
		</div>
		

		

	</div>
</div>
<script>
$('document').ready(function() {
	var $page = 0;
	console.log("rede");

	//check jika ada <li> yang memiliki index bernilai 10 maka tombol MORE di-disable
	if($("#user-5").length == 0) {
		$('#more1').addClass("disabled");
		$('#more1').removeClass("waves-effect waves-light green");
	}

	$('#more1').on('click', function(e){
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
				console.log(data['user'].length);
				console.log(data['buku'].length);



				var user = data['user'];
				var buku = data['buku'];
				if(!user) {
					$('#more1').addClass("disabled");
					$('#more1').removeClass("waves-effect waves-light green");
				}
				for(i in user) {
					 var $username = user[i].username;
			          var $password = user[i].password;
			          var $nama = user[i].nama;
			          var $email = user[i].email;
			          var $domisili = user[i].domisili;
			          var $fakultas = user[i].fakultas;
			          var $jenis_kelamin = user[i].jenis_kelamin;
			          var $status = user[i].status;
			          var $rank_pemilik = user[i].rank_pemilik;
			          var $rank_peminjam = user[i].rank_peminjam;
			          var $foto = user[i].foto;
			          var $tanggal_lahir = user[i].tanggal_lahir;
			          var $email_kontak = user[i].email_kontak;
			          var $fb = user[i].fb;
			          var $twitter = user[i].twitter;
			          var $line_id = user[i].line_id;
			          var $hp = user[i].hp;
			          var $bbm = user[i].bbm;
			          var $wa = user[i].wa;
			          var $tanggal_buat = user[i].tanggal_buat;

					$('#user-content').append(' \
						<li class="collection-item avatar"> \
						<div> \
						<a href = "Profile/showProfile/'+$username+'" > \
							<img src="'+$foto+'" alt="" class="circle"> \
						</a> \
						<a href = "Profile/showProfile/'+$username+'" > \
							<span class="title">'+$nama+'</span> \
						</a> \
						<p> \
							<span class="grey-text" style="font-size: 0.9em;">'+$tanggal_buat+'</span> \
						</p> \
						<div id="modal-remove'+$username+'" class="modal"> \
						<div class="modal-content"> \
							<h4>Remove User</h4> \
							<p>Are you sure to remove this user?</p> \
						</div> \
						<div class="modal-footer"> \
							<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a> \
							<a href="Manage/deleteUser/'+$username+'" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a> \
						</div> \
						</div> \
							<a href="#modal-remove'+$username+'" class="modal-trigger secondary-content"><i class="mdi-content-clear red-text small"></i></a> \
						</div> \
						</li>');
				}
			}

			$('.modal-trigger').leanModal();
		}
<<<<<<< HEAD
		xmlhttp.open("POST","http://localhost/kububuku/kelola/getList?page="+ $page, true);
=======
		xmlhttp.open("POST","http://localhost/kububuku/Manage/getList?page="+ $page, true);
>>>>>>> aa7fe68d208827e9a7a4a04466d9fb86915065ea
		xmlhttp.send();
	});
});
</script>

<script>
$('document').ready(function() {
	var $page = 0;
	console.log("rede");

	//check jika ada <li> yang memiliki index bernilai 10 maka tombol MORE di-disable
	if($("#book-5").length == 0) {
		$('#more2').addClass("disabled");
		$('#more2').removeClass("waves-effect waves-light green");
	}

	$('#more2').on('click', function(e){
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
				console.log(data['buku'].length);
				console.log(data['buku']);

			
				var buku = data['buku'];
				if(!buku) {
					$('#more2').addClass("disabled");
					$('#more2').removeClass("waves-effect waves-light green");
				}
				for(i in buku) {
					 var $isbn = buku[i].isbn;
					 console.log($isbn);
			          var $judul = buku[i].judul;
			          var $pengarang = buku[i].pengarang;
			          var $deskripsi = buku[i].deskripsi;
			          var $genre = buku[i].genre;
			          var $penerbit = buku[i].penerbit;
			          var $tahun_terbit = buku[i].tahun_terbit;
			          var $jumlah_halaman = buku[i].jumlah_halaman;
			          var $sampul = buku[i].sampul;
			          var $tanggal_buat = buku[i].tanggal_buat;

						$('#book-content').append(' \
							<li class="collection-item avatar"> \
							<div> \
								<a href = "Book/book_info/'+$isbn+'" > \
									<img src="'+$sampul+'" alt="" class="cover"> \
								</a> \
								<a href = "Book/book_info/'+$isbn+'" > \
									<span class="title">'+$judul+'</span> \
								</a> \
								<p> \
									<span class="grey-text" style="font-size: 0.9em;">'+$tanggal_buat+'</span> \
								</p> \
								<div id="modal-remove'+$isbn+'" class="modal"> \
									<div class="modal-content"> \
										<h4>Remove Book</h4> \
										<p>Are you sure to remove this book?</p> \
									</div> \
									<div class="modal-footer"> \
										<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a> \
										<a href="Manage/deleteBook/'+$isbn+'" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a> \
									</div> \
								</div> \
								<a href="#modal-remove'+$isbn+'" class="secondary-content modal-trigger"><i class="mdi-content-clear red-text small"></i></a> \
							</div> \
							</li>');
						
					

				}
			}

			$('.modal-trigger').leanModal();
		}
<<<<<<< HEAD
		xmlhttp.open("POST","http://localhost/kububuku/kelola/getList?page="+ $page, true);
=======
		xmlhttp.open("POST","http://localhost/kububuku/Manage/getList?page="+ $page, true);
>>>>>>> aa7fe68d208827e9a7a4a04466d9fb86915065ea
		xmlhttp.send();
	});
});
</script>
