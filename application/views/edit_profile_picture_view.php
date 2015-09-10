<div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a href="<?php echo base_url('profil/ubahProfile/')?>">Edit Profile</a></li>
          <li><a href="<?php echo base_url('profil/ubahGambar')?>"class="active">Edit Profile Picture</a></li>
        </ul>
      </div>

      <!-- <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-content-add"></i>
        </a>
        <ul>
          <li><a href="<?php echo base_url('pencarian/buku') ?>" class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
          <li><a href="<?php echo base_url('pencarian/buku') ?>" class="btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add Wishlist"><i class="large mdi-action-favorite"></i></a></li>
        </ul>
      </div> -->
    </div>

</div><!--end div buat head-wrapper di navbar_view-->


<!-- <div class="header_wrapper">
    <nav class="green">
      <div class="nav-container nav-wrapper">
        <a href="#" class="brand-logo"><img class="img-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a>
      </div>
    </nav>
</div> -->
<div class="container custom-table">
  <h4>Image Upload</h4>
  <div class="card-panel z-depth-1">
       <?php echo form_open_multipart('profil/potongGambar');?>
       <div class="row">        
              <div class="row">
                    <div class="col s12 m7 l7">
                      <div id="cropimage" class="col s12 m5 l5 cropimage">
                          <table width="958">
                          <tr><input type="file" name="userfile" name="userfile"></tr>
                          <tr><input type="hidden" name="image_name" id="image_name" value="<?php echo $img;?>"></tr>
                            
                            <br>
                             <tr>
                              <td></td>
                              <td>
                                <button class="modal-trigger waves-effect waves-light red right-align z-depth-1" href="#modal-submit">Submit</button>
                              </td>
                            </tr>
                           </table>
                           <div id="modal-submit" class="modal">
                              <div class="modal-content">
                                <h4>Edit Profile Picture</h4>
                                <p>Are you sure to edit your profile picture?</p>
                              </div>
                              <div class="modal-footer">
                                <button  href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</button>
                                <button class="black-text waves-effect waves-green btn-flat modal-action"  type="submit" name="action" method="post">Save</button>
                              </div>
                          </div>
                          <div style="margin:0 auto; width:600px">
                              <!-- <h6>Please drag on the image</h6> -->
                              <img src="<?php echo $img; ?>" id="photo" style='max-width:500px' >
                          </div>
                      </div>
                    </div>
              </div>
          
        </div>
        <div id="thumbs" style='max-width:500px'></div>
   <?php echo form_close();?>

   <a href="<?php echo base_url('profil/selesai')?>" <button id="regbtn" class="btn waves-effect waves-light green right-align z-depth-1">SAVE</button></a>
   </div>
</div>

<!--<script type="text/javascript">

function getSizes(im,obj)
  {
    
    var x_axis = obj.x1;
    var x2_axis = obj.x2;
    var y_axis = obj.y1;
    var y2_axis = obj.y2;
    var thumb_width = obj.width;
    var thumb_height = obj.height;
                var img =$("#image_name").val();
    if(thumb_width > 0)
      {
        if(confirm("Do you want to save image..!"))
          {
            $.post('<?php echo base_url("pendaftaran/perbaruiGambar/");?>',
                                                  {
                                                   x_axis : x_axis,
                                                   y_axis : y_axis,
                                                   thumb_width:thumb_width,
                                                   thumb_height:thumb_height,
                                                   img :img
                                                  },
                                                  function(data)
              {
                                                     
                $("#cropimage").show();
                //$("#thumbs").html("");
                $("#thumbs").html("<img src='<?php echo base_url('uploads/"+data+"');?>' />");
              });

                                 }
                         }
                         }

$(document).ready(function () {

    $('img#photo').imgAreaSelect({
        aspectRatio: '1:1',
        onSelectEnd: getSizes
    });
});
</script>-->

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
    
    xmlhttp.open("POST","http://localhost/kububuku/notifikasi/cekNotif", true);
    xmlhttp.send();
  }, 3000);
 
});
</script>

