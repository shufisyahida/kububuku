  <div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a href="<?php echo base_url('index.php/Search/homeBuku') ?>">Books</a></li>
          <li><a class="active" href="<?php echo base_url('index.php/Search/homeUser')?>">Users</a></li>
      </div>

      <?php
  if(!$isAdmin){
  echo '

        <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
          <a class="z-depth-4 btn-floating btn-large red">
            <i class="large mdi-content-add"></i>
          </a>
          <ul>
            <li><a href="'.base_url().'index.php/Search/homeBuku" class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
            <li><a href="'.base_url().'index.php/Search/homeBuku" class="btn-floating yellow darken-1 tooltipped"  data-position="left" data-delay="10" data-tooltip="Add Wishlist"><i class="large mdi-action-favorite"></i></a></li>
          </ul>
        </div>';
    }
      ?>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->

<div class="container custom-table">
  <div class="row">
    <div class="col s12 m4 l3">
      <div class="card-panel white z-depth-1 tabs-wrapper">
        <h6 style="font-size:1.5em">Search Filter</h6>
        <form method="post" action="<?php echo base_url('index.php/Search/searchUser') ?>">
          
          

          <div class="row">
            <div class="col s12 m12 l12">
                <select id="kategori" name="kategori" type="text" class="validate">
                    <option value="" disabled selected>Choose Category</option>
                    <option value="nama">Name</option>
                    <option value="domisili">Domicile</option>
                     <option value="status">Status</option>
                    <option value="fakultas">Faculty</option>
                </select>
            </div>

              
            <div class="input-field col s12 m12 l12" >
             
              <keyword>
                <input id="book-searchkey" type="text" class="validate" name="keyword">
                <label>Keyword</label>
              </keyword>
             <location>
              <select id="location" name="location" type="text" class="validate">
                    <option value="" disabled selected>Choose Domicile</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bogor">Bogor</option>
                     <option value="Depok">Depok</option>
                    <option value="Tangerang">Tangerang</option>
                    <option value="Bekasi">Bekasi</option>
                    <option value="Other">Other</option>
                </select>
              </location>
              <status>
                <select id="status" name="status" type="text" class="validate">
                    <option value="" disabled selected>Choose Status</option>
                    <option value="1">Student</option>
                    <option value="2">Lecturer</option>
                     <option value="3">Staff</option>
                     <option value="4">Alumnus</option>
                </select>
              </status>
              <faculty>
                  <select id="faculty" name="faculty" type="text" class="validate">
                    <option value="" disabled selected>Choose Faculty</option>
                    <option value="1">Faculty of Medicine</option>
                    <option value="2">Faculty of Dentistry</option>
                     <option value="3">Faculty of Mathematics and Natural Science</option>
                      <option value="4">Faculty of Engineering</option>
                    <option value="5">Faculty of Law</option>
                     <option value="6">Faculty of Economics and Business</option>
                      <option value="7">Faculty of Psychology</option>
                    <option value="8">Faculty of Humanities</option>
                     <option value="9">Faculty of Social and Politics Science</option>
                      <option value="10">Faculty of Public Health</option>
                    <option value="11">Faculty of Computer Science</option>
                     <option value="12">Faculty of Nursing</option>
                     <option value="13">Faculty of Pharmacy</option>
                    <option value="50">Vocational Program</option>
                     <option value="51">Postgraduate Program</option>
                     <option value="52">Non Faculty</option>
                </select>
              </faculty>
            </div>
            
            <div class="col s12 m12 l12">
                <button class="btn custom-btn waves-effect waves-light green right-align z-depth-1" type="submit" name="action" method="post">Search</button>
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
    $("location").hide();
    $("status").hide();
    $("faculty").hide();
  $('#kategori').on('change',function() {

     if(this.value=='nama')
        {
            $('keyword').show();
            $("location").hide();
            $("status").hide();
            $("faculty").hide();

        }
    else if (this.value=='domisili') 
         {
            $('keyword').hide();
            $("location").show();
            $("status").hide();
            $("faculty").hide();
        }
    else if (this.value=='status') 
         {
             $('keyword').hide();
            $("location").hide();
            $("status").show();
            $("faculty").hide();
         }
     else 
         {
             $('keyword').hide();
            $("location").hide();
            $("status").hide();
            $("faculty").show();
         }
  }); 

    });
</script>

