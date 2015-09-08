    <div class="secondary-header">
      <div class="secondary-header-inner">
        <div class="container custom-container-c">Pemilik Buku</div>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-content-add"></i>
        </a>
        <ul>
           <?php $username = $this->session->userdata('username');?>
          <li><a href="<?php echo base_url()."koleksi/tambah/".$resultBook[0]->isbn."/".$username?>" class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add this book to Collection"><i class="large mdi-action-book"></i></a></li>
          <li><a class="btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add this book to Wishlist"><i class="large mdi-action-favorite"></i></a></li>
        </ul>
      </div>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->

 

<div class="container custom-table">
  <div class="row">
    <?php foreach($resultBook as $key=>$value)
    {
    echo
    '<div class="col s12 m4 l3">
      <div class="row">
        <div class="col s12 m12 l12">
         <div class="card-panel white z-depth-1">
            <img class="responsive-img" img src='.$value->sampul.'>
          </div>
        </div>
      </div>
    </div>
    <div id="content">
    <div class="col s12 m8 l9">
      <div class="card-panel white z-depth-1 col s12 m12 l12">
        <span>
          <div class="row">
            <div class="col s12 m12 l12">
              <span id="isbn" style="display:none">'.$value->isbn.'</span>
              <h5 class="black-text">'.$value->judul.'</h5>
              <h6 class="black-text">'.$value->pengarang.'</h6>
            </div>
            <div class="col s12 m12 l12">
              <span class="tag-property white-text green">'.$value->genre.'</span>
            </div>
          </div>
        </span>
      </div>';
    }?>


      
          
   <?php
   if(!empty($resultOwner))
   {

      foreach($resultOwner as $key=>$value)
      {
       echo'
        <div class="col s12 m4 l4">
          <div class="card">
            <div class="container custom-container-a">          
            <a href = "'.base_url()."profil/lihatProfil/".$value->username.'">
              <img class="avatar-property circle responsive-img" src="'.$value->foto.'"> 
            </a>
            </div>
            <a href = "'.base_url()."profil/lihatProfil/".$value->username.'">
            <div class="truncate green-text name-property">'.$value->nama.'</div>
            </a>
            <div class="divider"></div>       
            <div class="custom-container-b">
              <ul>
                <li class="truncate"><i class="green-text tiny mdi-maps-beenhere "></i>' 
                  .$value->fakultas.                                    
                '</li>
                <li class="truncate"><i class="green-text tiny mdi-social-person-outline"></i>' 
                .$value->status.
                '</li>
                <li class="truncate"><i class="green-text tiny mdi-social-person"></i>'
                 .$value->jenis_kelamin.
                '</li>
                <li class="truncate"><i class="green-text tiny mdi-action-event"></i>'.$value->tanggal_lahir.'</li>
                <li class="truncate"><i class="green-text tiny mdi-maps-place"></i>'.$value->domisili.'</li>
              </ul>
            </div>
            <div class="divider"></div>
            <div class="custom-container-b" style="text-align: center;">
              <ul>
                <li>Sebagai Pemilik</li>';
              
                $hijau = round($value->rank_pemilik);
                $putih = 5-$hijau;

                for($i = 0; $i<$hijau;$i++)
                {
                  echo '<li class="ranking-star"><i class="fa fa-star fa-lg green-text"></i></li>';
                }

                for($i = 0; $i<$putih;$i++)
                {
                  echo '<li class="ranking-star"><i class="fa fa-star-o fa-lg green-text"></i></li>';
                }
              echo '
              </ul>
              <ul>
                <li>Sebagai Peminjam</li>';
              
                $hijau = round($value->rank_peminjam);
                $putih = 5-$hijau;

                for($i = 0; $i<$hijau;$i++)
                {
                  echo '<li class="ranking-star"><i class="fa fa-star fa-lg green-text"></i></li>';
                }

                for($i = 0; $i<$putih;$i++)
                {
                  echo '<li class="ranking-star"><i class="fa fa-star-o fa-lg green-text"></i></li>';
                }
              
              echo'
              </ul>
            </div>
          </div>
        </div>
        ';
          }
      }?>
    </div>
    <div class="col l12 offset-l3">
      <a id="more" style="text-align: center" class="waves-effect waves-light btn-large green">SELENGKAPNYA</a>
    </div>
  </div>
</div>
<script>
$('document').ready(function() {
  var $page = 0;
  console.log("rede");
  var $baseurl = "http://localhost/kububuku/"
  //check jika ada <li> yang memiliki index bernilai 10 maka tombol MORE di-disable
  // if($("#10").length == 0) {
  //   $('#more').addClass("disabled");
  //   $('#more').removeClass("waves-effect waves-light green");
  // } 

  $('#more').on('click', function(e){
    e.preventDefault(); //hrefnya di-disable
    console.log("klik");
    $page = $page+3;
    var $isbn = $('#isbn').text();
    console.log($isbn);
    var xmlhttp;
    if(window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
      console.log("klika");
    }
    else
    {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      console.log("klikb");
    }
    xmlhttp.onreadystatechange = function() {
      console.log("yes");

      if(xmlhttp.readyState == 4 && xmlhttp.status == 200) 
      {
        var response = xmlhttp.responseText;
        console.log(response);
        var data = JSON.parse(response);
        //console.log(response.length);
        //console.log(data['resultOwner'].length);
        
        var owner = data['resultOwner'];
        console.log(owner);
        for(i in owner)
        {
          var $username = owner[i].username;
          var $password = owner[i].password;
          var $nama = owner[i].nama;
          var $email = owner[i].email;
          var $domisili = owner[i].domisili;
          var $fakultas = owner[i].fakultas;
          var $jenis_kelamin = owner[i].jenis_kelamin;
          var $status = owner[i].status;
          var $rank_pemilik = owner[i].rank_pemilik;
          var $rank_peminjam = owner[i].rank_peminjam;
          var $foto = owner[i].foto;
          var $tanggal_lahir = owner[i].tanggal_lahir;
          var $email_kontak = owner[i].email_kontak;
          var $fb = owner[i].fb;
          var $twitter = owner[i].twitter;
          var $line_id = owner[i].line_id;
          var $hp = owner[i].hp;
          var $bbm = owner[i].bbm;
          var $wa = owner[i].wa;
          var $tanggal_buat = owner[i].tanggal_buat;


          var $hijau = Math.round($rank_pemilik);
          var $putih = 5-$hijau;
          var $rankPemilikHijau ="";

          for($i = 0; $i<$hijau;$i++)
          {
            $rankPemilikHijau = $rankPemilikHijau + '<li class="ranking-star"><i class="fa fa-star fa-lg green-text"></i></li>';
          }
          var $rankPemilikPutih ="";

          for($i = 0; $i<$putih;$i++)
          {
            $rankPemilikPutih+='<li class="ranking-star"><i class="fa fa-star-o fa-lg green-text"></i></li>';
          }

          var $hijau = Math.round($rank_peminjam);
          var $putih = 5-$hijau;
          var $rankPeminjamHijau="";

          for($i = 0; $i<$hijau;$i++)
          {
            $rankPeminjamHijau+='<li class="ranking-star"><i class="fa fa-star fa-lg green-text"></i></li>';
          }
           
          var $rankPeminjamPutih="";
          for($i = 0; $i<$putih;$i++)
          {
            $rankPeminjamPutih+= '<li class="ranking-star"><i class="fa fa-star-o fa-lg green-text"></i></li>';
          }

          if(response) {
            $('#more').addClass("disabled");
            $('#more').removeClass("waves-effect waves-light green");
          } 

          $('#content').append('<div class="col s12 m4 l4"> \
                                  <div class="card"> \
                                    <div class="container custom-container-a"> \
                                      <a href = "'+$baseurl+"profil/lihatProfil/"+$username+'"> \
                                      <img class="avatar-property circle responsive-img" src="'+$foto+'"> \
                                      </a> \
                                    </div> \
                                    <a href = "'+$baseurl+"profil/lihatProfil/"+$username+'"> \
                                      <div class="truncate green-text name-property">'+$nama+'</div> \
                                    </a> \
                                    <div class="divider"></div> \
                                    <div class="custom-container-b"> \
                                      <ul> \
                                            <li class="truncate"><i class="green-text tiny mdi-maps-beenhere "></i>'+$fakultas+'</li> \
                                            <li class="truncate"><i class="green-text tiny mdi-social-person-outline"></i>'+$status+'</li> \
                                            <li class="truncate"><i class="green-text tiny mdi-social-person"></i>'+$jenis_kelamin+'</li> \
                                            <li class="truncate"><i class="green-text tiny mdi-action-event"></i>'+$tanggal_lahir+'</li> \
                                            <li class="truncate"><i class="green-text tiny mdi-maps-place"></i>'+$domisili+'</li> \
                                      </ul> \
                                    </div> \
                                    <div class="divider"></div> \
                                    <div class="custom-container-b" style="text-align: center;"> \
                                    <ul> \
                                      <li>Sebagai Pemilik</li>'+$rankPemilikHijau+$rankPemilikPutih+'</ul> \
                                    <ul> \
                                      <li>Sebagai Peminjam</li>'+$rankPeminjamHijau+$rankPeminjamPutih+' </ul> \
                                  </div> \
                              </div>');        
        }
      }
    }
    xmlhttp.open("POST","http://localhost/kububuku/buku/getList?page="+ $page+"&isbn="+$isbn, true);
    xmlhttp.send();
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
    
    xmlhttp.open("POST","http://localhost/kububuku/notifikasi/cekNotif", true);
    xmlhttp.send();
  }, 3000);
 
});
</script>