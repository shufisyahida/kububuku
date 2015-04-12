<div class="header_wrapper"> <!-- end div ini ada di masing-masing view of reqin, reqout, coll, dan wishlist-->
    <nav class="green">
      <div class="nav-container nav-wrapper">
        <a href="#" class="brand-logo"><img class="img-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a>
      </div>
    </nav>
</div>
<div class="container" style="margin-top:50px;">
    <br><h5>Registration - step 2/2</h5>
    <!--<form method="post" action="<?php echo base_url('index.php/Registration/register') ?>">-->
    <?php echo form_open_multipart('welcome/cropimage');?>
        <div class="card-panel z-depth-1">
            <div class="row">
                <div id="cropimage" class="col s12 m5 l5">
                    <table width="958">
 
                      <tr>
                          <td><h1>Image Upload</h1></td>
                          <td><input type="file" name="userfile" name="userfile"></td>
                       
                        <td><input type="hidden" name="image_name" id="image_name" value="<?php echo $img; ?>" ></td>
                       </tr>
                      <br>
                       <tr>
                        <td>
                        <td><input type="submit" value="Submit" class="action-button shadow animate red"/></td>
                      </tr>
                     </table>
                    <div style="margin:0 auto; width:600px">
                        <h1>Please drag on the image</h1>
                        <img src="<?php echo base_url();?>uploads/<?php echo $img; ?>" id="photo" style='max-width:500px' >

                    </div>
                </div>
            </div>
          <div id="thumbs" style='max-width:500px'></div>
        </div>
   <?php echo form_close();?>
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
                        $.post('<?php echo base_url();?>welcome/updatecropimage/',
                                                  {
                                                   x_axis : x_axis,
                                                   y_axis : y_axis,
                                                   thumb_width:thumb_width,
                                                   thumb_height:thumb_height,
                                                   img :img
                                                  },
                                                  function(data)
                          {
                                                     // alert(data);
                            $("#cropimage").show();
                            //$("#thumbs").html("");
                            $("#thumbs").html("<img src='<?php echo base_url();?>uploads/"+data+"' />");
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
