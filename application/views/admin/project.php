

<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">List Project</h1>
  </div>
  <button type="button" data-toggle="modal" data-target="#tambahProject" class="btn btn-primary">Tambah Project</button>

  <div class="modal fade bd-example-modal-lg" id="tambahProject" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo $this->session->flashdata('success'); ?>
            </div>
          <?php endif; ?>
          <form action="<?php echo base_url('project/tambah'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Project" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputState">Desain</label>
                <select id="inputState" name="desain" class="form-control" required>
                  <option selected>Choose...</option>
                  <option>Rumah</option>
                  <option>Kontraktor</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Jenis</label>
                <select id="inputState" name="jenis" class="form-control" required>
                  <option selected>Choose...</option>
                  <option>Interior</option>
                  <option>Eksterior</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputState">Tanggal Selesai</label>
                <input class="form-control" type="date" name="tgl_selesai" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("Y-m-d"); ?>" id="example-date-input">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputState">Keterangan</label>
                <textarea class="form-control" name="keterangan" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Keterangan Project" required></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label>Pilih Gambar</label>
                <input type="file" class="form-control-file" name="gambar" required>
                <label> Max file 2 MB.</label>
              </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Upload Project</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br><br>
  <table class="table table-hover">
        <thead>
            <tr><th>ID</th>
                <th>Nama</th> 
                <th>Desain</th>
                <th>Jenis</th> 
                <th>Tanggal Selesai</th> 
                <th>Keterangan</th>
                <th>Gambar</th>
                <td>Aksi</td>
              </tr>
        </thead>
        <?php foreach ($project as $pr):{

        } ?>
        <tbody>
          <td><?php echo $pr->id_project ?></td>
          <td><?php echo $pr->nama ?></td>
          <td><?php echo $pr->desain ?></td>
          <td><?php echo $pr->jenis ?></td>
          <td><?php echo $pr->tgl_selesai ?></td>
          <td><?php echo $pr->keterangan ?></td>
          <td><img src="<?=base_url()?>/assets/upload/project/<?=$pr->gambar ?>" width="64"></td>
          <td>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ubahProject"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal"><i class="far fa-trash-alt"></i></button>

          </td>
        </tbody>
        <?php endforeach; ?>
    </table>
    <!-- Modal Hapus -->          
    <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a id="btn-delete" class="btn btn-danger" href="<?=base_url()?>project/hapus/<?=$pr->id_project?>/<?=$pr->gambar?>">Delete</a>
        </div>
      </div>
    </div>

    <!-- Modal Update -->
    <div class="modal fade bd-example-modal-lg" id="ubahProject" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Project</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Project">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputState">Desain</label>
                <select id="inputState" name="desain" class="form-control">
                  <option selected>Choose...</option>
                  <option>Rumah</option>
                  <option>Kontraktor</option>
                </select>
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Jenis</label>
                <select id="inputState" name="jenis" class="form-control">
                  <option selected>Choose...</option>
                  <option>Interior</option>
                  <option>Eksterior</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="example-date-input" class="col-2 col-form-label">Date</label>
                <input class="form-control" type="date" name="tgl_selesai" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("Y-m-d"); ?>" id="example-date-input">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputState">Keterangan</label>
                <textarea class="form-control" name="keterangan" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Keterangan Project"></textarea>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label>Pilih Gambar</label>
                <input type="file" class="form-control-file" name="gambar">
              </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Upload Project</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>  
</div>
<script>
function deleteConfirm(url){
  $('#btn-delete').attr('href', url);
  $('#hapusModal').modal();
}
</script>
          

  <!-- Content Row -->
  
<!-- End of Main Content -->


