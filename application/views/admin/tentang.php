

<!-- Begin Page Content -->
<div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800"><strong>Tentang Perusahaan</strong></h1>
        </div>
        <div class="card">
         <?php foreach ($tentang as $t) {
         	# code...
         } ?>
          <div class="card-body">
            <?php echo $t->tentang; ?>
          </div>
           
          <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tentang Perusahaan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <form method="post" action="<?php echo base_url('tentang/edit'); ?>"> 
                    <div class="form-group">
                      <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $t->id?>">
                    </div>               
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Tentang Perusahaan</label>
                      <textarea class="form-control" name="tentang" id="tentang" rows="7" ><?php echo $t->tentang; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Visi</label>
                      <textarea class="form-control" name="visi" id="visi" rows="7" ><?php echo $t->visi; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Misi</label>
                      <textarea class="form-control" name="misi" id="misi" rows="7" ><?php echo $t->misi; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                  </form>
                </div>
              </div>
            </div>
          </div> 
        </div>
        <br>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800"><strong>Visi</strong></h1>
        </div>
        <div class="card">
          <div class="card-body">
            <?php echo $t->visi; ?>
          </div>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800"><strong>Misi</strong></h1>
        </div>
        <div class="card">
          <div class="card-body">
            <?php echo $t->misi; ?>
          </div>
        </div>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Ubah</button>
      </div>

          

  <!-- Content Row -->
  
<!-- End of Main Content -->


