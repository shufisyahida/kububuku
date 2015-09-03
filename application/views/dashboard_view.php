	<div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
	    <a class="z-depth-1 btn-floating btn-large red">
	      	<i class="large mdi-content-add"></i>
	    </a>
	    <ul>
	      	<li><a href="<?php echo base_url('index.php/pencarian/buku') ?>" class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
	      	<li><a href="<?php echo base_url('index.php/pencarian/buku') ?>" class="btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add Wishlist"><i class="large mdi-action-favorite"></i></a></li>
	    </ul>
	</div>
</div><!--end div buat head-wrapper di navbar_view-->

<div class="container custom-table2">
	<div class="row">
		<div class="col m3 l3">
			<ul class="collection z-depth-1">
			    <li class="collection-item avatar">
			      	<img src="<?php $gambar = $this->session->userdata('foto'); echo $gambar;?>" alt="" class="circle">
			      	<span class="title"><?php echo $this->session->userdata('username');?></span>
			      	<p><a>Edit Profile</a></p>
			    </li>
		    </ul>
		    <ul class="collection with-header z-depth-1">
			    <li><a onclick="loadCollection()" class="collection-item">Collection</a></li>
			    <li><a onclick="loadWishlist()" class="collection-item">Wishlist</a></li>
			    <li><a onclick="loadReqin()" class="collection-item">Request in</a></li>
			    <li><a onclick="loadReqout()" class="collection-item">Request out</a></li>
		    </ul>
		</div>
		<div class="col m9 l9" id="content"></div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url('assets/js/baseURL.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/loadContentDashboard.js'); ?>"></script>