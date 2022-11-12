<!-- ======= Footer ======= -->
<?php 
$sql = "SELECT * FROM kontak WHERE id='1'";
$result = $koneksi->query($sql);
foreach ($result as $kontak) {
  $email = $kontak['email'];
  $alamat = $kontak['alamat'];
  $telpon = $kontak['telpon'];
  $waktu = $kontak['waktu'];
  $maps = $kontak['maps'];
}

?>

<footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-4 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Alamat</h4>
            <p>
              <?= $alamat?>
            </p>
          </div>

        </div>

        <div class="col-lg-4 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Pemesanan</h4>
            <p>
              <strong>Telpon:</strong> <?= $telpon?><br>
              <strong>Email:</strong> <?= $email?><br>
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jam Buka</h4>
            <p>
              <?= $waktu?>
            </p>
          </div>
        </div>

 
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>GarutFood</span></strong>. All Rights Reserved
      </div>
     
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>