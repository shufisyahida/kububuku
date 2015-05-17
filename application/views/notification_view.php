<div class="secondary-header">
      <div class="secondary-header-inner">
        <div class="container custom-container-c">Notification</div>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-content-add"></i>
        </a>
        <ul>
          <li><a href="<?php echo base_url('index.php/Search/homeBuku') ?>" class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
          <li><a class="btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add Wishlist"><i class="large mdi-action-favorite"></i></a></li>
        </ul>
      </div>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->

<div class="container custom-table">
<<<<<<< HEAD
  <a id="more" style="text-align: center" class="waves-effect waves-light btn-large green">Notification is Here</a>
 
</div>



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

        if($data['tanggapan']==true || $data['pinjaman']==true || $data['pinjaman2']==true){
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
=======
    <ul class="collection">
    <li class="collection-item avatar">
      <img src="images/yuna.jpg" alt="" class="circle">
      <span class="title">Title</span>
      <p>First Line</p>
    </li>
    <li class="collection-item avatar">
      <i class="mdi-file-folder circle"></i>
      <span class="title">Title</span>
      <p>First Line</p>
    </li>
    <li class="collection-item avatar">
      <i class="mdi-action-assessment circle green"></i>
      <span class="title">Title</span>
      <p>First Line</p>
    </li>
    <li class="collection-item avatar">
      <i class="mdi-av-play-arrow circle red"></i>
      <span class="title">Title</span>
      <p>First Line</p>
    </li>
  </ul>
</div>
>>>>>>> 3ba636194499f78ff5b41651337b8269881e6a4a
