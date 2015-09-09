  <div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a href="<?php echo base_url('profil/ubahProfile/')?>" class="active" href="">Ubah Profil</a></li>
          <li><a href="<?php echo base_url('profil/ubahGambar')?>">Ubah Gambar Profil</a></li>
        </ul>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-content-add"></i>
        </a>
        <ul>
          <li><a href="<?php echo base_url('pencarian/buku') ?>" class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
          <li><a href="<?php echo base_url('pencarian/buku') ?>" class="btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add Wishlist"><i class="large mdi-action-favorite"></i></a></li>
        </ul>
      </div>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->

<div class="container custom-table">
    <form method="post" action="<?php echo base_url('profil/ubah') ?>" >
      <div class="row">
        <h4>Biodata</h4>
        <div class="card-panel z-depth-1">
          <div class="row">
            <div class="input-field col s12 m6 l8">
              <input name="name" value="<?php echo $nama;?>" id="" type="text" class="validate" maxlength="40">
              <label >Nama*</label>
            </div>
            <div class="col s12 m6 l4">
              <span class="error"><?php echo $nameErr;?></span>
            </div>
            <div class="col s12 m6 l8">
              <label>Jenis Kelamin*</label>
              <select name="gender">
                <option value="" <?php if($jenis_kelamin == "") echo "selected"; ?>>Pilih jenis kelamin</option>
                <option value="M" <?php if($jenis_kelamin == "M") echo "selected"; ?>>Pria</option>
                <option value="F" <?php if($jenis_kelamin == "F") echo "selected"; ?>>Wanita</option>
              </select>
            </div>
            <div class="col s12 m6 l4">
              <span class="error"><?php echo $genderErr;?></span>
            </div>
            <div class="col s12 m6 l8">
                <label for="birth">Tanggal Lahir*</label>
                <input id="birth" name="birth" type="date" class="datepicker validate" value="<?php echo $tanggal_lahir;?>">
            </div>
            <div class="col s12 m6 l4">
              <span class="error"><?php echo $birthdayErr;?></span>
            </div>
            <div class="col s12 m6 l8">
              <label>Fakultas*</label>
              <select id="faculty" name="faculty" type="text" class="validate">
                <option value="" <?php if($fakultas == "") echo "selected"; ?>>Pilih fakultas</option>
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
            <div class="col s12 m6 l4">
              <span class="error"><?php echo $facultyErr;?></span>
            </div>
            <div class="col s12 m6 l8">
              <label>Status*</label>
              <select name="status">
                <option value="" <?php if($status == "") echo "selected"; ?>>Pilih status</option>
                <option value="1" <?php if($status == "1") echo "selected"; ?>>Mahasiswa</option>
                <option value="2" <?php if($status == "2") echo "selected"; ?>>Dosen</option>
                <option value="3" <?php if($status == "3") echo "selected"; ?>>Staf</option>
                <option value="4" <?php if($status == "4") echo "selected"; ?>>Alumni</option>
              </select>
            </div>
            <div class="col s12 m6 l4">
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
            <div class="col s12 m6 l4">
              <span class="error"><?php echo $domisiliErr;?></span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <h4>Kontak</h4>
        <div class="card-panel">
          <div class="row">
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
                    <input id="hp" name="hp" type="text" value="<?php echo $hp;?>" maxlength="20">
                    <label for="hp"><i class="fa fa-phone fa-lg green-text"></i>   Nomor Telepon</label>
                </div>

                <div class="input-field">
                    <input id="bbm" name="bbm" type="text" value="<?php echo $bbm;?>" maxlength="10">
                    <label for="bbm"><i class="fa fa-mobile fa-lg green-text"></i>   Pin BBM</label>
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
                <div class="col s12 m6 l4">
              <span class="error"><?php echo $mailErr;?></span>
            </div>
            </div>
        </div>
        </div> 
      </div>
      <div class="row right">
        <!--<button class="btn green waves-effect waves-light" type="submit" name="action" method="post">SAVE</button>
        -->
        <button id="regbtn" class="modal-trigger btn waves-effect waves-light green right-align z-depth-1" href="#modal-editprofile">SIMPAN</button>
      </div>
      <div id="modal-editprofile" class="modal">
        <div class="modal-content">
            <h4>Ubah Profil</h4>
            <p>Apakah anda yakin untuk mengubah profil?</p>
        </div>
        <div class="modal-footer">
            <button  href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Batal</button>
            <button class="black-text waves-effect waves-green btn-flat modal-action"  type="submit" name="action" method="post">Simpan</button>
        </div>
      </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
    });

    // $('.datepicker').pickadate({
    //     selectMonths: true, // Creates a dropdown to control month
    //     selectYears: 100 // Creates a dropdown of 15 years to control year
    // });
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
    
    xmlhttp.open("POST","http://localhost/kububuku/notifikasi/cekNotif", true);
    xmlhttp.send();
  }, 3000);
 
});
</script>