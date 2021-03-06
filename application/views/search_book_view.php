  <div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a class="active" href="<?php echo base_url('pencarian/buku') ?>">Buku</a></li>
          <li><a  href="<?php echo base_url('pencarian/pengguna')?>">Pengguna</a></li>
      </div>

      <?php
        if(!$isAdmin){
        
          }
            ?>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->

<div class="container custom-table">
  <div class="row">
    <div class="col s12 m4 l3">
      <div class="card-panel white z-depth-1">
        <h6 style="font-size:1.5em">Filter Pencarian</h6>
        <form method="post" action="<?php echo base_url('pencarian/hasil_buku') ?>">
          
          <div class="row">
             <div class="col s12 m12 l12">
                <select id="kategori" name="kategori" type="text" class="validate">
                    <option style="font-size: 0.5em" value="" disabled selected>Pilih Kategori</option>
                    <option value="judul">Judul</option>
                    <option value="pengarang">Pengarang</option>
                     <option value="genre">Genre</option>
                </select>
                 
            </div>
            <div class="input-field col s12">
              <keyword>
              <input id="book-searchkey" type="text" class="validate" name="keyword">
              <label>Kata Kunci</label>
            </keyword>
             <genre>
              <select id="genre" name="genre" type="text" class="validate">
                    <option value="">Pilih Genre Buku</option>
                              <option value="Biography" >Biography</option>  
                              <option value="Comic" >Comic</option>
                              <option value="Fantasy" >Fantasy</option>
                              <option value="Fiction" >Fiction</option>
                              <option value="Horror" >Horror</option>
                              <option value="Legend" >Legend</option>
                              <option value="Mystery" >Mystery</option>
                              <option value="Non Fiction" >Non Fiction</option>     
                              <option value="Philosophy" >Philosophy</option>     
                              <option value="Politics" >Politics</option> 
                              <option value="Reference Book" >Reference Book</option>
                              <option value="Religion" >Religion</option> 
                              <option value="Romance" >Romance</option> 
                              <option value="Suspense" >Suspense</option>     
                              <option value="Textbook" >Textbook</option>     
                              <option value="Thriller" >Thrillers</option>  
                              <option value="Miscellaneous" >Miscellaneous</option> 
                </select>
              </genre>
            </div>
            <div class="col s12">
              <button class="btn custom-btn waves-effect waves-light green right-align z-depth-1" type="submit" name="action" method="post">Cari</button>
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
    
    xmlhttp.open("POST","http://localhost/kububuku/notifikasi/chk_notif", true);
    xmlhttp.send();
  }, 3000);
 
});
</script>