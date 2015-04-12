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
          <li><a class="btn-floating  teal lighten-2 tooltipped" data-position="left" data-delay="10" data-tooltip="Add Collection"><i class="large mdi-action-book"></i></a></li>
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
                    <option value="judul">Title</option>
                    <option value="pengarang">Author</option>
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
                    <option value="" disabled selected>Choose Genre</option>
                    <option value="romance">Romance</option>
                    <option value="science fiction">Science Fiction</option>
                     <option value="fantasy">Fantasy</option>
                    <option value="fiction">Fiction</option>
                    <option value="education">Education</option>
                     <option value="non-fiction">Non-Fiction</option>
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
      <div class="col s12 m12 l6">
        <?php if($notFound!=null){?>
        <span><?php echo $notFound ?></span>
        <!-- <button class="btn custom-btn waves-effect waves-light green right-align z-depth-1" href="<?php echo base_url('index.php/Book/addBookIndex')?>">addBook</button> -->
        <a class="green-text" href="<?php echo base_url('index.php/Book/addBookIndex')?>">Add Book</a>
          <?php } ?>
      </div>
      <?php if($resultSearchBuku!=null){?>
      <?php foreach($resultSearchBuku as $post){?>
        <div class="card">
          <div class="row row-custom-a">
            <div class="col s4 m4 l4">
              <?php echo
                      '<a href="'.base_url()."index.php/book/book_info/".$post->isbn.'"> <img src='.$post->sampul.' alt="book-cover" class="responsive-img"></a>'
                    ?>
            </div>
            <div class="col s8 m8 l8">
              <span class="card-book-title black-text"><?php echo $post->judul;?></span><br>
              <span><?php echo $post->pengarang;?></span><br>
              <span class="tag-property white-text green"><?php echo $post->genre;?></span><br><br>
              <div class="row row-custom-a">
                <a class="waves-effect waves-green black-text btn-flat">Add to Collection</a>
              </div>
            </div>
          </div>
        </div>
      </div>
       <?php } ?>
    <?php } ?>
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
            $('.keyword').show();
            $("genre").hide();

        }
    else if (this.value=='pengarang') 
         {
           $('.keyword').show();
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