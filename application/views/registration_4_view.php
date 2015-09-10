<div class="header_wrapper"> <!-- end div ini ada di masing-masing view of reqin, reqout, coll, dan wishlist-->
    <nav class="green">
      <div class="nav-container nav-wrapper">
        <a href="<?php echo base_url('Login') ?>" class="brand-logo"><img class="img-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a>
      </div>
    </nav>
</div>
<div class="container" style="margin-top:50px;">
    <!-- <br><h5>Registration - step 1/2</h5> -->
    <!-- <form method="post" action="<?php echo base_url('pendaftaran/daftar4') ?>"> -->
        <div>
            <div class="card-panel z-depth-1">
                <br><h5>Foto Profil</h5>
                <div class="langkah">                     
                    <div class="steps">
                        <div class="step step1">1</div>
                        <div class="step step2">2</div>
                        <div class="step step3">3</div>
                        <div class="step step4 aktip">4</div>
                    </div>
                    <div class="garis"></div>
                </div>

                <div class="langkah4"> 
                    <?php echo form_open_multipart('pendaftaran/potongGambar');?>

                            <div class="row">
                                <div class="col s12 m7 l7">
                                <div id="cropimage" class="col s12 m5 l5 cropimage">
                                    <table width="958">
                 
                             
                                    <tr><h3>Upload gambar</h3></tr>
                                    <tr><input type="file" name="userfile" name="userfile"></tr>
                                    <tr><input type="hidden" name="image_name" id="image_name" value="<?php echo $img;?>"></tr>
                                      
                                      <br>
                                       <tr>
                                        <td>
                                        <td><input type="submit" value="Submit" class="action-button shadow animate red"/></td>
                                      </tr>
                                     </table>

                                    <div style="margin:0 auto; width:600px">
                                        <h6>Please drag on the image</h6>
                                        <img src="<?php echo base_url();?>uploads/<?php echo $img; ?>" id="photo" style='max-width:500px' >
                                    </div>
                                </div>
                                <a href="<?php echo base_url('pendaftaran/selesai')?>" <button id="regbtn" class="btn waves-effect waves-light green right-align z-depth-1">SELESAI</button></a>
                            </div>
                     <div id="thumbs" style='max-width:500px'></div>
                   <?php echo form_close();?>

                   
            </div>     




            </div>
        </div>
    <!-- </form> -->
</div>



<script type="text/javascript">

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
</script>

