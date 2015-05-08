		<div class="col l9">
			<ul class="collection">
				<li class="collection-item">
					test
					<a class="modal-trigger" href="#modal-remove">Title</a>
					test
					<a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
					<div id="modal-remove" class="modal">
						<div class="modal-content">
							<h4>Remove Collection</h4>
							<p>Are you sure to remove this book from collection?</p>
						</div>
						<div class="modal-footer">
							<a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
							<a href="#" class="black-text waves-effect waves-green btn-flat modal-action">remove</a>
						</div>
					</div>
				</li>
				
			</ul>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
	    $('.collapsible').collapsible({
	      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
	    });
	    $('.modal-trigger').leanModal();
	  });
</script>