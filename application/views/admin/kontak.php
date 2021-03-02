

<!-- Begin Page Content -->
<div class="container-fluid">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kontak Perusahaan</h1>
            
          </div>
        <div class="card">
          <?php 
          foreach ($kontak as $vk) {
          }

          ?>
          <div class="card-body">
            <h4>Email         : <?php echo $vk->email ?> </h4>
            <h4>No. Telpon    : <?php echo $vk->notelp1 ?></h4>
            <h4>No. Telpon    : <?php echo $vk->notelp2 ?></h4>
            <h4>Alamat        : <?php echo $vk->alamat ?></h4>
            <br><br>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Ubah</button>
          </div>
          <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Kontak Perusahaan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <?php 
                    foreach ($kontak as $vkv) {
                    }

                    ?>
                  <form method="post" action="<?php echo base_url('kontak/edit') ?>">
                    <div class="form-group">
                      <input type="hidden" class="form-control" name="id_kontak" id="id_kontak" value="<?php echo $vkv->id_kontak ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Email address</label>
                      <input type="email" class="form-control" name="email" value="<?php echo $vkv->email ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">No Telpon</label>
                      <input type="text" class="form-control" name="notelp1" id="notelp1" value="<?php echo $vkv->notelp1 ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">No Telpon</label>
                      <input type="tex" class="form-control" name="notelp2" id="notelp2" value="<?php echo $vkv->notelp2 ?>">
                    </div>                  
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Alamat</label>
                      <textarea class="form-control" name="alamat" id="alamat" rows="4" ><?php echo $vkv->alamat ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                  </form>
                </div>
               
              </div>
            </div>
          </div>
          
        </div>
      </div>
          

  <!-- Content Row -->
  
<!-- End of Main Content -->


