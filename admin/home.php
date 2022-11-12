<h2>Selamat datang Administrator</h2>
<hr>
<div class="row">
    <div class="col-sm-6">
    <div class="panel panel-default">
            <div class="panel-heading">
                Tabel Produk
            </div>
            <div class="panel-body">
        <table class="table table" id="datatables">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Berat</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>

                <?php $no=1; ?>
                <?php $ambil = $koneksi->query("SELECT * FROM produk LEFT JOIN kategori ON produk.id_kategori=kategori.id_kategori") ?>
                <?php while($pecah = $ambil->fetch_assoc()): ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $pecah["nama_produk"]; ?></td>
                    <td><?= $pecah['nama_kategori']; ?></td>
                    <td>Rp.
                        <?= number_format($pecah["harga_produk"]); ?>,-</td>
                    <td><?= $pecah["berat_produk"]; ?></td>
                    <td><?= $pecah['stok_produk']; ?></td>
                    
                </tr>
                <?php $no++; ?>
                <?php endwhile; ?>

            </tbody>
        </table>
            </div>
    </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Grafik Produk
            </div>
            <div class="panel-body">
                <div id="morris-donut-chart"></div>
            </div>
        </div>
    </div>
</div>

</div>
</div>