<div class="secondary-header">
      <div class="secondary-header-inner">
        <div class="container custom-container-c">Contact Us</div>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-content-add"></i>
        </a>
        <ul>
          <li><a href="<?php echo base_url('index.php/Search/homeBuku') ?>" class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
          <li><a href="<?php echo base_url('index.php/Search/homeBuku') ?>" class="btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add Wishlist"><i class="large mdi-action-favorite"></i></a></li>
        </ul>
      </div>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->

<div class="container custom-table">
  <div class="row">
    <div class="col s12 m12 l12">
      <div class="card-panel white z-depth-1">
       
        <form method="post" action="<?php echo base_url('index.php/Pesan/createPesan') ?>">          
            <div class="row">
                <div class="col s12 m5 l4">
                    <select id="kategori" name="kategori" type="text" class="validate">
                        <option value="" disabled selected>Choose Report Category</option>
                        <option value="report">Report</option>
                        <option value="suggestion">Suggestion</option>
                        <option value="personal-req">Personal Request</option>
                    </select>
                </div>
                <div class="input-field col s12">
                    <input id="user-mail" type="email" class="validate" name="email">
                    <label>Your Username</label>
                </div>
                <div class="input-field col s12">
                    <input id="subject-mail" type="text" class="validate" name="subject">
                    <label>Subject</label>
                </div>
                <div class="input-field col s12">
                    <textarea id="content-mail" name="content" class="materialize-textarea"></textarea>
                    <label for="content-mail">Content</label>
                </div>
                <div class="col s12">
                    <button class="right btn custom-btn waves-effect waves-light green right-align z-depth-1" type="submit" name="action" method="post">SEND</button>
                </div>
            </div>
          
        </form>
      </div>
    </div>
   
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
         $('keyword').show();
    $("genre").hide();
  $('#kategori').on('change',function() {

     if(this.value=='judul')
        {
            $('keyword').show();
            $("genre").hide();

        }
    else if (this.value=='pengarang') 
         {
           $('keyword').show();
            $("genre").hide();
        }
     else 
         {
             $('keyword').hide();
            $("genre").show();
         }
  }); 

    });
</script>