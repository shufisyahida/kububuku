<div class="container">

    

    <br><h5>Add Book</h5>
    <div class="card-panel-custom-reg z-depth-1">
        <div class="row">
            <form method="post" action="<?php echo base_url('index.php/Book/addBook') ?>" class="col s12">

                <div id="step-one" class="row">
                                        
                    <div class="input-field col s4 offset-s1">
                        <!-- <i class="mdi-action-perm-contact-cal prefix"></i> -->
                        <input id="isbn" name="isbn" type="text" class="validate" value="<?php echo $isbn;?>">
                        <label for="isbn">ISBN</label>
                        <span class="error"><?php echo $isbnErr;?></span>
                    </div>

                    <div class="input-field col s4 offset-s2">
                        <!-- <i class="mdi-action-perm-contact-cal prefix"></i> -->
                        <input id="judul" name="judul" type="text" class="validate" value="<?php echo $judul;?>">
                        <label for="judul">Judul</label>
                        <span class="error"><?php echo $judulErr;?></span>
                    </div>

                    <!-- <div class="col s4 offset-s1">
                        <span class="error"><?php echo $isbnErr;?></span>
                    </div>

                    <div class="col s4 offset-s2">
                        <span class="error"><?php echo $judulErr;?></span>
                    </div> -->

                    <div class="input-field col s4 offset-s1">
                        <!-- <i class="mdi-action-perm-contact-cal prefix"></i> -->
                        <input id="pengarang" name="pengarang" type="text" class="validate" value="<?php echo $pengarang;?>">
                        <label for="pengarang">Pengarang</label>
                    </div>

                    <div class="input-field col s4 offset-s2">
                        <!-- <i class="mdi-action-perm-contact-cal prefix"></i> -->
                        <input id="deskripsi" name="deskripsi" type="text" class="validate" value="<?php echo $deskripsi;?>">
                        <label for="deskripsi">Deskripsi</label>
                    </div>

                    <div class="input-field col s4 offset-s1">
                        <!-- <i class="mdi-action-perm-contact-cal prefix"></i> -->
                        <input id="penerbit" name="penerbit" type="text" class="validate" value="<?php echo $penerbit;?>">
                        <label for="penerbit">Penerbit</label>
                    </div>

                    <div class="input-field col s4 offset-s2">
                        <!-- <i class="mdi-action-perm-contact-cal prefix"></i> -->
                        <input id="tahun_terbit" name="tahun_terbit" type="text" class="validate" value="<?php echo $tahun_terbit;?>">
                        <label for="tahun_terbit">Tahun Terbit</label>
                    </div>

                    <div class="input-field col s4 offset-s1">
                        <!-- <i class="mdi-action-perm-contact-cal prefix"></i> -->
                        <input id="jumlah_halaman" name="jumlah_halaman" type="text" class="validate" value="<?php echo $jumlah_halaman;?>">
                        <label for="jumlah_halaman">Jumlah Halaman</label>
                    </div>

                    <div class="input-field col s4 offset-s2">
                        <!-- <i class="mdi-action-face-unlock prefix"></i> -->
                        <input id="sampul" name="sampul" type="url" value="<?php echo $sampul;?>">
                        <label for="sampul">Sampul URL</label>
                    </div>

                    <div class="col s4 offset-s1">
                        <select id="genre" name="genre" type="text" class="validate" >
                              <option value="">Choose book genre</option>
                              <option value="1" <?php if($genre == "1") echo "selected"; ?>>Romance</option>
                              <option value="2" <?php if($genre == "2") echo "selected"; ?>>Science Fiction</option>
                              <option value="3" <?php if($genre == "3") echo "selected"; ?>>Fantasy</option>
                              <option value="4" <?php if($genre == "4") echo "selected"; ?>>Fiction</option>
                              <option value="5" <?php if($genre == "5") echo "selected"; ?>>Education</option>
                              <option value="6" <?php if($genre == "6") echo "selected"; ?>>Non-Fiction</option>     
                        </select>
                        <label for="genre">Genre</label>
                    </div>

                    <div class="col s12 offset-s1">
                        <!-- <i class="mdi-action-account-circle prefix"></i> -->
                        <button id="regbtn" class="btn waves-effect waves-light green right-align z-depth-1" type="submit" name="action" method="post">ADD</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- <h6 class="custom-h6-login">Step 1 of 2</a></h6> -->
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
    });
</script>

<script type="text/javascript">
     $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 100 // Creates a dropdown of 15 years to control year
    });
</script>