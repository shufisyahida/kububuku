	<div class="secondary-header">
      <div class="secondary-header-inner">
        <div class="container custom-container-c">My Profile</div>
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
<!--borrowed-->
			

<!--available-->

<?php 
if(!empty($koleksiAvailable[0]))
{
	echo '<div class="row custom-margin-bottom">
				<h4>Available</h4>
				<div class="row valign-wrapper">';
			        
					foreach ($koleksiAvailable as $key => $value)
            		{
            			echo'
				        <div class="col s12 m3 l3">
							<div class="card small">
								<div class="card-image">
									<a href="'.base_url('index.php/book/book_info').'"><img src="'.$value->sampul.'" alt="book-cover" class="responsive-img"></a>
								</div>
								<div class="card-content">
									<h6 class="truncate">'.$value->pengarang.'</h6>
									<p class="divider"></p>
									<h5 class="truncate">'.$value->judul.'</h5>
								</div>
							</div>
				        </div>';
				    }
			      
			echo '</div>
			</div>
			<div class="row custom-margin-top">
				<div class="col"><a class="waves-effect waves-green btn-flat">More...</a></div>
			</div>';
}
else
{
		echo '<div class="row custom-margin-bottom">
				<h4>Available</h4>
				<div class="row valign-wrapper">
				<div class="col s12 m3 l3">
					<p>No Collection Available</p>
				</div>
				</div>
			</div>';

}
?>


<!--new-->
<?php 
if(!empty($koleksiBorrowed))
{
	echo '	<div class="row custom-margin-bottom">
				<h4>Borrowed</h4>
				<div class="row valign-wrapper">';
					foreach ($koleksiBorrowed as $key => $value)
            		{
            			echo'
				        <div class="col s12 m3 l3">
							<div class="card small">
								<div class="card-image">
									<a href="'.base_url('index.php/book/book_info').'"><img src="'.$value->sampul.'" alt="book-cover" class="responsive-img"></a>
								</div>
								<div class="card-content">
									<h6 class="truncate">'.$value->pengarang.'</h6>
									<p class="divider"></p>
									<h5 class="truncate">'.$value->judul.'</h5>
								</div>
							</div>
				        </div>';
				    }
			    echo '</div>
			</div>
			<div class="row custom-margin-top">
				<div class="col"><a class="waves-effect waves-green btn-flat">More...</a></div>
			</div>';
}
else
{
		echo '<div class="row custom-margin-bottom">
				<h4>Borrowed</h4>
				<div class="row valign-wrapper">
				<div class="col s12 m3 l3">
					<p>No Collection Borrowed</p>
				</div>
				</div>
			</div>';

}
?>
<!--available-->
		</div>
	</div>
</div>