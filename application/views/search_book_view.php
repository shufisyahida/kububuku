  <div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a class="active" href="<?php echo base_url('index.php/Search/homeBuku') ?>">Books</a></li>
          <li><a  href="<?php echo base_url('index.php/Search/homeUser')?>">Users</a></li>
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
  <div class="row">
    <div class="col s12 m4 l3">
      <div class="card-panel white z-depth-1">
        <h6>Search Filter</h6>
        <form method="post" action="<?php echo base_url('index.php/Search/searchBook') ?>">
          
          <div class="row">
             <div class="col s12 m12 l12">
                <select id="kategori" name="kategori" type="text" class="validate">
                    <option value="" disabled selected>Choose Category</option>
<<<<<<< HEAD
                    <option value="judul">Judul</option>
                    <option value="pengarang">Pengarang</option>
=======
                    <option value="judul">Title</option>
                    <option value="pengarang">Author</option>
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
                     <option value="genre">Genre</option>
                </select>
            </div>
            <div class="input-field col s12">
              <keyword>
              <input id="book-searchkey" type="text" class="validate" name="keyword">
              <label>Keyword</label>
            </keyword>
             <genre>
              <select id="genre" name="genre" type="text" class="validate">
<<<<<<< HEAD
                    <option value="" disabled selected>Choose Genre</option>
                    <option value="romance">Romance</option>
                    <option value="science fiction">Science Fiction</option>
                     <option value="fantasy">Fantasy</option>
                    <option value="fiction">Fiction</option>
                    <option value="education">Education</option>
                     <option value="non-fiction">Non-Fiction</option>
=======
                    <option value="">Choose book genre</option>
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
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
                </select>
              </genre>
            </div>
            <div class="col s12">
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
    $("genre").hide();
  $('#kategori').on('change',function() {

     if(this.value=='judul')
        {
<<<<<<< HEAD
            $('.keyword').show();
=======
            $('keyword').show();
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
            $("genre").hide();

        }
    else if (this.value=='pengarang') 
         {
<<<<<<< HEAD
           $('.keyword').show();
=======
           $('keyword').show();
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
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