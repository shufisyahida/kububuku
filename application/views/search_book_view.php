	<div class="secondary-header">
      <div class="secondary-header-inner">
        <ul>
          <li><a class="active" href="#">Books</a></li>
          <li><a href="<?php echo base_url('index.php/search/homeUser') ?>">Users</a></li>
      </div>

      <div class="fixed-action-btn" style="bottom: 45px; right: 40px;">
        <a class="z-depth-4 btn-floating btn-large red">
          <i class="large mdi-editor-mode-edit"></i>
        </a>
        <ul>
          <li><a class="btn-floating red"><i class="large mdi-editor-insert-chart"></i></a></li>
          <li><a class="btn-floating yellow darken-1"><i class="large mdi-editor-format-quote"></i></a></li>
          <li><a class="btn-floating green"><i class="large mdi-editor-publish"></i></a></li>
          <li><a class="btn-floating blue"><i class="large mdi-editor-attach-file"></i></a></li>
        </ul>
      </div>
    </div>

</div><!--end div buat head-wrapper di navbar_view-->

<div class="container custom-table">
  <div class="row">
    <div class="col s12 m4 l4">
      <div class="card-panel white z-depth-1">
        <h6>Search Filter</h6>
        <form action="#">
          <p>
            <input class="with-gap" name="group1" type="radio" id="title-radio" />
            <label for="title-radio">Title</label>
          </p>

          <p>
            <input class="with-gap" name="group1" type="radio" id="author-radio" />
            <label for="author-radio">Author</label>
          </p>

          <p>
            <input class="with-gap" class="with-gap" name="group1" type="radio" id="genre-radio"  />
            <label for="genre-radio">Genre</label>
          </p>

          <div class="row">
            <div class="input-field col s12">
              <input id="book-searchkey" type="text" class="validate">
              <label>Keyword</label>
            </div>
            <div class="col s12">
              <a class="waves-effect waves-light green btn">Search</a>
            </div>
          </div>
          
        </form>
      </div>
    </div>
    <div class="col s12 m8 l9">

    </div>
  </div>
</div>