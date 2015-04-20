  <div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a class="active" href="<?php echo base_url('index.php/search/homeBuku') ?>">Books</a></li>
          <li><a  href="<?php echo base_url('index.php/search/homeUser')?>">Users</a></li>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-content-add"></i>
        </a>
        <ul>
<<<<<<< HEAD
          <li><a class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
=======
          <li><a href="<?php echo base_url('index.php/search/homeBuku') ?>" class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
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
        <form method="post" action="<?php echo base_url('index.php/search/cariBuku') ?>">
          
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
                </select>
              </genre>
            </div>
            <div class="col s12 m12 l12">
              <?php if($notMatch!=null){?>
              <span class="error"><?php echo $notMatch ?></span>
                 <?php } ?>
            </div>
            <div class="col s12">
              <button class="btn custom-btn waves-effect waves-light green right-align z-depth-1" type="submit" name="action" method="post">Search</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
    <div class="col s12 m8 l9">
      <!-- <div class="col s12 m12 l6"> -->
        <?php if($notFound!=null){?>
<<<<<<< HEAD
        <span><?php echo $notFound ?></span>
=======
        <span><?php echo $notFound ?>.</span>
        <!-- <button class="btn custom-btn waves-effect waves-light green right-align z-depth-1" href="<?php echo base_url('index.php/Book/addBookIndex')?>">addBook</button> -->
        <br><a class="green-text" href="<?php echo base_url('index.php/Book/addBookIndex')?>">Add new book to your collection?</a>
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
          <?php } ?>
      <!-- </div> -->
      <?php if($resultSearchBuku!=null){?>
      <?php foreach($resultSearchBuku as $key => $post){?>
        <div class="card">
          <div class="row row-custom-a">
            <div class="col s4 m4 l4">
              <?php echo
                      '<a href="'.base_url()."index.php/book/book_info/".$post->isbn.'"> <img src='.$post->sampul.' alt="book-cover" class="responsive-img"></a>'
                    ?>
            </div>
            <div class="col s8 m8 l8">
              <span class="card-book-title black-text"><?php echo '<a href="'.base_url().'index.php/book/book_info/'.$post->isbn.'">'?> <?php echo $post->judul;?></a></span><br>
              <span><?php echo $post->pengarang;?></span><br>
              <span class="tag-property white-text green"><?php echo $post->genre;?></span><br><br>
<<<<<<< HEAD
<<<<<<< HEAD
              <div class="row row-custom-a">
                <a class="waves-effect waves-green black-text btn-flat">Add to Collection</a>
              </div>
=======
=======
      
>>>>>>> 74cf88d4ed7cb32b2e65f3fb4187a9e568e9e616

                  <?php
                      if(!$adaDiKoleksi[$key])
                      {
                        echo 
                        '
                        <div id="modal-addcol" class="modal">
                          <div class="modal-content">
                            <h4>Add Collection?</h4>
                            <p>Are you sure to add this book to your collection?</p>
                          </div>
                          <div class="modal-footer">
                            <a href="#" class="black-text waves-effect waves-red btn-flat modal-action modal-close">Cancel</a>
                    
                            <a href="'.base_url()."index.php/koleksi/add/".$post->isbn."/".$username.'"
                              class="black-text waves-effect waves-green btn-flat modal-action">ADD</a>
                          </div>
                        </div>
      
                        <div class="row row-custom-a">
                          <a href="#modal-addcol" class="modal-trigger waves-effect waves-green black-text btn-flat">Add to Collection</a>
                        </div>';
                      }
                  ?>
              
>>>>>>> 6e124e192a664c31661f84c17ce76000ec7ddff5
            </div>
          </div>
        </div>
        <?php } ?>
      <?php } ?>
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