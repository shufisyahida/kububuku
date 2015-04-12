<div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a href="<?php echo base_url('index.php/Edit_Profile/')?>" class="active" href="">Edit Profile</a></li>
          <li><a href="<?php echo base_url('index.php/Edit_Profile/editPicture')?>">Edit Profile Picture</a></li>
        </ul>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-content-add"></i>
        </a>
        <ul>
          <li><a href="<?php echo base_url('index.php/search/homeBuku') ?>" class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
          <li><a class="btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add Wishlist"><i class="large mdi-action-favorite"></i></a></li>
        </ul>
      </div>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->

<div class="container custom-table">
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
                        <img src="" id="photo" style='max-width:500px' >
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>