<div class="header_wrapper"> <!-- end div ini ada di masing-masing view of reqin, reqout, coll, dan wishlist-->
    <nav class="green">
      <div class="nav-container nav-wrapper">
        <a href="<?php echo base_url('Login') ?>" class="brand-logo"><img class="img-logo responsive-img" src="<?php echo base_url('assets/img/logo-horizontal.png') ?>"></a>
      </div>
    </nav>
</div>
<div class="container" style="margin-top:50px;">
    <!-- <br><h5>Registration - step 1/2</h5> -->
    <form method="post" action="<?php echo base_url('pendaftaran/daftar2') ?>">
        <div>
            <div class="card-panel z-depth-1">
                <br><h5>Biodata</h5>
                <div class="langkah">                     
                    <div class="steps">
                        <div class="step step1">1</div>
                        <div class="step step2 aktip">2</div>
                        <div class="step step3">3</div>
                        <div class="step step4">4</div>
                    </div>
                    <div class="garis"></div>
                </div>
                
                
                
                <div class="row langkah1 hide" style="margin: 0px auto;">
                    <div class="input-field col m6 l8">
                        <input id="username" name="username" type="text" class="validate" value="<?php echo $username;?>" maxlength="20">
                        <label for="username">Username*</label>
                    </div>
                    <div class="col m6 l4">
                        <span class="error"><?php echo $usernameErr;?></span>
                    </div>
                    <div class="input-field col m6 l8">
                        <input id="email" name="email" type="email" class="validate" value="<?php echo $email;?>" maxlength="30">
                        <label for="email">Email*</label>
                    </div>
                    <div class="col s12 m6 l4">
                        <span class="error "><?php echo $emailErr;?></span>
                    </div>
                    <div class="input-field col m6 l8">
                        <input id="password" name="password" type="password" class="validate" value="<?php echo $password;?>" maxlength="20">
                        <label for="password">Password*</label>
                    </div>
                    <div class="col s12 m6 l4">
                        <span class="error "><?php echo $passwordErr;?></span>
                    </div>
                    <div class="input-field col m6 l8">
                        <input id="verpassword" name="verpassword" type="password" class="validate" value="<?php echo $password;?>" maxlength="20">
                        <label for="password">Verifikasi Password*</label>
                    </div>
                    <div class="col s12 m6 l4">
                        <span class="error "><?php echo $verpasswordErr;?></span>
                    </div>
                    <div class="col s12 m8 l8">
                        <div class="right">
                            <br><button class="btn waves-effect waves-light green right-align z-depth-1 lanjutkan1">LANJUTKAN</button>
                        </div>
                    </div>
                </div>

                <div class="row langkah2">
                    <div class="input-field col s12 m6 l8">
                        <input id="name" name="name" type="text" class="validate" value="<?php echo $nama;?>" maxlength="40">
                        <label for="name">Nama*</label>
                    </div>
                    <div class="col m6 l4">
                        <span class="error"><?php echo $nameErr;?></span>
                    </div>
                    <div class="col s12 m6 l8">
                        <label for="birth">Tanggal Lahir*</label>
                        <input id="birth" name="birth" type="date" class="datepicker validate" value="<?php echo $tanggal_lahir;?>">
                    </div>
                    <div class="col s12 m6 l4">
                        <span class="error"><?php echo $birthdayErr;?></span>
                    </div>
                    <div class="col s12 m6 l8">
                        <label for="gender">Jenis Kelamin*</label>
                        <select id="gender" name="gender" type="text" class="validate" >
                            <option value="">Pilih jenis kelamin</option>
                            <option value="M" <?php if($jenis_kelamin == "M") echo "selected"; ?>>Pria</option>
                            <option value="F" <?php if($jenis_kelamin == "F") echo "selected"; ?>>Wanita</option>
                        </select>
                    </div>
                    <div class="col m6 l4">
                        <span class="error"><?php echo $genderErr;?></span>
                    </div>
                    <div class="col s12 m6 l8">
                        <label for="faculty">Fakultas*</label>
                        <select id="faculty" name="faculty" type="text" class="validate" >
                              <option value="">Pilih fakultas</option>
                              <option value="1" <?php if($fakultas == "1") echo "selected"; ?>>Fakultas Kedokteran</option>
                              <option value="2" <?php if($fakultas == "2") echo "selected"; ?>>Fakultas Kedokteran Gigi</option>
                              <option value="3" <?php if($fakultas == "3") echo "selected"; ?>>Fakultas Matematika dan Pengetahuan Alam</option>
                              <option value="4" <?php if($fakultas == "4") echo "selected"; ?>>Fakultas Teknik</option>
                              <option value="5" <?php if($fakultas == "5") echo "selected"; ?>>Fakultas Hukum</option>
                              <option value="6" <?php if($fakultas == "6") echo "selected"; ?>>Fakultas Ekonomi dan Bisnis</option>
                              <option value="7" <?php if($fakultas == "7") echo "selected"; ?>>Fakultas Psikologi</option>
                              <option value="8" <?php if($fakultas == "8") echo "selected"; ?>>Fakultas Ilmu Budaya</option>
                              <option value="9" <?php if($fakultas == "9") echo "selected"; ?>>Fakultas Ilmu Sosial dan Ilmu Politik</option>
                              <option value="10" <?php if($fakultas == "10") echo "selected"; ?>>Fakultas Kesehatan Masyarakat</option>
                              <option value="11" <?php if($fakultas == "11") echo "selected"; ?>>Fakultas Ilmu Komputer</option>
                              <option value="12" <?php if($fakultas == "12") echo "selected"; ?>>Fakultas Ilmu Keperawatan</option>
                              <option value="13" <?php if($fakultas == "13") echo "selected"; ?>>Fakultas Farmasi</option>
                              <option value="50" <?php if($fakultas == "50") echo "selected"; ?>>Vokasi</option>
                              <option value="51" <?php if($fakultas == "51") echo "selected"; ?>>Pascasarjana</option>
                              <option value="51" <?php if($fakultas == "52") echo "selected"; ?>>Non Fakultas</option>
                        </select>
                    </div>
                    <div class="col m6 l4">
                        <span class="error"><?php echo $facultyErr;?></span>
                    </div>

                    <div class="col s12 m6 l8">
                        <label for="status">Status*</label>
                        <select id="status" name="status" type="text" class="validate" value="<?php echo $status;?>">
                            <option value="">Pilih Status</option>
                            <option value="1" <?php if($status == "1") echo "selected"; ?>>Mahasiswa</option>
                            <option value="2" <?php if($status == "2") echo "selected"; ?>>Dosen</option>
                            <option value="3" <?php if($status == "3") echo "selected"; ?>>Staf</option>
                            <option value="4" <?php if($status == "4") echo "selected"; ?>>Alumni</option>
                        </select>
                    </div>
                    <div class="col m6 l4">
                        <span class="error"><?php echo $statusErr;?></span>
                    </div>
                    <div class="col s12 m6 l8">
                        <label for="domisili">Domisili*</label>
                        <select id="domisili" name="domisili" type="text" class="validate" value="<?php echo $domisili;?>">
                            <option value="">Pilih Domisili</option>
                            <option value="Jakarta" <?php if($domisili == "Jakarta") echo "selected"; ?>>Jakarta</option>
                            <option value="Bogor" <?php if($domisili == "Bogor") echo "selected"; ?>>Bogor</option>
                            <option value="Depok" <?php if($domisili == "Depok") echo "selected"; ?>>Depok</option>
                            <option value="Tangerang" <?php if($domisili == "Tangerang") echo "selected"; ?>>Tangerang</option>
                            <option value="Bekasi" <?php if($domisili == "Bekasi") echo "selected"; ?>>Bekasi</option>
                            <option value="Other" <?php if($domisili == "Other") echo "selected"; ?>>Lainnya</option>
                        </select>
                    </div>
                    <div class="col m6 l4">
                        <span class="error"><?php echo $domisiliErr;?></span>
                    </div>
                    <div class="col s12 m8 l8">
                        <div class="right">
                            <br><button id="regbtn" class="btn waves-effect waves-light green right-align z-depth-1 lanjutkan2">LANJUTKAN</button>
                        </div>
                    </div>
                </div>

                <div class="row langkah3 hide">
                    <div class="col s12 m6 l6">
                        <div class="input-field">

                            <input id="facebook" name="facebook" type="text" value="<?php echo $fb;?>" maxlength="40"> 
                            <label for="facebook"><i class="fa fa-facebook-official fa-lg green-text"></i>   Nama Facebook</label>
                        </div>  

                        <div class="input-field">
                            <input id="twitter" name="twitter" type="text" value="<?php echo $twitter;?>" maxlength="30">
                            <label for="twitter"><i class="fa fa-twitter fa-lg green-text"></i>   ID Twitter</label>
                        </div>

                        <div class="input-field">
                            <input id="bbm" name="bbm" type="text" value="<?php echo $bbm;?>" maxlength="10">
                            <label for="bbm"><i class="fa fa-mobile fa-lg green-text"></i>   Pin BBM</label>
                        </div>

                        <div class="input-field">
                            <input id="hp" name="hp" type="text" value="<?php echo $hp;?>" maxlength="20">
                            <label for="hp"><i class="fa fa-phone fa-lg green-text"></i>   Nomor Telepon</label>
                        </div>
                        <div class="col m6 l8">
                            <span class="error"><?php echo $hpErr;?></span>
                          
                         
                        </div>
                    </div>
                    <div class="col s12 m6 l6">
                        <div class="input-field">
                            <input id="line" name="line" type="text" value="<?php echo $line_id;?>" maxlength="30">
                            <label for="line"><i class="fa fa-mobile fa-lg green-text"></i>   ID Line</label>
                        </div>

                        <div class="input-field">
                            <input id="whatsapp" name="whatsapp" type="text" value="<?php echo $wa;?>" maxlength="20">
                            <label for="whatsapp"><i class="fa fa-whatsapp fa-lg green-text"></i>   Nomor Whatsapp</label>
                        </div>

                        <div class="input-field">
                            <input id="mail" name="mail" type="text" value="<?php echo $email_kontak;?>" maxlength="30">
                            <label for="mail"><i class="fa fa-envelope fa-lg green-text"></i>   Mail*</label>
                        </div> 
                         <div class="col m6 l6">
                            <span class="error"><?php echo $mailErr;?></span>
                        </div>
                    </div>
                    <div class="col s12 m6 l6">
                        <div class="right">
                            <br><button id="regbtn" class="btn waves-effect waves-light green right-align z-depth-1 lanjutkan3" type="submit" name="action" method="post">LANJUTKAN</button>
                        </div>
                    </div>
                </div>

                <div class="langkah4 hide"> 
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

               <a href="<?php echo base_url('pendaftaran/selesai')?>" <button id="regbtn" class="btn waves-effect waves-light green right-align z-depth-1">FINISH</button></a>
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

