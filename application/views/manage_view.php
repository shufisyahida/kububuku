	<div class="col l9">
		<div class="col l6">
			<ul class="collection z-depth-1">
				<li class="collection-item"><h5>Users</h5></li>
				<?php foreach ($user as $key => $value) 
				{
					$newDate = date("d-m-Y , H:i:s",strtotime($value->tanggal_buat));
					$day = date('l', strtotime($value->tanggal_buat));
				echo '
				<li class="collection-item avatar">
					<div>
						<img src="'.$value->foto.'" alt="" class="circle">
						<span class="title">'.$value->nama.'</span>
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
								<a href="'.base_url().'index.php/Manage/deleteUser/'.$value->username.'" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a>
							</div>
						</div>
						<a href="#modal-remove'.$value->username.'" class="modal-trigger secondary-content"><i class="mdi-content-clear red-text small"></i></a>
					</div>
				</li>';
				}
				?>
			</ul>
		</div>
		<div class="col l6">
			<ul class="collection z-depth-1">
				<li class="collection-item"><h5>Books</h5></li>
				<?php foreach ($buku as $key => $value) 
				{
					$newDate = date("d-m-Y , H:i:s",strtotime($value->tanggal_buat));
					$day = date('l', strtotime($value->tanggal_buat));

					echo'
				<li class="collection-item avatar">
					<div>
						<img src="'.$value->sampul.'" alt="" class="cover">
						<span class="title">'.$value->judul.'</span>
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
								<a href="'.base_url().'index.php/Manage/deleteBook/'.$value->isbn.'" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a>
							</div>
						</div>
						<a href="#modal-remove'.$value->isbn.'" class="secondary-content modal-trigger"><i class="mdi-content-clear red-text small"></i></a>
					</div>
				</li>';
				}?>
			</ul>
		</div>
		<div class="col l12">
			<a style="text-align: center" class="waves-effect waves-light btn-large green">MORE</a>
		</div>
	</div>
</div>