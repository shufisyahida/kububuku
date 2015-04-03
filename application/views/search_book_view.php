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
    <div class="col s12 m4 l3">
      <div class="card-panel white z-depth-1">
        <h6>Search Filter</h6>
        <form action="#">
            <p>
              <input class="with-gap" name="title" type="radio" id="ti"  />
              <label for="ti">Title</label>
            </p>
            <p>
              <input class="with-gap" name="author" type="radio" id="au"  />
              <label for="au">Author</label>
            </p>
            <p>
              <input class="with-gap" name="genre" type="radio" id="ge"  />
              <label for="ge">Genre</label>
            </p>
            <div class="input-field col s12">
              <input id="#" type="text" class="validate">
              <label>Keyword</label>
            </div>
            <a class="waves-effect waves-light green btn">Search</a>
        </form>
      </div>
    </div>
    <div class="col s12 m8 l9">

    </div>
  </div>
</div>