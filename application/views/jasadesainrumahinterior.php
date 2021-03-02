<section id="inner-headline">
  <div class="container">
    <div class="row">
      <div class="span8">
        <div class="inner-heading">
          <h2>Jasa <Strong>Desain Interior Rumah</Strong></h2>
        </div>
      </div>
      <div class="span4">
        <ul class="breadcrumb">
          <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
          <li><a href="#">Service</a><i class="icon-angle-right"></i></li>
          <li class="active">Jasa Desain Interior Rumah</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section id="content">
  <div class="container">
    <!-- Default table -->
    <div class="row">
      <center><h4>Paket Harga Desain <strong>Interior Rumah</strong></h4></center><br>
      <div class="span9">
          <table class="table table-hover">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>Luas Bangunan</th>
                      <th>Paket A</th>
                      <th>Paket B</th>
                      <th>Paket C</th>
                    </tr>
                </thead>
                <?php foreach ($rumahinterior as $ri): {

                } ?>
                <tbody>
                  <td><?php echo $ri->id_ri ?></td>
                  <td><?php echo $ri->luas ?> m<sup>2</sup></td>
                  <td><?php echo "Rp. " .number_format($ri->paketa, 2, ".", ","); ?></td>
                  <td><?php echo "Rp. " .number_format($ri->paketb, 2, ".", ","); ?></td>
                  <td><?php echo "Rp. " .number_format($ri->paketc, 2, ".", ","); ?></td>
                </tbody>
              <?php endforeach; ?>
            </table>
          </div>
        </div>
      </div>
</section>
<br><br><br>
