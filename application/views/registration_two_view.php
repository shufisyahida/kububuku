<div class="header_wrapper"> <!-- end div ini ada di masing-masing view of reqin, reqout, coll, dan wishlist-->
    <nav class="green">
      <div class="nav-container nav-wrapper">
        <a href="#" class="brand-logo"><img class="img-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a>
      </div>
    </nav>
</div>
<div class="container" style="margin-top:50px;">
    <br><h5>Registration - step 2/2</h5>
    <form method="post" action="<?php echo base_url('index.php/Registration/register') ?>">
        <div class="card-panel z-depth-1">
            <div class="row">
                <div class="col s12 m5 l5">
                    <div class="col s12 m12 l12">
                        <h5>Upload Your Profile Picture</h5>
                        <input type="file" name="userfile" name="userfile"><br><br>
                        <input type="submit" value="Submit" class="btn"/>
                    </div>
                    <div class="col s12 m12 l12">
                        <div id="thumbs" style='max-width:500px'></div>
                    </div>
                </div>
                <div class="col s12 m7 l7">
                    <div style="margin:0 auto; width:600px">
                        <h6>Please drag on the image</h6>
                        <img src="<?php echo base_url();?>uploads/<?php echo $img; ?>" id="photo" style='max-width:500px' >
                    </div>
                </div>
            </div>
        </div>
    </form>
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
