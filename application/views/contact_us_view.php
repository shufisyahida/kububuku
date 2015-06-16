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
       
        <form method="post" action="<?php echo base_url('index.php/Message_nonadmin/create') ?>">          
            <div class="row">
                <div class="col s12 m5 l4">
                    <select id="kategori" name="kategori" type="text" class="validate" value="<?php echo $kategori;?>">
                        <option value="" disabled selected >Choose Report Category</option>
                        <option value="report" <?php if($kategori == "report") echo "selected"; ?>>Report</option>
                        <option value="suggestion" <?php if($kategori == "suggestion") echo "selected"; ?>>Suggestion</option>
                        <option value="personal-req" <?php if($kategori == "personal-req") echo "selected"; ?>>Personal Request</option>
                    </select>
                    <span class="error"><?php echo $kategoriErr;?></span>
                </div>
              
                <div class="input-field col s12">
                    <input id="subject" type="text" class="validate" name="subject" value="<?php echo $subject;?>">
                    <label>Subject</label>
                    <span class="error"><?php echo $subjekErr;?></span>
                </div>
                <div class="input-field col s12">
                    <textarea id="content" name="content" class="materialize-textarea" value="<?php echo $content;?>"></textarea>
                    <label for="content-mail">Content</label>
                    <span class="error"><?php echo $kontenErr;?></span>
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
<script>
$('document').ready(function() {

  setInterval(function(){ 
    console.log("OK");
    var xmlhttp;
    if(window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
    }
    else
    {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {

      if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        console.log("200");
        var $response = xmlhttp.responseText;
        var $data = JSON.parse($response);

        if($data['tanggapan']==true || $data['request']==true || $data['accept']==true|| $data['decline']==true|| $data['return']==true){
          $('#notif-icon').addClass("red-text");
          $('#notif-icon').removeClass("lime-text text-lighten-5");
        }
      }
    }
    
    xmlhttp.open("POST","http://localhost/kububuku/index.php/Notification/chk_notif", true);
    xmlhttp.send();
  }, 3000);
 
});
</script>