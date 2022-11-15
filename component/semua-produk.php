<!-- ======= Menu Section ======= -->
<section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Produk Kami</h2>
          <p>Lihat Prodk <span> Enak Kami</span></p>
        </div>


        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <!-- <p>Prodk</p>
              <h3>Semua Prodk</h3> -->
            </div>

            <div class="row gy-5">
              <?php
            
                $no = 1;
                $query = mysqli_query($koneksi, 'SELECT * FROM produk');                                
                
                $result = array(); 
                while ($data = mysqli_fetch_array($query)) {
                $result[] = $data; //result dijadikan array 
                }                
                //selanjutnya result array di foreach
                foreach ($result as $produk){                                
                ?>

              <div class="col-lg-4 menu-item">
                <a href="?page=detail&id=<?= $produk['id_produk']?>">
                      <!-- <a  class="glightbox"> -->
                      <img src="foto_produk/<?= $produk["foto_produk"]; ?>" class="img-rounded" alt="" height="200px">
                    <!-- </a> -->
                    <br><br>
                    <b><h4><?= $produk['nama_produk'] ?></h4></b>
                    <p class="ingredients">
                    <?php $produk['deskripsi_produk'] ?>
                    </p>
                    <p class="price">
                      Rp. <?= number_format($produk['harga_produk']) ?>
                    </p>
                </a>
              </div><!-- Menu Item -->

            <?php } ?>

            </div>
          </div><!-- End Starter Menu Content -->

        </div>

      </div>
    </section><!-- End Menu Section -->
