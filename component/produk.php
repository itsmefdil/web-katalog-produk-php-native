<!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2></h2>
          <p>Menu Makanan <span>Enak Kami</span></p>
          <hr>
        </div>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <!-- <p>Prodk</p>
              <h3>Semua Prodk</h3> -->
            </div>

            <div class="row gy-5">
              <?php
                include('config/koneksi.php');
                $no = 1;
                $query = mysqli_query($koneksi, 'SELECT * FROM produk LIMIT 3');                                
                
                $result = array(); 
                while ($data = mysqli_fetch_array($query)) {
                $result[] = $data; //result dijadikan array 
                }                
                //selanjutnya result array di foreach
                foreach ($result as $produk){                                
                ?>

              <div class="col-lg-4 menu-item">
                <a  class="glightbox">
                  <img src="foto_produk/<?= $produk["foto_produk"]; ?>" class="menu-img img-fluid img-rounded" alt="" height="50px">
                </a>
                <h4><?= $produk['nama_produk'] ?></h4>
                <p class="ingredients">
                <?= $produk['deskripsi_produk'] ?>
                </p>
                <p class="price">
                  Rp. <?= $produk['harga_produk'] ?>
                </p>
              </div><!-- Menu Item -->

            <?php } ?>
            <center><a href="?page=produk" class="btn btn-danger">SEMUA PRODUK</a></center>

            </div>
          </div><!-- End Starter Menu Content -->

         
          
        </div>

      </div>
    </section><!-- End Menu Section -->
