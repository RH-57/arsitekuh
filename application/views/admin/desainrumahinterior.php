

<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">List Harga Desain Rumah Interior</h1>
  </div>
  <button type="button" data-toggle="modal" data-target="#tambahData" class="btn btn-primary">Tambah Data</button>
  <!-- Modal Tambah Data -->
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
          <form action="<?php echo base_url('rumahinterior/tambah'); ?>" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Luas Bangunan</label>
                <input type="text" class="form-control" name="luas" placeholder="Luas Bangunan">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Harga Paket A</label>
                <input type="text" class="form-control" name="paketa" placeholder="Harga Paket A">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Harga Paket B</label>
                <input type="text" class="form-control" name="paketb" placeholder="Harga Paket B">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Harga Paket C</label>
                <input type="text" class="form-control" name="paketc" placeholder="Harga Paket C">
              </div>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Ubah Data -->
  
  
  <div class="modal fade bd-example-modal-lg" id="ubahData>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('rumahinterior/ubah'); ?>" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">ID</label>
                <input type="text" class="form-control" name="luas" value="" readonly>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Luas Bangunan</label>
                <input type="text" class="form-control" name="luas" value="" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Harga Paket A</label>
                <input type="text" class="form-control" name="paketa" value="" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Harga Paket B</label>
                <input type="text" class="form-control" name="paketb" value="" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Harga Paket C</label>
                <input type="text" class="form-control" name="paketc" value="" required>
              </div>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<script>
// get data untuk dihapus
$('.btn-delete').on('click', function()) {
  //get data from button edit
  const id = $(this).data('id_ri');

  $('ri').val('id_ri');

  $('#hapusModal').modal('show');
});
</script>


  <!-- Content Row -->

<!-- End of Main Content -->
