  <?php
          foreach ($kontak as $vk) {
          }
          ?>

  <footer>
      <div class="container">
        <div class="row">
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Halaman</h5>
              <ul class="link-list">
                <li><a href="<?= base_url('about'); ?>">Tentang Kami</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="<?= base_url('contact'); ?>">Kontak</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Layanan Kami</h5>
              <ul class="link-list">
                <li><a href="<?= base_url('jasadesainrumahinterior'); ?>">Jasa Desain Interior Rumah</a></li>
                <li><a href="#">Jasa Desain Eksterior Rumah</a></li>
                <li><a href="#">Jasa Interior Kontraktor</a></li>
                <li><a href="#">Jasa Eksterior Kontraktorr</a></li>
                <li><a href="#">Gambar Kerja</a></li>
                <li><a href="#">Gambar IMB</a></li>
                <li><a href="#">RAB</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Ikuti Kami</h5>
              <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div>
              <div class="clear">
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Hubungi kami</h5>
              <address>
								<strong>Arsitekuh</strong><br>
								 <?php echo $vk->alamat ?> <br>
					 		</address>
              <p>
                <i class="icon-phone"></i> <?php echo $vk->notelp1 ?> - <?php echo $vk->notelp2 ?> <br>
                <i class="icon-envelope-alt"></i> <?php echo $vk->email ?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; 2020 - <?php echo date("Y"); ?> Arsitekuh - All right reserved.</span>
                </p>
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                  Created by <a href="#">Ribon-Devs</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="https://www.facebook.com/Arsitekuh-114802773683466/?ref=nf&hc_ref=ARSmbZlx8fgarNPehdiDw8zrAHVp5ZI4mvfsRQ3jN7VqjMj4XwNIGLZN21OssjXKOVs" target="blank" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square icon-32"></i></a></li>
                <li><a href="https://www.instagram.com/arsitekuh/" target="blank"data-placement="bottom" title="Instagram"><i class="icon-camera icon-square icon-32"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="assets/js/jquery.fancybox.pack.js"></script>
  <script src="assets/js/jquery.fancybox-media.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/portfolio/jquery.quicksand.js"></script>
  <script src="assets/js/portfolio/setting.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/jquery.nivo.slider.js"></script>
  <script src="assets/js/modernizr.custom.js"></script>
  <script src="assets/js/jquery.ba-cond.min.js"></script>
  <script src="assets/js/jquery.slitslider.js"></script>
  <script src="assets/js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>

</body>
</html>
