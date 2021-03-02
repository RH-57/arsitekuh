

<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">List Harga Desain Rumah Exterior</h1>
  </div>
  <button type="button" data-toggle="modal" data-target="#tambahProject" class="btn btn-primary">Tambah Data Harga</button>

  <div class="modal fade bd-example-modal-lg" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Luas Bangunan</label>
                <input type="text" class="form-control" name="luas" placeholder="Luas Bangunan">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Harga Paket A</label>
                <input type="text" class="form-control" name="hargaa" placeholder="Harga Paket A">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Harga Paket B</label>
                <input type="text" class="form-control" name="hargab" placeholder="Harga Paket B">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Harga Paket C</label>
                <input type="text" class="form-control" name="hargac" placeholder="Harga Paket C">
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
                <label for="exampleFormControlFile1">Pilih Gambar</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
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
                <th>Luas Bangunan</th>
                <th>Paket A</th>
                <th>Paket B</th>
                <th>Paket C</th>
                <td>Aksi</td>
              </tr>
        </thead>
        <tbody>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusModal"><i class="far fa-trash-alt"></i></button>

          </td>
        </tbody>
    </table>
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
          <a id="btn-delete" class="btn btn-danger" href="">Delete</a>
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
