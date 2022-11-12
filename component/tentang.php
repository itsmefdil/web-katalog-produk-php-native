 <?php 
$sql = "SELECT * FROM tentang WHERE id='1'";
$result = $koneksi->query($sql);
foreach ($result as $tentang) {
  $foto = $tentang['foto'];
  $deskripsi = $tentang['deskripsi'];
}
?>

 <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <!-- <h2>About Us</h2> -->
          <p>Tentang<span> Kami</span></p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-7 position-relative about-img" style="background-image: url(admin/uploads/<?= $foto?>) ;" data-aos="fade-up" data-aos-delay="150">
            <!-- <div class="call-us position-absolute">
              <h4>Book a Table</h4>
              <p>+1 5589 55488 55</p>
            </div> -->
          </div>

          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">

            <div class="content ps-0 ps-lg-5">
              <?= $deskripsi?>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End About Section -->