<?php

$sql = "SELECT * FROM kontak WHERE id='1'";
$result = $koneksi->query($sql);
foreach ($result as $kontak) {

?>

<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Kontak</h2>
          <p>Butuh Bantuan ? <span>Hubungi Kami</span></p>
        </div>

        <div class="mb-3">
          <iframe style="border:0; width: 100%; height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.054803796427!2d110.35519651376848!3d-7.784014494390312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a583d1d2303bb%3A0x3f6cb15eeaa2fe2f!2sUniversitas%20Janabadra!5e0!3m2!1sid!2sid!4v1661159226068!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-map flex-shrink-0"></i>
              <div>
                <h3>Alamat Kami</h3>
                <p><?= $kontak['alamat']?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Kami</h3>
                <p><?= $kontak['email']?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Whatsapp Kami</h3>
                <p><?= $kontak['telpon']?></p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item  d-flex align-items-center">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Jam Buka</h3>
                <?= $kontak['waktu']?>
               
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>


      </div>
    </section><!-- End Contact Section -->

    <?php }?>