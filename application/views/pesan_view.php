</div>
<div class="container custom-table2">
	<div class="row">
		<div class="col l3">
			<ul class="collection with-header z-depth-1">
				<li class="collection-header"><span class="title-t">Admin System</span></li>
			    <li><a href="<?php echo base_url('index.php/Message');?>" class="active collection-item">Message</a></li>
			    <li><a href="<?php echo base_url('index.php/Request');?>" class="collection-item">Request</a></li>
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
				<ul class="collection z-depth-1">
				<?php 
					foreach ($pesan as $key => $value) 
					{		
						$newDate = date("d-m-Y , H:i:s",strtotime($value->waktu));
						$day = date('l', strtotime($value->waktu));

						echo '<div id="modal-message'.$value->id.'" class="modal">
								<div class="modal-content">
								    <h4>Message</h4>
									<p>'.$value->isi.'</p>
								</div>
								<div class="modal-footer">
									<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Close</a>
									<a href="'.base_url().'index.php/Message/delete/'.$value->id.'" class="black-text waves-effect waves-green btn-flat modal-action">Remove</a>
								</div>
							</div>

						<li class="collection-item">
							<span class="email-address">'.$value->username.'</span><br>
							<a class="modal-trigger" href="#modal-message'.$value->id.'"><span class="title-t">'.$value->judul.'<span></a><br>
							<span class="email-address grey-text">'.$day." , ".$newDate.'</span>
							
							
							<div id="modal-remove'.$value->id.'" class="modal">
								<div class="modal-content">
									<h4>Remove Collection</h4>
									<p>Are you sure to remove this book from collection?</p>
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
		</div>
	</div>
</div>
