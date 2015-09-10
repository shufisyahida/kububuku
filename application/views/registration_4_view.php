<div class="header_wrapper"> <!-- end div ini ada di masing-masing view of reqin, reqout, coll, dan wishlist-->
    <nav class="green">
      <div class="nav-container nav-wrapper">
        <a href="<?php echo base_url('Login') ?>" class="brand-logo"><img class="img-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a>
      </div>
    </nav>
</div>
<div class="container" style="margin-top:50px;">
    <!-- <br><h5>Registration - step 1/2</h5> -->
    <form method="post" action="<?php echo base_url('pendaftaran/daftar4') ?>">
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
                    <div class="row">
                        <div class="col s12 m7 l7">
                        <div id="cropimage" class="col s12 m5 l5 cropimage">
                            <table width="958">
         
                     
                            <tr><h3>Upload Gambar</h3></tr>
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
                    </div>
                </div>
                <div id="thumbs" style='max-width:500px'></div>
               <?php echo form_close();?>

               <a href="<?php echo base_url('pendaftaran/selesai')?>" <button id="regbtn" class="btn waves-effect waves-light green right-align z-depth-1">SELESAI</button></a>
            </div>     




            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
    
        // $(".lanjutkan1").click(function(){
        //     $(".langkah2").removeClass("hide");
        //     $(".langkah1").addClass("hide");
        //     $(".step1").removeClass("aktip");
        //     $(".step2").addClass("aktip");
        // });

        // $(".lanjutkan2").click(function(){
        //     $(".langkah3").removeClass("hide");
        //     $(".langkah2").addClass("hide");
        //     $(".step2").removeClass("aktip");
        //     $(".step3").addClass("aktip");
        // });

        // $(".lanjutkan3").click(function(){
        //     $(".langkah4").removeClass("hide");
        //     $(".langkah3").addClass("hide");
        //     $(".step3").removeClass("aktip");
        //     $(".step4").addClass("aktip");
        // });

    });
    // $('.datepicker').pickadate({
    //     selectMonths: true, // Creates a dropdown to control month
    //     selectYears: 100 // Creates a dropdown of 15 years to control year
    // });
</script>

